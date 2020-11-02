@extends('layouts.search')

@section('title', 'テックペディアプロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>マイページ</h2>
                <img class="logo" src="{{ asset('image/milk.png') }}" alt="logo" width = 100; height = 100;>
                <div>
                     <p>{{ $profile->image_path }}</p>
                     <p>{{ $profile->nickname }}</p>
                     <p>{{ $profile->gender }}</p>
                     <p>{{ $profile->introduction }}</p>
                    <button type="submit" class="button button--inverse"><a href="{{ url('profile/edit') }}">プロフィール編集</button>
                 </div>   
                 <form action= "{{ action('PostController@add') }}"method="get" enctype="multipart/form-data">
                    <button type="submit" class="button button--inverse"><a href="{{ url('post/enter') }}">新規投稿</a></button>
                        <table class="table table-dark">
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <th>{{ $post->id }}</th>
                                    <td>{{ \Str::limit($post->title, 20) }}</td>
                                    <td>{{ \Str::limit($post->body, 50) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('PostController@edit', ['id' => $post->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('PostController@delete', ['id' => $post->id]) }}">削除</a>
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