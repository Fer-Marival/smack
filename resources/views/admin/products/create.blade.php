<div class="modal" tabindex="-1" role="dialog" id="addProduct">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Add Product</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="{{ route('products.store') }}" method="post">
	        	@csrf
	          <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
			  </div>
			  <div class="form-group">
			    <label for="image">Image</label>
			    <input type="file" class="form-control-file" id="image" name="image">
			  </div>
			  <div class="form-group">
			    <label for="description">Description</label> 
			    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
			  </div>
			  <div class="form-group">
			    <label for="price">Price</label>
			    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
			  </div>
			  <div class="form-group">
			    <label for="available">Available</label>
			    <input type="text" class="form-control" id="available" name="available" placeholder="Price">
			  </div>
			  <div class="form-group">
				<label for="category_id">Category</label>
			  	{!!Form::select('category_id', $categories->pluck('name','id'), ['class' => 'form-control'])!!}
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