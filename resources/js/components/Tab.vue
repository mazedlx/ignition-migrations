<template>
  <div class="tab-content">
    <div class="layout-col pb-4">
      <raw-output
        v-show="view==='raw'"
        :error="error"
        :migration-status="migrationStatus"
      />
      <html-output
        v-show="view==='html'"
        :error="error"
        :migration-status="migrationStatus"
      />

      <div class="px-4">
        <div class="flex justify-between">
          <migrate-button
            v-for="command in commands"
            :key="command"
            :bg-color="command.bgColor"
            :cmd="command.cmd"
            @done="setStatus"
            @error="setError"
            @clear="clearError"
          >
            {{ command.text }}
          </migrate-button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import RawOutput from "./RawOutput.vue";
import HtmlOutput from "./HtmlOutput.vue";
import MigrateButton from "./MigrateButton.vue";

export default {
  components: {
    HtmlOutput,
    MigrateButton,
    RawOutput,
  },

  props: {
    meta: {
      type: Object,
      default: function () {
        return {};
      },
    },
  },

  data () {
    return {
      commands: [
        {
          cmd: "status",
          bgColor: "green",
          text: "migrate:status",
        },
        {
          cmd: "migrate",
          bgColor: "teal",
          text: "migrate",
        },
        {
          cmd: "rollback",
          bgColor: "yellow",
          text: "migrate:rollback",
        },
        {
          cmd: "reset",
          bgColor: "orange",
          text: "migrate:reset",
        },
        {
          cmd: "fresh",
          bgColor: "red",
          text: "migrate:fresh",
        },
      ],
      error: "",
      migrationStatus: this.meta.migrationStatus,
      view: this.meta.view,
    };
  },

  methods: {
    clearError () {
      this.error = "";
    },

    setError (error) {
      this.error = error;
    },

    setStatus (status) {
      this.migrationStatus = status;
    },
  },
};
</script>

<style>
@tailwind base;

@tailwind components;

@tailwind utilities;
</style>