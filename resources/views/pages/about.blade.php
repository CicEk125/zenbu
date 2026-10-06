<x-layouts.app title="Our story · Zenbu">
  <div class="mx-auto max-w-3xl px-5 pb-24 pt-32">
    <h1 class="text-4xl font-semibold md:text-5xl">全部 means everything.</h1>
    <p class="mt-6 text-lg leading-relaxed opacity-80">Zenbu opened in 2005 with one idea: bake Japanese rice under cheese, top it with katsu, and call it Mozaru. Twenty years and an award shelf later, we still bake each one to order.</p>
    <dl class="mt-12 space-y-6 border-l border-gold pl-6">
      @foreach ([['2005', 'First Zenbu opens and Mozaru is born.'], ['2012', 'Expansion to Surabaya and Bandung.'], ['2024', 'Mozaru named a national casual-dining favorite.']] as [$y, $t])<div><dt class="font-semibold text-gold">{{ $y }}</dt><dd class="opacity-80">{{ $t }}</dd></div>@endforeach
    </dl>
  </div>
</x-layouts.app>
