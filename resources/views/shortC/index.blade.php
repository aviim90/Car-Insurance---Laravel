@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Short Codes</div>
                    <div class="card-body">
                        <a class="btn btn-primary" href={{route('shortC.create')}}>Add Code</a>
                        <a class="btn btn-warning" href={{route('cars.index')}}>Cars</a>
                        <a class="btn btn-warning" href={{route('owners.index')}}>Owners</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Short Code</th>
                                <th>Replace</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($shortC as $shortCode)
                                <tr>
                                    <td>{{$shortCode->shortcode}}</td>
                                    <td>{{$shortCode->replace}}</td>
                                    <td><a class="btn btn-success"
                                           href="{{route('shortC.edit', $shortCode->id)}}">Update</a></td>
                                    <td>
                                        <form action="{{route('shortC.destroy', $shortCode->id)}}" method="post">
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


