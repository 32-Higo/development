@extends('layouts.search')

@section('title', 'テックペディア')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Techpedia</h2>
                <form action="{{ action('PostController@register') }}" method="post" enctype="multipart/form-data">
                      @csrf 
                    <button type="submit" class="button button--inverse">新規登録</button>
                <form action="{{ action('PostController@login') }}" method="post" enctype="multipart/form-data">  
                     @csrf 
                    <button type="submit" class="button button--inverse">ログイン</button>
                </form>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="20%"></th>
                                <th width="30%">タイトル</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                                <tr>
                                    <th>{{ $post->id }}</th>
                                    <td>{{ \Str::limit($post->title, 20) }}</td>
                                    <td>{{ \Str::limit($post->body, 50) }}</td>
                                <td>
                                <div>
                                    <a href="{{ action('PostController@show', ['id' => $post->id]) }}">詳細</a>
                                </div>
                                </td>
                                </tr>
                            @endforeach
                            </tbody>
                       </table>
                </form>
            </div>
        </div>
    </div>
@endsection