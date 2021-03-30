<template>
  <div id="app">
    <Nav></Nav>
    <!-- <Bubbles></Bubbles> -->
    <div id="mainContainer">
      <div id="mainTitle" v-on:click="clickedTitle()">
        <h1 class="display-1">Silent Moon</h1>
      </div>
      <p class="lead text-white">pure breathe exercise</p>
    </div>
  </div>
</template>

<script>
import router from "../router/index";
import Bubbles from "../components/Bubbles.vue";
import Nav from "../components/Nav.vue";

export default {
  components: { Bubbles, Nav },
  name: "home",
  data() {
    return {};
  },
  methods: {
    clickedTitle() {
      document.getElementById("mainTitle").style.opacity = "0";
      setTimeout(() => {
        document.getElementById("mainTitle").style.display = "none";
        router.push("type");
      }, 300);
    },
  },
  created() {
    document.getElementById("mainTitle").style.opacity = "1";
    document.getElementById("mainTitle").style.display = "block";
  },
};
</script>

<style lang="scss">
h1 {
  color: floralwhite;
}
#mainContainer {
  width: 100%;
  height: 100%;
  position: absolute;
  background-color: #93bfa8;
  transition-duration: 900ms;
  z-index: -2;
}

@media (max-width: 575.98px) {
  #mainContainer {

  }
}
#mainTitle {
  h1 {
    color: #58968b;
  }
  margin: auto;
  padding: 0 18px;
  background-color: floralwhite;
  border-radius: 11px;
  width: fit-content;
  transition-duration: 450ms;
  z-index: 1000;
}
#mainTitle:hover {
  h1 {
    color: floralwhite;
  }
  background-color: #58968b;
  transform: scale(0.87);
  cursor: pointer;
}
</style>
