<script>
export default {
  data() {
    return {
      queryFood: "",
      pairedFood: [],
    };
  },
  methods: {
    prova() {
      axios
        .get(
          "https://api.spoonacular.com/food/wine/pairing?food=" +
            this.queryFood +
            "&apiKey=be770a902ba742ec832ce629f99dd9ae"
        ).then((response) => {
          this.pairedFood = response.data
        }).then(response => {
          if(this.pairedFood.status == 'failure') return this.pairedFood.message
        });
    },
  },
};
</script>
<template>
  <div class="mb-3 row">
    <label for="food" class="col-md-3 col-form-label my-2">Food or Dish</label>
    <div class="col-md-7 my-2">
      <input type="text" class="form-control" v-model="queryFood" id="food">
    </div>
    <div class="col-md-2 my-2">
      <button @click="prova" type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModalFood">
        Search
      </button>      
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModalFood" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark bg-opacity-76 text-white-50">
      <div class="modal-header">
        <h1 class="modal-title fs-2 satisfy-font" id="exampleModalLabel"><a href="#">{{ queryFood }}</a></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><b>PAIRED WINES</b></p> {{ pairedFood.message }}
        <ul class="mb-5 row"><li class="col-md-4" v-for="wine in pairedFood.pairedWines" :key="wine">{{wine.toUpperCase()}}</li></ul>
        <p><b>TIP</b></p>
        <p>{{ pairedFood.pairingText }}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</template>