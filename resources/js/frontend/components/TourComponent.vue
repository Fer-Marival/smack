<template>
	<div class="container-fluid">
      <div class="row" id="products">
          <div class="col shadow" v-for="tour in tours">
              <div class="content">
                <img v-bind:src="tour.path" class="img-fluid" alt="">
                tour.description <br />
                <a href="#" class="btn rounder">Add to my adveture</a>
              </div>
          </div>
      </div>
  	</div>
</template>

<script>

	export default {
		data() {
			return	{
				tours: []
			};
		},
		maunted() {
			axios.get('gettours'),then((response) => {
				this.tours = response.data;
			});
			console.log('component tour');
		}
	}
</script>