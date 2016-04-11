@extends('layouts.page')
@section('content')
<div class="row" style="margin-top:15px">
		<div class="col-lg-12 col-md-12">
			<b><i>Stories and tags:</i></b>
		</div>
	</div>
	<br>
	<div class="row">	
		@foreach ($stories as $story)
			<div class="col-lg-12 col-md-12">
				<p><b><i>Title: </i></b> {{$story->title}}</p>
				<p><b><i>Story: </i></b> {{$story->story}}</p>
				<p><b><i>Tags: </i></b>
				@foreach ($story->tags as $tag) 
					{{$tag->value}} 
				@endforeach</p>  
				<hr>
			</div>
		@endforeach
@endsection		