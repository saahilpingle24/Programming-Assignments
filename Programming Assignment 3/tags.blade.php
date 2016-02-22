<html>
	<body>
		<b><i>Tags:</i></b>
		@foreach ($tags as  $tag)
			<p>{{ $tag->value }}</p>
		@endforeach
	</body>
</html>
		