
<html>
<head>
    <meta charset="utf-8" />
    <title>Sistema de Resgistro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col col-lg-6">
                <h3>
                    Cadastrar Usuário<br>
                    <small class="text-muted">Preencha as informações para cadastrar um novo usuário</small>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <form name="edita" action="cadastra.php" method="post">
                <?php
                require 'conexao.php';
                            $sql = "SELECT * FROM tecweb2 WHERE id=".$_GET['id']."";
                                foreach($dbn->query($sql) as $row){
                    ?>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nome</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Digite um nome" aria-label="nome"
                            aria-describedby="basic-addon1" name="nome" required> value="<?php echo $row['nome']; ?>">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Data de Nascimento</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Digite uma data"
                            aria-label="datanascimento" aria-describedby="basic-addon1" name="datanascimento" required> <?php echo $row['datanascimento']; ?>">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Salario</span> 
                        </div>
                        <input type="tel" class="form-control" placeholder="Digite um salario" aria-label="salario"
                            aria-describedby="basic-addon1" name="salario" required> <?php echo $row['salario']; ?>">
                    </div>
                    <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                    <a href="http://localhost/crud-php/consulta.php"><button type="button"
                            class="btn btn-outline-secondary">Voltar</button></a>
            </div>
            </form>
        </div>
    </div>
</body>
</html>