<?php
//declare(strict_types=1);
require "numberChecker.php";
/*
Frank Pulido - Tema 7 [Debugging] - Nivel 1 - Ejercicio 1
ENUNCIADO :
Dada la clase NumberChecker programa los "tests unitarios" que hagan falta para certificar que el código fuente de la clase hace lo que debe hacer.

*** COMMAND + OPTION + J : Atajo para abrir la consola del browser (ver al final : logging methods with JS)

RECURSOS :
https://squadmakers.com/blog/es/que-son-los-test-unitarios-o-unit-testing/
https://en.wikipedia.org/wiki/Test-driven_development
https://www.simplilearn.com/tutorials/php-tutorial/var-dump-in-php
(ver enlaces del link anterior)
https://www.w3schools.com/tags/tag_pre.asp
https://www.w3schools.com/php/func_misc_die.asp
https://www.w3schools.com/php/func_misc_exit.asp

https://www.atatus.com/blog/php-debugging/#Tools%20to%20Consider%20for%20Debugging
https://www.atatus.com/blog/debugging-in-php/#debugging-techniques
FUNCIONES ÚTILES PARA DEBUGGING :
    var_dump ($var) - Dumps the type and value of the variable to stdout.
    print_r ($var) - It prints the variable value to stdout in a human-readable format.
    get_defined_vars() - It gets all defined variables, including built-ins and custom variables (to see them, use print_r).
    debug_zval_dump ($var) - Dumps the variable together with its reference counts. This is helpful when updating a single reference from multiple pathways.
    debug_print_backtrace() - It prints the current function call-chain in a backtrace.
    debug_backtrace() - It obtains a backtrace. Asynchronously, you can print_r, log it to a file, or send it to a logging endpoint.

Ver LOGGING METHODS en JavaScript :
https://www.w3schools.com/jsref/met_console_log.asp
https://www.simplilearn.com/tutorials/javascript-tutorial/introduction-to-javascript
console.log()
console.table() : visualizar mejor arrays y objetos
console.warn()
console.error()
console.info()
console.debug()
console.trace() : parece interesante, estudiar en detalle.
console.group()
console.groupEnd()
Bugfender : remotely retrieve logs from users’ devices
(Software para hacer debugging remoto en el dispositivo del usuario de la web.)
*/

echo "\n\n";
echo "Rubén : Dejé la instalación de XDebug a la mitad. Veo varios compis avanzados con Mac y (espero que) haya también tb algún profesor con Mac.\nMe podrías poner en contacto con alguien que use Xdebug en MacOS y pueda ayudarme a encontrar el fallo?... He anexado un archivo con detalle de mi instalación...";
echo "\n\n";
echo "Al no contar con Xdebug oy a debuggar por terminal con var_dump() y exit(). En este caso no usé la segunda, no era necessario.\nPENDIENTE : Más adelante probaré también la consola del browser para las funciones console de JS.\n\n";

$number = 0;
$testNumber = 0;
$testEven = false;
$testPositive = false;
$again = "n";
$tests = [];

do {
    $number = (float) readline("[TESTING class numberChecking] : Input number to check 1- FIRST whether it's even and 2- SECOND whether it's positive : ");
    $testNumber = new NumberChecker($number);
    $testEven = $testNumber->isEven();
    var_dump($testEven);
    $testPositive = $testNumber->isPositive();
    var_dump($testPositive);
    $tests ["$number"] = [$testEven, $testPositive];
    $again = strtolower(readline("\nContinue? [Y : yes or N : no] : "));
} while($again == "y");
echo "\n\n";
echo 'Repasemos los resultados haciendo un var_dump del array con todas las pruebas $key=>$value : $number=>[isEven(),isPositive()].\nCada key del array corresponde a un número evaluado y el value asociado es un array con los 2 valores booleanos arrojados por isEven() e isPositive():';
echo "\n";
var_dump($tests);
echo "\n\n";
echo "La función isEven() falla si el número (dividendo) es de tipo float, dado que la clase numberChecker hace un casting (constructor). Posibles soluciones :\n1- Filtro en la entrada de datos.\n2- REFACTOR : (En caso de que la fuente de datos pueda usar float) Se propone modificación del código en el archivo numberChecker.php, ver código comentado)";
echo "\nCLIENTE : 1- Preguntar como tratamos el número 0. 2- Considerar REFACTOR : 1- Caso entrada float ya mencionado y 2- Conviene usar Trait, en lugar de Clase?.\nHemos podido verificar que la clase NumberChecker funciona perfectamente SIEMPRE que la entrada de datos sea estrictamente de valores INTEGER.\n\nSi se tratase de un programa extenso (YA TERMINADO) con muchos errores habría usado exit() para ir resolviéndolos uno a uno partiendo desde aguas arriba sin ejecutar\n el programa completo, pero entiendo que lo interesante es probar las clases, métodos, etc fuera del programa principal y en cualquier orden A MEDIDA QUE ÉSTE SE DESARROLLA.\nEstoy empezando con debugging, he supuesto que hacer un array con los resultados (REPORT 2024 09] puede ser interesante para conocer que es lo que hemos y NO HEMOS aún comprobado.";
?>