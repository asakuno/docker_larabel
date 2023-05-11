@extends('app')

@section('content')
<div class="row">
  <div class="col-md-12 margin-tb">
    <dev class="pull-left">
      <h2 style="font-size:1rem;">文房具詳細画面</h2>
    </dev>
    <div class="pull-right">
      <a class="btn btn-success" href="{{ url('/bunbougus') }}?page={{ $page_id }}" >戻る</a>
    </div>
  </div>
</div>

<div class="text-align-right">
  <div class="row">
    <div class="col-12 mt-2 mb-2">
      <div class="form-group">
        {{ $bunbougu->name}}
      </div>
    </div>

    <div class="col-12 mt-2 mb-2">
      <div class="form-group">
        {{ $bunbougu->price }}
      </div>
    </div>

    <div class="col-12 mt-2 mb-2">
      <div class="form-group">
        @foreach ($kinds as $kind)
          @if($kind->id == $bunbougu->kind) {{ $kind->name }}@endif
        @endforeach
      </div>
    </div>

    <div class="col-12 mt-2 mb-2">
      <div class="form-group">
        {{  $bunbougu->description }}
      </div>
    </div>
  </div>
</div>
@endsection