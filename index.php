<?php
    $ruta = 'css';
    require_once('php/encabezado.php');   
?>

<main>
    <form action="php/procesar.php" method="get">
        <section>
            <label for="monto">Monto disponible</label>
            <input type="number" min=0 id="monto" name="monto" value=0>
            <label for="divisa">Divisa</label>
            <select name="divisa" id="divisa">
                <option value="USD">Dólar</option>
                <option value="BRL">Real</option>
                <option value="EUR">Euro</option>
                <option value="CNH">Yuan</option>
            </select>
            <section class="secBot">
            <input type="submit" value="Comprar">
            </section>
        </section>
    </form>
</main>

<?php
    require_once('php/pie.php');
?>