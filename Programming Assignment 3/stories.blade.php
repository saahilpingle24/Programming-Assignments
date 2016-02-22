<html>
	<body>	
		@foreach ($stories as $story)
			<p><b><i>Title</i></b> {{ $story->title }}</p>
			<p><b><i>Story</i></b> {{ $story->story }}</p>			
			<hr>
		@endforeach
	</body>
</html>
		