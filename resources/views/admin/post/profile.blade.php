@extends('layouts.search')

@section('title', 'テックペディアプロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>マイページ</h2>
                <button type="submit" class="button button--inverse">新規登録</button></form>
                <button type="submit" class="button button--inverse">ログイン</button></form>
            </div>
            <img class="logo" src="{{ asset('image/milk.png') }}" alt="logo" width = 100; $height = 100;>
    </div>
            <table class="table table-dark">
                
            @foreach($posts as $post)
                                <tr>
                                    <th>{{ $post->id }}</th>
                                    <td>{{ \Str::limit($post->title, 100) }}</td>
                                    <td>{{ \Str::limit($post->body, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\PostController@profile', ['id' => $post->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\PostController@profile', ['id' => $post->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
            </table>
@endsection