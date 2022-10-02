<?php
    require './templates/header.php';
?>

<main> 
    <?php
        require_once 'db_noticias.php';
        //var_dump($noticias);
        //var_dump($noticias[0]);
        
        //var_dump($_GET);


        //verifico que exista el parametro
        if(!isset($_GET['noticia'])){
            echo "ERROR!!! Debe indicar una noticia..";
            return;
        }

        //leo el parámetro GET enviado en la URL (ver.php?noticia=0)
        $indice = $_GET['noticia'];

        if($indice < 0 || $indice>=count($noticias)){
            echo "ERROR!!! Noticia no encontrada.";
            return;
        }

        
        
        //con ese param busco la noticia en mi arreglo de noticias
        $noticia = $noticias[$indice];
            
        echo"
            <h3>{$noticia['titulo']}</h3>
            <img class='img-noticia' src={$noticia['img']} alt=''>
            <h5>{$noticia['copete']}</h5>
            <p>{$noticia['cuerpo']}</p>
        "; 
    ?>
</main>

<?php
    require './templates/footer.php';
?>