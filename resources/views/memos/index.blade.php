<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel Query Filter Sample</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css" type="text/css" media="all"
	/>
</head>

<body>
	<div class="container">
		<table class="table is-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Tag</th>
				</tr>
			</thead>
			<tbody>
				@foreach($memos as $memo)
				<tr>
					<td>
						{{$memo->id}}
					</td>
					<td>
						{{$memo->title}}
					</td>
					<td>
						{{$memo->tag}}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>

</html>
