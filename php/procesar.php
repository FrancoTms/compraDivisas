<?php
    $ruta = '../css';
    require_once('encabezado.php');
    require_once('funciones.php');
    $montoCompra = $_GET['monto'];
    $siglaDivisa = $_GET['divisa'];
    $calcularCotizacion = cotizacionDivisa($siglaDivisa, $montoCompra);
    switch ($siglaDivisa) {
        case 'USD':
            $nombreDivisa = 'Dólares';
            break;
        case 'BRL':
            $nombreDivisa = 'Reales';
            break;
        case 'EUR':
            $nombreDivisa = 'Euros';
            break;  
        case 'CNH':
            $nombreDivisa = 'Yuanes';
            break;  
    }
?>

<main>
    <h1>Divisas</h1>
    <h2>Compra</h2>
    <h3>Monto disponible: $<?php echo $montoCompra; ?></h3>
    <h3><?php echo $nombreDivisa . ' adquiridos $' . $calcularCotizacion; ?> </h3>
</main>

<?php
    require_once('pie.php');
?>
