<?php
        session_start();
        $emails = json_decode(file_get_contents("email.json"), true);
        $senhas = json_decode(file_get_contents("senha.json"), true);
        $nomes = json_decode(file_get_contents("nome.json"), true);
        $generos = json_decode(file_get_contents("genero.json"), true);
        $id = array_search($_SESSION['usuario'], $emails);
        $_SESSION['nomes'] = $nomes;
        $_SESSION['emails'] = $emails;
        $_SESSION['generos'] = $generos;
        $_SESSION['senhas'] = $senhas;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initical-scale-1">
        <meta http-equiv="content-language" content="pt-br">
        <title>PHP / Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <style>
        .user{
            float: right;
        }
        
        body {
            background: linear-gradient(-45deg, #000000, #4F4F4F, #808080, #4F4F4F, #000000);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
            color: BLACK;
        }

        @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
     50% {
          background-position: 100% 50%;
        }
     100% {
         background-position: 0% 50%;
        }
    }
        .btn {
            color: purple;
            text-transform: uppercase;
            text-decoration: none;
            border: 2px solid purple;
            padding: 10px 20px;
            font-size: 17px;
            cursor: pointer;
            font-weight: bold;
            background: transparent;
            position: relative;
            transition: all 1s;
            overflow: hidden;
        }

        .btn:hover {
            color: white;
        }

        .btn::before {
            content: "";
            position: absolute;
            height: 100%;
            width: 0%;
            top: 0;
            left: -40px;
            transform: skewX(45deg);
            background-color: purple;
            z-index: -1;
            transition: all 1s;
        }

        .btn:hover::before {
            width: 160%;
        }

    </style>
    <body>
        <center><h2><font color="black">PHP/ARRAY</font> </h2></center>
        <HR></HR>
        <nav>   
            &nbsp;&nbsp;
            <a href="inicial.php" style="color: white; text-decoration: none">HOME | </a> <a href="listagem.php" style="color: white; text-decoration: none">LISTAGEM |</a> <a href="gravar.php" style="color: white; text-decoration: none">SALVAR DADOS</a>
            <div class="user" style="color: white; text-decoration: none">
                &nbsp;&nbsp; <?php echo $nomes[$id]; ?> | <a href="sair.php" style="color: white; text-decoration: none">SAIR</a>&nbsp;&nbsp;

            </div>
        </nav>
        <br/>
        <center> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <B>CADASTRAR NOVO USUÁRIO</B>
        </button></center>
        <br/>
        <div class="row justify-content-center row-cols-2 row-cols-md-3 text-center">
            <div class="cols">
                <div class="card mb-4 rounded shadow-sw">
                    <div class="card-header py-3">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                        </svg>&nbsp;&nbsp;<b>USUARIOS</b></h3>
                    </div>
                    <div class="card-body">
                       <?php
                        include "usuarios.php";
                       ?>
                    </div>
                </div>
            </div>
            <div class="cols">
                <div class="card mb-4 rounded shadow-sw">
                    <div class="card-header py-3">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-gender-ambiguous" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 1a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 1 1 3.471-6.648L14.293 1zm-.997 4.346a3 3 0 1 0-5.006 3.309 3 3 0 0 0 5.006-3.31z"/>
                        </svg>&nbsp;&nbsp;<b>GENEROS</b></h3>
                    </div>
                    <div class="card-body">
                        <?php
                            include "generos.php";
                        ?>
                    </div>
                </div>
            </div> 
        </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CADASTRAR USUÁRIO</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                <div class="modal-body text-start">
                    <form action ="cadastro.php" method="post"> 
                        <label class="form-label">NOME</label>
                        <input class="form-control" type="text" name="nome" required placeholder ="Digite o seu nome..."></input>
                        <br/>
                        <label class="form-label">E-MAIL</label>
                        <input class="form-control" type="email" name="email" required placeholder ="Digite o seu email..."></input>
                        <br/>
                        <label class="form-label">GENERO</label>
                        <select class="form-select" aria-label="Selecione seu genero" name="genero" required>
                            <option selected>Open this select menu</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro...</option>
                        </select>
                        <br/>
                        <label class="form-label">SENHA</label>
                        <input class="form-control" type="password" name="senha" required placeholder ="Digite sua senha..."></input>
                        <br/>
                        <input type="submit" class="btn btn-success" value="CADASTRAR"/>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>