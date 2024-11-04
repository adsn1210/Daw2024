/*console.log(isNaN("5rt"));
console.log(isNaN("341"));
console.log(isNaN("232.23"));
console.log(isNaN("22e16"));
*/

edad = 12;

let mayorDe30 = (edad > 30) ? esMayor : esMenor;

function esMayor(){
    console.log("Es mayor");
    return true;
}
function esMenor(){
    console.log("Es menor");
    return false;
}

console.log(mayorDe30());