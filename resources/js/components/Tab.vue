<template>
  <div class="tab-content">
    <div class="layout-col pb-4">
      <raw-output v-show="view==='raw'" :error="error" :migrationStatus="migrationStatus"></raw-output>
      <html-output v-show="view==='html'" :error="error" :migrationStatus="migrationStatus"></html-output>

      <div class="px-4">
        <div class="flex justify-between">
          <button
            type="button"
            class="bg-green-300 font-gray-900 rounded-lg px-4 py-2 hover:bg-green-500"
            @click="status"
          >
            <span class="font-mono">migrate:status</span>
          </button>

          <button
            type="button"
            class="bg-teal-300 font-gray-900 rounded-lg px-4 py-2 hover:bg-teal-500"
            @click="migrate"
          >
            <span class="font-mono">migrate</span>
          </button>

          <button
            type="button"
            class="bg-yellow-300 font-gray-900 rounded-lg px-4 py-2 hover:bg-yellow-500"
            @click="rollback"
          >
            <span class="font-mono">migrate:rollback</span>
          </button>

          <button
            type="button"
            class="bg-orange-300 font-gray-900 rounded-lg px-4 py-2 hover:bg-orange-500"
            @click="reset"
          >
            <span class="font-mono">migrate:reset</span>
          </button>

          <button
            type="button"
            class="bg-red-300 font-gray-900 rounded-lg px-4 py-2 hover:bg-red-500"
            @click="fresh"
          >
            <span class="font-mono">migrate:fresh</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { groupBy } from "lodash";
import axios from "axios";
import RawOutput from "./RawOutput.vue";
import HtmlOutput from "./HtmlOutput.vue";

export default {
  components: {
    HtmlOutput,
    RawOutput
  },

  data() {
    return {
      error: "",
      migrationStatus: this.meta.migrationStatus,
      view: this.meta.view
    };
  },

  methods: {
    async status() {
      try {
        const { data } = await axios.post(
          "/ignition-vendor/mazedlx/ignition-migrations/status"
        );
        this.migrationStatus = data;
      } catch (errors) {
        this.setError(errors.response.data.message);
      }
    },

    async migrate() {
      this.clearError();
      try {
        const { data } = await axios.post(
          "/ignition-vendor/mazedlx/ignition-migrations/migrate"
        );
        this.migrationStatus = data;
      } catch (errors) {
        this.setError(errors.response.data.message);
      }
    },

    async rollback() {
      this.clearError();
      try {
        const { data } = await axios.post(
          "/ignition-vendor/mazedlx/ignition-migrations/rollback"
        );
        this.migrationStatus = data;
      } catch (errors) {
        this.setError(errors.response.data.message);
      }
    },

    async reset() {
      this.clearError();
      try {
        const { data } = await axios.post(
          "/ignition-vendor/mazedlx/ignition-migrations/reset"
        );
        this.migrationStatus = data;
      } catch (errors) {
        this.setError(errors.response.data.message);
      }
    },

    async fresh() {
      this.clearError();
      try {
        const { data } = await axios.post(
          "/ignition-vendor/mazedlx/ignition-migrations/fresh"
        );
        this.migrationStatus = data;
      } catch (errors) {
        this.setError(errors.response.data.message);
      }
    },

    setError(error) {
      this.error = error;
    },

    clearError() {
      this.error = "";
    }
  },

  props: {
    meta: {
      type: Object
    }
  }
};
</script>

<style>
@tailwind base;

@tailwind components;

@tailwind utilities;
</style>