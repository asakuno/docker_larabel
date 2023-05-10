@extends('app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="text-left">
        <h2 style="font-size:1rem;">文房具</h2>
      </div>
      <div class="text-right">
        <a class="btn btn-success" href="#">新規登録</a>
      </div>
    </div>
  </div>

  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>名前</th>
      <th>価格</th>
      <th>分類</th>
    </tr>
    @foreach ($bunbougus as $bunbougu)
    <tr>
      <td style="text-align:right">{{ $bunbougu->id }}</td>
      <td>{{ $bunbougu->name }}</td>
      <td style="text-align:right">{{ $bunbougu->price }}円</td>
      <td style="text-align:right">{{ $bunbougu->class }}</td>
    </tr>
    @endforeach
  </table>

  {!! $bunbougus->links('pagination::bootstrap-4') !!}
@endsection