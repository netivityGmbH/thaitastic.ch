<section id="welcome" class="min-h-dvh min-w-screen" x-data="{ brightness: 50 }"
    @scroll.window="brightness = Math.min(100, 50 + window.scrollY / 5)" style="scroll-behavior: smooth;">
    <div class="relative z-10 flex flex-col items-center justify-center px-4 pt-12">
        <img src="/media/logo.svg" alt="Logo" class="w-56">
        <h1 class="mb-4 text-center font-serif text-6xl text-primary">ThaiTastic Bites</h1>
        <p class="font-serif uppercase text-primary md:text-xl">Dein Ticket für einen Geschmacks-Rave</p>
    </div>

    <div class="absolute bottom-4 left-0 right-0 z-10 flex justify-center">
        <a href="#menu">
            <img src="/media/scroll.gif" alt="Scroll"
                class="size-16 transition-all duration-300 ease-in-out hover:-translate-y-1"></a>
    </div>

    <div class="absolute bottom-0 left-0 right-0 overflow-x-hidden">
        <img src="/media/background.png" alt="Background" class="h-dvh object-none sm:h-auto sm:object-fill"
            :style="`filter: brightness(${brightness}%)`">
    </div>
</section>
