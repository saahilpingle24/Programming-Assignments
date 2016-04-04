<!doctype html>	
<html lang="en">	
	<head>	
		<meta charset="utf-8"/>	
		<title>Laravel | Course</title>	
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">	
	</head>	
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
					<form method="POST" action="/story/store">
					  <div class="form-group">
					    <label for="title">Story Title</label>
					    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
					  </div>
					  <div class="form-group">
					    <label for="story">Story</label>
					    <textarea class="form-control" id="story" name="story" placeholder="Story"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="location">Location</label>
				    	<select name="location_id" class="form-control">
							@foreach($locations as $location)
								<option value="{{ $location->id}}">{{ $location->value }}</option>
							@endforeach
						</select>
					  </div>
					  <div class="form-group">
					  	<label for="published">Published</label>
					  	<br>
					    <input type="radio" id="published" name="published" value="1" checked> Yes					   	
					    <input type="radio" id="published" name="published" value="0"> No					   
					  </div>					  
					  <button type="submit" class="btn btn-calm">Submit</button>
					</form>
				</div>
			</div>		
		<script	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
	</body>	
</html>