<!-- Modal -->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="outter-wp">
		<div class="forms-main">
			<form class="form-horizontal" action="{{ route('users.store') }}" method="post">
				@csrf
				<div class="form-group">
					<label class="col-md-2 control-label">Name</label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span>
							<input type="text" class="form-control1 icon" name="name" placeholder="Name">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Email Address</label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon">
								<i class="fa fa-envelope-o"></i>
							</span>
							<input type="text" class="form-control1 icon" name="email" placeholder="Email Address">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Password</label>
					<div class="col-md-8">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-key"></i>
							</span>
							<input type="password" class="form-control1 icon" name="password" id="exampleInputPassword1" placeholder="Password">
						</div>
					</div>
				</div>
				<div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save</button>
		      	</div>
			</form>
		</div>
	</div>
      </div>
    </div>
  </div>
</div>

	{{-- <div class="outter-wp">
		<div class="forms-main">
			<h2 class="inner-tittle">Create User </h2>
			<form class="form-horizontal" action="{{ route('users.store') }}" method="post">
				@csrf
				<div class="form-group">
					<label class="col-md-2 control-label">Name</label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span>
							<input type="text" class="form-control1 icon" name="name" placeholder="Name">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Email Address</label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon">
								<i class="fa fa-envelope-o"></i>
							</span>
							<input type="text" class="form-control1 icon" placeholder="Email Address">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Password</label>
					<div class="col-md-8">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-key"></i>
							</span>
							<input type="password" class="form-control1 icon" id="exampleInputPassword1" placeholder="Password">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div> --}}