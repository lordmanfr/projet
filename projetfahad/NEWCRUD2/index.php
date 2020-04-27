<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

body, html

{ 
margin:0;
padding:0;
width:100%;
height:100%;


}

*
{
  box-sizing:border-box;
}

form
{
display: flex;
flex-direction:column;
width:100%;

}
form >*
{
    margin:0.2rem;
    padding:0.2rem;
    font-family:monospace;
}
.lesOffres
{
display: flex;
flex-wrap: wrap;
width:100%;
   
   
}


</style>
<body>
    <header>
        <h1>OFFRE D'EMPLOI</h1>
    </header>



<main>



     <!--_____________SECTION CREER_____________-->

    
 <section>
     <form method="POST" action="" class="offreemploi create">

     <input type="text" name="titre" required placeholder=" entrez le titre d'emploi">
    
     <textarea name="description" id="" cols="100" rows="6" required placeholder="entrez la description d'emploi"></textarea>
       
     <input  name="image"  type="text" required placeholder="entrez la photo" value="assets/img/photo.jpg">

     <input type="hidden" name="formulaire1" value="create">

     <button type="submit">PUBLIER</button>

     </form>
 </section>
        

 <!---_________________SECTION LIRE________________-->


 
 <section>
     <h1>RELOAD</h1>

     <form action="" class="offreemploi read"  method="POST">


     <button type="submit">LOAD</button>

      <input type="hidden"  name="formulaire1" value='read'>

     </form>



     <div class="lesOffres">



     </div>


      <div class="test"></div>


</section>
</main>

<footer>
     <h1>TOUS DROIS RESERVES 2020</h1>
</footer>



<script>


     
     
     var listformulaire=document.querySelectorAll("form.offreemploi");


     listformulaire.forEach(function(formulaire){


         formulaire.addEventListener('submit',envoyer);
     });
   
         document.querySelector("form.read button[type=submit]").click();



     
     
         
          function envoyer(event)
     {     
          event.preventDefault();

          console.log("HI EQUIPE ");


          var formulaire=event.target;
              // ON VA UTILISER UN OBJET DE LA CLASSE FormData
           // => CET OBJET SERVIRA DE CONTAINER AUX INFOS DU FORMULAIRE

          var formData=new FormData(formulaire);


          var contenu={

             
              method:"POST",
              body:formData
          };


           fetch("api.php",contenu)

           .then(function(res){

               console.log(res);

               return res.json();

           })

           .then(function(data)
           {

               console.log(data);
                                            

              if("tableau" in data)
              {
           


             tableau=data.tableau;



             buttonload();

              }
           })

     };

                function buttonload()
                {
                    var lesoffres=document.querySelector(".lesOffres");

                    lesoffres.innerHTML="";

                    for(var i=0 ;i < tableau.length ;i++){

                        var offre=tableau[i];

                     var codehtml=`<article>
                                    <h1>${offre.titre}</h1>
                                   <h1>${offre.description}</h1>
                                   <img src=${offre.image} width="300" height="300"></article>

                                     `;                 // modifier la tailler par attribute 
                                                         // style="width:500px;height:600px";
                                                        
                                     lesoffres.innerHTML+=codehtml;


                    }  
                }
                     


//                 var person = {
//   firstName: "John",
//   lastName: "Doe",
//   age: 50,
//   eyeColor: "blue"
// };
   
//    person.forEach(function(persons))
  
//   var test=document.querySelector(".test");


// test.innerHTML=person.age;

                             
                


       

</script>






    
</body>
</html>

