@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Cars</div>
                    <div class="card-body">
                        <form action="{{route('cars.store')}}" method="post">
                            @csrf
                            <div class="div mb-3">
                                <label class="form-label">Reg.Number</label>
                                <input class="form-control" type="text" name="reg_number">
                            </div>
                            <div class="div mb-3">
                                <label class="form-label">Make</label>
                                <input class="form-control" type="text" name="brand">
                            </div>
                            <div class="div mb-3">
                                <label class="form-label">Model</label>
                                <input class="form-control" type="text" name="model">
                            </div>
                            <div class="div mb-3">
                                <label for="" class="form-label">Owner</label>
                                <select class="form-control" name="owner_id">
                                    <option selected>select</option>
                                    @foreach($owners as $owner)
                                        <option value="{{$owner->id}}">{{$owner->name}} {{$owner->surname}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="div mb-3">
                                <button class="btn btn-success">Add Car</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
