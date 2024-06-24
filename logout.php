<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <style>
    body{
      background: color #f2f2f2;


      .login {
        width: 100;
        height: 100vh;
        align-itens: center;
        display: flex;
      }
      }

      </style>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="row">
            <div class="col-ig-4 offset-lg-4">
                <dic class= "card">
                    <div class= "card-body">
                        <h3>acesso restrito<h3>
</div>


               <div class="card-body">
                <form action="login.php" 
                method= "POST">
                    <div>
                        <div class="mb-3"></div>
                        <label>usuario </label>
                        <input type = "text"
                        nome= "usuario" 
                        class= "form-control">
                    </div>
                    <div>
                        <div class="mb-3"></div>
                        <label>senha</label>
                        <input type = "password"
                        nome ="senha"
                        class= "form-control">

                    </div>
                    <div>
                        <div class="mb-3"></div>
                        <button type="submit"
                         class>"btn 
                         btn-primary"> enviar</button>
                         


                    </div>
</form>
</div>
    </div>
</body>
</html>