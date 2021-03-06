<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>出品商品一覧</h1>
    <ul>
      @foreach ($items as $item)
      <!-- // リンク先をidで取得し名前で出力 -->
      <li><a href="/items/{{ $item->id }}">{{ $item->name }}</a></li>
      @endforeach
    </ul>

    <a href="/items/create"><button type="submit" class="btn btn-primary" value="出品">出品する</button></a>
  </div>

</body>

</html>