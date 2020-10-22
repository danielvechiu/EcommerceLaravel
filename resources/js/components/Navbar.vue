<template>
  <div>
    <!-- <nav class="flex justify-between my-auto px-8 pt-16">
      <h1
        class="tracking-widest text-5xl lg:text-6xl xl:text-5xl h-auto"
        :class="{
                    'text-black': blackElements,
                    'text-white': whiteElements
                }"
        style="mix-blend-mode: difference;"
      >
        <a href="/">DITRE</a>
      </h1>

      <div id="utility" class="my-auto flex flex-row">
        <div class="inline-block pr-8" id="cart">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            :fill="defineColor()"
            :width="getWidth()"
            :height="getWidth()"
          >
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
              d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"
            />
          </svg>
        </div>
        <Slide right class="my-auto">
          <a href="/shop">
            <span>shoes</span>
          </a>

          <a href="/accessories">
            <span>accessories</span>
          </a>

          <a href="/care">
            <span>care products</span>
          </a>

          <a href="/contact" class="mt-12">
            <span>contact</span>
          </a>

          <a href="/heritage">
            <span>heritage</span>
          </a>
        </Slide>
      </div>
    </nav>-->
  </div>
</template>

<script>
import { Slide } from "vue-burger-menu";
export default {
  components: { Slide },
  data() {
    return {
      blackElements: false,
      whiteElements: false
    };
  },

  created() {
    this.defineColor();
    this.getWidth();
  },
  methods: {
    getWidth() {
      if (screen.width < 1250) return "64px";
      else return "48px";
    },
    defineColor() {
      if (this.$route.fullPath != "/") {
        this.blackElements = true;
        this.whiteElements = false;
        return "black";
      } else {
        this.blackElements = false;
        this.whiteElements = true;
        return "white";
      }
    }
  }
};
</script>

<style>
.bm-burger-button {
  position: static;
  width: 36px;
  height: 30px;
  left: 36px;
  top: 36px;
  background: url(../../images/burger.svg);
  background-position: center;
  background-size: cover;
  cursor: pointer;
}

.line-style {
  position: static;
  left: 0;
  right: 0;
}
.cross-style {
  position: absolute;
  top: 12px;
  right: 2px;
  cursor: pointer;
}
.bm-cross {
  background: #bdc3c7;
}
.bm-cross-button {
  height: 24px;
  width: 24px;
}
.bm-menu {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1000; /* Stay on top */
  top: 0;
  left: 0;
  background-color: rgba(121, 114, 103, 0.9); /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /*0.5 second transition effect to slide in the sidenav*/
}

.bm-overlay {
  background: rgba(0, 0, 0, 0.3);
}
.bm-item-list {
  padding: 10rem 0;
  color: #b8b7ad;
  margin-left: 10%;
  font-size: 20px;
}
.bm-item-list > * {
  display: flex;
  text-decoration: none;
  padding: 0.7em;
}
.bm-item-list > * > span {
  margin-left: 10px;
  font-weight: 700;
  color: white;
}
</style>
