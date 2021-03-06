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
                <div class="card-header">案件一覧</div>
                    <div class="d-flex justify-content-end">
                    {{$matters->links()}}
                    </div>
                    <div class="d-flex justify-content-end">
                    @if (count($matters) >0)
                        <p>{{ $matters->total() }}件中 
                        {{  ($matters->currentPage() -1) * $matters->perPage() + 1}} - 
                        {{ (($matters->currentPage() -1) * $matters->perPage() + 1) + (count($matters) -1)  }}件</p>
                    @else
                        <p>データがありません。</p>
                    @endif
                    </div>
                <div class="card-body">
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary" onClick="location.href='/matters/create'">新規作成</button>
                    </div>
                    <div class="mb-4">
                        <form method="post" action="/matters/export">
                        @csrf
                        <input type="submit" value="案件データダウンロード">
                        </form>
                    </div>
                    <table class = "table">
                        <thread>
                            <tr>
                                <th>ID</th>
                                <th>タイトル</th>
                                <th>アクション</th>
                                <th></th>
                            </tr>
                        </thread>
                        @foreach($matters as $matter)
                        <tr>
                            <td>{{$matter->id}}</td>
                            <td><a href="{{$matter->url}}">{{$matter->title}}</a></td>
                            <td><a href="{{route('matters.show',$matter)}}" class="btn btn-secondary btn-sm">表示</a></td>
                            <td><a href="{{route('matters.edit',$matter)}}" class="btn btn-secondary btn-sm">編集</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

