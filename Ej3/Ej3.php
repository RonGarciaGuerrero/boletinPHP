<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Se pretende obtener información de un fichero a partir de su nombre.
    Para ello se van a definir las siguientes funciones:</h1><br/>
    <h2>a) string calcula_extension (string). Recibe una cadena de caracteres que representa el nombre de un fichero y devuelve una cadena con la extensión del fichero. <br/>
    Ejemplo: la llamada $extension = calcula_extension (“curriculum.pdf”);<br/>
    devuelve en la variable $extension el valor “PDF”.<br/>
    b) string tipo_fichero (string)
    Recibe una cadena de caracteres que representa una extensión de fichero y devuelve una cadena con el tipo de fichero que corresponde a dicha extensión (véase Tabla I).<br/>
    Ejemplo: la llamada<br/>
    $tipo = tipo_fichero (“PDF”);<br/>
    devuelve en la variable $tipo el valor “Documento Adobe PDF”.</h2>
    
    <?php 
        $nombrefichero = strtoupper($_POST['campo1']);
        $extension=calcula_extension($nombrefichero);
        echo 'a) La extension del fichero es: '.$extension;        
        
        function calcula_extension($nombrefichero){
            // echo $nombrefichero;
            $longnombre=strlen($nombrefichero);
            $pos=strpos($nombrefichero,'.');//busco la posición del punto
            $longext=$longnombre-$pos;//calculo la longitud de la extension
            $ext=substr($nombrefichero,$pos+1,$longext);//me quedo con las letras del texto una a una en retroceso hasta llegar al punto
            
            return $ext;
        }
        echo '<br/>';
        switch ($extension){
            case 'PDF':
                echo 'b) Documento adobe PDF';
                echo '<br/>';
                break;
            case 'TXT':
                echo 'b) Documento de texto';
                echo '<br/>';
                break;    
            case 'HTML':
                echo 'b) Documento de HTML';
                echo '<br/>';
                break;
            case 'HTM':
                echo 'b) Documento de HTM';
                echo '<br/>';
                break;
            case 'PPT':
                echo 'b) Presentacion Microsoft PowerPoint';
                echo '<br/>';
                break;
            case 'DOC':
                echo 'b) Documento Microsoft Word';
                echo '<br/>';
                break;
            case 'GIF':
                echo 'b) Imagen GIF';
                echo '<br/>';
                break;
            case 'JPG':
                echo 'b) Imagen JPG';
                echo '<br/>';
                break;    
            case 'ZIP':
                echo 'b) Archivo comprimido zip';
                echo '<br/>';
                break;
            default:
                echo 'b) Archivo '.$extension;
        }
    
    ?>


</body>
</html>

 
