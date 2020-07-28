<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>商品編集</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>商品更新フォーム</h1>
    <form action="/items/{{ $item->id }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <input type="hidden" name="id" class="form-control" value="{{ $item->id }}">
      <p>
        商品名:<br>
        <input type="text" name="name" class="form-control" value="{{ $item->name }}">
      </p>
      <p>
        商品詳細:<br>
        <input type="text" name="description" class="form-control" value="{{ $item->description }}">
      </p>
      <p>
        価格:<br>
        <input type="number" name="price" class="form-control" value="{{ $item->price }}">
      </p>
      <p>
        :出品者<br>
        <input type="text" name="seller" class="form-control" value="{{ $item->seller }}">
      </p>
      <p>
        :電子メール<br>
        <input type="text" name="email" class="form-control" value="{{ $item->email }}">
      </p>
      <p>
        :商品画像<br>
        <input type="file" name="image" value="{{ $item->image }}">
      </p>
      <input type="submit" value="更新">
    </form>
  </div>

</body>

</html>