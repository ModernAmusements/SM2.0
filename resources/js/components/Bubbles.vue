<template>
  <div id="mainContainer">
    <div class="bubble" id="bubble1"></div>
    <div class="bubble" id="bubble2"></div>
    <div class="bubble" id="bubble3"></div>
    <div class="bubble" id="bubble4"></div>
    <div class="bubble" id="bubble5"></div>
  </div>
</template>

<script>
export default {
  name: "Bubbles",
};
</script>

<style lang="scss">

.bubble {
  animation-duration: 100s;
  animation-iteration-count: infinite;
  position: absolute;
  background-color: #b9d3c5;
  border: 1px black solid;
  border-radius: 50%;
  filter: blur(10px);
  z-index: -1;
  transition-duration: 300ms;
}

#bubble1 {
  animation-name: bubble1;
  padding: 70px;
}
@keyframes bubble1 {
  0% {
    top: 15%;
    left: 47%;
  }
  19% {
    top: 83%;
    left: 24%;
  }
  48% {
    top: 50%;
    left: 76%;
  }
  69% {
    top: 34%;
    left: 2%;
  }
  100% {
    top: 15%;
    left: 47%;
  }
}
#bubble2 {
  animation-name: bubble2;
  padding: 110px;
}
@keyframes bubble2 {
  0% {
    top: 57%;
    left: 71%;
  }
  25% {
    top: 4%;
    left: 61%;
  }
  50% {
    top: 34%;
    left: 35%;
  }
  75% {
    top: 6%;
    left: 7%;
  }
  100% {
    top: 57%;
    left: 71%;
  }
}
#bubble3 {
  animation-name: bubble3;
  padding: 30px;
}
@keyframes bubble3 {
  0% {
    top: 45%;
    left: 83%;
  }
  17% {
    top: 3%;
    left: 14%;
  }
  58% {
    top: 9%;
    left: 81%;
  }
  80% {
    top: 14%;
    left: 78%;
  }
  100% {
    top: 45%;
    left: 83%;
  }
}
#bubble4 {
  animation-name: bubble4;
  padding: 90px;
}
@keyframes bubble4 {
  0% {
    top: 22%;
    left: 21%;
  }
  21% {
    top: 79%;
    left: 9%;
  }
  68% {
    top: 59%;
    left: 53%;
  }
  82% {
    top: 76%;
    left: 19%;
  }
  100% {
    top: 22%;
    left: 21%;
  }
}
#bubble5 {
  animation-name: bubble5;
  padding: 50px;
}
@keyframes bubble5 {
  0% {
    top: 58%;
    left: 96%;
  }
  23% {
    top: 40%;
    left: 83%;
  }
  55% {
    top: 24%;
    left: 57%;
  }
  77% {
    top: 16%;
    left: 62%;
  }
  100% {
    top: 58%;
    left: 96%;
  }
}
</style>
