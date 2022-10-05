@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Owners</div>
                    <div class="card-body">
                        <form action="{{route('owners.store')}}" method="post">
                            @csrf
                            <div class="div mb-3">
                                <label class="form-label">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}">
                                @error('name')
                                @foreach($errors->get('name') as $error)
                                    <div class="alert alert-danger mt-1">{{$error}}</div>
                                @endforeach
                                @enderror
                            </div>
                            <div class="div mb-3">
                                <label class="form-label">Surname</label>
                                <input class="form-control @error('surname') is-invalid @enderror" type="text" name="surname" value="{{old('surname')}}">
                                @error('surname')
                                @foreach($errors->get('surname') as $error)
                                    <div class="alert alert-danger mt-1">{{$error}}</div>
                                @endforeach
                                @enderror
                            </div>
                            <div class="div mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}">
                                @error('email')
                                @foreach($errors->get('email') as $error)
                                    <div class="alert alert-danger mt-1">{{$error}}</div>
                                @endforeach
                                @enderror
                            </div>
                            <div class="div mb-3">
                                <button class="btn btn-success">Add Owner</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
