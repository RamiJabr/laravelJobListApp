<template>
    <form action="">
    <div class="container">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="title" class="form-control" id="title" placeholder="Enter the title of the job">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Add a small description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</template>

<script>

export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
