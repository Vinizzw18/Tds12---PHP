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
        
        body {
            background: linear-gradient(-45deg, #000000, #808080, #ffffff, #808080, #000000);
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
    </style>
    <body>
        <center><h2><font color="black">PHP/ARRAY</font> </h2></center>
        <HR></HR>
        <br/>
        <div class="row justify-content-center row-cols-1 row-cols-md-3 text-center">
            <div class="cols">
                <div class="card mb-4 rounded shadow-sw">
                    <div class="card-header py-3">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>&nbsp;&nbsp;<b>LOGIN</b></h3>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post" class="text-start">
                            <label class="form-label"><b>E-MAIL</b></label>
                            <input class="form-control" type="email" name="email" required placeholder="Digite o seu email...">
                            <br/>
                            <label class="form-label text"><b>SENHA</b></label>
                            <input class="form-control" type="text" name="senha" required placeholder="Digite sua senha...">
                            <br/>
                            <input type="submit" class="btn btn-primary" value="ENTRAR">
                        </form>
                    </div>
                </div>
            </div>
                
        </div>
    </body>
</html>