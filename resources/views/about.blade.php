<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman about</title>
</head>
<body>
    <h1>Di sini akan berisi profil pribadi</h1>    
    <h2>{{ $name }}</h2>
    <p>{{ $email }}</p>
    <img src="data:image/jpeg;base64,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" alt="">

</body>
</html>