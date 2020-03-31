/*const weatherIcons = {
    "Rain":"wi wi-day-rain",
    "Clouds":"wi wi-day-cloudy",
    "Clear":"wi wi-day-sunny",
    "Snow":"wi wi-day-snow",
    "mist":"wi wi-day-fog",
    "Drizzle":"wi wi-day-sleet",
}
function capitalize(str){
    return str[0].toUpperCase()+str.slice(1);
}

function main(){

const ip = fetch('https://api.ipify.org?format=json')
    .then(resultat => resultat.json())
    .then(json =>{
        const ip=json.ip;

        fetch('https://freegeoip.net/json/' + ip)
       

        .then (resultat =>resultat.json())
        .then(json=>{
            const ville=json.city;
        console.log(ville);
        fetch('http://api.openweathermap.org/data/2.5/weather?q={$ville}&appid=f38484110f427111d538262d3c42333d&lang=fr&units=metric')
        .then (resultat => resultat.json())
        .then(json=>{
            console.log(json);
        });

        })
    })


}
main();*/
  
fetch("https://api.ipify.org?format=json")
 .then(function(responce) {
    return  responce.json()
     
 })

 //.then(responce => responce.json())
 .then(function (data) {
     //console.log(data);
     const ip = data.ip
     //et 2
     fetch(`http://api.ipstack.com/${ip}?access_key=79b51da587ab6801deecd42ce21ce9f9`)
     .then(function(responce) {
        return  responce.json()
         
     })
     .then(function (data) {
        let city = data.city;//marseille 01 il fuat marseille 
        
        city =city.split(" ")[0].toLowerCase();
       // console.log(city);
       fetch(`http://api.openweathermap.org/data/2.5/weather?q=${city}&appid=f38484110f427111d538262d3c42333d&lang=fr&units=metric`)
       .then(function(responce) {
        return responce.json()
           
       })
       .then(function(data) {
       // console.log(data);
        //console.log(ville);
       // console.log(data);

        // ici je récupère les éléments du DOM dans lesquels je veux afficher la valeur des infos météo que je récupère
        const city = document.querySelector("h1");
        const temp = document.querySelector("h2");
        const temp_max = document.querySelector("h3");
        const temp_min = document.querySelector("h4");
        const description1 = document.querySelector("h5");
    
        const conditions = document.querySelector("i");

        // ensuite j'injecte ces valeurs dans le DOM
        // par ex : je vais chercher la valeur de la propriété temp de la propriété main de l'objet data

        const ville = data.name;
        const temperature = Math.round(data.main.temp);
        const temperature1 = Math.round(data.main.temp_max);
        const temperature2 = Math.round(data.main.temp_min);//math.round pour le .12
        const icon = data.weather[0].id;
        const description = data.weather[0].description;

      //  const icon = data.weather[0].id;

        // on peut maintenant afficher les informations dans les éléments du DOM qui nous intéressent
        city.innerText += ville;
       // temp.innerText += temperature;
        temp.innerText += temperature + "°";
        temp_max.innerText += temperature1 + "°";
        temp_min.innerText += temperature2 + "°";
        description1.innerText += description;
      //  temp.innerText += temperature + "°";
       // conditions.classList.add(`wi-owm-${icon}`);
        const conditionsclass = "wi-owm-" + icon
        conditions.classList.add(conditionsclass);
       /// document.body.className = conditions.toLowerCase();
        //console.log(icon);
       console.log(data);
      const ville1 = document.querySelector('#ville');
      ville1.addEventListener('click' , () => {
      ville1.contentEditable = true;
    })


      })
           
       })

     })  ;
       
 /*
 const weatherIcons = {
    "Rain":"wi wi-day-rain",
    "Clouds":"wi wi-day-cloudy",
    "Clear":"wi wi-day-sunny",
    "Snow":"wi wi-day-snow",
    "mist":"wi wi-day-fog",
    "Drizzle":"wi wi-day-sleet",
}



function capitalize(str){
    return str[0].toUpperCase()+str.slice(1);
}

async function main(){

const ip= await fetch('https://api.ipify.org?format=json')
    .then(resultat => resultat.json())
    .then(json => json.ip)
        
        console.log(ip);
     const ville= await fetch('http://api.ipstack.com/' + ip + '?access_key=30c029b1d2a8dcdcdf26ac5a0e07b914')
        .then (resultat =>resultat.json())
        .then(json=> json.city)
            //si on récuperre Marseille 01 on doit le transformer en Marseille
            // Pour sa on doit conserver le nom de la ville en minuscule
            // city = city.split(" ")[0].toLowerCase();
          
        console.log(ville);
       const meteo= await fetch(`http://api.openweathermap.org/data/2.5/weather?q=${ville}&appid=f38484110f427111d538262d3c42333d&lang=fr&units=metric`)
        .then (resultat => resultat.json())
        .then(json=> json)
    console.log(meteo)
displayWeatherInfos(meteo)
}

function displayWeatherInfos(data){
    const name= data.name;
    const temperarture= data.main.temperature;
    const conditions = data.weather[0].main;
    const description= data.weather[0].description;

document.querySelector('#ville').textContent=name;
document.querySelector('#temperature').taxtContent=temperature;
document.querySelector('#conditions').textContent=capitalize(description);
}
document.querySelector('i.wi').className = weatherIcons[conditions];
 //const conditionsclass = "wi-owm-" + icon
 //       conditions.classList.add(conditionsclass);


// pour avoir une température arrondi:
// document.querySelector('#temperature').textContent=Math.round(temperature);
//main */