<template>
  <div class="bg-gray-900 text-white px-3 py-3 mb-2 rounded-b-lg font-mono">
    <div
      v-show="error"
      class="whitespace-normal text-red-500"
    >
      {{ error }}
    </div>
    <div class="whitespace-pre">
      {{ migrationStatus }}
    </div>
  </div>
</template>

<script>
export default {
  props: {
    error: {
      type: Array,
      default: function () {
        return [];
      },
    },
    migrationStatus: {
      type: String,
      default: '',
    },
  },
};
</script>

<style>
</style>