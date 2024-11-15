<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/forms/style.css">
    
  </head>
  <body>
    <div class="principal">
    
                <div class=" collum card card-central">
                <div class="card-body">

                    <h1 style="text-align: center">Login</h1>
                    
                    <form action="controller/login.php" method="POST">
                    <div class="mb-3"></div>
                    <input type="text"
                    name="usuario"
                    class="form-control label-central" placeholder="Usuário" required>

                    <div class="mb-3"></div>
                    <input type="password"
                    name="senha"
                    class="form-control label-central" placeholder="Senha" required>

                    <button type="submit" class="btn btn-primary form-control bt-confirmar pulse">Enviar</button>
                        <p style="text-align: center;">Ainda não tem uma conta?<a href="view/registrar.php"> Criar conta</a></p>
                    </form>
                </div>
                </div>
            
        
    </div>
    
  </body>
</html>