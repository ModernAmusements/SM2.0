<template>
  <div id="app">
       <Nav></Nav>
    <div :style="{ animationDuration: duration + 's' }" id="mediContainer">

      <div :style="{ animationDuration: duration + 's' }" id="circle"></div>
      <div :style="{ animationDuration: duration / 2 + 's' }" id="message">
        {{ message }}
      </div>
      <audio :src="sound" autoplay loop></audio>
      <div class="text-center">
        <a href="/survey/view/7"
          ><button class="btn btn-lg btn-neutral mt-4">Continue</button></a
        >
      </div>
    </div>
  </div>
</template>

<script>
import Vuex from "../store/index.js";
import router from "../router";

import Bubbles from "../components/Bubbles.vue";
import Nav from "../components/Nav.vue";

export default {
  components: { Bubbles, Nav },
  name: "Meditation",
  data() {
    return {
      message: "breathe in",
      duration: Vuex.state.meditationType,
      sound: Vuex.state.meditationSound + ".mp3",
    };
  },
  methods: {
    changeMsg() {
      if (this.message == "breathe in") {
        this.message = "breathe out";
      } else {
        this.message = "breathe in";
      }
    },
  },
  created() {
    if (Vuex.state.meditationType == 0) {
      router.push("/type");
    }
    setInterval(() => {
      this.changeMsg();
    }, (this.duration / 2) * 1000); // multiplied by 1000 because of seconds to miliseconds
  },
};
</script>

<style>
#mediContainer {
  width: 100%;
  height: 100%;
  position: absolute;
  animation-name: backgroundChange;
  animation-iteration-count: infinite;
  padding-bottom: 50px;
}
@keyframes backgroundChange {
  0% {
    background-color: #b9d3c5;
  }
  35%,
  65% {
    background-color: #93bfa8;
  }
  100% {
    background-color: #b9d3c5;
  }
}

#circle {
  margin: auto;
  margin-top: 19%;
  width: fit-content;
  background: linear-gradient(180deg, #93bfa8, #b9d3c5);
  background-size: 400% 400%;
  border-radius: 50%;
  padding: 80px;
  box-shadow: 2px 2px 14px #628673;
  animation-name: circle;
  animation-iteration-count: infinite;
}
@keyframes circle {
  0% {
    transform: scale(0.1);
    background-position: 50% 100%;
  }
  30%,
  70% {
    background-position: 50% 100%;
  }
  50% {
    transform: scale(1);
    background-position: 50% 0%;
  }
  100% {
    transform: scale(0.1);
    background-position: 50% 100%;
  }
}

#message {
  font-size: 34px;
  margin-top: 4%;
  animation-name: message;
  animation-iteration-count: infinite;
}
@keyframes message {
  0% {
    opacity: 0;
  }
  30% {
    opacity: 1;
  }
  70% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
</style>
