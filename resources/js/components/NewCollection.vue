<template>
  <div v-if="produse.length!=0">
    <h6 class="text-center pt-16 pb-8">NEW COLLECTION</h6>

    <div class="grid grid-cols-3 mx-12">
      <div
        v-for="produs in produse"
        :key="produs.id"
        class="m-0.5 product-container"
        @click="getProductPage(produs.slug)"
      >
        <img class="product-background" src="../../images/sneaker.jpg" />
        <div style="opacity: 0;" class="product-name">
          <h4 class="product-name text-center py-6">{{ produs.name }}</h4>
        </div>
      </div>
    </div>
  </div>

  <div v-else class="css-centered">No products yet!</div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      produse: null,
      error: false
    };
  },
  created() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      this.error = false;
      this.produse = null;
      this.loading = true;
      axios
        .get("/api/new-collection")
        .then(response => {
          this.produse = response.data;
          console.log(this.produse);
        })
        .catch(error => {
          console.log(error);
          this.error = true;
        });
    },
    getProductPage(slug) {
      document.location.href = "/shop/" + slug;
    }
  }
};
</script>

<style>
.product-container {
  background-color: #e9e9e9;
}

.product-container:hover {
  cursor: pointer;
  animation-name: backgroundChange;
  animation-duration: 1s;
}

.product-container:hover .product-name {
  animation: productNameOpacity 1s;
}

@keyframes backgroundChange {
  0% {
    background-color: #e9e9e9;
  }
  100% {
    background-color: #f1f1f1;
  }
}

@keyframes productNameOpacity {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.css-centered {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
