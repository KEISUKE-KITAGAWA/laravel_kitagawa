<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ページの削除</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>削除して宜しいでしょうか？？</h1>
    <form action="/items/{{ $item->id }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('DELETE')
      <input type="hidden" name="id" value="{{ $item->id }}">
      <p>
        <b>商品名:{{ $item->name }}</b>
      </p>
      <p>
        <b>商品詳細:{{ $item->description }}</b>
      </p>
      <p>
        <b>価格:{{ $item->price }}</b>
      </p>
      <p>
        <b>出品者:{{ $item->seller }}</b>
      </p>
      <p>
        <b>電子メール:{{ $item->email }}</b>
      </p>
      <p>
        <img src="/storage/image/{{ $item->image }}">
      </p>
      <input type="submit" value="削除">
    </form>
  </div>
</body>

</html>