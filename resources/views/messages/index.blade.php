@extends('master')

@section('title')
    Guestbook Online App
@endsection

@section('main-content')
  <div class="w-full max-w-2xl px-4 py-6 space-y-4">
    @if($messages->isEmpty())
      <div class="text-center py-12">
        <p class="text-gray-500 text-lg font-medium">
          No messages yet. Be the first to sign the guestbook!
        </p>
      </div>
    @else
        @foreach ($messages as $message)
            <div class="bg-white border border-gray-200 rounded-xl p-4 shadow hover:shadow-lg transition">
                <div class="font-medium">{{ $message->name }}</div>
                <div class="text-gray-600 mt-1">{{ $message->message }}</div>
                <div class="text-gray-400 text-xs mt-1">{{ $message->created_at->format('Y-m-d H:i') }}</div>
            </div>
        @endforeach
        <x-pagination :paginator="$messages" />
    @endif
  </div>
@endsection