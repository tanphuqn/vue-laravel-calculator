<template>
  <div class="app-layout">
      <app-header />

      <div class="main-content">
        <slot></slot>
      </div>
  </div>
</template>

<script>
import AppHeader from './AppHeader.vue'

export default {
  components: { AppHeader },
  name: "app-layout"
}
</script>

<style lang="scss">
.app-layout {
  .main-content {
    padding-top: 60px;
  }
}
</style>