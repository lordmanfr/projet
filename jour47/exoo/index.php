<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>serche</h1>
    <button class="here">click</button>
    


    <script>
    // Create a render function
const renderSearchBox = (mangas, isFirstRender) => {
 // const { query, refine, clear, isSearchStalled, widgetParams } = renderOptions;
   
const mangas = [
  "One Punch-Man",
  "Beastars",
  "Eveil",
  "My Home Hero",
  "Le Voleur d'estampes",
  "Jagaaan",
  "Atrail",
  "The Way of the Househusband",
  "Komi Can't Communicate",
  "My Hero Academia",
  "Samurai 8",
  "For the Kid I Saw in My Dream",
  "I Want To Eat Your Pancreas",
  "Nyankees",
  "Our Dreams At Dusk",
  "Skull-face Bookseller Honda-san",
  "Fullmetal Alchemist",
];

  if (isFirstRender) {
    const input = document.createElement('input');

    const loadingIndicator = document.createElement('span');
    loadingIndicator.textContent = 'Loading...';

    const button = document.createElement('button');
    button.textContent = 'X';

    input.addEventListener('input', event => {
      refine(event.target.value);
    });

    button.addEventListener('click', () => {
      clear();
    });

    widgetParams.container.appendChild(input);
    widgetParams.container.appendChild(loadingIndicator);
    widgetParams.container.appendChild(button);
  }

  widgetParams.container.querySelector('input').value = query;
  widgetParams.container.querySelector('span').hidden = !isSearchStalled;
};

// create custom widget
const customSearchBox = instantsearch.connectors.connectSearchBox(
  renderSearchBox
);

// instantiate custom widget
search.addWidgets([
  customSearchBox({
    container: document.querySelector('#searchbox'),
  })
]);
    
    
    
    
    </script>
</body>
</html>