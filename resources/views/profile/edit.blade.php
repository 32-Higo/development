@extends('layouts.profile')

@section('title', 'マイページ編集')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>マイページ編集</h2>
            <form action= "{{ action('ProfileController@update') }}" method="post" enctype="multipart/form-data">
                <label class="col-md-6">画像</label>
                <div class="col-md-8">
                    <input type="file" class="form-control-file" name="image">
                </div>
                <label class="col-md-8">ニックネーム</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="nickname" value="{{ old('nickname') }}">
                </div>
                <label for="gender" class="col-md-8">性別</label>
                <div class="col-md-4">
                    <input type="radio" name="gender" value="男"/> 男　
                    <input type="radio" name="gender" value="女"/> 女
                </div>
                <label class="col-md-8">紹介文(任意)</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="introduction">{{ old('introduction')}}</textarea>
                </div>
                
                {{ csrf_field() }}
                <div class="col-md-10">
                    <a href="{{ url('post/profile') }}"><input type="submit" class="btn btn-primary" value="戻る"></a>
                    
                    <input type="submit" class="btn btn-primary" value="更新">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection