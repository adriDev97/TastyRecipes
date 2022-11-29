<template>
    <button @click="doLike" class="border-0 bg-white"><i class='fa-regular fa-heart'></i></button>
 
</template>
<script>
export default {
  props: ["user", "recipe"],
  emits: ["do-like"],
  methods: {
    doLike() {
      axios
        .post("/api/likes", {
          recipe_id: this.recipe,
          user_id: this.user,
        })
        .then((response) => {
          console.log(response.data.like_id)
          this.$emit("do-like", response.data.like_id);
        })
        .catch((error) => {
          console.log(error.response);
        })
    }
  }
};
</script>