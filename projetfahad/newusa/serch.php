<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usa</title>
</head>
<body>
    <form class=search-from>
        <input type="text" class="search">
        <ul class=suggestions>
            <li>filtr for city</li>
            <li>or a state</li>
        </ul>
    </form>
    


<script>
    const url='https://gist.githubusercontent.com/Miserlou/c5cd8364bf9b2420bb29/raw/2bf258763cdddd704f8ffd3ea9a3e81d25e2c6f6/cities.json';

    let cities =[];

    fetch(url)

    .then(res=>res.json())

    .then(data=>cities.push(...data))

      function findmatch(wordmatch,cities)
      {
          return cities.filter(place=>{

              const regex=new RegExp(wordmatch,"gi");

              return place.city.match(regex)  || place.state.match(regex);
         });

      }

      function displyword()
      {
         // console.log(matcharray);

         // console.log(this.value);

         const matcharray=findmatch(this.value,cities);

        // console.log(matcharray);
        const html=matcharray.map(place=>{
            return `
            <li>
            <span class="name">${place.city},${place.state}<span>
            <span class="population">${place.popluation}<span>
            </li>
            `
            }).join('');
      suggestions.innerHTML=html;
    
  
          
      }

    const searchinput=document.querySelector(".search");

    const suggestions=document.querySelector(".suggestions");

    searchinput.addEventListener("change",displyword);

    searchinput.addEventListener("keyup",displyword);











</script>
</body>
</html>