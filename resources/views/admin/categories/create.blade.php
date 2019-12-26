<div class="modal" tabindex="-1" role="dialog" id="addCategory">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Add CAtegory</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

	        <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
	        	@csrf
	          <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="category name">
			  </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Create</button>
	      	  </div>
			</form>
	      </div>
	    </div>
	  </div>
	</div>