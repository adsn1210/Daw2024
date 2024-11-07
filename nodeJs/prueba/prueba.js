console.log(isNaN("5rt"));
console.log(isNaN("341"));
console.log(isNaN("232.23"));
console.log(isNaN("22e16"));

////////////////////////////////////////////////////////////////////////////////////////


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


function myFunction() {
    var name = prompt('What is your name?');
    var conf = confirm('Is your name: ' + name);
    if (conf === true) {
      alert("You pressed OK!");
    } else {
      alert("Input your correct name");
      myFunction();
    }
  }
  
  myFunction();

  ////////////////////////////////////////////////////////////////////////////////////////


for (var i = 0; i < 5; i++) {
    console.log(i);
}

console.log(i);
////////////////////////////////////////////////////////////////////////////////////////

/*Declaración: Al usar let para declarar j, 
esta variable tiene un alcance de bloque, 
lo que significa que solo es accesible dentro del bloque en el que fue definida 
(dentro de las llaves del for).
*/
for (let j = 0; j < 5; j++) {
    console.log(j);
}
console.log(j);

/*Conclusión
Esta es una de las diferencias clave entre var y let en JavaScript:

var tiene un alcance más amplio (función o global).
let tiene un alcance más restringido (bloque). */
////////////////////////////////////////////////////////////////////////////////////////

function pintar (color = "negro"){
    console.log(`Pintando con color ${color}`);

}
pintar();
pintar("azul");

/*Explicación del Código
Definición de la Función:

La función pintar acepta un parámetro color, que tiene un valor por defecto de "negro". 
Esto significa que si no se pasa ningún argumento al llamar a la función, color será "negro".
Uso de Template Literals:

Al usar las comillas invertidas (`) para la cadena en console.log,
 puedes incluir variables dentro de la cadena utilizando ${}.
  Esto es útil para construir cadenas dinámicamente. */

////////////////////////////////////////////////////////////////////////////////////////