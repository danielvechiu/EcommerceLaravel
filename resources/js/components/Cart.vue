<template>
  <div>
    <div v-for="product in produse" :key="product.id">
      <h1>{{product.id}}</h1>
      <h1>{{product.name}}</h1>
      <h1>{{product.price}}</h1>
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
        .get("/api/cart")
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
