<section id="menu" class="min-w-screen relative py-12">
    <div class="relative z-10 flex flex-col items-center justify-center px-4 pt-12 font-serif text-primary">
        <h2 class="mb-4 text-center text-5xl">Menu</h2>
        <p class="text-center md:text-xl">Köstlichkeiten aus dem Herzen Thailands. Entdecke unser Menü!</p>
    </div>

    <div class="relative z-10 flex justify-center pt-12">
        <div class="max-w-xl flex-1" :class="{ 'fade-in': show }" x-data="{ show: false }" x-intersect.once="show = true">
            <livewire:menu-list />
        </div>
    </div>
</section>
