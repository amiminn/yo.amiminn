<template lang="">
    <div class="grid gap-4 md:lg:mt-4">
        <div class="text-3xl font-bold">
            🎨 My <span class="text-blue-500">projects</span>
        </div>
        <div>
            Some of my featured projects, currently there is only project.
        </div>
        <div>
            <div class="container mx-auto md:lg:px-36">
                <div class="grid md:lg:grid-cols-2 gap-5">
                    <div
                        v-for="data in getData"
                        class="border-2 text-left rounded-md border-white p-5 grid gap-2 hover:text-blue-500 cursor-pointer"
                    >
                        <span class="text-2xl font-bold">{{ data.name }}</span>
                        <div class="!text-white">
                            {{ data.job }}
                        </div>
                        <div>
                            <div class="flex">
                                <span
                                    v-for="d in data.tech"
                                    class="bg-white text-black rounded py-1 px-3 mx-1 mb-3"
                                    >{{ d }}</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import dataApp from "./project.json";
export default {
    data() {
        return {
            getData: [],
        };
    },

    mounted() {
        this.getData = dataApp;
    },
};
</script>
<style lang=""></style>
