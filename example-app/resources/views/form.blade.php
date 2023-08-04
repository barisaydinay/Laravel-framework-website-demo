<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ornek Form Sayfasi</title>
</head>
<body>

<form action="{{route('sonuc')}}" method="post">
    @csrf
    <textarea name="metin"></textarea><br>
    <input type="submit" name="ilet" value="Gönder">
</form>

<form action="{{route('yardim')}}" method="get">
    <br>
    <input type="submit" name="ilet" value="Yardim">
</form>

</body>
</html>