<template>
  <div id="app">
    <!-- <Bubbles></Bubbles> -->
    <Nav></Nav>
    <div id="mainContainer">
       <h1 class="display-1">Choose a Meditation</h1>
      <p class="lead text-white">
        When starting a meditation practice, the first question to ask is if you want it
        to be guided or unguided. The preference is going to differ from person to person,
        but before deciding what best suits you, it's worth exploring what each option
        involves.
      </p>
      <div class="container">

      <!-- <div class="type" v-on:click="setSound('none')">none</div> -->
      <div class="type" v-on:click="setSound('fire')">Unguided Mediation</div>
      <div class="type" v-on:click="setSound('water')">Guided Mediation</div>
      <div class="type" v-on:click="setSound('classic')">Simple Mediation</div>
      </div>
    </div>
  </div>
</template>
<script>
import router from "../router";
import Vuex from "../store/index.js";
import Bubbles from "../components/Bubbles.vue";
import Nav from "../components/Nav.vue";
export default {
  components: { Bubbles, Nav },
  name: "sound",
  data() {
    return {};
  },
  methods: {
    setSound(type) {
      Vuex.state.meditationSound = type;
      router.push("/meditation");
    },
  },
  //   created() {
  //     document.body.style.background = "black;";
  //   },
};
</script>
<style scoped>

.container {
   background-color: #93bfa8;
       padding-bottom: 50px;
}
.type {
  color: #58968b;
  margin-bottom: 10%;
  background-color: floralwhite;
  padding: 15px;
  margin: 10px;
  border-radius: 11px;
  transition-duration: 450ms;
}
.type:hover {
  color: floralwhite;
  background-color: #58968b;
  transform: scale(0.87);
  cursor: pointer;
}
</style>
