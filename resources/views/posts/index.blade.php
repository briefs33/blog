@extends('master')
@section('tittle','Blog')

@section('content')
    <section class="box post-list">
        <h1 class="box-heading text-muted">
            Môj prvý blog vo Visual Studio Code s Laravelom
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
                        {{ \Illuminate\Support\Str::limit($post->text, 300, '...') }}
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
