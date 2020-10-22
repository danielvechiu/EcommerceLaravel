<template>
  <div>
    <h6 class="text-center pt-16">SNEAKERS</h6>

    <p class="text-right">
      SORT:
      <a href="#" @click="sortare('cresc')">Low to High</a>
      <span>|</span>
      <a href="#" @click="sortare('desc')">High to Low</a>
    </p>
    <div class="grid grid-cols-3 mx-12 my-8">
      <div
        v-for="produs in produse"
        :key="produs.id"
        class="m-0.5 product-container"
        @click="getProductPage(produs.slug)"
      >
        :
        <img class="product-background" :src="'../../storage/' + produs.image" />
        <div style="opacity: 0;" class="product-name">
          <h4 class="product-name text-center py-6">{{ produs.name }}</h4>
        </div>
      </div>
    </div>
  </div>
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
        .get("/api/shop")
        .then(response => {
          this.produse = response.data;
        })
        .catch(error => {
          console.log(error);
          this.error = true;
        });
    },

    getProductPage(slug) {
      document.location.href = "/shop/" + slug;
    },
    sortare(how) {
      if (how == "cresc")
        this.produse.sort(function(a, b) {
          if (a.price < b.price) return -1;
          else if (a.price > b.price) return 1;
          else return 0;
        });
      else
        this.produse.sort(function(a, b) {
          if (a.price > b.price) return -1;
          else if (a.price < b.price) return 1;
          else return 0;
        });
      return this.produse;
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
</style>
