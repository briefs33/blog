@extends('master')
@section('title', $post->title)

@section('content')
	<section class="box">
		{!! Form::open(['url' => 'post', 'method' => 'post', 'class' => 'post', 'id' => 'add-form']) !!}
            @include('posts.form')
        {!! Form::close() !!}
	</section>
@endsection
