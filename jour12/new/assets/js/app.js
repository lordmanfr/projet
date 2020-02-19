let name;

name = "Brian";

console.log(name);

const DOMAIN = "example.com";

console.log(DOMAIN);

// on ne peut pas ré affecter une valeur à une constante une fois définie
// DOMAIN = "google.com";

// les boucles
// boucle for
//for (let index = 0; index < 20; index++) {
// console.log("Itération n° ", index);
//}

// boucle forEach
let tableau = ["lionel", "brian", "John", "Mary", "Lila"];

//tableau.forEach(function(element) {
  //console.log("Hello", element);
//});

// boucle while
//let index = 0;
//while (index < 20) {
 // document.write("Iteration n° ", index);
  //index++;
//}
//tableau

//for (let index = 0; index < tableau.length; index++) {
//    console.log("Hello ", tableau[index]);
    
//}
let tableau2 = [
    ["lionel", 25],
    ["brian", 52],
    ["john", 35],
    ["mary", 30],
    ["lila", 42]
  ];
  prenom = "Lionel";

function sayHello(name = "Brian") {
  console.log("Hello ", tableau2[1][0]);
}

sayHello(prenom);
window.addEventListener("click", function() {
    console.log("Document cliqué");
  });






