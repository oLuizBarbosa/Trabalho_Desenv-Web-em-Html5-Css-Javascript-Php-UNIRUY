
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/forms/style.css">
    <title>Registre-se</title>
</head>
<body>
<div class="principal">

    <div class="collum card card-central">

        <div class="card-body">
            <h1 style="text-align: center">Registre-se</h1>
            <form action="../controller/register.php" method="POST">
                <input type="text" class="form-control label-central" name="nome" placeholder="Nome Completo" required>
                <div class="mb-3"></div>
                <input type="text" class="form-control label-central" name="usuario" placeholder="Usuário" required>
                <div class="mb-3"></div>
                <input type="email" class="form-control label-central" name="email" placeholder="Email" required>
                <div class="mb-3"></div>
                <input type="password" class="form-control label-central" name="senha" placeholder="Senha" required>
                <button type="submit" class="btn btn-primary form-control bt-confirmar pulse">Enviar</button>
            </form>
        </div>
    </div>

</div>
</body>
