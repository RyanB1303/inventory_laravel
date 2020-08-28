<template>
  <form class="navbar-search mb-2 float-right">
    <div class="input-group">
      <input
        type="text"
        class="form-control bg-light border-1 small"
        placeholder="Find Employee"
        aria-label="Search"
        aria-describedby="basic-addon2"
        style="border-color: #3f51b5;"
        @input="$emit('input', $event.target.value)"
      />
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-search fa-sm"></i>
        </button>
      </div>
    </div>
  </form>
</template>

<script>
export default {
  //   props: ["value"],
  //   methods: {
  //     searchInput() {
  //       this.$emit("input", {
  //         searchInput: +this.$refs.searchInput.value,
  //       });
  //     },
  //   },
};
</script>

<style></style>
