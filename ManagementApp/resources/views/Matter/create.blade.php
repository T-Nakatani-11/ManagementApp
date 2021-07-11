@extends('layouts.app')

@section('content')
<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="/js/app.js" defer></script>
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">案件登録</div>
                <div class="card-body">
                    <form method="POST" action="{{route('matters.store')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputTitle" class="col-sm-2 col-form-label">タイトル</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" id="inputTitle">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputUrl" class="col-sm-2 col-form-label">Url</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="url" id="inputTitle">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputContent" class="col-sm-2 col-form-label">内容</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="content" id="inputContent">
                            </div>
                        </div>
                        <div class="row sm-10">
                            <button type="submit" class="btn btn-primary">保存</button>
                            <button type="button" class="btn btn-secondary" onClick="location.href='/matters'">一覧へ戻る</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

