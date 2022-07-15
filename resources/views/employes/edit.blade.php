@extends('layouts.app')

@section('content')
    <div class="container text-success" style="font-weight: bold">

        <h1>Employe/edit</h1>
        <hr>

        <p class="text-danger"> firstname :: {{$employe->first_name}}</p>

        <form action="{{ route('employes.update', ['employe' => $employe->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="first_name" value="{{$employe->first_name}}" class="form-control">
            <button class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection
