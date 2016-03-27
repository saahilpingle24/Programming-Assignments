<html>
	<body>	
		@foreach ($stories as $story)
			<p><b><i>Title</i></b> {{$story->title}}</p>
			<p><b><i>Story</i></b> {{$story->story}}</p>
            <p><b><i>Tags</i></b>
                @foreach ($story->tags as $tag) 
                    {{$tag->value}} 
                @endforeach            
			<hr>
		@endforeach
	</body>
</html>
		