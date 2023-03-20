@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
			<form action="{{ route('book.post') }}" method="POST">
<table class="table table-hover table-bordered text-center">
@foreach($showseats as $show)
									<tr><td class="col-md-6">Movie</td>
										<td>{{$show->moviename}}</td>
									</tr>
									<tr>
										<td>Theatre</td>
										<td>{{$show->theatrename}}</td>	
									</tr>
									<tr>
										<td>Show Time</td>
										<td>{{$show->showtime}}	</td>							
									</tr>
									<tr>
										<td>Number of Seats</td>
										<td><input type="text" id="seats" name="seats"></td>
									</tr>	
									</table>								
									<div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Book
                              </button>
                          </div>
</form>					
					
                        @endforeach
</div>
</div>
</div>
</div>



@endsection