<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 4</title>
</head>
<body>
    <h3>menghitung luas segitiga</h3>
    <form>
        
    <div>
            nilai alas
            <input type="number" id="txALAS">
    </div>
    <div>
             nilai tinggi
            <input type="number" id="txTINGGI">
    </div>
    <div>
        nilai luas
        <input type="number" id="txLUAS">
    </div>
    <div>
        <button type="button" onclick="hitung()"> hitung </button>
    </div>
</form>
<div id="hsl"></div>

    <script>
        function hitung(){
            let alas = document.getElementById("txALAS").value;
            let tinggi = document.getElementById("txTINGGI").value;
            let luas = alas * tinggi/2;
            document.getElementById("txLUAS").value = luas;
            
    }
</script>
</body>
</html>