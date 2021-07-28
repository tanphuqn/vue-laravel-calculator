<template>
<button class="btn">
    <slot></slot>
</button>
</template>

<script>
export default {
    name: "Button"
}
</script>

<style>
.btn {
    min-width: 227px;
    background-color: #C10708;
    border: 0;
    padding: 8px 16px;
    color: white;
    cursor: pointer;
}
</style>