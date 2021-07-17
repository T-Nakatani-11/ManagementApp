<div class="row mb-3">
    <label for="inputTitle" class="col-sm-2 col-form-label">タイトル</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="title" value="{{$matter->title ?? ''}}" id="inputTitle">
    </div>
</div>
<div class="row mb-3">
    <label for="inputUrl" class="col-sm-2 col-form-label">Url</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="url" id="inputTitle" value="{{$matter->url ?? ''}}">
    </div>
</div>
<div class="row mb-3">
    <label for="inputContent" class="col-sm-2 col-form-label">内容</label>
    <div class="col-sm-10">
        <textarea id="inputContent" name="content" class="form-control" rows="5"> {{$matter->content ?? ''}}</textarea>
    </div>
</div>
<div class="row sm-10">
    <button type="submit" class="btn btn-primary">保存</button>
    <button type="button" class="btn btn-secondary" onClick="location.href='/matters'">一覧へ戻る</button>
</div>
