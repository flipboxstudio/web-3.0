<template>
  <div class="hello">
    <h1>{{ message }}</h1>
  </div>
</template>

<script>

export default {
  data() {
    return {
      message: null,
    };
  },
  computed: {
    message() {
      return this.$parent.app.name;
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1 {
  color: #42b983;
}
</style>
