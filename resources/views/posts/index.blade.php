@extends('master')
@section('tittle','všetky posty')

@section('content')
    <section class="box post-list">
        <h1 class="box-heading text-muted">
            názov blogu
        </h1>

        @forelse($posts as $post)

            <h1>{{ $post->title }}</h1>
            <p>{{ $post->text }}</p>

        @empty

	        <p>Prázdne, nič sa nenašlo</p>

        @endforelse
    </section>
@endsection
