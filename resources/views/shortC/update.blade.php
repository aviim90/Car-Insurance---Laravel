@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Cars</div>
                    <div class="card-body">
                        <form action="{{route('shortC.update', $shortCode->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="div mb-3">
                                <label class="form-label">Short Code</label>
                                <input class="form-control" type="text" name="shortcode" value="{{$shortCode->shortcode}}">
                            </div>
                            <div class="div mb-3">
                                <label class="form-label">Replacement</label>
                                <input class="form-control" type="text" name="replace" value="{{$shortCode->replace}}">
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

