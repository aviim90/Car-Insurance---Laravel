@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Cars</div>
                    <div class="card-body">
                        <a class="btn btn-primary" href={{route('cars.create')}}>Add Car</a>
                        <a class="btn btn-warning" href={{route('owners.index')}}>Owners</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Reg.Number</th>
                                <th>Make</th>
                                <th>Model</th>
                                <th>Owner</th>
                                <th></th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{$car->reg_number}}</td>
                                    <td>{{$car->brand}}</td>
                                    <td>{{$car->model}}</td>
                                    <td>{{$car->owner->name}} {{$car->owner->surname}}</td>
                                    <td><a class="btn btn-success" href="{{route('cars.edit', $car->id)}}">Update</a>
                                    </td>
                                    <td>
                                        <form action="{{route('cars.destroy', $car->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
