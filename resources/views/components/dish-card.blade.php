@props(['dish'])
<button type="button" @click="open = {{ Js::from($dish) }}" class="group w-full overflow-hidden rounded-2xl bg-white text-left shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl dark:bg-white/5">
  <div class="relative aspect-[4/3] overflow-hidden">
    <img src="{{ $dish->image }}" alt="{{ $dish->name }}" loading="lazy" class="size-full object-cover transition duration-500 group-hover:scale-105">
    @if ($dish->is_signature)<span class="absolute left-3 top-3 rounded-full bg-gold px-3 py-1 text-xs font-medium text-ink">Signature</span>@endif
  </div>
  <div class="p-5">
    <p class="font-jp text-xs text-vermilion">{{ $dish->name_jp }}</p>
    <h3 class="mt-1 text-lg font-semibold">{{ $dish->name }}</h3>
    <p class="mt-1 line-clamp-2 text-sm opacity-70">{{ $dish->description }}</p>
    <p class="mt-3 text-sm font-medium text-gold">Rp {{ number_format($dish->price_from, 0, ',', '.') }}@if($dish->price_to) to {{ number_format($dish->price_to, 0, ',', '.') }}@endif</p>
  </div>
</button>
