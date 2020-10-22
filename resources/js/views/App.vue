<template>
  <div class="font">
    <Navbar />
    <router-view />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import Footer from "../components/Footer";
export default {
  components: { Navbar, Footer }
};
</script>

<style scoped>
.font {
  font-family: "Nunito Sans", Courier, monospace;
}
</style>
