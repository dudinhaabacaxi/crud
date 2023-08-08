<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">
    <head>
    <!-- required meta tags -->
    <meta charset="utf-8>
    <meta name="viewport" content="width=device-width, initial-scale1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdeliver.net/npn/bootstrap@5.1.3/dist/css/bootrstrap.min.css" rel="stylesheet">
    <title>Criar aluno</title>
</head>
<body>
    <div class="container mt=5"> 
        <?PHP included('menssage.php');?>
        <div class="rowe">
            <div class="col-md=12">
                <div class="card">
                    <div class="card-header">
                        <h4>adicionar aluno
                            <a href="index.php" class="btn-danger float-end">VOLTAR</a>
</h4>
</div>
<div class="card=body">
    <from action="code.php" method="POST">
        <div class="mb-3>
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control">
</div>
<div class="mb-3">
    <label>Telefone</label>
    <input type="text" name="phone" class="form-control">
</div>
<div class="mb-3">
    <label>curso</label>
    <input type="text" name="course" class="form-control">
</div>
</div class="mb-3">
    <buttom type="submit" name="save-student" class="btn btn-primary">Salvar aluno</button>
</div>
</form>
</form>
</div>
</div>
</div>

<script 
src="http://cdn.jsdelivr.net/npm/bootrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>