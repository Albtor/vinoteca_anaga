<?php
   include "controladores/c_alta_producto.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1600, initial-scale=1.0">
    <title>AltaProducto Martin</title>
    <?php include "../config/bootstrap.php"; ?> 

</head>
<body>
    <div class="container">
    <h2>Alta de productos</h2>
    <a href="../index.php">Index</a>
        <div class="row justify-content-md-center">
        
        <!-- enctype es para archivos, necesario -->
        <!-- los echo son para que en caso de no enviar, guardar los datos y ponerlos de nuevo en el placeholder -->
            <form action="v_alta_producto.php" method="post" enctype="multipart/form-data">
           <div class="form-group">
                <label for="exampleInputRef1">Referencia</label>
                <input name="referencia" type="text" class="form-control" id="exampleInputRef1" aria-describedby="RefHelp" value="<?php echo $ref ?>" placeholder="escribir referencia" required>
            </div>
            <div class="form-group">
                <label for="exampleInputTituloPassword1">Titulo</label>
                <input name="titulo" type="text" class="form-control" id="exampleInputTitulo1" value="<?php echo $tit ?>" placeholder="Titulo">
            </div>
            <div class="form-group">
                <label for="exampleInputTipo1">Tipo</label>
                <select name="tipo" class="form-control" id="exampleInputTipo1">
                <option value="">Elige un tipo</option>
                <?php 
                foreach ($matriz_tipos as $tipo):
                ?>
                <option value="<?php echo $tipo ?>"><?php echo $tipo ?> </option>
                <?php 
                endforeach;
                ?>
                </select>
                <input name="tipo_new" type="text" class="form-control" id="exampleInputTitulo1" value="<?php echo $tit ?>" placeholder="Añadir nuevo tipo">
            </div>
            <div class="form-group">
                <label for="exampleInputdescripcion1">Descripcion</label>
                <input name="descripcion" type="text" class="form-control" id="exampleInputdescripcion1" value="<?php echo $des ?>" placeholder="descripcion">
            </div>
            <div class="form-group">
                <label for="exampleInputdo1">D.O.</label>
                <input name="do" type="text" class="form-control" id="exampleInputdo1" value="<?php echo $do ?>" placeholder="do">
            </div>
            <div class="form-group">
                <label for="exampleInputprecio1">Precio</label>
                <input name="precio" type="text" class="form-control" id="exampleInputprecio1" value="<?php echo $pre ?>" placeholder="precio">
            </div>
            <div class="form-group">
                <label for="exampleInputstock1">Stock</label>
                <input name="stock" type="text" class="form-control" id="exampleInputstock1" value="<?php echo $sto ?>" placeholder="stock">
            </div>

            <!-- ARCHIVO -->
            <div class="form-group">
                <label for="exampleFormControlFile1">Foto</label>
                <input type="file" name="exampleFormControlFile1" class="form-control-file">
            </div>
            

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <!-- Comprobar si se sube el archivo, mostrar una de las caracteristicas -->
            <!-- <?php ($fileSize);  ?> -->
            <?php 
            if ($error!=""):
                echo "Error: ".$error;
            endif;
            
            ?>
        </div>
    </div>
    
</body>
</html>