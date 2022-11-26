<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("adminDashboard.facilities.index", [
            'facilities' => Facility::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("adminDashboard.facilities.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "facility_name" => 'required|max:255',
            "image" => 'image|file|max:1024',
        ]);


        $validatedData['image'] = $request->file('image')->store('facility-image');


        Facility::create($validatedData);

        return redirect('/admin/dashboard/facilities')->with('success', "Success Add New Facilities!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        return view("adminDashboard.facilities.show", [
            "facility" => $facility
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility)
    {
        return view("adminDashboard.facilities.edit", [
            "facility" => $facility
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        $validatedData = $request->validate([
            "facility_name" => 'required|max:255',
            "image" => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('facility-image');
        }

        Facility::where('id', $facility->id)->update($validatedData);

        return redirect('/admin/dashboard/facilities')->with('success', "Success Update Facilities!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        Storage::delete($facility->image);

        Facility::destroy($facility->id);

        return redirect('/admin/dashboard/facilities')->with('success', "Facility has been deleted!");
    }
}
