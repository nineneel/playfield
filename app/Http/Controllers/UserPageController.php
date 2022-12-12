<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Photo;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPageController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            $users = User::where('role', 'user')->where('id', '!=', auth()->user()->id)->inRandomOrder()->take(4)->get();
        } else {
            $users = User::where('role', 'user')->inRandomOrder()->take(4)->get();
        }

        return view('home', [
            "facilities" => Facility::all(),
            "photos" => Photo::all(),
            "products" => Product::all(),
            "users" => $users
        ]);
    }

    public function friends()
    {
        if (Auth::check()) {
            $users = User::where('role', 'user')->where('id', '!=', auth()->user()->id)->get();
        } else {
            $users = User::where('role', 'user')->get();
        }

        return view('friends', [
            "users" => $users
        ]);
    }
}
