@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Owners</div>
                    <div class="card-body">
                        <form action="{{route('owners.update', $owner->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="div mb-3">
                                <label class="form-label">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$owner->name}}">
                                @error('name')
                                @foreach( $errors->get('name') as $error)
                                    <div class="alert alert-danger"> {{ $error }} </div>
                                @endforeach
                                @enderror
                            </div>
                            <div class="div mb-3">
                                <label class="form-label">Surname</label>
                                <input class="form-control" type="text" name="surname" value="{{$owner->surname}}">
                                @error('surname')
                                @foreach( $errors->get('surname') as $error)
                                    <div class="alert alert-danger"> {{ $error }} </div>
                                @endforeach
                                @enderror
                            </div>
                            <div class="div mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" name="email" value="{{$owner->email}}">
                                @error('email')
                                @foreach( $errors->get('email') as $error)
                                    <div class="alert alert-danger"> {{ $error }} </div>
                                @endforeach
                                @enderror
                            </div>
                            <div class="div">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

