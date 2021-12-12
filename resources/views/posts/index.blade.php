@extends('master')
@section('tittle','všetky posty')

@section('content')
    <section class="box post-list">
        <h1 class="box-heading text-muted">
            názov blogu
        </h1>

        @forelse($posts as $post)

            <article id="post-{{ $post->id }}" class="post">
                <header class="post-header">
                    <h2>
                        <a href="{{ url('post', $post->id) }}">{{ $post->title }}</a>
                        <time><small>/ {{ $post->created_at }}</small></time>
                    </h2>
                </header>
                <div class="post-content">
                    <p>
                        {{ str_limit( $post->text,300) }}
                    </p>
                </div>
                <footer class="post-footer">
                    <a href="{{ url('post', $post->id) }}" class="read-more">read more</a>
                </footer>
            </article>

        @empty

	        <p>Prázdne, nič sa nenašlo</p>

        @endforelse
    </section>
@endsection
