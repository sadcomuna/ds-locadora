<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Locadora da Anna Laura </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Locadora da Anna</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="login.html"> Log-out </a></li>
                        <li class="nav-item"><a class="nav-link" href="carrinho.php"> Carrinho</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Cadastrar</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="cadastrofuncionario.html"> Funcionários</a></li>
                                
                                <li><a class="dropdown-item" href="cadastrocliente.html"> Clientes</a></li>
                                <li><a class="dropdown-item" href="cadastroveiculo.html">Carros</a></li>
                            </ul>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </nav>


        <!-- Header-->
        <header class="bg-dark py-5" style="background-color: antiquewhite;" >
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Seja Bem-Vindo(a)!</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Aluge um carro sem precisar sair de casa</p>
                </div>
            </div>
        </header>

        
        <!-- Section-->
        <section class="py-5">

                
                    <div class="row row-cols-1 row-cols-md-4 g-4 " >
                        <?php
                          $conn=mysqli_connect("localhost", "root", "","carrinho");     
                          $sql = "SELECT * FROM produtos";
                          $qr = mysqli_query($conn,$sql) or die(mysqli_error());
          
                        while($ln = mysqli_fetch_assoc($qr)){
                        ?>
                          <div class="col-4 mb-4">
                            <div class="card h-100">
                            <img src="<?php echo 'img/'.$ln['imagem']; ?>" class="card-img-top" alt="..." style="width:100%;">
                              <div class="card-body">
                                <h5 class="card-title"><?php echo '<h2>'.$ln['nome'].'</h2> <br />'; ?></h5>
                               
                                
                                <p class="card-text"><?php echo 'R$ '.number_format($ln['preco'], 2, ',', '.').'<br />'; ?></p>
                                
                                <a href="carrinho.php?acao=add&id=<?php echo $ln['id']; ?>" class="btn btn-outline-dark" > Adicionar</a>
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                        </div>
                    </div>
                
                </div>
            </div>
        </section> 
    



        <!-- Footer-->
        <footer class="py-5">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Anna Laura Amorim Silva 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
