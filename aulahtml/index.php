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
                            <Form action="resultado.php" method="post">
                              <label class="form-label">
                                    Digite um valor:
                              </label>  
                              <input class="form-control" type="number" name="num1" required placeholder="Insira um valor aqui...">
                              <br>
                              <label class="form-label">
                                    Digite outro valor:
                              </label>  
                              <input class="form-control" type="number" name="num2" required placeholder="Insira um valor aqui...">
                              <br>
                              <input type="submit" class="btn btn-success" value="Enviar">
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>