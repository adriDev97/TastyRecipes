<script>
import Category from "./Category.vue";
export default {
  components: { Category },
  props: ["user", "roles", "id"],
  data() {
    return {
      selectedCategory : 0,
      recipes : [],
      roleUser : this.roles,
      idrole : this.id,
      rolesUsers : []    
    }
  },
  mounted() {
    this.getRoleUser();
    this.getRecipe();
    //console.log(this.idrole)
  },
  methods: {
    selectCategory(event) {
      if (event.target.value) this.selectedCategory = event.target.value;
    },
    getRecipe() {
      axios.get("api/recipes").then((response) => {
        this.recipes = response.data.reverse();
        //console.log(this.recipes.roles)
      });
    },
    getRoleUser() {
      axios.get('api/roleAdmin').then(response => {
        this.rolesUsers = response.data;
        // console.log(this.rolesUsers)
      })
    }
  }
};
</script>
<template>
  <div class="container">
    <div class="mb-5">
      <div class="row">
        <div class="col-md-2">
          <h3 class="satisfy-font">Look by category</h3>
        </div>
        <div class="col-md-4">
          <category @select-category="selectCategory"></category>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <template v-for="recipe in recipes" :key="recipe">
        <div v-if="selectedCategory == recipe.category_id || selectedCategory == 0" class="col-lg-3 col-md-6">
          <div class="card recipes" id="recipes" >
            <div>
              <img v-if="recipe.image" :src="'/images/recipes/' + recipe.image" class="card-img-top img-fluid" style="height: 18vh" :alt="recipe.name"/>
              <img v-else src="images/recipes/defaultImageRecipe.png" class="card-img-top img-fluid" style="height: 18vh" alt="defaultImage"/>              
            </div>
            <div class="card-body">
              <div class="d-flex mb-1 ">
                <h3 class="card-title satisfy-font me-auto">{{ recipe.name }}</h3>
              </div>
              <div class="d-flex justify-content-end">
                  <a class="btn btn-outline-warning me-2" v-if="recipe.user_id == rolesUsers[0].id && roleUser == 'Admin' || recipe.user_id == rolesUsers[1].id && roleUser == 'Admin' || recipe.user_id == user" :href="'recipes/' + recipe.id + '/edit'">edit</a>
                  <a class="btn btn-outline-warning" :href="'recipes/' + recipe.id">see more</a>
              </div>
            </div>
          </div>
        </div>
      </template>
    </div>
  </div>
</template> 
