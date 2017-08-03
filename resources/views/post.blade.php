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
			<div class="col-lg-4 col-lg-offset-6">
				<h3>ADD NEW POST</h3>
				<form method="POST" action="/create/post">

					{{ csrf_field() }}

					<textarea name="content" rows="3" cols="30">
						
					</textarea> <br> <br>

					<select class="">
					  
					  @foreach($categories as $category)
					  	<option value="{{$category->id}}" name="category_id">
					  		{{$category->text}}
					  	</option>
					  @endforeach
					
					</select>
							
					<input type="submit" class="btn btn-success">
					
				</form>

			</div>
		</div>

		<div class="row">
			<div class="col-lg-4-6 well">
				<center>
					<span>ALL POSTS</span>
				</center>
				@if(Session::has('message'))
					{{Session::get('message')}}
				@endif
				@if(!empty($posts))
					@foreach($posts as $post)
						{{$post->content}} <br> <br>
						<hr> <a style="color: red;" href="">delete</a>
					@endforeach
				@endif

			</div> <br> <br>
		</div> <br> <br>
	</div>
	

</body>
</html>