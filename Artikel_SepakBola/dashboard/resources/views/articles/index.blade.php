@extends('layouts.app')

@section('title', 'Artikel & Berita')

@section('content')

    <div class="px-8 py-16">
        <h2 class="text-2xl font-black mb-10 text-center">ARTIKEL & BERITA</h2>

        <div class="grid grid-cols-3 gap-8 max-w-5xl mx-auto">
            @foreach ($articles as $article)
                <a href="{{ route('articles.show', $article->slug) }}" class="block border rounded-lg overflow-hidden hover:shadow-lg transition">
                    @if ($article->gambar)
                        <img src="{{ asset('images/articles/' . $article->gambar) }}" alt="{{ $article->judul }}" class="w-full h-40 object-cover">
                    @else
                        <div class="w-full h-40 bg-gray-200"></div>
                    @endif
                    <div class="p-4">
                        <h3 class="font-bold text-sm">{{ $article->judul }}</h3>
                        <p class="text-xs text-gray-400 mt-2">{{ $article->created_at->diffForHumans() }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

@endsection