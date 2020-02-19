const boxes = document.querySelectorAll("div.wrapper");
boxes[0].style.color = "green";


const button = document.querySelector("button");


button.addEventListener("mouseout", function () {
    boxes.forEach(function (elem) {
        elem.classList.toggle("hide");
    });
});


/*const buttonOn= document.querySelector("#btnOn");
const buttonOff= document.querySelector("#btnOff");
const image = document.querySelector('.man')

buttonOn.addEventListener("click",function(){

    image.src = "assets/img/lord2.jpeg";
} )

buttonOff.addEventListener("click",function(){

    image.src = "assets/img/lord.png";
} )*/

/*var button = click;

switch (true) {
    case buttonOn: click
    console.log("assets/img/lodr.png")
        
        break;
    case buttonOff: click
    console.log("assets/img/lord2.jpeg")
        break;

    default:
        console.log ('loupé')

        break;
}*/

function changeimage(element) {
    var x =element.getElementsByTagName("man").item(0);
    var v = x.getAttribute("assets/img/lord2.jpeg")

    if (v== "lord.png")
    (v= "lord2.jpeg");

    else (v ="lord.png");

    x.setAttribute("assets/img/lord2.jpeg", v);
}



    
      