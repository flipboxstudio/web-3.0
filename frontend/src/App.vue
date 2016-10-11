<template>
  <div id="app">
    <img class="logo" src="./assets/logo.png">
    <hello></hello>
    <p>
      {{ app.version }}
    </p>
    <p>
      To get a better understanding of how this boilerplate works, check out
      <a href="http://vuejs-templates.github.io/webpack" target="_blank">its documentation</a>.
      It is also recommended to go through the docs for
      <a href="http://webpack.github.io/" target="_blank">Webpack</a> and
      <a href="http://vuejs.github.io/vue-loader/" target="_blank">vue-loader</a>.
      If you have any issues with the setup, please file an issue at this boilerplate's
      <a href="https://github.com/vuejs-templates/webpack" target="_blank">repository</a>.
    </p>
    <p>
      You may also want to checkout
      <a href="https://github.com/vuejs/vue-router/" target="_blank">vue-router</a> for routing and
      <a href="https://github.com/vuejs/vuex/" target="_blank">vuex</a> for state management.
    </p>
  </div>
</template>

<script>
import Hello from './components/Hello';

export default {
  components: {
    hello: Hello,
  },
  data() {
    return {
      app: {},
      api: {
        host: process.env.API_HOST,
      },
    };
  },
  beforeMount() {
    this.$http.get(this.api.host).then((response) => {
      this.app = response.data.data;
    });
  },
};
</script>

<style>
html, body {
  margin: 0;
  padding: 0;
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
}

#app {
  color: #2c3e50;
  max-width: 600px;
  font-family: "Raleway", Helvetica, sans-serif;
  text-align: center;
}

#app a {
  color: #42b983;
  text-decoration: none;
}

#app p {
  line-height: 1.5;
}

.logo {
  width: 100px;
  height: 100px
}
</style>
