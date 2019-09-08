<template>
  <button
    type="button"
    :class="`px-4 py-2 font-gray-900 bg-${bgColor}-300 hover:bg-${bgColor}-500 rounded-lg`"
    @click="callCommand"
  >
    <span class="font-mono">
      <slot />
    </span>
  </button>
</template>
<script>
import axios from "axios";

export default {
  props: {
    bgColor: {
      type: String,
      required: true,
    },
    cmd: {
      type: String,
      required: true,
    },
  },

  methods: {
    async callCommand () {
      this.$emit("clear");
      try {
        const { data } = await axios.post(
          `/ignition-vendor/mazedlx/ignition-migrations/${this.cmd}`
        );
        this.$emit("done", data);
      } catch (errors) {
        this.$emit("error", errors.response.data.message);
      }
    },
  },
};
</script>