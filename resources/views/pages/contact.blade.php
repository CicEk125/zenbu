<x-layouts.app title="Outlets · Zenbu">
  <div class="mx-auto max-w-5xl px-5 pb-24 pt-32">
    <h1 class="text-4xl font-semibold md:text-5xl">Find us</h1>
    <p class="mt-2 opacity-70">Every day, 10:00 to 22:00 · WhatsApp <a class="underline" href="https://wa.me/6281200000000">+62 812 0000 0000</a></p>
    <div class="mt-10 grid gap-6 md:grid-cols-3">
      @foreach ($outlets as $o)
        <article class="overflow-hidden rounded-2xl bg-white shadow-sm dark:bg-white/5">
          <iframe title="Map of {{ $o->name }}" loading="lazy" class="h-44 w-full border-0" src="https://maps.google.com/maps?q={{ $o->map_query }}&output=embed"></iframe>
          <div class="p-5"><h2 class="font-semibold">{{ $o->name }}</h2><p class="mt-1 text-sm opacity-70">{{ $o->address }}</p><a class="mt-2 inline-block text-sm text-vermilion" href="tel:{{ $o->phone }}">{{ $o->phone }}</a></div>
        </article>
      @endforeach
    </div>
  </div>
</x-layouts.app>
