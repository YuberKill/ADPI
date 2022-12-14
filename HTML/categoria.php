
<?php
include("config.php");
include("cn.php");
include 'carrito.php';
include("cabecera.php");


$sql = "SELECT * FROM categorias";


?>
  <title>ADPI ADMINISTRADOR</title>
  <link rel="preload" href="normalize.css" as="style">
  <link rel="stylesheet" href="normalize.css">
  <link rel="preload" href="categoria.css" as="style">
  <link href="categoria.css" rel="stylesheet">


  <!-- TITULO de formulario -->

  <section>
    <img class="encabezado" src="./img/Categoria.png">
  </section>

  <main>
    <section>
        <!--  FORMULARIO  -->
        <form action="agregarcat.php" method="post">
            <div class="container_form">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Categoria</span>
                    <input type="text" class="form-control" name="txtcat" placeholder="Nombre de la Categoria" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                
                
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon2">Codigo</span>
                    <input type="text" class="form-control" name="txtid" placeholder="Codigo" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="col-12">
                    <input class="container__submit" type="submit" value="Crear">
                </div>
            
            </div>
        </form>
    </section>
    <section>
        <!--  DATA-GRID CATEGORIA  -->
        <div class="container_tabla_cat">

        <?php $resultado = mysqli_query($conexion, $sql);
               while($row=mysqli_fetch_array($resultado)) { ?>                  
            
            
          



            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th><strong>ID</strong></th>
                        <th><strong>Nombre</strong></th>
                        <th><strong>Producto ID</strong></th>
                        <th><strong>Modificar</strong></th>
                        <th><strong>Eliminar</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($resultado as $producto){ ?>
                </tbody>
                <tr>
                    <td><strong> <?php echo $producto["ID"]; ?> </strong></td>
                    <td> <?php echo $producto["Nombres"]; ?></td>
                    <td> <?php echo $producto["IDproductos"]; ?></td>
                    <td> <a href="editarcat.php? id=<?php echo $producto["ID"] ?>""> <button ><img src=" ./img/modificar.png"></button> </a> </td>
                    <td> <a href="eliminarcat.php? id=<?php echo $producto["ID"] ?>""> <button ><img src="./img/basura-2.png" alt="basura"></button> </a></td>
                </tr>
                

                <?php } ?>
        <?php  } ?>
                <!--
                <tr>
                    <td><strong>2</strong></td>
                    <td>20</td>
                    <td>Procesadores</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>3</strong></td>
                    <td>30</td>
                    <td>Disipadores</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
               <tr>
                    <td><strong>4</strong></td>
                    <td>40</td>
                    <td>Ram</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>5</strong></td>
                    <td>50</td>
                    <td>Power Supply</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>6</strong></td>
                    <td>60</td>
                    <td>Targeta Grafica</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>7</strong></td>
                    <td>70</td>
                    <td>Herramientas</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>8</strong></td>
                    <td>80</td>
                    <td>Disco Duros</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>9</strong></td>
                    <td>90</td>
                    <td>MotherBoard</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>10</strong></td>
                    <td>100</td>
                    <td>Monitores</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>11</strong></td>
                    <td>110</td>
                    <td>Perifericos</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr> 
                -->
            </table>
        </div>
    </section>

        <!--  BOTON  -->

        <div class="container-boton">
           <a href="administrador.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Volver</a>
        </div>
  </main>


  <!-- Comienzo del Footer -->

  <?php
  include("pie.php");
  ?>
  </body>
</html>