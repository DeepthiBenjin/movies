@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            
                        <div>
                        <table width="100%">
                        <thead>
                         <tr>
                            <th> Movie Name</th>
                            <th> Show time</th>
                            <th> Theatre Name</th>
                            <th> Location</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                             @foreach($shows as $show)
                        <tr>
                            <td> {{$show->moviename}} </td>
                            <td> {{$show->showtime}} </td>
                            <td> {{$show->theatrename}} </td>
                            <td> {{$show->locationname}} </td>
                            <td><a href="/showseats?showsid={{$show->showsid}}&theatreid={{$show->theatreid}}">Find seats</td>
                            
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