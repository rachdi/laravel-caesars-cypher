

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>

	</html>
	<form action="{{url('/product/'.$modif->id)}}" method="post">
		{{csrf_field()}}



		<div class="ten wide column"><div class="ui left action input">
			<button class="ui teal labeled icon button"><i class="cart icon"></i> Name </button>
			<input type="text" name='name' value="{{$modif->name}}">

		</div></div>
		<br>
		<div class="ten wide column"><div class="ui left action input">
			<button class="ui teal labeled icon button"><i class="cart icon"></i>Price</button>
			<input type="number" name='price' value="{{$modif->price}}">

		</div></div>
		<br>
		<div class="ten wide column"><div class="ui left action input">
			<button class="ui teal labeled icon button"><i class="cart icon"></i>Description </button>
			<input type="text" name='description' value="{{$modif->description}}">

		</div></div>


		<br>
		<div class="ten wide column">
			<div class="ui left action input">
				<button class="ui teal labeled icon button"><i class="cart icon"></i> Stock </button>
				<input type="number" name='stock' value="{{$modif->stock}}">

			</div></div><br>


			<input type="submit" class="ui teal labeled icon button" value="enregistrer" class="ui teal labeled icon button"" >




		</form>

	</body>
	</html>