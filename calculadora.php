<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa en PHP</title>
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
               <form class="mt-5" action="calculadora.php" method="POST">
               <h4>SUPER CALCULADORA</h4>
               <div class="row">
                    <div class="col-6">
                    <input type="text" class="form-control" placeholder="Primer número" name="numero1" required>
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Segundo número") name="numero2" required>
                    </div>  
                    <div>
                    <select class="form-control" id="operacion" name="operacion" required>
                         <option value="">----Seleccione----</option> 
                         <option value="1">Suma</option>
                         <option value="2">Resta</option>
                         <option value="3">Multiplicacion</option>
                         <option value="4">Division</option>                      
                 </select>
                    </div>

               </div>
               <button type="submit" class="btn btn-primary mt-5" name="botonCalcular">Calcular</button>
               </form>
                       
                   <?php if (isset($_POST["botonCalcular"])):?>    

                            <h3 class="text-danger">  
                        <?php  
                        $operacion=$_POST["operacion"];
                        $numero1=$_POST["numero1"];
                        $numero2=$_POST["numero2"];
                        $resultado;
                          
                          switch ($operacion){

                            case 1 :
                                $resultado=$numero1+$numero2;
                                echo "La suma es ". $resultado;
                            break;

                            case 2 :
                                $resultado=$numero1-$numero2;
                                echo "La resta es ". $resultado;
                            break;

                            case 3 :
                                $resultado=$numero1*$numero2;
                                echo "La multiplicacion es ". $resultado;
                            break;

                            case 4 :
                                if ($numero2==0){
                                    echo "El segundo numero no puedo ir un cero";
                               
                                }else{
                                    $resultado=$numero1/$numero2;
                                    echo "La division es ". $resultado;
                                }
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
