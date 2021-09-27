<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css">

<div class="card-content">
	<div class="card-body">
       	<div class="card-text">

		   <table class="table  table-borderless" style="width: 80%; margin-left: 10%;">
				<tbody>
					<tr>
						<th scope="col" style="width: 30%">
							Nombre
						</th>
						<th scope="col" style="width: 60%">
							Categorías
						</th>
						<th scope="col" style="width: 10%">
							Añadir
						</th>
					</tr>
					<tr>
						<td><input type='text' class='form-control' id='name' style="height: 28px !important;"/></td>
						<td>
							<select id="categories" class=" form-control select2">
								@foreach($categories as $category)
									<option value='{{ $category->id }}'>{{$category->name}}</option>
								@endforeach
							</select>
						</td>
						<td>
							<button type="button" class="btn btn-success" style="font-size:11px;">Añadir</button>
						</td>
					</tr>
				</tbody>
			</table> 

		   <table class="table table-striped" style="width: 80%; margin-left: 10%;">
				<thead>
					<tr>
					<th scope="col" style="width: 30%">Nombre</th>
					<th scope="col" style="width: 60%">Categoría/s</th>
					<th scope="col" style="width: 10%">Eliminar</th>
					</tr>
				</thead>
				<tbody id="tbody_tasks">
					@foreach ($tasks as $task)
						<tr>
						<td>{{$task->name}}</td>
						<td>{{$task->categories}}</td>
						<td><button type="button" class="btn btn-danger" style="font-size:11px;">Eliminar</button></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


<script src="{{asset('js/jquery-min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.full.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/i18n/es.js"></script>

<script>
$('.select2').select2({
			language: 'es',
			width: '100%'
});
</script>