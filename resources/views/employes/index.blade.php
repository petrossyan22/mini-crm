@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employees</h1>
        <hr>
        <a href="/employes/create">Create Employee</a>
        <hr>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Company_id</th>
                <th scope="col">Email</th>
                <th scope="col">phone</th>
                <th scope="col">Tools</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($employes as $employe)
                    <tr>
                        <th scope="row">{{$employe->id}}</th>
                        <td>{{$employe->first_name}}</td>
                        <td>{{$employe->last_name}}</td>
                        <th>{{$employe->company_id}}</th>
                        <td>{{$employe->email}}</td>
                        <td>{{$employe->phone}}</td>
                        <td>
                            <form action="{{ route('employes.destroy', ['employe' => $employe->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route('employes.edit', ['employe' => $employe->id]) }}">Edit</a>
                            <a href="{{ route('employes.show', ['employe' => $employe->id]) }}">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            {{$employes->render()}}
        </table>
    </div>
@endsection
