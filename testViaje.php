<?php
include_once "Pasajeros.php";
include_once "Vip.php";
include_once "Especiales.php";
include_once "viaje.php";

function mostrarMenu() {
    echo "1. Vender pasaje estándar\n";
    echo "2. Vender pasaje VIP\n";
    echo "3. Vender pasaje con necesidades especiales\n";
    echo "4. Salir\n";
    echo "Ingrese su elección: ";
}

$viaje1 = new Viaje(300, 2); 

do {
    mostrarMenu();
    $opcion = readline();

    switch ($opcion) {
        case 1:
            $nuevoPasajero = new Pasajeros(readline("Nombre: "), readline("Número de asiento: "), readline("Número de ticket: "));
            echo "Costo del pasaje: $" . $viaje1->venderPasaje($nuevoPasajero) . "\n";
            break;
        case 2:
            $nuevoPasajero = new VIP(readline("Nombre: "), readline("Número de asiento: "), readline("Número de ticket: "), readline("Número de viajero frecuente: "), readline("Millas acumuladas: "));
            echo "Costo del pasaje: $" . $viaje1->venderPasaje($nuevoPasajero) . "\n";
            break;
        case 3:
            $sillaDeRuedas = readline("¿Requiere silla de ruedas? (s/n): ");
            $asistenciaEmbarque = readline("¿Requiere asistencia de embarque? (s/n): ");
            $comidaEspecial = readline("¿Requiere comida especial? (s/n): ");
            $nuevoPasajero = new Especiales(readline("Nombre: "), readline("Número de asiento: "), readline("Número de ticket: "), $sillaDeRuedas === 's', $asistenciaEmbarque === 's', $comidaEspecial

);
            echo "Costo del pasaje: $" . $viaje1->venderPasaje($nuevoPasajero) . "\n";
            break;
        case 4:
            echo "Saliendo del programa...\n";
            break;
        default:
            echo "Opción no válida. Por favor, seleccione una opción válida.\n";
    }
} while ($opcion != 4);