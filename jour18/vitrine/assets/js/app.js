//alert ("hi there");
var listeImg = document.querySelectorAll(".container img");

//console.log(listeImg);


for(var i=0; i < listeImg.length; i++)
{

    var imageCourante = listeImg[i];
   
    imageCourante.addEventListener("click", function(event){
       // console.log("LE VISITEUR A CLIQUE");
        //console.log(event.target);
 

      
        var baliseCliquee = event.target;
      
        var urlImageCliquee = baliseCliquee.getAttribute("src");

        var balisePrincipale = document.querySelector(".imagePrincipale");
        balisePrincipale.setAttribute("src", urlImageCliquee);
    });
}

