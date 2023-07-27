<template lang="">
    <div class="grid gap-6">
        <h1
            class="text-4xl font-bold animate__animated animate__flipInY"
            data-aos="fade-in"
        >
            👋🏼 Hi there, <br />I'm <span class="text-blue-700">{{ name }}</span
            >!
        </h1>
        <div class="container mx-auto flex justify-center">
            <div class="flex gap-4 animate__animated animate__flipInY">
                <a href="mailto:tholabul.amin@gmail.com" target="_blank">
                    <vue-feather type="mail"></vue-feather>
                </a>
                <a
                    href="https://api.whatsapp.com/send/?phone=6285175020780"
                    target="_blank"
                >
                    <vue-feather type="phone"></vue-feather>
                </a>
                <a
                    href="https://www.linkedin.com/in/tholabul-amin/"
                    target="_blank"
                >
                    <vue-feather type="linkedin"></vue-feather>
                </a>
                <a href="https://github.com/amiminn" target="_blank">
                    <vue-feather type="github"></vue-feather>
                </a>
            </div>
        </div>
        <div class="container mx-auto md:lg:px-40">
            <p class="animate__animated animate__flipInY">
                A self-taught middle Software Enginer who is currently focusing
                and diving into the world of laravel, vuejs, javascript (nodejs
                & morejs library), and teaching children in the world of IT
                programming.
            </p>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            name: "Tholabul Amin",
            text: null,
        };
    },
    mounted() {
        this.text = "";
    },
};
</script>
<style lang=""></style>
