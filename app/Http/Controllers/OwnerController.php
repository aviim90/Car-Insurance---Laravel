<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::all();
        return view("owners.index", ['owners'=>$owners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owners.create');
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
            'name' => 'required|min:2|max:15|',
            'surname' => 'required|min:2|max:15',
            'email' => 'required|max:24|email:rfc,dns|unique:owners',

        ],
            [
                'name.required' => 'Name is required',
                'name.min' => 'Name must be at least 2 characters long',
                'name.max' => 'Name cannot be more than 15 characters long',
                'surname.required' => 'Surname is required',
                'surname.min' => 'Surname must be at least 2 characters long',
                'surname.max' => 'Surname cannot be more than 15 characters long',
                'email.required' => 'Email address is required',
                'email.unique' => 'This email already exists',
                'email.max' => 'Email cannot be more than 24 characters long',

            ]);
        $owner=new Owner();
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->email=$request->email;
        $owner->save();
        return redirect()->route('owners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        return view('owners.update', ['owner'=>$owner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        $request->validate([
            'name' => 'required|min:2|max:15|',
            'surname' => 'required|min:2|max:15',
            'email' => 'required|max:24|email:rfc,dns|unique:owners',

        ],
            [
                'name.required' => 'Name is required',
                'name.min' => 'Name must be at least 2 characters long',
                'name.max' => 'Name cannot be more than 15 characters long',
                'surname.required' => 'Surname is required',
                'surname.min' => 'Surname must be at least 2 characters long',
                'surname.max' => 'Surname cannot be more than 15 characters long',
                'email.required' => 'Email address is required',
                'email.unique' => 'This email already exists',
                'email.max' => 'Email cannot be more than 24 characters long',

            ]);
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->email=$request->email;
        $owner->save();
        return redirect()->route('owners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        $owner->delete();
        return redirect()->route('owners.index');
    }

//    public function addCar($id, Request $request){
//        $car=new Car();
//        $car->reg_number=$request->reg_number;
//        $car->brand=$request->brand;
//        $car->model=$request->model;
//        $car->owner_id=$id;
//        $car->save();
//        return redirect()->route('owners.edit',$id);
//    }
}
