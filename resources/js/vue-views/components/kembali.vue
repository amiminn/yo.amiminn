<template lang="">
    <div class="italic cursor-pointer" @click="kembali">
        <slot></slot>
    </div>
</template>
<script>
export default {
    methods: {
        kembali() {
            this.$router.go(-1);
        },
    },
};
</script>
<style lang=""></style>
