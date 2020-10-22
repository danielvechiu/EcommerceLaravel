<template>
  <div>
    <div id="filler"></div>
    <div class="css-centered text-white flex items-center flex-col">
      <h1 class="whitespace-no-wrap sm:mb-6 sm:text-5xl lg:text-7xl xl:text-5xl">SS20 collection</h1>
      <a href="/new-collection">
        <button
          class="btn btn-transparent border border-white-900 border-width-2 tracking-wide px-8 sm:py-2 sm:text-3xl lg:mt-8 lg:py-4 lg:text-5xl xl:mt-3 xl:py-2 xl:text-xl"
        >LEARN MORE</button>
      </a>
    </div>
    <!-- imaginea de background -->
    <div id="hero-img" class="hero-img overflow-hidden"></div>

    <div id="right-nav">
      <div></div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      blackElements: false,
      whiteElements: false
    };
  },
  methods: {}
};
</script>

<style>
.hero-img {
  background: url(../../images/hero-photo.jpg);
  background-size: cover;
  width: 100vw;
  height: 100vh;
  position: absolute;
  left: 0;
  top: 0;
  z-index: -1;
}

.css-centered {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
