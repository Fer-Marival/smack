<template>
	<div class="container">
      <div class="row" >
          <div class="col-md-4 col-sm-6 shadow" v-for="product in products">
              <div class="content" >
                <h4 class="card-title-article" >{{ product.name }}</h4>
                <img v-bind:src="product.path" height="300px" class="img-fluid" alt="">
                <div class="row container dates-product">
                  <span class="badge badge-light col-6"><strong>Price:</strong> {{ product.price }}</span>
                  <span class="badge badge-light col-6"><strong>Availables:</strong> {{ product.available }}</span>

                </div>
                <br>
                <p>{{ product.description }}</p>
                <div class="links-items">
                 
                </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
	export default {
		data() {
			return {
				products: []
				
			};
		},
		mounted() {
			axios.get('getcameras').then((response) => {
				this.products = response.data;
				//console.log(response.data);
			});
			console.log('component products mounted');
		}
	}
</script>