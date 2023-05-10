<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="pesan">kita isi</div>
    <span id="pesan02"></span>

    <script>
        document.write("<strong>belajar</strong> memahami javascript<br>");
        document.write("hari rabu belajar javascript");
        document.getElementById("pesan").innerHTML = "isi <sup>apa</sup> saja";
        document.getElementById("pesan02").innerHTML = "<sup>love</sup> yours self";

    </script>
    
</body>
</html>