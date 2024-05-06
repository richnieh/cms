@extends('layouts.app')

@section('content')
    {{ html()->form('post','/posts')->open() }}
    <div class="form-group">
        {{ html()->label('User-Id: ','user_id') }}
        {{ html()->text('user_id','insert UID')->class('form-control') }}
        <br />
        {{ html()->label('Title: ','title') }}
        {{ html()->text('title','insert title')->class('form-control') }}
        <br />
        {{ html()->label('Content: ','body') }}
        {{ html()->text('body','insert content')->class('form-control') }}
        <br />
        {{ html()->button('Submit', 'submit')->class('.bg-red-400') }}
    </div>
    {{html()->form()->close()}}
    @if(count($errors) > 0 )
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all()  as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
