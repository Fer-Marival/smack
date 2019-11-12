<template>
  <section class="complements">
    <div class="container">
      <h1 class="complements">Complementos</h1>
      <div class="row">
            <div class="col" v-for="complement in complements">
              <div class="complement">
                <img v-bind:src="complement.image" class="img-fluid" alt="">
                <p> {{ complement.name }} </p>
                <a href="#" class="btn rounder">+ add complements</a>
              </div>
            </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    data() {
        return {
            complements: []
        };
      
    },
    mounted() {
      axios.get('getcomplements').then((response) => {
        this.complements = response.data;
      });
      console.log('complements component');
    }
  }
</script>