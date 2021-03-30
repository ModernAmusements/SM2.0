<template>
  <div id="app">
    <Nav></Nav>
   <div id="mainContainer">
        <!-- <Bubbles></Bubbles> -->
      <h1 class="display-1">Get Ready</h1>
      <p class="lead text-white">
        Start by sitting comfortably and taking a few deep breaths, in through the nose
        and out through the mouth. Gently close the eyes and feel the weight of the body
        in the chair, settling in to physical senses. Scan down through the body, noticing
        how the body feels.
      </p>
    <div id="mainTitle">
       <h1 class="display-3" v-on:click="setType(10)">Ready?</h1>
    </div>
    </div>
  </div>
</template>
<script>

import router from "../router";
import Vuex from "../store/index.js";

import Bubbles from '../components/Bubbles.vue'
import Nav from "../components/Nav.vue";

export default {
  components: { Bubbles, Nav },
  data() {
    return {};
  },
  methods: {
    setType(type) {
      Vuex.state.meditationType = type;
      router.push("/sound");
    },
  },
};
</script>
<style lang="scss">

.lead {
 margin: 3vh 12vw;

}

</style>
