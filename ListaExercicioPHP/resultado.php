<!--

------------------------------------------------------- EXERCÍCIO 1 - RESOLVIDO ------------------------------------------------------ 

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Descobrir Par ou Impar</title>
    </head>
    <body>
        <center><h2>Resultado Par ou Impar</h2></center>
        <hr/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-ui-checks" viewBox="0 0 16 16">
                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        </svg>&nbsp;&nbsp;<font style="font-size: 30px;"><b>Calcular IMC</b></font>
                    </div>
                    <div class="card-body">
                        
                        <?php
                           /*                 $numero = $_POST['num1'];
                            if ($numero % 2== 0) {
                                echo "O número $numero é <b>Par</b>";
                            }
                            else if ($numero % 2== 1) {
                                echo "O número $numero é <b>Impar</b>";
                            }
                            else {
                                echo "</br>Numero Inválido!";
                            }            */
                        ?>
                               
                        <br/>
                        <a href="index.php" class="btn btn-secondary">RECOMEÇAR</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

--------------------------------------------------------------------------------------------------------------------------------------

-->


<!--
------------------------------------------------------- EXERCÍCIO 2 - RESOLVIDO ------------------------------------------------------


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Informar Idade</title>
    </head>
    <body>
        <center><h2>2° EXERCÍCIO</h2></center>
        <hr/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-ui-checks" viewBox="0 0 16 16">
                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        </svg>&nbsp;&nbsp;<font style="font-size: 30px;"><b>Criança, Adulto ou Idoso</b></font>
                    </div>
                    <div class="card-body">
                        
                        <?php
                            /*$idade1 = $_POST['Idade1'];
                            if ($idade1 >= 0 && $idade1 <= 12) {
                                echo "<H5><b>IDADE <h4>($idade1)</h4> DEFINIDA COMO:</b> Criança(0 - 12)</H5>";
                            }
                            else if ($idade1 >= 13 && $idade1 <= 17) {
                                echo "<H5><b>IDADE <h4>($idade1)</h4> DEFINIDA COMO:</b> Adolescente(13 - 17)</H5>";
                            }
                            else if ($idade1 >= 18 && $idade1 <= 59) {
                                echo "<H5><b>IDADE <h4>($idade1)</h4> DEFINIDA COMO:</b> Adulto(18 - 59)</H5>";
                            }
                            else if ($idade1 >= 60 && $idade1 <= 100) {
                                echo "<H5><b>IDADE <h4>($idade1)</h4> DEFINIDA COMO:</b> Idoso(60+)</H5>";
                            }
                            else {
                                echo "<H5><b>IDADE <h4>($idade1)</h4> INVÁLIDA!</H5>";
                            }
                            */
                        ?>

                        <br/>
                        <a href="index.php" class="btn btn-secondary">VOLTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

--------------------------------------------------------------------------------------------------------------------------------------
-->

<!--
------------------------------------------------------- EXERCÍCIO 3 - RESOLVIDO ------------------------------------------------------


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Mini Calculadora</title>
    </head>
    <body>
        <center><h2>3° EXERCÍCIO</h2></center>
        <hr/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-ui-checks" viewBox="0 0 16 16">
                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        </svg>&nbsp;&nbsp;<font style="font-size: 30px;"><b>Calculadora Básica</b></font>
                    </div>
                    <div class="card-body">
                        
                        <?php
                            /*
                          $num1 = $_POST['num1'];
                          $num2 = $_POST['num2'];
                          $result;
                          $operação = $_POST['oper'];
                          if ($operação == '+'){
                            $result = $num1 + $num2;
                            echo "O resultado da soma foi: <h5><b>$result</b></h5>";
                          }
                          else if ($operação == '-'){
                            $result = $num1 - $num2;
                            echo "O resultado da subtração foi: <h5><b>$result</b></h5>";
                          }
                          else if ($operação == '*'){
                            $result = $num1 * $num2;
                            echo "O resultado da multiplicação foi: <h5><b>$result</b></h5>";
                          }
                          else if ($operação == '/'){
                            if ($num1 || $num2 == 0){
                                echo "<h5><b>OPERAÇÃO INVÁLIDA!</b></h5> Motivo: Divisão por 0";
                            }
                            else{
                            $result = $num1 * $num2;
                            echo "O resultado da divisão foi: <h5><b>$result</b></h5>";
                            }
                          }
                          else{
                            echo "<h5><b>OPERAÇÃO INVÁLIDA!</b></h5> Motivo: Operação não reconhecida.";
                          }
                            */
                          
                        ?>

                        <br/>
                        <a href="index.php" class="btn btn-secondary">VOLTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


--------------------------------------------------------------------------------------------------------------------------------------
-->


<!--
------------------------------------------------------- EXERCÍCIO 4 - RESOLVIDO ------------------------------------------------------


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Contador Dia da Semana</title>
    </head>
    <body>
        <center><h2>4° EXERCÍCIO</h2></center>
        <hr/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-ui-checks" viewBox="0 0 16 16">
                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        </svg>&nbsp;&nbsp;<font style="font-size: 30px;"><b>Contador de Dias</b></font>
                    </div>
                    <div class="card-body">
                        
                    <?php  /*
                          $dia1 = $_POST['DiaDigitado'];
                          switch ($dia1) {
                            case '1':
                                echo "O dia <h5><b>$dia1</b></h5> é correspondente a: <h5><b> Domingo </b></h5>";
                                break;
                            case '2':
                                echo "O dia <h5><b>$dia1</b></h5> é correspondente a: <h5><b> Segunda - Feira </b></h5>";
                                break;
                            case '3':
                                echo "O dia <h5><b>$dia1</b></h5> é correspondente a: <h5><b> Terça - Feira </b></h5>";
                                break; 
                            case '4':
                                echo "O dia <h5><b>$dia1</b></h5> é correspondente a: <h5><b> Quarta - Feira </b></h5>";
                                break;
                            case '5':
                                echo "O dia <h5><b>$dia1</b></h5> é correspondente a: <h5><b> Quinta - Feira </b></h5>";
                                break;    
                            case '6':
                                echo "O dia <h5><b>$dia1</b></h5> é correspondente a: <h5><b> Sexta - Feira </b></h5>";
                                break; 
                            case '7':
                                echo "O dia <h5><b>$dia1</b></h5> é correspondente a: <h5><b> Sábado </b></h5>";
                                break;      
                                default:
                                ?> <div class='alert alert-danger'><h5>Opção Inválida!<h5></div> <?php                  
                          }
                          */
                        ?>

                        <br/>
                        <a href="index.php" class="btn btn-secondary">VOLTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


--------------------------------------------------------------------------------------------------------------------------------------
-->

<!--
------------------------------------------------------- EXERCÍCIO 5 - RESOLVIDO ------------------------------------------------------


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Verificador Vogal ou Consoante</title>
    </head>
    <body>
        <center><h2>5° EXERCÍCIO</h2></center>
        <hr/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-ui-checks" viewBox="0 0 16 16">
                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        </svg>&nbsp;&nbsp;<font style="font-size: 30px;"><b>Verificador: Vogal ou Consoante</b></font>
                    </div>
                    <div class="card-body">
                        
                    <?php /* 
                          $entrada = $_POST['letraDig'];
                          $letradig = strtoupper($entrada);
                          if (is_numeric($letradig)) {
                            echo "<h4><b>Inválido!</b></h4></br><h5><b>Digite uma letra do alfabeto.</b></h5>";
                          }
                          else{
                            switch ($letradig) {
                                case 'A':
                                    echo "A letra <h5><b>$letradig</b></h5> é<h5><b> Vogal </b></h5>";
                                    break;
                                case 'E':
                                    echo "A letra <h5><b>$letradig</b></h5> é<h5><b> Vogal </b></h5>";
                                    break;
                                case 'I':
                                    echo "A letra <h4><b>$letradig</b></h4> é<h5><b> Vogal </b></h5></H5>";
                                    break; 
                                case 'O':
                                    echo "A letra <h5><b>$letradig</b></h5> é<h5><b> Vogal </b></h5>";
                                    break;
                                case 'U':
                                    echo "A letra <h5>$letradig</h5> é<h5><b> Vogal </b></h5>";
                                    break;
                                default:
                                echo "A letra <h5>$letradig</h5> é<h5><b> Consoante </b></h5>";
                                    break;                 
                                }
                          }
                          */
                        ?>

                        <br/>
                        <a href="index.php" class="btn btn-secondary">VOLTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


--------------------------------------------------------------------------------------------------------------------------------------
-->

<!--
------------------------------------------------------- EXERCÍCIO 6 - RESOLVIDO ------------------------------------------------------ 


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Verificador Vogal ou Consoante</title>
    </head>
    <body>
        <center><h2>6° EXERCÍCIO</h2></center>
        <hr/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-ui-checks" viewBox="0 0 16 16">
                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        </svg>&nbsp;&nbsp;<font style="font-size: 30px;"><b>Verificador: Aprovado ou Reprovado</b></font>
                    </div>
                    <div class="card-body">
                        
                    <?php /*
                            $nota1 = $_POST['notadig1'];
                            $nota2 = $_POST['notadig2'];
                            $media = ($nota1 + $nota2) / 2;
                            if ($media > 70 && $media <= 100) {
                                ?> <div class='alert alert-success'><h5>O aluno está aprovado! Com uma  <b> <?php echo "média de: ".round($media, 2) ?>  </b><h5></div> <?php
                            }
                            else if ($media < 70 && $media >= 0){
                                ?> <div class='alert alert-danger'><h5>O aluno está reprovado! Com uma  <b> <?php echo "média de: ".round($media, 2) ?> </b><h5></div> <?php
                            }
                            else{
                                echo"<h5>Nota inválida! Retorne para a página principal e redigite novamente.</b><h5>";
                            }*/
                        ?>


                        <br/>
                        <a href="index.php" class="btn btn-secondary">VOLTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

--------------------------------------------------------------------------------------------------------------------------------------
-->


<!--
------------------------------------------------------- EXERCÍCIO 7 - RESOLVIDO ------------------------------------------------------ 


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Verificador Vogal ou Consoante</title>
    </head>
    <body>
        <center><h2>6° EXERCÍCIO</h2></center>
        <hr/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-ui-checks" viewBox="0 0 16 16">
                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        </svg>&nbsp;&nbsp;<font style="font-size: 30px;"><b>Verificador: Aprovado ou Reprovado</b></font>
                    </div>
                    <div class="card-body">
                        
                    <?php /*
                            $ValorCompraTotal = $_POST['ValorCompra'];
                            $desconto;
                            $valordoDesc;
                            $valorFinal; 

                            if ($ValorCompraTotal > 0 && $ValorCompraTotal < 50) {
                                ?> <div class='alert alert-warning'><h5>nenhum desconto aplicado no valor<b> <?php echo " de: R$".round($ValorCompraTotal, 2) ?> </b><h5></div> <?php
                            }
                            else if ($ValorCompraTotal >=50 && $ValorCompraTotal <= 100) {
                                $desconto = 0.05;
                                $valorComDesc = $ValorCompraTotal * $desconto;
                                $valorFinal = $ValorCompraTotal - $valorComDesc;
                                ?> <div class='alert alert-success'><h5>Desconto de 5% aplicado ao  <b> <?php echo "valor de R$$ValorCompraTotal. O valor passou a ser: R$".round($valorFinal, 2) ?>  </b><h5></div> <?php

                            }
                            else if ($ValorCompraTotal > 100) {
                                $desconto = 0.10;
                                $valorComDesc = $ValorCompraTotal * $desconto;
                                $valorFinal = $ValorCompraTotal - $valorComDesc;
                                ?> <div class='alert alert-success'><h5>Desconto de 10% aplicado ao  <b> <?php echo "valor de R$$ValorCompraTotal. O valor passou a ser: R$".round($valorFinal, 2) ?>  </b><h5></div> <?php

                            }
                            else{
                                ?> <div class='alert alert-warning'><h5><b>Esse valor não é válido!</b><h5></div> <?php
                            }
                            */
                        ?>


                        <br/>
                        <a href="index.php" class="btn btn-secondary">VOLTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


--------------------------------------------------------------------------------------------------------------------------------------
-->


<!--
------------------------------------------------------- EXERCÍCIO 8 - RESOLVIDO ------------------------------------------------------ 


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Simular média</title>
    </head>
    <body>
        <center><h2>Calcular Média</h2></center>
        <hr/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-ui-checks" viewBox="0 0 16 16">
                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        </svg>&nbsp;&nbsp;<font style="font-size: 30px;"><b>CALCULADOR</b></font>
                    </div>
                    <div class="card-body">
                        <?php /*
                            $data = $_POST['data1'];
                            if ($data%100 == 0 && $data%400 == 0 || $data % 4 == 0 && $data%100 != 0) {
                                ?> <div class='alert alert-success'><h5><b>É Bissexto</b><h5></div> <?php
                            }
                            else{
                                ?> <div class='alert alert-danger'><h5><b>Não é Bissexto</b><h5></div> <?php
                            }
                            */
                        ?>
                        <br/>
                         <a href="index.php" class="btn btn-secondary">RETORNAR PARA A PAGINA PRINCIPAL</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


--------------------------------------------------------------------------------------------------------------------------------------
-->


<!--
------------------------------------------------------- EXERCÍCIO 9 - RESOLVIDO ------------------------------------------------------ 



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Mini Calculadora</title>
    </head>
    <body>
        <center><h2>3° EXERCÍCIO</h2></center>
        <hr/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-ui-checks" viewBox="0 0 16 16">
                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        </svg>&nbsp;&nbsp;<font style="font-size: 30px;"><b>Calculadora Básica</b></font>
                    </div>
                    <div class="card-body">
                        
                        <?php /*
                            
                          $num1 = $_POST['numero1'];
                          $num2 = $_POST['numero2'];
                          $result;
                          $operação = $_POST['operador'];
                          switch ($operação){
                            case '+':
                                $result = $num1 + $num2;
                                echo "O resultado da SOMA foi: <h5><b>$result</b></h5>";
                                break;
                            case '-':
                                $result = $num1 - $num2;
                                echo "O resultado da SUBTRAÇÃO foi: <h5><b>$result</b></h5>";
                                break;   
                            case '*':
                                $result = $num1 * $num2;
                                echo "O resultado da MULTIPLICAÇÃO foi: <h5><b>$result</b></h5>";
                                break;
                            case '/':
                                if ($num1 || $num2 == 0){
                                    echo "<h5><b>OPERAÇÃO INVÁLIDA!</b></h5> Motivo: Divisão por 0";
                                }
                                else{
                                $result = $num1 / $num2;
                                echo "O resultado da divisão foi: <h5><b>$result</b></h5>";
                                }
                                default:
                                echo "<h5><b>Operação Inválida!</b></h5>";
                                break;
                          }
                          */
                        ?>

                        <br/>
                        <a href="index.php" class="btn btn-secondary">VOLTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


--------------------------------------------------------------------------------------------------------------------------------------
-->


<!--
------------------------------------------------------- EXERCÍCIO 10 - RESOLVIDO ------------------------------------------------------ 



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Níveis de Alerta</title>
    </head>
    <body>
        <center><h2>10° EXERCÍCIO</h2></center>
        <hr/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-ui-checks" viewBox="0 0 16 16">
                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        </svg>&nbsp;&nbsp;<font style="font-size: 30px;"><b>Níveis de Emergência</b></font>
                    </div>
                    <div class="card-body">
                        
                        <?php 
                            /*
                          $Emergencia = $_POST['Emergencia'];
                          switch ($Emergencia) {
                            case '1':
                                ?> <div class='alert alert-success'><h5><b>1: "Nível de alerta baixo."</b><h5></div> <?php
                                break;
                            case'2':
                                ?> <div class='alert alert-success'><h5><b>2: "Nível de alerta moderado."</b><h5></div> <?php
                                break;
                            case '3':
                                ?> <div class='alert alert-warning'><h5><b>3: "Nível de alerta elevado."</b><h5></div> <?php
                                break;
                            case '4':
                                ?> <div class='alert alert-danger'><h5><b>4: "Nível de alerta crítico."</b><h5></div> <?php
                                break;
                            case '5':
                                ?> <div class='alert alert-danger'><h5><b>5: "EMERGÊNCIA!"</b><h5></div> <?php
                                break;   
                            default:
                                ?> <div class='alert alert-danger'><h5><b>Nível de Emergência não identificado!</b><h5></div> <?php
                                break;
                          }
                          */
                        ?>

                        <br/>
                        <a href="index.php" class="btn btn-secondary">VOLTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

--------------------------------------------------------------------------------------------------------------------------------------
-->


<!--
------------------------------------------------------- EXERCÍCIO 11 - RESOLVIDO ------------------------------------------------------ 



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Indices Numericos</title>
    </head>
    <body>
        <center><h2>11° EXERCÍCIO</h2></center>
        <hr/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-ui-checks" viewBox="0 0 16 16">
                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        </svg>&nbsp;&nbsp;<font style="font-size: 30px;"><b>Indices Numericos</b></font>
                    </div>
                    <div class="card-body">
                        
                    <?php /*
                           $n1 = $_POST['1num'];
                           $n2 = $_POST['2num'];
                           $n3 = $_POST['3num'];
                           if($n1>$n2){
                            if($n1>$n3){
                                echo "O maior número é:</br><b> $n1 </b>";
                            }
                            else if ($n1<$n3){
                                echo "O maior número é:</br><b> $n3 </b>";
                            }
                            else{
                                echo "Os números $n1 e $n3 são iguais e maiores que $n2";
                            }
                           }
                           else if($n1<$n2){
                            if($n2>$n3){
                                echo "O maior número é:</br><b> $n2 </b>";
                            }
                            else if ($n2<$n3){
                                echo "O maior número é:</br><b> $n3 </b>";
                            }
                            else{
                                echo "Os números $n2 e $n3 são iguais e maiores que $n1";
                            }
                           }
                           else if($n1==$n2){
                            if($n2>$n3){
                                echo "Os números $n1 e $n2 são iguais e maiores que $n3";
                            }
                            else if ($n2<$n3){
                                echo "O maior número é:</br><b> $n3 </b>";
                            }
                            else{
                                echo "Os números $n1, $n2 e $n3 são iguais";
                            }
                           }
                           */
                        ?>

                        <br/>
                        <a href="index.php" class="btn btn-secondary">VOLTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

--------------------------------------------------------------------------------------------------------------------------------------
-->
