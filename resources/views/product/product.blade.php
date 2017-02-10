<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
	<body>
		<div class="ui grid">
			<div class="four wide column"></div>
			<div class="eight wide column">      
				<table class="ui celled table">
					<tr>
						<th>id</th>
						<th>name</th>
						<th>price</th>
						<th>description</th>
						<th>stock</th>
						<th>Ajout</th>
						<th>Enlever</th>
						<th>supprimer un produit</th>
						<th>modifier</th>
					</tr>

					@foreach($produits as $value)
					<tr>
						<td>{{$value->id}}</td>
						<td>{{$value->name}}</td>
						<td>{{$value->price/100}} €</td>
						<td>{{$value->description}}</td>
						<td>{{$value->stock}}</td>
						<td> <form action="/product/Ajout/{{$value->id}}" method="post">
							{{csrf_field()}}
							<button class="ui button ">+</button></form>
						</td>

						<td><form action="/product/Enlever/{{$value->id}}" method="post">
							{{csrf_field()}}<button class="ui button">-</button></form>
						</td><br>

						<td><form action="/modif/{{$value->id}}" method="POST">{{csrf_field()}}
							<button class="ui button">Supprimer</button>
						</form>
					</td>
					<td><form action="/product/edit/{{$value->id}}" method="GET">{{csrf_field()}}
						<button class="ui button">Modifier</button>
					</form></td>

				</tr>

				@endforeach

			</table>
		</div>
	</div>
	<form action="/product/ajoutproduit" method="post" style="text-align: center; margin-top: 60px;">
		{{csrf_field()}}
		<button class="ui red button ">Ajouter un Produit</button>
	</form>






</body>
</html>