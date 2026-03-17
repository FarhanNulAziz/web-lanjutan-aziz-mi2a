<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css";>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?= $mhs1 ?></li>
        <li><?= $mhs2 ?></li>
        <li><?= $mhs3 ?></li>
        <li>Bai Lu</li>
        <li>Elon Musk</li>
    </ol>
    <div>
        <img src="images/hersummon.jpg" alt="Hersummon" width="20%" height="20%">
        <p>Padang &copy; <?= date('Y'); ?></p>  
    </div>
</body>

</html>