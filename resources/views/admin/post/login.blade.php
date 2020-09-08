@extends('layouts.admin')

@section('title', 'テックペディアログイン')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>ログイン</h2>
            <div class="form-group row">
                <label class="col-md-8">メールアドレス</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                </div>
                <label class="col-md-8">パスワード</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                </div>
                <div class="col-md-10">
                    <input type="submit" class="btn btn-primary" value="戻る">
                    <input type="submit" class="btn btn-primary" value="ログイン">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection