@extends('app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="text-left">
        <h2 style="font-size:1rem;">文房具</h2>
      </div>
      <div class="text-right">
        <a class="btn btn-success" href="{{ route('bunbougu.create') }}" role="button">新規登録</a>
      </div>
    </div>
  </div>

  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>名前</th>
      <th>価格</th>
      <th>分類</th>
      <th>詳細</th>
    </tr>
    @foreach ($bunbougus as $bunbougu)
    <tr>
      <td style="text-align:right">{{ $bunbougu->id }}</td>
      <td>
        <a class="" href="{{ route('bunbougu.show', $bunbougu->id) }}?page_id={{ $page_id }}">
          {{ $bunbougu->name }}
        </a>
      </td>
      <td style="text-align:right">{{ $bunbougu->price }}円</td>
      <td style="text-align:right">{{ $bunbougu->kind }}</td>
      <td style="text-align:left">{{ $bunbougu->description }}</td>
      <td style="text-align:center">
        <a class="btn btn-primary" href="{{ route('bunbougu.edit', $bunbougu->id) }}">変更</a>
      </td>
    </tr>
    @endforeach
  </table>

  {!! $bunbougus->links('pagination::bootstrap-4') !!}
@endsection