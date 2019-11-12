<div class="modal" tabindex="-1" role="dialog" id="addDestino">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Add Destino</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="{{ route('destinos.store') }}" method="post" enctype="multipart/form-data">
	        	@csrf
	          <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name">
			  </div>
			  <div class="form-group">
			    <label for="description">Description</label> 
			    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
			  </div>
		      <div class="form-group">
		      <label for="locale">Idioma</label>
			      <select id="locale" name="locale" class="form-control">
			        <option value="en" selected>Inglés</option>
			        <option value="es">Español</option>
			      </select>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save</button>
	      	  </div>
			</form>
	      </div>
	    </div>
	  </div>
	</div>