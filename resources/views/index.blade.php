<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title></title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
				<form method="POST" action="/add/category">
					{{ csrf_field() }}

					<input type="text" name="text">
							
					<input type="submit" >
					
				</form>

			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
				@if(Session::has('message'))
					{{Session::get('message')}}
				@endif
				@if(!empty($categories))
					@foreach($categories as $category)
						{{$category->text}} <br> <br>
						<hr> <a style="color: red;" href="{{url('/delete/category', $category->id)}}">delete</a>
					@endforeach
				@endif

			</div>
		</div>	
	</div>

</body>
</html>