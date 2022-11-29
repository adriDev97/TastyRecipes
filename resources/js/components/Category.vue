<script>
export default {
  props: ["value"],
  emits: ["select-category"],
  data() {
    return { categories: [] };
  },
  mounted() {
    this.getCategories();
  },
  methods: {
    getCategories() {
      axios.get("api/categories").then((response) => {
        this.categories = response.data;
      });
    },
    selectCategory(event) {
      this.$emit("select-category", event);
    },
  },
};
</script>
<template>
  <select @change="selectCategory" class="form-select col-md-4">
    <option :value="0">All categories</option>
    <option v-for="category in categories" :key="category" :value="category.id">
      {{ category.name }}
    </option>
  </select>
</template>