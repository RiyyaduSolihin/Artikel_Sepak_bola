@extends('layouts.app')

@section('title', $article->judul)

@section('content')

    <div class="px-8 py-16 max-w-3xl mx-auto">
        <h1 class="text-3xl font-black mb-2">{{ $article->judul }}</h1>
        <p class="text-sm text-gray-400 mb-6">{{ $article->created_at->diffForHumans() }}</p>

        @if ($article->gambar)
            <img src="{{ asset('images/articles/' . $article->gambar) }}" alt="{{ $article->judul }}" class="w-full rounded-lg mb-6">
        @endif

        <div class="text-gray-700 leading-relaxed">
            {{ $article->isi }}
        </div>

        <a href="{{ route('articles.index') }}" class="inline-block mt-10 text-sm underline">&larr; Kembali ke semua artikel</a>
    </div>

@endsection