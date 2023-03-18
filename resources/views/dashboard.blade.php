@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    Movie Lists
                    <div>
                        <table width="100%">
                        <thead>
                         <tr>
                            <th> Movie Name</th>
                            <th> Genre</th>
                            <th> Action</th>
                        </tr>
                        </thead>
                        <tbody>
                             @foreach($movies as $val)
                        <tr>
                            <td> {{$val->moviename}} </td>
                            <td> {{$val->moviegenre}} </td>
                            <td><a href="/searchshows?val={{$val->movieid}}">Find shows for {{$val->moviename}} </td>
                        </tr>
                             @endforeach
                        </tbody>
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection