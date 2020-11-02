@extends('layouts.admin')
@section('title', '投稿編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>投稿内容</h2>
                <div class="form-group row">
                    <label class="col-md-2" for="title">タイトル</label>
                    <div class="col-md-10">
                        <p>{{ $post->title }}</p>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            <table class="table table-dark">
                                <p>{{ $post->body }}</p>
                                <a href="{{ url('post/top') }}">戻る</a></button>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection