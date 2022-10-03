@extends('layouts.main')
@section('content')
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
                            <label class="form-label">Owner ID</label>
                            <input class="form-control" type="number" name="owner_id">
                        </div>
                        <div class="div mb-3">
                            <button class="btn btn-success">Add Car</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
