@extends('layouts.admin')

@section('title', 'テックペディア投稿入力')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>投稿入力</h2>
            <form action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                    @endif
                <div class="form-group row">
                    <label class="col-md-8">タイトル</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                </div>
                    <label class="col-md-8">投稿内容</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="body" rows="10">{{ old('introduction') }}</textarea>
                </div>
                <div class="col-md-10">
                {{ csrf_field() }}
                    <a href="{{ url('post/profile') }}"><input type="submit" class="btn btn-primary" value="戻る"></a>
                    <input type="submit" class="btn btn-primary" value="投稿">
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection