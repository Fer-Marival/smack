@extends('layouts.app')

@section('content')
<div class="container" id="crud">
	<div class="graph-visual tables-main">
	<h2 class="inner-tittle">List Users</h2>
		<div class="graph">
			<div class="tables">										
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>email</th>
							<th>Actions</th>
							<th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">Add User</button>></th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>
								<button type="button" class="btn btn-primary">Editar</button>
								<button type="button" class="btn btn-danger">Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>								
		</div>
	</div>
	@include('admin.users.create')

	<pre>
		@{{ $data }}
	</pre>
</div>
@stop