@extends('layouts.page')
@section('content')	
	<div class="row" style="margin-top:15px">
		<div class="col-lg-12 col-md-12">
			<b><i>Locations with stories:</i></b>
		</div>
	</div>
	<br>	
	<div class="row">		
		@foreach ($locations as $location)
			<div class="col-lg-6 col-md-6">
				<p>{{$location->value}}</p>
        		<ol>
		        	@foreach ($location->stories as $story)
		            	<li>{{$story->title}}</li>
					@endforeach
				</ol>
			</div>
		@endforeach
	</div>
@endsection