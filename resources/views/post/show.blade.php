@extends('layouts.admin')
@section('title', '投稿編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>投稿内容</h2>
                <div class="form-group row">
                    <div class="col-md-10">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th width="10%">ID</th>
                                    <th width="20%">タイトル</th>
                                    <th width="20%">内容</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ $post->id }}</th>
                                    <td>{{ \Str::limit($post->title, 20) }}</td>
                                    <td>{{ \Str::limit($post->body, 50) }}</td>
                                </tr>
                             </tbody>   
                        </table>
                        <a href="{{ url('post/top') }}"><input type="submit" class="btn btn-primary" value="戻る"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection