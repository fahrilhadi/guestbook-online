@extends('master')

@section('title')
    Create Message | Guestbook Online App
@endsection

@section('main-content')
    <div class="w-full max-w-2xl px-4 py-6">
        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow">
            <form action="{{ route('messages.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                <label for="name" class="block text-sm font-medium mb-1">Your Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe" value="{{ old('name') }}" autocomplete="off"
                        class="@error('name') is-invalid @enderror w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black">
                </div>

                <div class="mb-4">
                <label for="message" class="block text-sm font-medium mb-1">Message</label>
                <textarea id="message" name="message" rows="4" placeholder="Write your message..."
                        class="@error('message') is-invalid @enderror w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black">{{ old('message') }}</textarea>
                </div>

                <button type="submit"
                        class="px-4 py-2 bg-black text-white rounded-lg text-sm font-medium hover:bg-gray-800 transition shadow">
                Submit Message
                </button>
            </form>
        </div>
    </div>
@endsection