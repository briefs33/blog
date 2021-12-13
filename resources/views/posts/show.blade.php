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
				{{ $post->text }}
				<!--{!! $post->rich_text !!}-->

				<p class="written-by small">
					<small>- written by
						<a href="{{ url('user', $post->user->id) }}">
							{{ $post->user->email }}
						</a>
					</small>
				</p>
			</div>
<!--
			<a href="/post/">
				<button>Späť</button>
			</a>
-->
		</article>
	</section>
@endsection
