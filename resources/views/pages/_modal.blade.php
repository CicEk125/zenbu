<div x-show="open" x-cloak x-transition.opacity @keydown.escape.window="open = null" class="fixed inset-0 z-[70] flex items-center justify-center bg-ink/70 p-4" @click.self="open = null" role="dialog" aria-modal="true">
  <div class="max-w-md overflow-hidden rounded-2xl bg-paper text-ink" x-show="open" x-transition.scale.95>
    <img :src="open?.image" :alt="open?.name" class="aspect-video w-full object-cover">
    <div class="p-6"><p class="font-jp text-sm text-vermilion" x-text="open?.name_jp"></p><h3 class="text-2xl font-semibold" x-text="open?.name"></h3><p class="mt-2 opacity-75" x-text="open?.description"></p>
    <div class="mt-5 flex justify-between"><a href="{{ route('reservation') }}" class="rounded-full bg-vermilion px-5 py-2 text-sm text-paper">Book a table</a><button @click="open = null" class="text-sm underline">Close</button></div></div>
  </div>
</div>
