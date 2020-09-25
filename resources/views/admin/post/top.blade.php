@extends('layouts.search')

@section('title', 'テックペディア')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Techpedia</h2>
                <form action="{{ action('Admin\PostController@register') }}" method="post" enctype="multipart/form-data">
                      @csrf 
                    <button type="submit" class="button button--inverse">新規登録</button>
                </form>
                <form action="{{ action('Admin\PostController@login') }}" method="post" enctype="multipart/form-data">  
                     @csrf 
                    <button type="submit" class="button button--inverse">ログイン</button>
                </form>
            </div>
        </div>
    </div>
@endsection