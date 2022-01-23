<?php

$txtNombre="";
$rdgLenguaje="";

$chkphp="";
$chkhtml="";
$chkcss="";

$lsanime="";

if ($_POST){
    $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdgLenguaje=(isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

   $chkphp =(isset($_POST['chkphp'])=="si")? "checked":"";
   $chkhtml =(isset($_POST['chkhtml'])=="si")? "checked":"";
   $chkcss =(isset($_POST['chkcss'])=="si")? "checked":"";

   $lsanime= (isset($_POST['lsanime']) )?$_POST['lsanime']:"";

 

    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){ ?>
    <strong>Hola:</strong>
    <br/>
    <?php echo $txtNombre;?>
    <br/>
    -----------------------------------------
    <br/>
    <strong>Tu lenguaje es: </strong>
    <br/>  
    <?php echo $rdgLenguaje;?>
    <br/>
    -----------------------------------------
    <br/>
    <strong>Tu estas aprendiendo: </strong> <br/>
    - <?php echo ($chkphp=="checked")?"PHP":""; ?><br/>
    - <?php echo ($chkhtml=="checked")?"HTML":""; ?><br/>
    - <?php echo ($chkcss=="checked")?"CSS":""; ?><br/>
    -----------------------------------------
    <br/>
    <strong> Tu anime favorito es: </strong>
    <br/>
    <?php echo $lsanime; ?>
    <br/>
    
    <?php } ?> 

    <form action="ejercicio31.php" method="post">
        ---------------------------------------
    <br/>
    <input type="text" name="txtNombre" value="<?php echo $txtNombre; ?>" id="">
    <br/>
    Que lenguaje tegusta?: <br/>
    <br/> php:  <input type="radio" <?php echo ($rdgLenguaje="php")?"checked":""; ?> name="lenguaje" value="php" id="">
    <br/> html: <input type="radio" <?php echo ($rdgLenguaje="html")?"checked":""; ?> name="lenguaje" value="html" id="">
    <br/> css:  <input type="radio" <?php echo ($rdgLenguaje="css")?"checked":""; ?> name="lenguaje" value="css" id="">
    <br/>

    Estas aprendiendo....<br/>
    <br/>php:<input type="checkbox" name="chkphp" <?php echo $chkphp ?> value="si" id="">
    <br/>html:<input type="checkbox" name="chkhtml" <?php echo $chkhtml ?> value="si" id="">
    <br/>css:<input type="checkbox" name="chkcss" <?php echo $chkcss ?> value="si" id="">
    <br/>


    Que anime te gusta ..... <br/>
    <select name="lsanime" id="" >
        <option value="">[Ninguna seleccionada]</option>
        <option value="naruto" <?php echo ($lsanime=="naruto")?"selected":""; ?> >Naruto</option>
        <option value="blade" <?php echo ($lsanime=="blade")?"selected":""; ?> >Blade</option>
        <option value="dragonball" <?php echo ($lsanime=="dragonball")?"selected":""; ?> >Dragon ball</option>
        <option value="dai" <?php echo ($lsanime=="dai")?"selected":""; ?> >Dai</option>
    </select>
    <br/>

    <input type="submit" value="Enviar informacion">

    </form>

</body>
</html>