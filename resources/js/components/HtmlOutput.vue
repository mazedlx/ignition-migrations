<template>
  <div class="py-4">
    <table class="w-full bg-gray-200">
      <tr
        v-for="(row, i) in rows"
        :key="i"
        class="px-4 py-1 border border-gray-900"
      >
        <td
          v-for="(cell, j) in row"
          :key="j"
          :colspan="row.length === 1 ? 3 : ''"
          :class="{'font-bold': i === 0 }"
          class="border border-gray-900 px-4 py-1 text-gray-900"
          v-text="cell"
        />
      </tr>
    </table>
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

  data () {
    return {
      temp: this.migrationStatus,
      rows: [],
    };
  },

  watch: {
    migrationStatus: {
      handler (m) {
        this.prepareData(m);
      },
      immediate: true,
    },
  },

  mounted () {
    this.prepareData(this.temp);
  },

  methods: {
    prepareData (rawData) {
      this.rows = rawData
        .split("\n")
        .map(item => item.split("|"))
        .map(row => row.filter(col => col !== "" && !col.startsWith("+-")))
        .filter(row => row.length > 0);
    },
  },
};
</script>
