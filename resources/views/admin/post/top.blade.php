@extends('layouts.admin')

@section('title', 'テックペディア')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Techpedia</h2>
                <button type="submit" class="button button--inverse">新規登録</button></form>
                <button type="submit" class="button button--inverse">ログイン</button></form>
            </div>
            <div class="search">
                <input type="text" name="cond_title" >
            </div>
        </div>
    </div>
@endsection