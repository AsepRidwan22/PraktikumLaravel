<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asep Ridwan</title>
</head>
<body>
    <h1>ini adalah h1, {{ $name }}</h1>
    <a href="<?= route('regex') ?>">hallo, {{ $name }}</a>
    <form action="../" method="get">
        <input type="text" name="name">
        <button type="submit">tekan</button>
    </form>
</body>
</html>