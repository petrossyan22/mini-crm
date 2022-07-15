@extends('layouts.app')

@section('content')
    <div class="container text-success" style="font-weight: bold">

        <h1>Employe/show</h1>
        <hr>
        name :: {{$employe->first_name}} {{$employe->last_name}}
        <br>
        company :: {{$employe->name}}
        ===============
        @if ($employe->logo == null)
            no == null
        @else
            {{$employe->logo}}
        @endif
    </div>
@endsection
