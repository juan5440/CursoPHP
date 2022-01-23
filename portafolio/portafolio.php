<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php 

if($_POST){

    $nombre= $_POST['nombre'];
    $descripcion= $_POST['descripcion'];

// Funcion para subir imagen
//////////////////////////////////////////////////////////////////////////////////////////////////
    $fecha= new DateTime();
    $imagen= $fecha->getTimestamp()."_".$_FILES['archivo']['name'];
    $imagen_temporal=$_FILES['archivo']['tmp_name'];
    move_uploaded_file($imagen_temporal,"imagenes/".$imagen);
/////////////////////////////////////////////////////////////////////////////////////////////////

$objeConexion= new conexion();
$sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL,'$nombre', '$imagen', '$descripcion');";
$objeConexion->ejecutar($sql);
header("location:portafolio.php");

}
//borrado de elementos de nuestra tabla de la bd
//////////////////////////////////////////////////////////////////////////////////
if($_GET){

    $id=$_GET['borrar'];
    $objeConexion= new conexion();

    $imagen=$objeConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
    unlink("imagenes/".$imagen[0]['imagen']);

    $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id;
    $objeConexion->ejecutar($sql);
    header("location:portafolio.php");
}
//////////////////////////////////////////////////////////////////////////////////
$objeConexion= new conexion();
$resultado=$objeConexion->consultar("SELECT * FROM `proyectos`");

?>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                     <h2>Datos del proyecto</h2>
                </div>
                <div class="card-body">
                <form action="portafolio.php" method="post" enctype="multipart/form-data">

                  Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="" required>
                 <br/>
                  Imagen del proyecto: <input class="form-control" type="file" name="archivo" id="" required>
                <br/>
                Descripcion: <textarea class="form-control" name="descripcion" id="descripcion"  rows="3" required></textarea>
                <br>

                 <input class="btn btn-success" type="submit" value="Enviar proyecto">

                </form>
            </div>
        <div class="card-footer text-muted">
        
    </div>
</div>
        </div>
        <div class="col-md-6">
        <table class="table">
             <thead>
                <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Descripcion</th>
                <th></th>
                </tr>
            </thead>
        <tbody>
            <?php foreach($resultado as $proyecto){?>
                <tr>
                <td><?php echo $proyecto['id']; ?></td>
                <td><?php echo $proyecto['nombre']; ?></td>
                <td>
                    <img width="100" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="" srcset="">
                </td>
                <td><?php echo $proyecto['descripcion']; ?></td>
                <td> <a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>" role="button">Eliminar</a></td>
                </tr>
                <?php } ?>
        </tbody>
        </table>
        </div>
        
    </div>
</div>

<?php include("pie.php"); ?>