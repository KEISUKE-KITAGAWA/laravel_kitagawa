<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>商品ページ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <p>
      <b>商品名：{{ $item->name }}</b>
    </p>

    <p>
      <b>商品詳細：{{ $item->description }}</b>
    </p>

    <p>
      <b>価格：{{ $item->price }}</b>
    </p>

    <p>
      <b>出品者：{{ $item->seller }}</b>
    </p>

    <p>
      <b>電子メール：{{ $item->email }}</b>
    </p>

    <p>

      <!-- publicの中のsotrage(シンボリックリンク)の中のimageディレクトリの中から表示 -->

      <!-- public/storage は strage/app/publicのショートカットのようなもの -->
      <img src="/storage/image/{{ $item->image }}">
    </p>

    <a href="/items/{{ $item->id }}/edit"><button type="submit" class="btn btn-primary">編集する</button></a>
    <a href="/items/{{ $item->id }}/delete"><button type="submit" class="btn btn-primary">削除する</button></a>
  </div>
</body>

</html>