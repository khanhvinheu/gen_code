<template>
    <div>
        <h1>Hello from MyNewComponent!</h1>
    </div>
</template>

<script>
export default {
    name: "MyNewComponent",
    data() {
        return {
            message: "Welcome to Vue!"
        };
    }
};
</script>

<style scoped>
h1 {
    color: blue;
}
</style>