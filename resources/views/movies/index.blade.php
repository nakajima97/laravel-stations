<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>映画リスト</title>
</head>
<body>
  @foreach ($movies as $movie)
    <div>
      <p>{{$movie->title}}</p>
      <img src="{{$movie->image_url}}" alt="映画の画像">
    </div>
  @endforeach
</body>
</html>