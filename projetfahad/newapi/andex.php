<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>FETCH API USERS</h1>


<button id="gettext">GET TEXT</button>

<div class="users">

</div>

<script>

document.getElementById('gettext').addEventListener
("click",getText);


function getText()

{
    fetch('https://jsonplaceholder.typicode.com/posts')
    .then(response=>response.json())
    .then(data=>  {


  let output="";

 data.forEach(function(d){
  
     

  output +=`
         <h1>${d.title}</h1>
         <h1>${d.body}</h1>
         <h1>${d.id}</h1>
         <h2>${d.userId}</h2>
         `;


         
 
 });
            document.querySelector(".users").innerHTML=output;
   
    })
}

</script>







 
    
</body>
</html> 
