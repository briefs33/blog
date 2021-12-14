@extends('master')
@section('title', $title)

@section('content')
	<section class="box">
		{!! Form::model($post, ['url' => ['post', $post->id], 'method' => 'put', 'class' => 'post', 'id' => 'edit-form']) !!}
            @include('posts.form')
        {!! Form::close() !!}
	</section>
@endsection
