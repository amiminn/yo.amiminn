<template lang="">
    <Transition name="menu">
        <div
            v-if="this.$store.state.menu"
            @click="this.$store.state.menu = false"
        >
            <div
                class="fixed inset-0 z-20 flex items-center justify-center backdrop-blur-sm"
                style="pointer-events: auto"
            >
                <div style="opacity: 1; transform: none">
                    <div
                        class="transition-all bg-stone-950 rounded-md border-2 border-bunker-800 bg-geyser-50 px-8 pt-5 pb-6 outline-none dark:border-geyser-100 dark:bg-bunker-900"
                        style="pointer-events: auto"
                    >
                        <ul class="flex flex-col gap-5">
                            <li
                                class="text-2xl font-medium"
                                v-for="page in pages"
                            >
                                <router-link
                                    class="py-1 px-4 cursor-pointer decoration-blue-600 decoration-4 transition-colors hover:text-blue-600 hover:underline"
                                    :to="page.page"
                                    >{{ page.name }}</router-link
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </Transition>
</template>
<script>
export default {
    data() {
        return {
            pages: [
                {
                    name: "home",
                    page: "/",
                },
                {
                    name: "blog",
                    page: "/blog",
                },
                {
                    name: "project",
                    page: "/project",
                },
                {
                    name: "about me",
                    page: "/about",
                },
            ],
        };
    },
};
</script>
<style>
@tailwind components;
@layer components {
    .router-link-active,
    .router-link-exact-active {
        @apply decoration-blue-600 text-blue-600 underline;
    }
    .menu-enter-active {
        @apply transition opacity-0;
    }
    .menu-leave-active {
        @apply transition opacity-100;
    }
}
</style>
