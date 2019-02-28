<html>
<head>
<title>Set Cookie</title>
</head>

<body>

<?php

//Men-set nilai Cookie
setcookie('nama_cookie', 'nilai_cookie');
//Mendapatkan nilai Cookie
echo $_COOKIE['nama_cookie'];

?>

<p>
Tekan Refresh (F5);
</body>
</html>