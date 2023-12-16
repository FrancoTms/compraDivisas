<?php
    function cotizacionDivisa($sigDiv, $monCom)
    {
        switch ($sigDiv) {
            case 'USD':
                $cotizacion = $monCom * 349.65;
                break;
            case 'BRL':
                $cotizacion = $monCom * 71.82;
                break;
            case 'EUR':
                $cotizacion = $monCom * 372.96;
                break;  
            case 'CNH':
                $cotizacion = $monCom * 47.98;
                break;  
        }
        return $cotizacion;
    }
?>