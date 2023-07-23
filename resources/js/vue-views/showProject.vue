<template lang="">
    <div class="container md:lg:mt-4 mx-auto md:lg:px-36 grid gap-7">
        <div class="text-3xl font-bold">
            <div class="text-white">{{ getData.name }}</div>
        </div>
        <div>
            <img
                class="mx-auto border-4 border-blue-800 rounded-lg"
                width="440"
                height="220"
                :src="img + getData.image"
                alt="err"
            />
            <div class="mt-3">
                [
                <a class="text-blue-800" :href="getData.url" target="_blank"
                    >View</a
                >
                ]
            </div>
        </div>
        <div>
            <span
                v-for="t in getData.tech"
                class="bg-blue-800 px-2 py-1 mx-2 rounded"
                >{{ t }}</span
            >
        </div>
        <div class="text-left grid gap-5">
            <div>
                <div class="mb-3 text-2xl font-bold">About</div>
                <div>{{ getData.deskripsi }}</div>
            </div>
            <div>
                <div class="mb-3 text-2xl font-bold">Api third party</div>
                <ul v-for="d in getData.fitur">
                    <li>- {{ d }}</li>
                </ul>
            </div>
            <div>
                <div class="mb-3 text-2xl font-bold">Position</div>
                <div>{{ getData.posisi }}</div>
            </div>
        </div>
        <kembali class="hover:text-blue-600">( kembali ke project )</kembali>
    </div>
</template>
<script>
import dataApp from "./project.json";
export default {
    props: ["id"],
    data() {
        return {
            getData: {},
            img: this.$store.state.baseUrl,
        };
    },
    mounted() {
        this.getData = dataApp.find((data) => data.id == this.id);
    },
};
</script>
<style lang=""></style>
