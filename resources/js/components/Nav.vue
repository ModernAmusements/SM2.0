<template>
  <nav class="justify-content-between pt-5" id="nav">
      <a class="navbar-brand" href="/home">
        <img src="argon/img/brand/white.png" />
      </a>
    <div>
      <ul class="nav nav-pills justify-content-center pb-5 pt-5">
        <li class="nav-item m-2 mr-md-0">
          <a href="/home" class="nav-link py-2 px-3 active">
            <span class="d-md-block">Dashboard</span>
          </a>
        </li>
        <li class="nav-item m-2 mr-md-0">
          <a href="javascript:history.go(-1)" class="nav-link py-2 px-3">
            <span class="d-md-block">Back</span>
          </a>
        </li>
        <li class="nav-item m-2 mr-md-0">
            <router-link to="/meditation">
          <a  class="nav-link py-2 px-3">
            <span class="d-md-block">Quickstart</span>
          </a>
          </router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name: "Nav",
};
</script>

<style lang="scss">
nav {
background-color: #58968b;
}
</style>
