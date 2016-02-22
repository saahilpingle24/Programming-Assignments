<html>
	<body>
		<b><i>Locations:</i></b>
		@foreach ($locations as  $location)
			<p>{{ $location->value }}</p>
		@endforeach
	</body>
</html>
		