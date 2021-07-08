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
                <div class="card-header">案件詳細</div>
                    <div class="d-flex justify-content-end">
                <div class="card-body">
                    <table class = "table">
                        <thread>
                            <tr>
                                <th class = "w-25">タイトル</th>
                                <th>{{$matter->title}}</th>
                            </tr>
                            <tr>
                                <th>URL</th>
                                <th><a href="{{$matter->url}}">{{$matter->url}}</a></th>
                            </tr>
                            <tr>
                                <th>内容</th>
                                <th>{{$matter->content}}</th>
                            </tr>
                            <tr>
                                <th>更新日</th>
                                <th>{{$matter->created_at->format('Y/m/d')}}</th>
                            </tr>
                        </thread>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

