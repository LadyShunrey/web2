<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Diario TUDAI</title>

</head>

<body>

    <?php
        //arreglo asociativo
        $noticia1 = [
            'titulo' => '¡A la fauna! En Nordelta atacan los carpinchos y en La Plata acechan los gavilanes',
            'img' => 'https://www.cronica.com.ar/__export/1629751030823/sites/cronica/img/2021/08/23/gavilanes_2_crop1629750338649.jpg_1833193316.jpg',
            'copete' => 'Los vecinos de la localidad bonaerense se mostraron preocupados por la presencia de la mencionada especie de ave, que en mayo pasado provocó incidentes tanto con gente como con las mascotas.',
            'cuerpo' => 'Los gavilanes vuelven a mostrarse en la localidad bonaerense de La Plata, tal como había sucedido en mayo, en medio de la pandemia del coronavirus.
            Los animales fueron vistos en las intersecciones de las calles 8 y 57, pero a diferencia de aquella ocasión por el momento no se registraron incidentes con mascotas o con algunos de los vecinos.
            "Queremos que el municipio ayude a erradicar a los gavilanes, que están atacando personas y animales. Algo hay que hacer", reclama gente que vive en calles contiguas.',
        ];

        $noticia2 = [
            'titulo' => 'Pandemio, la mascota que fomenta la vacunación en México y entretiene a las personas que esperan en la cola',
            'img' => 'https://imagenes.20minutos.es/files/image_990_v3/uploads/imagenes/2021/07/29/pandemio-una-de-las-mascotas-que-animan-a-la-vacunacion-en-mexico.png',
            'copete' => 'Pandemio, una de las mascotas que animan a la vacunación en México.',
            'cuerpo' => 'En Ciudad de México han querido animar a todos aquellos que acudan a vacunarse contratando mascotas que bailan e incitan al movimiento corporal a aquellos esperando. 
            La historia se ha hecho viral gracias a Pandemio, un joven disfrazado de oso panda que no ha podido elegir mejor nombre. Desde que la noticia fuera cubierta por Televisa, los memes
             en Twitter no han dejado de aparecer. ',
        ];

        $noticia3 = [
            'titulo' => 'Lorem ipsum',
            'img' => 'https://www.cronica.com.ar/__export/1629751030823/sites/cronica/img/2021/08/23/gavilanes_2_crop1629750338649.jpg_1833193316.jpg',
            'copete' => 'LOREM IPSUM AKSJHDAKSJHDAKHSJDKAHS',
            'cuerpo' => 'BlablaBlablaBlablaBlablaBlabla
            BlablaBlablaBlablaBlablaBlablaBlablaBlablaBlablaBlabla
            BlablaBlablaBlablaBlablaBlablaBlablaBlabla',
        ];
    ?>
    
    <header>
        <h1 class="title" >Diario TUDAI</h1>
        <nav>

        </nav>
    </header>

    <main>
        <?php
            $noticia = $noticia3;
            echo"
            <h3>{$noticia['titulo']}</h3>
            <img class='img-noticia' src={$noticia['img']} alt=''>
            <h5>{$noticia['copete']}</h5>
            <p>{$noticia['cuerpo']}</p>
            ";
        ?>
    </main>

</body>
</html>