@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Short Codes</div>
                    <div class="card-body">

                        {{--                        @if ($errors->any())--}}
                        {{--                            <div class="alert alert-danger">--}}
                        {{--                                @foreach($errors->all() as $error)--}}
                        {{--                                    <div>{{$error}}</div>--}}
                        {{--                                @endforeach--}}
                        {{--                            </div>--}}
                        {{--                        @endif--}}
                        <form action="{{route('shortC.store')}}" method="post">
                            @csrf
                            <div class="div mb-3">
                                <label class="form-label">Short Code</label>
                                <input class="form-control @error('shortcode') is-invalid @enderror" type="text" name="shortcode" value="{{old('shortcode')}}">
                                @if ($errors->has('shortcode'))
                                    <div class="alert alert-danger mt-1">
                                        @foreach($errors->get('shortcode') as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="div mb-3">
                                <label class="form-label">Replacement</label>
                                <input class="form-control @error('replace') is-invalid @enderror" type="text" name="replace" value="{{old('replace')}}">
                                @error('replace')
                                @foreach($errors->get('replace') as $error)
                                    <div class="alert alert-danger mt-1">{{$error}}</div>
                                @endforeach
                                @enderror
                            </div>
                            <div class="div mb-3">
                                <button class="btn btn-success">Add Code</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

