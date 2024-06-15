<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sty.css">
    <link rel="icon" type="image/x-icon" href="https://img.freepik.com/vetores-gratis/coracao_53876-25531.jpg">
    <title>Present</title>
</head>
<body class = "bdy">
    <?php if(isset($_GET['error'])): ?>
        <p id = "error" class = "err">Exclusivo para minha namorada!</p>
    <?php endif ?>

  <div class = "container">

    <form id = "meuFormulario" action="post.php" method="post" onsubmit="AnalisaInput()">
       
        <input type="text" id ="nome" name = "name" placeholder="Insira seu nome">

        <input type = "password" id = "data" name = "data" placeholder = "Senha (data do nosso aniversário)">
        <br>
        <button type = "submit" id = "butt">Confirmar</button>

        
    </form> 

        <p id = "error">Dados inválidos</p>
        
  </div>
 
    <script src = "scriptcla.js"></script>
</body>
</html>