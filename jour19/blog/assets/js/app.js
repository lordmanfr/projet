/*var listeimage = document.querySelectorAll(".listeArticle img");
for(var i=0;i < listeimage.length;i++)
{
    var imagePrincipal = listeimage[i];

    imagePrincipal.addEventListener("click",function(event){
        var baliseClick = event.target;
        var urlImageClick = baliseClick.getAttribute("src");
        var balisePrincipal = document.querySelector(".imagePrincipal");
        balisePrincipal.setAttribute("src",urlImageClick);
    }
    
    
    
    
    );
}*/
var listeimage = document.querySelectorAll(".listeArticle img");
for(var i=0;i < listeimage.length;i++)
{
    var imagePrincipal = listeimage[i];

    imagePrincipal.addEventListener("click",function(event){
        var baliseClick = event.target;
        var urlImageClick = baliseClick.getAttribute("src");
        var balisePrincipal = document.querySelector(".imagePrincipal");
        balisePrincipal.setAttribute("src",urlImageClick);
    }
    
    
    
    
    );

}

var listeimage = document.querySelectorAll(".listeArticle2 img");
for(var i=0;i < listeimage.length;i++)
{
    var imagePrincipal = listeimage[i];

    imagePrincipal.addEventListener("click",function(event){
        var baliseClick = event.target;
        var urlImageClick = baliseClick.getAttribute("src",);
        var balisePrincipal = document.querySelector(".imagePrincipal2");
        balisePrincipal.setAttribute("src",urlImageClick);

        // ON VA COPIER LE TITRE
        var baliseh4 = baliseClick.parentNode.querySelector("h4");
        console.log(baliseh4);
        var baliseTitrePrincipal2 = document.querySelector(".titrePrincipal2");
        // ON VA COPIER LE TEXTE
        baliseTitrePrincipal2.innerHTML = baliseh4.innerHTML;

        var baliseh3 = baliseClick.parentNode.querySelector("h3");
      
        var balisecategoriePrincipal2 = document.querySelector(".categoriePrincipal2");
        // ON VA COPIER LE TEXTE
        balisecategoriePrincipal2.innerHTML = baliseh3.innerHTML;

        var balisep = baliseClick.parentNode.querySelector("p");
        console.log(balisep);
        var balisecontenuPrincipal2 = document.querySelector(".contenuPrincipal2");
        // ON VA COPIER LE TEXTE
        balisecontenuPrincipal2.innerHTML = balisep.innerHTML;


        var baliseh5 = baliseClick.parentNode.querySelector("h5");
      
        var balisedatePrincipal2 = document.querySelector(".datePrincipal2");
        // ON VA COPIER LE TEXTE
        balisedatePrincipal2.innerHTML = baliseh5.innerHTML;


    

    }
    
    
    
    
    );
}




    
    
    
