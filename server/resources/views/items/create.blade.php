<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>商品登録</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    @if (count($errors) > 0)
      <div>
        <p>
          <b>{{ count($errors) }}件のエラーがあります</b>
        </p>
        <ul>  
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <h1>商品登録フォーム</h1>
    <form action="/items" method="post" enctype="multipart/form-data">
      @csrf
      <p>
        商品名：<br>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
      </p>
      <p>
        商品詳細：<br>
        <input type="text" name="description" class="form-control" value="{{ old('description') }}">
      </p>
      <p>
        価格：<br>
        <input type="number" name="price" class="form-control" value="{{ old('price') }}">
      </p>
      <p>
        出品者：<br>
        <input type="text" name="seller" class="form-control" value="{{ old('seller') }}">
      </p>
      <p>
        電子メール：<br>
        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
      </p>
      <p>
        商品画像：<br>
        <input type="file" name="image" value="{{ old('image') }}">
      </p>

      <input type="submit" class="btn btn-primary" value="登録">
    </form>
    </div>
</body>

</html>