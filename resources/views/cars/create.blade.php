@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Cars</div>
                    <div class="card-body">

{{--                        @if ($errors->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                @foreach($errors->all() as $error)--}}
{{--                                    <div>{{$error}}</div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <form action="{{route('cars.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="div mb-3">
                                <label class="form-label">Reg.Number</label>
                                <input class="form-control @error('reg_number') is-invalid @enderror" type="text" name="reg_number" value="{{old('reg_number')}}">
                                @if ($errors->has('reg_number'))
                                    <div class="alert alert-danger mt-1">
                                        @foreach($errors->get('reg_number') as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="div mb-3">
                                <label class="form-label">Make</label>
                                <input class="form-control @error('brand') is-invalid @enderror" type="text" name="brand" value="{{old('brand')}}">
                                @error('brand')
                                @foreach($errors->get('brand') as $error)
                                    <div class="alert alert-danger mt-1">{{$error}}</div>
                                @endforeach
                                @enderror
                            </div>
                            <div class="div mb-3">
                                <label class="form-label">Model</label>
                                <input class="form-control @error('model') is-invalid @enderror" type="text" name="model" value="{{old('model')}}">
                                @if ($errors->has('model'))
                                    <div class="alert alert-danger mt-1">
                                        @foreach($errors->get('model') as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="div mb-3">
                                <label for="" class="form-label">Owner</label>
                                <select class="form-control @error('owner_id') is-invalid @enderror" name="owner_id">
                                    <option selected>select</option>
                                    @foreach($owners as $owner)
                                        <option value="{{$owner->id}}" @selected(old('owner_id')==$owner->id)>{{$owner->name}} {{$owner->surname}} </option>
                                    @endforeach
                                </select>
                                @error('owner_id')
                                @foreach($errors->get('owner_id') as $error)
                                    <div>{{$error}}</div>
                                @endforeach
                                @enderror
                            </div>
                            <div class="div mb-3">
                                <label class="form-label">Auto Photo:</label>
                                <input type="file" class="form-control" name="image">
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
