@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">Owners</div>
                <div class="card-body">
                    <form action="{{route('owners.store')}}" method="post">
                        @csrf
                        <div class="div mb-3">
                            <label class="form-label">Name</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="div mb-3">
                            <label class="form-label">Surname</label>
                            <input class="form-control" type="text" name="surname">
                        </div>
                        <div class="div mb-3">
                            <button class="btn btn-success">Add Owner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
