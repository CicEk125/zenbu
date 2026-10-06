<x-layouts.app title="Menu · Zenbu">
  <div x-data="{ cat: 'All', open: null }" class="mx-auto max-w-7xl px-5 pb-24 pt-32">
    <h1 class="text-4xl font-semibold md:text-5xl">Menu</h1>
    <div class="mt-8 flex gap-2 overflow-x-auto pb-2" role="tablist">
      @foreach ($categories->prepend('All') as $c)
        <button role="tab" @click="cat = '{{ $c }}'" :aria-selected="cat === '{{ $c }}'" :class="cat === '{{ $c }}' ? 'bg-ink text-paper dark:bg-gold dark:text-ink' : 'border border-current/20'" class="shrink-0 rounded-full px-5 py-2 text-sm transition">{{ $c }}</button>
      @endforeach
    </div>
    <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @foreach ($dishes as $dish)<div x-show="cat === 'All' || cat === '{{ $dish->category }}'" x-transition><x-dish-card :dish="$dish" /></div>@endforeach
    </div>
    @include('pages._modal')
  </div>
</x-layouts.app>
