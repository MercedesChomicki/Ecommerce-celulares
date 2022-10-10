<?php


class ListView
{

    function showCellphones($cellphones)
    {
        require_once "templates/header.php";
        echo "<h1>LISTA DE PRODUCTOS</h1>";
        foreach ($cellphones as $cellphone) {
            echo '
            <div class="card" style="width: 18rem;">
                <img src="' . $cellphone->Imagen . '" class="card-img-top rounded" alt="...">
                <div class="card-body">
                <h5 class="card-title">' . $cellphone->modelo . '</h5>
                <p class="card-number">$' . $cellphone->precio . '</p>
                <a href="' . $cellphone->id_celular . '" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
            ';
        }
        require_once "templates/footer.php";
    }

    function showCategories(){
        require_once "templates/header.php";
        echo '
        <div class="container">
        <h2>Celulares por Marca</h2>
        <ul>
            <li><a href="">Samsung</a></li>
            <li><a href="celulares.php?id_marca=2">Apple</a></li>
            <li><a href="celulares.php?id_marca=3">Motorola</a></li>
            <li><a href="celulares.php?id_marca=4">Xiaomi</a></li>
            <li><a href="celulares.php?id_marca=5">LG</a></li>
            <li><a href="celulares.php?id_marca=6">Huawei</a></li>
        </ul>
        </div>
        ';
        require_once "templates/footer.php";
    }

    function showMore($cellphone)
    {
            echo "
            <h1>$cellphone->modelo</h1>
            <img src='.$cellphone->Imagen.'>
            <b>$cellphone->precio</b>
            <p>$cellphone->descripcion</p>
            ";
    }


    function renderError()
    {
        echo "<h2>Error! Marca no especificada.</h2>";
    }
}
