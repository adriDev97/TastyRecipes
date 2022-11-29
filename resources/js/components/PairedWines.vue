<script>
export default {
  data() {
    return {
      query: "",
      pairedWines: []
    };
  },
  methods: {
    provaa() {
      axios
        .get(
            "https://api.spoonacular.com/food/wine/dishes?wine=" +
            this.query +
            "&apiKey=be770a902ba742ec832ce629f99dd9ae"
        ).then((response) => {
          this.pairedWines = response.data
        }).then(response => {
          if(this.pairedWines.status == 'failure') return this.pairedWines.message
        });
    },
  },
};
</script>
<template>
  <div class="mb-3 row">
    <label for="wine" class="col-md-2 col-form-label my-2">Wine name</label>
    <div class="col-md-8 my-2">
      <input type="text" class="form-control" v-model="query" id="wine">
    </div>
    <div class="col-md-2 my-2">
      <button @click="provaa" type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Search
      </button>      
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark bg-opacity-76 text-white-50">
      <div class="modal-header">
        <h1 class="modal-title fs-2 satisfy-font" id="exampleModalLabel"><a href="">{{ query }}</a></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><b>TIP</b></p>{{ pairedWines.message }}
        <p>{{pairedWines.text}}</p>
        <p><b>PAIRINGS</b></p>
        <ul class="row"><li class="col-md-4" v-for="pairing in pairedWines.pairings " :key="pairing">{{pairing.toUpperCase()}}</li></ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</template>