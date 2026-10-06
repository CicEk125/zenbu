<x-layouts.app title="Reserve a table · Zenbu">
  <div class="mx-auto max-w-xl px-5 pb-24 pt-32">
    <h1 class="text-4xl font-semibold">Reserve a table</h1>
    <p class="mt-2 opacity-70">Open daily, 10:00 to 22:00. Last seating at 21:00.</p>
    @if (session('success'))<p role="status" class="mt-6 rounded-xl bg-gold/20 p-4">{{ session('success') }}</p>@endif
    <form method="POST" action="{{ route('reservation.store') }}" x-data="{ busy: false }" @submit="busy = true" class="mt-8 space-y-5" novalidate>
      @csrf
      @php $f = 'mt-1 w-full rounded-xl border border-current/20 bg-transparent px-4 py-3 focus:border-gold'; @endphp
      @foreach ([['name','Full name','text'],['phone','Phone','tel'],['email','Email','email'],['date','Date','date'],['time','Time','time'],['guests','Guests','number']] as [$n,$l,$t])
        <div><label for="{{ $n }}" class="text-sm font-medium">{{ $l }}</label>
          <input id="{{ $n }}" name="{{ $n }}" type="{{ $t }}" value="{{ old($n) }}" required @if($n==='guests') min="1" max="20" @endif aria-invalid="{{ $errors->has($n) ? 'true' : 'false' }}" class="{{ $f }}">
          @error($n)<p class="mt-1 text-sm text-vermilion">{{ $message }}</p>@enderror</div>
      @endforeach
      <div><label for="outlet_id" class="text-sm font-medium">Outlet</label><select id="outlet_id" name="outlet_id" class="{{ $f }}">@foreach ($outlets as $o)<option value="{{ $o->id }}" @selected(old('outlet_id') == $o->id) class="text-ink">{{ $o->name }}, {{ $o->city }}</option>@endforeach</select></div>
      <div><label for="notes" class="text-sm font-medium">Special requests</label><textarea id="notes" name="notes" rows="3" class="{{ $f }}">{{ old('notes') }}</textarea></div>
      <button :disabled="busy" class="w-full rounded-full bg-vermilion py-3 font-medium text-paper transition hover:-translate-y-0.5 disabled:opacity-60"><span x-text="busy ? 'Booking…' : 'Confirm reservation'"></span></button>
    </form>
  </div>
</x-layouts.app>
