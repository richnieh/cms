@extends('layouts.app')

@section('content')

{{ html()->form('patch')->route('posts.update', $post->id)->open() }}
{{--        <input type="hidden" name="_method" value="PUT">--}}
        {{ html()->label('User-Id: ','user_id') }}
        {{ html()->text('user_id','insert UID')->class('form-control') }}
        <br />
        {{ html()->label('Title: ', 'title') }}
        {{ html()->text('title', 'insert title') }}
        <br />
        {{ html()->label('Content: ', 'body') }}
        {{ html()->text('body', 'insert content') }}
        <br />
        {{ html()->button('update')}}
{{ html()->form()->close() }}
{{--delete button will need another form--}}
{{ html()->form('DELETE')->route('posts.destroy',$post->id)->open() }}
    {{ html()->button('delete')}}
{{ html()->form()->close()}}
{{--    </form>--}}
{{--    <form method="post" action="/posts/{{$post->id}}">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="DELETE">--}}
{{--        <input type="submit" value="delete">--}}
{{--    </form>--}}
@endsection
