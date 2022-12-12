<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ProductUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors([
                'login_first' => 'Login First,',
            ])->onlyInput('email');
        } else if (Auth()->user()->role == "admin") {
            return back()->withErrors([
                'failed' => 'Your are an admin!',
            ])->onlyInput('email');
        }


        $validateData = $request->validate([
            'bookingdate' => 'date_format:Y-m-d\TH:i',
        ]);

        $data = [
            'bookdate' => date('Y-m-d', strtotime($validateData['bookingdate'])),
            'booktime' => date('h:i:s', strtotime($validateData['bookingdate'])),
            'user_id' => auth()->user()->id,
            'product_id' => $request['product_id'],
            'paid_status' => 'not_paid'
        ];

        $new_order = Order::create($data);

        if (!ProductUser::where('product_id', $request['product_id'])->where('user_id', auth()->user()->id)->exists()) {
            ProductUser::create([
                "product_id" => $request['product_id'],
                "user_id" => auth()->user()->id,
            ]);
        }

        return redirect('/checkout' . "/" . $new_order->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $checkout)
    {
        return view('checkout', [
            "order" => $checkout,
            "product" => $checkout->product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
