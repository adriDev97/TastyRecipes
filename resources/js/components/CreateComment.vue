<template>
  <form @submit.prevent="createComment">
    <div class="d-flex justify-content-end align-items-end">
      <textarea
        name="comment"
        v-model="comment"
        cols="20"
        rows="1"
        class="form-control me-1"
        placeholder="Write a comment"
      ></textarea>
      <input type="submit" class="btn btn-outline-warning" value="post">
    </div>
  </form>
</template>
<script>
export default {
  props: ["user", "recipe",],
  data() {
    return { comment: "" };
  },
  methods: {
    createComment() {
      axios
        .post("/api/comments", {
          comment: this.comment,
          recipe_id: this.recipe,
          user_id: this.user,
        })
        .then((response) => {
          this.$emit("create-comment", true);
        })
        .catch((error) => {
          console.log(error.response);
        });
    },
  },
};
</script>