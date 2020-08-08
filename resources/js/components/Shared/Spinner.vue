<template>
  <div class="overlay" v-if="show">
    <slot></slot>
  </div>
</template>

<script>
export default {
  props: ["show"],
  data() {
    return {};
  },
};
</script>

<style scoped>
.overlay {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #16244759;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 200;
}
</style>
