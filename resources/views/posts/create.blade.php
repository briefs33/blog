@extends('master')
@section('title', isset($post->title) ? $post->title : 'Neodovzdáva sa _post')

@section('content')
	<section class="box">
		{!! Form::open(['url' => 'post', 'method' => 'post', 'class' => 'post', 'id' => 'add-form']) !!}
            @include('posts.form')
        {!! Form::close() !!}
	</section>
@endsection
