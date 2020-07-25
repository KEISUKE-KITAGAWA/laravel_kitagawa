<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>商品登録フォーム</h1>
  <form action="/items" method="post" enctype="multipart/form-data">
  @csrf
    <p>
      商品名：<br>
      <input type="text" name="name" value="{{ old('name') }}">
    </p>
    <p>
      商品詳細：<br>
      <input type="text" name="description" value="{{ old('description') }}">
    </p>
    <p>
      価格：<br>
      <input type="number" name="price" value="{{ old('price') }}">
    </p>
    <p>
      出品者：<br>
      <input type="text" name="seller" value="{{ old('seller') }}">
    </p>
    <p>
      電子メール：<br>
      <input type="text" name="email" value="{{ old('email') }}">
    </p>
    <p>
      商品画像：<br>
      <input type="file" name="image" value="{{ old('image') }}">
    </p>

    <input type="submit" value="登録">
  </form>
</body>

</html>