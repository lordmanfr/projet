<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <h1> appli</h1>

    <button class="getglossary">GET INFO</button>

    <button class="reload">reload</button>


    <div class="infosglossary"></div>



<script>

var reload=document.querySelector(".reload");
reload.addEventListener("click",function(){
    window.location.reload();


});

var getinfo=document.querySelector(".getglossary");
    getinfo.addEventListener("click",function(){

fetch("data/glossary.php")

.then((res)=>res.json())


.then((data)=>{




 const gloss=Math.floor(Math.random()*data.length);

 console.log(data[gloss]);

  var output =  `
          <h1>${data[gloss].title}</h1>
          <p>${data[gloss].description}</p>
         
          
    `  ;


    document.querySelector(".infosglossary").innerHTML+=output;


})
});

</script>

</body>
</html>