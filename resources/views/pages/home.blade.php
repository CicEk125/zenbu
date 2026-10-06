<x-layouts.app>
  <section class="relative flex min-h-screen items-end overflow-hidden bg-ink text-paper">
    <img src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&w=1920&q=70" alt="" class="absolute inset-0 size-full object-cover opacity-45">
    <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/40 to-transparent"></div>
    <span aria-hidden="true" class="font-jp absolute right-4 top-24 text-[28vw] font-black leading-none text-paper/[0.06] [writing-mode:vertical-rl]">全部</span>
    <div class="hero-rise relative mx-auto w-full max-w-7xl px-5 pb-24">
      <h1 class="max-w-3xl text-5xl font-semibold leading-[1.05] md:text-7xl">True origin Mozaru.</h1>
      <p class="mt-5 max-w-lg text-lg text-paper/80">The pioneer of Japanese baked rice. Katsu, cheese and a flame, since 2005.</p>
      <div class="mt-8 flex gap-4"><a href="{{ route('reservation') }}" class="rounded-full bg-vermilion px-7 py-3 font-medium transition hover:-translate-y-0.5">Book a table</a><a href="{{ route('menu') }}" class="rounded-full border border-paper/40 px-7 py-3 transition hover:border-gold hover:text-gold">See the menu</a></div>
    </div>
  </section>
  <section class="mx-auto max-w-7xl px-5 py-24">
    <h2 class="text-3xl font-semibold md:text-4xl">The dish that started it</h2>
    <p class="mt-3 max-w-xl opacity-70">Every Mozaru is baked to order, so the cheese arrives bubbling and the rice stays soft underneath.</p>
    <div x-data="{ open: null }" class="mt-10 grid gap-6 md:grid-cols-3">
      @foreach ($signature as $dish)<x-dish-card :dish="$dish" />@endforeach
      @include('pages._modal')
    </div>
  </section>
  <section class="bg-ink px-5 py-24 text-paper"><div class="mx-auto max-w-3xl text-center"><h2 class="text-3xl font-semibold md:text-4xl">Slow down. Stay a while.</h2><p class="mt-4 text-paper/70">Warm light, humble service and a table big enough for the whole family. {{ $outlets }} outlets across Indonesia, open every day from 10:00 to 22:00.</p><a href="{{ route('contact') }}" class="mt-8 inline-block text-gold underline underline-offset-4">Find your nearest outlet</a></div></section>
</x-layouts.app>
