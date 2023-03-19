@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @guest
                <div class="card-header">{{ __('Dashboard') }}</div>
                @else
                <div class="card-header">{{ __('Dashboard') }}<br>  Booking Reference - {{ Auth::user()->booking_ref }}</div>
                @endguest
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
                         @guest
                            <th> Movie Name</th>
                            <th> Genre</th>
                            <th> View</th>
                        @else
                            <th> Movie Name</th>
                            <th> Genre</th>
                            <th> View</th>
                            <th> Book</th>
                        @endguest
                        </tr>
                        </thead>
                        <tbody>
                             @foreach($movies as $val)
                        <tr>
                        @guest
                            <td> {{$val->moviename}} </td>
                            <td> {{$val->moviegenre}} </td>
                            <td><a href="/searchshows?val={{$val->movieid}}">Find shows for {{$val->moviename}} </td>
                        @else
                            <td> {{$val->moviename}} </td>
                            <td> {{$val->moviegenre}} </td>
                            <td><a href="/searchshows?val={{$val->movieid}}">Find shows for {{$val->moviename}} </td>
                            <td><a href="/searchshows?val={{$val->movieid}}">Book shows </td>
                        @endguest
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