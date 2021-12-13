@extends('master')
@section('tittle', $post->title)

@section('content')
	<section class="box">
		<article class="post full-post">
			<header class="post-header">
				<h1 class="box-heading">
					<a href="{{ URL::current() }}">{{ $post->title }}</a>
					<time datetime="">
						<small>{{ $post->created_at }}</small>
					</time>
				</h1>
			</header>

			<div class="post-content">
				<p>
					{{ $post->text }}
					<!-- {!! $post->rich_text !!} -->
				</p>
			</div>

			<a href="/post/">
				<button>Späť</button>
			</a>
		</article>
	</section>
@endsection
