<div class="card-content">
	<div class="card-body">
       	<div class="card-text">
			<table class="table table-striped" style="width: 100%">
				<thead>
					<tr>
                        <th>Tarea</th>
                        <th>Categoría</th>
                        <th>Acciones</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($tasks as $task)
                        
                    @endforeach
				</tbody>
				<tfoot>
					<tr class="tfoot-row">
						<td></td>
                        <td></td>
                        <td></td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>