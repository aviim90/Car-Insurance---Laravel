@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">Owners</div>
                <div class="card-body">
                    <a class="btn btn-primary" href={{route('owners.create')}}>Add Owner</a>
                    <a class="btn btn-warning" href={{route('cars.index')}}>Cars</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($owners as $owner)
                            <tr>
                                <td>{{$owner->name}}</td>
                                <td>{{$owner->surname}}</td>
                                <td><a class="btn btn-success" href="{{route('owners.edit', $owner->id)}}">Update</a>
                                </td>
                                <td>
                                    <form action="{{route('owners.destroy', $owner->id)}}" method="post">
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
@endsection

