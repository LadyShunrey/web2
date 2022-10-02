<?php
    require './templates/header.php';
?>


<main>
    <?php
        require_once 'db_noticias.php';

        foreach($noticias as $index => $noticia){
            echo"
                <div>
                    <h5>{$noticia['titulo']}</h5>
                    <a href='ver.php?noticia=$index'>VER</a>
                </div>
            ";
        }
    ?>
</main>

<?php
    require './templates/footer.php';
?>