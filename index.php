<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoNascimento = $_GET["anoNascimento"] ?? 0;
        $anoDesejado = $_GET["anoDesejado"] ?? 0;
        
        $anoAtual = date("Y");
        $idade = $anoDesejado - $anoNascimento;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="">Em que ano você nasceu?</label>
            <input type="number" name="anoNascimento" id="" min="1900" max="<?=$anoAtual?>">
            <label for="">Quer saber sua idade em que ano? (atualmente estamos em <?=$anoAtual?>)</label>
            <input type="number" name="anoDesejado" id="" min="1900">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$anoNascimento?> vai ter <strong><?=$idade?> anos</strong> em <?=$anoDesejado?>!</p>
    </section>
    
</body>
</html>