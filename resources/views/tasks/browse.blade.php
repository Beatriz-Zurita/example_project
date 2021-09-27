<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css">
<meta name="csrf-token" content="{{ csrf_token() }}">

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
							Categoría
						</th>
						<th scope="col" style="width: 10%">
							Añadir
						</th>
					</tr>
					<tr>
						<td><input type='text' class='form-control' id='name' style="height: 28px !important;" placeholder="Nombre"/></td>
						<td>
							<select id="categories" class=" form-control select2">
									<option>Categoría</option>
								@foreach($categories as $category)
									<option value='{{ $category->id }}'>{{$category->name}}</option>
								@endforeach
							</select>
						</td>
						<td>
							<button type="button" class="btn btn-success" style="font-size:11px;" id="add">Añadir</button>
						</td>
					</tr>
				</tbody>
			</table> 

		   <table class="table table-striped" style="width: 80%; margin-left: 10%;">
				<thead>
					<tr>
					<th scope="col" style="width: 30%">Nombre</th>
					<th scope="col" style="width: 60%">Categoría</th>
					<th scope="col" style="width: 10%">Eliminar</th>
					</tr>
				</thead>
				<tbody id="tbody_tasks">
					@foreach ($tasks as $task)
						<tr>
						<td>{{$task->name}}</td>
						<td>
							@foreach ($task->categories as $category)
							<span class="badge badge-secondary">{{$category->name}}</span>
							@endforeach
						</td>
						<td><button type="button" class="btn btn-danger delete" style="font-size:11px;" data-id="{{$task->id}}">Eliminar</button></td>
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

<script>

$('#add').on('click', (e) => {
    let name = $('#name').val();
	let categories = $('#categories').val();


    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.ajax({
        url: '{{ route("tasks.add") }}',
        type: 'POST',
        data: {
            name: name,
            categories: categories
        },
        success: function (data) {

			console.log(data)

			$('#tbody_tasks').append('<tr><td>'+data.task.name+'</td><td><span class="badge badge-secondary">'+data.category.name+'</span></td><td><button type="button" class="btn btn-danger delete-'+data.task.id+'" style="font-size:11px;">Eliminar</button></td></tr>');
			$('.delete-' + data.task.id).attr('data-id', data.task.id);
			$('.delete-' + data.task.id).addClass('delete');

        }
    });
}) 

</script>

<script>

$('.delete').on('click', (e) => {
    let id = $(e.target).attr('data-id');

    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.ajax({
		url: '{{ route("tasks.delete") }}',
        type: 'POST',
        data: {
            id:id
        },
        success: function (data) {
            $(e.target).parents().closest($('tr')).detach();
        }
    });
}) 

</script>