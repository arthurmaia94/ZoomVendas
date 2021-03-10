<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoom Vendas - LandingPage</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="p-5 bg-dark text-white">
        <h1 class="text-center">Zoom Vendas</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <form class="form p-5" action="controller/add-register.php" method="POST">
                    <input type="text" name="nome" placeholder="Nome Completo" class="form-control mb-3">
                    <input type="text" name="cpf" placeholder="Seu CPF" class="form-control mb-3">
                    <input type="email" name="email" placeholder="Seu E-mail" class="form-control mb-3">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="tel" name="tel" placeholder="Telefone e DDD" class="form-control mb-3">
                        </div><!-- .col-6.mb-3 -->
                        <div class="col-6 mb-3">
                            <select name="expectativa" id="expec" class="form-control mb-3">
                                <option>Expectativa sobre</option>
                                <option value="bom">Bom</option>
                                <option value="regular">Regular</option>
                                <option value="ruim">Ruim</option>
                            </select>
                        </div><!-- .col-6.mb-3 -->
                    </div><!-- inner row -->
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" value="accepCheck" name="accept" aria-label="Aceitar termos input">
                        </div>
                        <input type="text" class="form-control plain-text" value="Aceitar Termos" readonly>
                    </div>
                    <input type="hidden" name="cad" value="<?php echo date("d/m/Y"); ?>">
                    <input type="hidden" name="cod" value="<?php echo rand(1, 10); ?>">
                    <input type="submit" value="Salvar Cadastro" class="form-control btn btn-success">
                </form>
            </div><!-- .col-12 -->
        </div><!-- .row -->
    </div><!-- .container -->
</body>
</html>