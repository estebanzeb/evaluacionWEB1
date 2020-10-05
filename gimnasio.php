<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El gimnasio Bodytech</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">SuperViernes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="calculadora.php">Calculadora <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="gimnasio.php">Gym <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="tienda.php">Tienda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="sueldo.php">Sueldo <span class="sr-only">(current)</span></a>
        </li>
        </ul>
        
    </div>
    </nav>
        </header>

    <main>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">          
               <form class="mt-5" action="gimnasio.php" method="POST">
               <h4>MASA CORPORAL</h4>
               <div class="row">
                    <div class="col-6">
                    <input type="text" class="form-control" placeholder="Peso" name="peso" required>
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Altura" name="altura" required>
                    </div>  

               </div>
               <button type="submit" class="btn btn-primary mt-5" name="botonCalcular">Calcular</button>
               </form>
                       
                   <?php if (isset($_POST["botonCalcular"])):?>    

                            <h3 class="text-danger">  
                        <?php  
                        $peso=$_POST["peso"];
                        $altura=$_POST["altura"];
                               
                        $IMC=$peso / ($altura * $altura);
                          
                          switch ($IMC){
                            case $IMC < 18.5 :
                                echo "Su masa corporal es ".$IMC." Clasificado: Peso insuficiente";
                            break;
                        
                            case $IMC >= 18.5 && $IMC <= 24.9 :
                                echo "Su masa corporal es ".$IMC." Clasificado: Normopeso";
                            break;
                        
                            case $IMC >= 25 && $IMC <= 26.9 :
                                echo "Su masa corporal es ".$IMC." Clasificado: Sobrepeso grado I";
                            break;
                        
                            case $IMC >= 27 && $IMC <= 29.9 :
                                echo "Su masa corporal es ".$IMC." Clasificado: Sobrepeso grado II (preobesidad)";
                            break;
                        
                            case $IMC >= 30 && $IMC <= 34.9 :
                                echo "Su masa corporal es ".$IMC." Clasificado: Obesidad de tipo I";
                            break;
                        
                            case $IMC >= 35 && $IMC <= 39.9 :
                                echo "Su masa corporal es ".$IMC." Clasificado: Obesidad de tipo II";
                            break;
                        
                            case $IMC >= 40 && $IMC <= 49.9 :
                                echo "Su masa corporal es ".$IMC." Clasificado: Obesidad de tipo III(mórbida)";
                            break;
                        
                            case $IMC > 50  :
                                echo "Su masa corporal es ".$IMC." Clasificado: Sobrepeso grado IV(extrema)";
                            break;
                        }              
                   ?>
                   </h3>
                   <?php endif?>
                   
                  
        </div>
            </div>
        </div>

    </main>

    <footer>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
