<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>@amiminn</title>
        <link rel="icon" type="image/x-icon" href="{{ asset("./favicon.png")}}">


        <meta name="title" content="@amiminn" />
        <meta name="description" content="A self-taught middle Software Enginer who is currently focusing and diving into the world of laravel, vuejs, javascript (nodejs & morejs library), and teaching children in the world of IT programming." />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://dunianuklir.com/" />
        <meta property="og:title" content="@amiminn" />
        <meta property="og:description" content="A self-taught middle Software Enginer who is currently focusing and diving into the world of laravel, vuejs, javascript (nodejs & morejs library), and teaching children in the world of IT programming." />
        <meta property="og:image" content="{{ asset("./-amiminn.png")}}" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://dunianuklir.com/" />
        <meta property="twitter:title" content="@amiminn" />
        <meta property="twitter:description" content="A self-taught middle Software Enginer who is currently focusing and diving into the world of laravel, vuejs, javascript (nodejs & morejs library), and teaching children in the world of IT programming." />
        <meta property="twitter:image" content="{{ asset("./-amiminn.png")}}" />


        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- build --}}
        {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-5c1deff5.css')}}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-27f9adc2.css')}}"> --}}

        {{-- <script src="{{ asset('build/assets/app-def0744d.js')}}" type="module" defer></script> --}}
        {{-- build --}}

        </head>
    <body id="app" class="bg-stone-950 text-white grid justify-items-center">
        <header
            class="container fixed top-0 z-10 w-full text-xl py-7 backdrop-blur-sm items-center grid grid-cols-2"
        >
            <h4 class="font-bold drop-shadow-md ml-5">
                <a>✨ @amiminn</a>
            </h4>
            <div class="text-right mr-5 cursor-pointer">
                <div v-on:click=" this.$store.state.menu = true ">
                    <vue-feather size="36" type="align-right"></vue-feather>
                </div>
            </div>
        </header>
        <main
            class="flex min-h-screen flex-col justify-between gap-6 pt-[114px] sm:pt-[78px] w-full"
        >
            <section class="my-auto text-center px-3">
                <router-view />
            </section>
            <footer class="py-6 px-8 text-center sm:px-10 md:px-14 lg:px-20">
                <div class="my-6 flex justify-between sm:my-4 md:my-0">
                    <p class="text-lg">? </p>
                    <p>
                        source on
                        <a
                            href="https://github.com/amiminn/yo.amiminn"
                            target="_blank"
                            class="cursor-pointer"
                            >Github</a
                        >
                    </p>
                </div>
                <p class="opacity-80">© amiminn 2023 🪴</p>
            </footer>
        </main>
            <Navbar  />  
    </body>
</html>
