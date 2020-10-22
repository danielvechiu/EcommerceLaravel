<template>
  <div v-if="produs">
    <p class="py-8 text-xs">PATH</p>

    <!-- Poze produs -->
    <div class="flex justify-between">
      <div class="grid grid-cols-2">
        <div
          v-for="(image, index) in JSON.parse(produs.images)"
          :key="index"
          style="width: 400px; height: 500px"
          class="bg-produs m-0.5"
        >
          <img class="py-16 produs-background" :src="'../../storage/' + image" alt />
        </div>
      </div>

      <div class="w-1/4">
        <h5 class="font-bold text-center">{{produs.name}}</h5>
        <p class="text-center pt-2">€{{Math.floor(produs.price)}}</p>
        <p class="py-6">{{produs.details}}</p>
        <div class="text-center">
          <label for="number-input">QTY:</label>
          <input
            type="number"
            placeholder="1"
            size="1"
            id="number-input"
            name="number-input"
            style="width: 32px;"
          />
          <strong>Size</strong>
          <select id="sizes">
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
          </select>
          <div class="flex flex-row justify-center pt-1">
            <p>COLOR:</p>
            <select name id="colors">
              <option value="NAVY">NAVY</option>
              <option value="RED">RED</option>
              <option value="GREEN">GREEN</option>
            </select>
          </div>
        </div>
        <form action="/cart" method="POST">
          <input type="hidden" name="_token" :value="csrf" />
          <input type="hidden" name="id" :value="produs.id" />
          <input type="hidden" name="name" :value="produs.name" />
          <input type="hidden" name="price" :value="produs.price" />
          <button
            id="atc-button"
            type="submit"
            class="bg-black text-white rounded text-md w-full px-4 py-3 mt-6"
          >
            <a href="/cart">Add To Cart</a>
          </button>
        </form>
      </div>
    </div>
  </div>

  <div v-else>
    <h1 class="text-3xl text-center pt-32">Error 404. The page has not been found!</h1>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      produs: null,
      error: false,
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content")
    };
  },
  created() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      this.error = null;
      this.loading = true;
      axios
        .get("/api/shop/" + this.$route.params.slug)
        .then(response => {
          this.produs = response.data;
          console.log(this.produs);
        })
        .catch(error => {
          console.log(error);
          this.error = true;
        });
    }
  }
};
</script>

<style>
.produs-background {
  mix-blend-mode: darken;
}

#atc-button:hover {
  background-color: orange;
}
</style>
