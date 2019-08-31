<template>
  <div class="tab-content">
    <div class="layout-col pb-4">
      <div class="px-4">
        <div class="bg-gray-900 text-white px-3 py-3 mb-2 rounded-b-lg font-mono">
          <div v-show="error" class="whitespace-normal text-red-500">{{ error }}</div>
          <div class="whitespace-pre">{{ migrationStatus }}</div>
        </div>

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

export default {
  data() {
    return {
      error: "",
      migrationStatus: this.meta.migrationStatus
    };
  },

  methods: {
    status() {
      axios
        .post("/ignition-vendor/mazedlx/ignition-migrations/status")
        .then(({ data }) => {
          this.migrationStatus = data;
        })
        .catch(errors => {
          this.setError(errors.response.data.message);
        });
    },
    migrate() {
      this.clearError();
      axios
        .post("/ignition-vendor/mazedlx/ignition-migrations/migrate")
        .then(({ data }) => {
          this.migrationStatus = data;
        })
        .catch(errors => {
          this.setError(errors.response.data.message);
        });
    },

    rollback() {
      this.clearError();
      axios
        .post("/ignition-vendor/mazedlx/ignition-migrations/rollback")
        .then(({ data }) => {
          this.migrationStatus = data;
        })
        .catch(errors => {
          this.setError(errors.response.data.message);
        });
    },

    reset() {
      this.clearError();
      axios
        .post("/ignition-vendor/mazedlx/ignition-migrations/reset")
        .then(({ data }) => {
          this.migrationStatus = data;
        })
        .catch(errors => {
          this.setError(errors.response.data.message);
        });
    },

    fresh() {
      this.clearError();
      axios
        .post("/ignition-vendor/mazedlx/ignition-migrations/fresh")
        .then(({ data }) => {
          this.migrationStatus = data;
        })
        .catch(errors => {
          this.setError(errors.response.data.message);
        });
    },

    setError(error) {
      this.error = error;
    },

    clearError() {
      this.error = "";
    }
  },

  props: ["meta"]
};
</script>

<style>
@tailwind base;

@tailwind components;

@tailwind utilities;
</style>