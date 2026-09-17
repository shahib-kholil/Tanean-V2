@extends('layouts.app')

@section('title', $page->title . ' - TANEAN.ID')

@section('content')
    <article class="mx-auto max-w-4xl px-6 py-12 md:py-20">
        <h1 class="font-display text-3xl font-bold text-tanean-dark md:text-5xl">{{ $page->title }}</h1>
        <div class="prose prose-lg mt-8 max-w-none text-tanean-dark">
            {!! $page->content !!}
        </div>
    </article>
@endsection
