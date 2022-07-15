@extends('layouts.app')

@section('content')
    <div class="container text-success" style="font-weight: bold">

        <h1>Employe/create</h1>
        <hr>
        <form action="{{ route('employes.store') }}" method="POST">
            @csrf
            @method('POST')
            <input type="text" name="first_name" placeholder="first nam" class="form-control mt-3">
            <input type="text" name="last_name" placeholder="last nam" class="form-control mt-3">
            <input type="text" name="company_id" placeholder="company_id" class="form-control mt-3">
            <input type="text" name="email" placeholder="email" class="form-control mt-3">
            <input type="text" name="phone" placeholder="phone" class="form-control mt-3">
            <button class="btn btn-primary mt-3">Create</button>
        </form>
    </div>
@endsection
