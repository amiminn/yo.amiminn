<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>@amiminn</title>
        <link rel="icon" type="image/x-icon" href="{{ asset("./favicon.png")}}">
    </head>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    {{-- build --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-be083cc6.css')}}">

    <script src="{{ asset('build/assets/app-9f025ba8.js')}}" type="module" defer></script>
    {{-- build --}}

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
                    <p class="text-lg">🍟 </p>
                    <p>
                        on
                        <a
                            href="https://github.com/amiminn"
                            target="_blank"
                            class="cursor-pointer"
                            >Github</a
                        >
                    </p>
                </div>
                <p class="opacity-80">© amiminn 2023 🪴</p>
            </footer>
        </main>
        <Navbar />  

    </body>
</html>
