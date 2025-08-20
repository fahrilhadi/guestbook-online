<header class="w-full">
    <div class="max-w-2xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-xl font-semibold">Guestbook</h1>
      @if (request()->routeIs('messages.create'))
          <a href="{{ route('messages.index') }}" 
            class="px-4 py-2 bg-black text-white rounded-lg text-sm font-medium hover:bg-gray-800 transition shadow">
            Back
          </a>
      @else
          <a href="{{ route('messages.create') }}" 
            class="px-4 py-2 bg-black text-white rounded-lg text-sm font-medium hover:bg-gray-800 transition shadow">
            + Add Message
          </a>
      @endif
    </div>
</header>