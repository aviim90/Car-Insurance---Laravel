<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Owner;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::all();
        $cars = Car::all();
        return view("cars.index", ['cars'=>$cars, 'owners'=>$owners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners=Owner::all();
        return view('cars.create', ['owners'=>$owners]);
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
            'reg_number' => 'required|min:2|max:6|unique:cars',
            'brand' => 'required|min:2|max:15',
            'model' => 'required|min:2|max:15',
            'owner_id' => 'required',
        ],
            [
                'reg_number.required' => 'Registration number is required',
                'reg_number.min' => 'Registration number must be at least 1 symbol',
                'reg_number.max' => 'Registration number cannot be more than 6 symbols',
                'reg_number.unique' => 'This number already exists',
                'brand.required' => 'Auto make is required',
                'brand.min' => 'Make must be at least 2 characters long',
                'brand.max' => 'Make cannot be more than 15 characters long',
                'model.required' => 'Auto model is required',
                'model.min' => 'Auto model must be at least 2 characters long',
                'model.max' => 'Auto model cannot be more than 15 characters long',
                'owner_id.required' => 'Owner is required',
                ]);
        $car=new Car();
        $car->reg_number=$request->reg_number;
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->owner_id=$request->owner_id;
        $car->save();
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $owners=Owner::all();
        return view('cars.update', ['car'=>$car, 'owners'=>$owners]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'reg_number' => 'required|min:2|max:6|unique:cars',
            'brand' => 'required|min:2|max:15',
            'model' => 'required|min:2|max:15',
            'owner_id' => 'required',
        ],
            [
                'reg_number.required' => 'Registration number is required',
                'reg_number.min' => 'Registration number must be at least 1 symbol',
                'reg_number.max' => 'Registration number cannot be more than 6 symbols',
                'reg_number.unique' => 'This number already exists',
                'brand.required' => 'Auto make is required',
                'brand.min' => 'Make must be at least 2 characters long',
                'brand.max' => 'Make cannot be more than 15 characters long',
                'model.required' => 'Auto model is required',
                'model.min' => 'Auto model must be at least 2 characters long',
                'model.max' => 'Auto model cannot be more than 15 characters long',
                'owner_id.required' => 'Owner is required',
            ]);
        $car->reg_number=$request->reg_number;
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->owner_id=$request->owner_id;
        $car->save();
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index');
    }


}
