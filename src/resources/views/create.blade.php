@extends('app')

@section('content')
<div class="row">
  <div class="col-md-12 margin-tb">
    <dev class="pull-left">
      <h2 style="font-size:1rem;">文房具登録画面</h2>
    </dev>
    <div class="pull-right">
      <a class="btn btn-success" href="{{ route('bunbougus.index') }}">戻る</a>
    </div>
  </div>
</div>

<div class="text-align-right">
  <form action="{{ route('bunbougu.store') }}" method="POST">
    @csrf

    <div class="row">
      <div class="col-12 mt-2 mb-2">
        <div class="form-group">
          <label for="name">名前</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="名前">
          @error('name')
          <span style="color:red;">名前を20文字以内で入力してください</span>
          @enderror
        </div>
      </div>

      <div class="col-12 mt-2 mb-2">
        <div class="form-group">
          <label for="price">値段</label>
          <input type="text" class="form-control" name="price" id="price" placeholder="値段">
          @error('price')
          <span style="color:red;">値段を数字で入力してください</span>
          @enderror
        </div>
      </div>

      <div class="col-12 mt-2 mb-2">
        <div class="form-group">
          <select name="kind" id="kind" class="form-control">
            <option>種類を選択してください</option>
            @foreach ($kinds as $kind)
              <option value="{{ $kind->id }}">{{ $kind->name }}</option>
            @endforeach
          </select>
          @error('kind')
          <span style="color:red;">種類を選択してください</span>
          @enderror
        </div>
      </div>

      <div class="col-12 mt-2 mb-2">
        <div class="form-group">
          <label for="description">詳細</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="詳細"></textarea>
          @error('description')
          <span style="color:red;">詳細を140文字以内で入力してください</span>
          @enderror
        </div>
      </div>

      <div class="col-12 mt-2 mb-2">
        <button type="submit" class="btn btn-primary w-100">登錄</button>
      </div>
    </div>
  </form>
</div>
@endsection