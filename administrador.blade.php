<!DOCTYPE html>
<html>
    <head>
        <title>Subir Imagenes</title>
    </head>
    <body>
        <center>
            <form action="guardar.php" method="POST" enctype="multipart/form-data" >
                <input type="text" REQUIRED name="nombre" placeholder="Nombre" value=""/>
                <input type="file" REQUIRED name="Imagen"/>
                <input type="submit" value="Aceptar"/>
            </form>
        </center>
    </body>
</html>