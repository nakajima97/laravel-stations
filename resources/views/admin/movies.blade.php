<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>映画リスト</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>タイトル</th>
        <th>画像URL</th>
        <th>公開年</th>
        <th>上映中かどうか</th>
        <th>概要</th>
        <th>登録日時</th>
        <th>更新日時</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($movies as $movie)
        <tr>
          <th>{{$movie->id}}</th>
          <th>{{$movie->title}}</th>
          <th>{{$movie->image_url}}</th>
          <th>{{$movie->published_year}}</th>
          <th>{{$movie->is_showing ? "上映中" : "上映予定"}}</th>
          <th>{{$movie->description}}</th>
          <th>{{$movie->created_at}}</th>
          <th>{{$movie->updated_at}}</th>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>