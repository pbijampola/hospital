<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
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
        return view('admin.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'Speciality' => 'required|string',
                'experience' => 'required|numeric',
                'image' => 'required|image|mimes:jpeg,png,|max:2048',
                'room_number'=>'required|numeric',
            ]);
            $data=Doctor::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'Speciality' => $request->Speciality,
                'experience' => $request->experience,
                'room_number'=>$request->room_number,
            ]);
            if ($request->hasFile("image")) {
                $data->clearMediaCollection();
                $data->addMedia($request->image)
                    ->toMediaCollection("asset_image");

            }
            return redirect()->back()->with('success', 'Doctor Added Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
