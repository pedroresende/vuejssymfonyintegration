<template>
  <div class="container m-auto">
    <div class="p-20">
      {{ message }}
    </div>
  </div>
</template>

<script>
export default {
  name: "vuefrontend",

  data() {
    return {
      message: "Hello World",
    };
  },
};
</script>
