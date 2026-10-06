@props(['title' => 'Zenbu · The Pioneer of Japanese Baked Rice', 'description' => 'Zenbu is the original home of Mozaru: Japanese baked rice with katsu, since 2005.'])
<!DOCTYPE html>
<html lang="en" x-data="{ dark: localStorage.dark === '1', menu: false }" x-init="$watch('dark', v => localStorage.dark = v ? '1' : '0')" :class="{ dark }">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <meta name="description" content="{{ $description }}">
  <meta property="og:title" content="{{ $title }}"><meta property="og:description" content="{{ $description }}"><meta property="og:type" content="restaurant">
  <meta property="og:image" content="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=1200&q=70">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>[x-cloak]{display:none!important}</style>
</head>
<body>
  <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:z-[60] focus:bg-gold focus:p-3">Skip to content</a>
  <header class="fixed inset-x-0 top-0 z-50 bg-ink/85 text-paper backdrop-blur">
    <nav aria-label="Main" class="mx-auto flex h-16 max-w-7xl items-center justify-between px-5">
      <a href="{{ route('home') }}" class="font-jp text-xl font-black tracking-wide">全部 <span class="ml-1 text-sm font-medium text-gold">Zenbu</span></a>
      <ul class="hidden gap-8 text-sm md:flex">
        @foreach (['home' => 'Home', 'about' => 'About', 'menu' => 'Menu', 'contact' => 'Contact'] as $r => $l)
          <li><a href="{{ route($r) }}" @if(request()->routeIs($r)) aria-current="page" @endif class="py-1 transition hover:text-gold {{ request()->routeIs($r) ? 'border-b border-gold text-gold' : '' }}">{{ $l }}</a></li>
        @endforeach
      </ul>
      <div class="flex items-center gap-3">
        <button @click="dark = !dark" class="text-sm text-paper/70 hover:text-gold" aria-label="Toggle dark mode" x-text="dark ? 'Light' : 'Dark'"></button>
        <a href="{{ route('reservation') }}" class="hidden rounded-full bg-vermilion px-5 py-2 text-sm font-medium transition hover:-translate-y-0.5 hover:shadow-lg sm:block">Book a table</a>
        <button class="md:hidden" @click="menu = !menu" :aria-expanded="menu" aria-label="Menu">
          <span class="block h-0.5 w-6 bg-paper transition" :class="menu && 'translate-y-1 rotate-45'"></span>
          <span class="mt-1.5 block h-0.5 w-6 bg-paper transition" :class="menu && '-translate-y-1 -rotate-45'"></span>
        </button>
      </div>
    </nav>
    <div x-show="menu" x-cloak x-transition class="border-t border-paper/10 px-5 pb-4 md:hidden">
      @foreach (['home' => 'Home', 'about' => 'About', 'menu' => 'Menu', 'contact' => 'Contact', 'reservation' => 'Book a table'] as $r => $l)
        <a href="{{ route($r) }}" class="block py-3">{{ $l }}</a>
      @endforeach
    </div>
  </header>
  <main id="main">{{ $slot }}</main>
  <footer class="bg-ink px-5 py-16 text-paper/70">
    <div class="mx-auto grid max-w-7xl gap-10 md:grid-cols-3">
      <div><p class="font-jp text-3xl font-black text-paper">全部</p><p class="mt-3 max-w-xs text-sm leading-relaxed">Since 2005, Zenbu has baked Japanese rice, cheese and katsu into one dish: Mozaru.</p></div>
      <ul class="space-y-2 text-sm">@foreach (['menu' => 'Menu', 'about' => 'Our story', 'reservation' => 'Reservations', 'contact' => 'Outlets'] as $r => $l)<li><a class="hover:text-gold" href="{{ route($r) }}">{{ $l }}</a></li>@endforeach</ul>
      <p class="text-sm">Open every day, 10:00 to 22:00<br><a class="hover:text-gold" href="https://instagram.com/zenbu_id">Instagram</a> · <a class="hover:text-gold" href="https://wa.me/6281200000000">WhatsApp</a></p>
    </div>
  </footer>
</body>
</html>
