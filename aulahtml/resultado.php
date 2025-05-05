
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--responsividade da tela (se ajusta independente da tela do cliente (tablet, celular, tv etc))-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Aula de WEB</title>
    </head>
    <body>
            <center><h2>1° FORMULÁRIO</h2></center>
            <hr/>
            <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sw"> 
                        <div class="card-header py-3">
                            
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-info-lg" viewBox="0 0 16 16">
                            <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0"/>
                            </svg>&nbsp;&nbsp;
                            <font style="font-size: 30px;"> <b>FORMULÁRIO</b></font>
                        </div>
                        <div class="card-body">
                        <?php
                            $numero1 = $_POST ["num1"];
                            $numero2 = $_POST ["num2"];
                            $resultado = $numero1 + $numero2;
                            echo "</br>O resultado da soma de <b>$numero1</b>  + <b>$numero2</b> é: <b>$resultado</b>";
                            echo "<br/><br/><a href='index.php' class='btn btn-outline-success' tabindex='-1' role='button'>VOLTAR</a>"
                        ?>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>