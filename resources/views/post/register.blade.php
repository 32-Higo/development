@extends('layouts.admin')

@section('title', 'テックペディア登録フォーム')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>ユーザー登録</h2>
            <form action="{{ action('Admin\PostController@register') }}" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-md-8">メールアドレス</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                    <label class="col-md-8">パスワード</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                    <label class="col-md-8">パスワード(確認)</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                    <label class="col-md-8">ニックネーム</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                    <label class="col-md-8">性別</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                    <label class="col-md-8">紹介文(任意)</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="introduction">{{ old('introduction')}}</textarea>
                    </div>
                    
                    <label class="col-md-6">画像</label>
                    <div class="col-md-8">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="戻る">
                    <input type="submit" class="btn btn-primary" value="登録">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection