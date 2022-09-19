<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>映画リスト</title>
</head>
<body>
  @if (session('movie_store_error'))
    <div class="flash_message">
      {{ session('movie_store_error') }}
    </div>
  @endif
  <form method="POST" action="{{ route('movies.store') }}">
    @csrf
    <div>
      <label>映画タイトル</label>
      <input type="text" name="title">
    </div>
    <div>
      <label>画像URL</label>
      <input type="url" name="image_url">
    </div>
    <div>
      <label>公開年</label>
      <input type="number" name="published_year">
    </div>
    <div>
      <label>公開中かどうか</label>
      <input type="checkbox" name="is_showing">
    </div>
    <div>
      <label>概要</label>
      <textarea name="description"></textarea>
    </div>
    <button type="submit">登録</button>
  </form>
</body>
</html>