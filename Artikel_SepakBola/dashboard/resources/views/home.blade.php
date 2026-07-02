@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

    {{-- HERO SECTION --}}
    <div class="flex items-center px-8 py-16 gap-4">
        <div class="max-w-md">
            <h1 class="text-5xl font-black leading-tight">
                PREMIER LEAGUE<br>KLUB 26/27
            </h1
            <p class="text-gray-500 mt-10 text-sm">
                Kumpulan klub-klub yang berlaga di Premier League musim 2026/27.
            </p>
        </div>
        <div class="ml-auto">
            <img src="https://upload.wikimedia.org/wikipedia/en/f/f2/Premier_League_Logo.svg"
                 alt="Premier League"
                 class="w-[28rem]">
        </div>
    </div>

    {{-- BANNER WARNA --}}
    <div class="flex px-8 mt-16 mb-16">
        <div class="flex flex-1">
            <div class="h-24 flex-1 bg-cyan-400"></div>
            <div class="h-24 flex-1 bg-pink-600"></div>
            <div class="h-24 flex-1 bg-emerald-400"></div>
            <div class="h-24 flex-1 bg-purple-950"></div>
            <div class="h-24 flex-1 bg-pink-600"></div>
        </div>
    </div>

    {{-- SECTION KLUB --}}
        <div class="px-8 py-16 text-center" x-data="{ showAll: false }">
            <h2 class="text-2xl font-black mb-10">KLUB</h2>

            <div class="grid grid-cols-4 gap-x-16 gap-y-12">
                @foreach ($klubs as $index => $klub)
                    <div x-show="showAll || {{ $index }} < 8">
                        <img src="{{ asset('images/klub/' . $klub['logo']) }}"
                            alt="{{ $klub['nama'] }}"
                            class="w-28 h-28 mx-auto object-contain">
                        <p class="mt-3 text-sm font-medium uppercase">{{ $klub['nama'] }}</p>
                    </div>
                @endforeach
            </div>

            <button @click="showAll = !showAll" class="mt-12 border rounded-full px-8 py-3 text-sm">
                <span x-show="!showAll">View All</span>
                <span x-show="showAll">Sembunyikan</span>
            </button>
        </div>

        {{-- SECTION ARTIKEL TERBARU --}}
<div class="px-8 py-16 text-center">
    <h2 class="text-2xl font-black mb-10">ARTIKEL & BERITA TERBARU</h2>

    @if ($articles->isEmpty())
        <p class="text-gray-400 text-sm">Belum ada artikel.</p>
    @else
        <div class="grid grid-cols-3 gap-8 max-w-5xl mx-auto text-left">
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

        <a href="{{ route('articles.index') }}" class="mt-12 inline-block border rounded-full px-8 py-3 text-sm">Lihat Semua Artikel</a>
    @endif
</div>
@endsection