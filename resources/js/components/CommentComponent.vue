<template>
  <div class="mt-5">
    <create-comment :user="this.user" :recipe="this.recipe" @create-comment="getComments"></create-comment>
    <div class="overflow rounded">
      <template v-for="comment in comments" :key="comment">
        <div class="d-flex mb-3">
          <li class="mx-3" style="list-style-type: none">
            <div class="container">
              <small><b>{{ comment.user.name}}</b></small>
              <p> {{ comment.comment }}</p>
              <small class="text-muted">{{ comment.created_at.slice(0,10) }} | {{ comment.created_at.slice(11,16) }}</small>
              <button v-if="comment.user_id == user || userRole == 'Admin'" @click="destroy(comment.id)" class="border-0 bg-transparent">
            <i class="fa-solid fa-trash-can"></i>
          </button>
            </div>
          </li>
        </div>
      </template>
    </div>
  </div>
</template>
<script>
export default {
  props: ["user", "recipe", 'roles'],
  data() {
    return { 
      comments : [],
      userRole : this.roles
    };
  },
  mounted() {
    console.log(this.userRole);
    this.getComments();
  },
  methods: {
    // comments
    destroy(e) {
      axios.delete("/api/comments/" + e).then((response) => {
        this.comments = this.comments.filter((o) => o.id !== e);
      }).catch((error) => {
          console.log(error.response);
        });;
    },
    getComments() {
      axios.get("/api/comments").then((response) => {
        this.comments = response.data.reverse().filter((comment) => comment.recipe_id == this.recipe);
      });
    },
  },
};
</script>