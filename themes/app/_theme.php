<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TalkSports</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="<?= url(); ?>/assets/app/css/feed.css">
    <link rel="stylesheet" href="<?= url(); ?>/assets/app/css/perfil.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        
    <!-- Font Awesome for comment icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body>

<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand marca m-3" href="<?= url(); ?>">TalkSports</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav m-3">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url("entrar"); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url("cadastrar"); ?>">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url("perfil"); ?>">perfil(teste)</a>
                    </li>
                </ul>
            </div>
        </nav>

    <?php echo $this->section("content"); ?>

        <!-- Adicione os scripts do Bootstrap e outras dependências JavaScript aqui -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
</body>
</html>