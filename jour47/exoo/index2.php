<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="filter">Filter</span>
  </div>
  <input type="text" class="form-control" data-table="table" data-count="#count" placeholder="Enter text to filter..." aria-label="Filter" aria-describedby="filter">
</div>
    



<script>
    // Vanilla JS table filter
// Source: https://blog.pagesd.info/2019/10/01/search-filter-table-javascript/
 
const manga = [
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

(function () {
  "use strict";

  var TableFilter = (function () {
    var search;

    function dquery(selector) {
      // Returns an array of elements corresponding to the selector
      return Array.prototype.slice.call(document.querySelectorAll(selector));
    }

    function onInputEvent(e) {
      // Retrieves the text to search
      var input = e.target;
      search = input.value.toLocaleLowerCase();
      // Get the lines where to search
      // (the data-table attribute of the input is used to identify the table to be filtered)
      var selector = input.getAttribute("data-table") + " tbody tr";
      var rows = dquery(selector);
      // Searches for the requested text on all rows of the table
      [].forEach.call(rows, filter);
      // Updating the line counter (if there is one defined)
      // (the data-count attribute of the input is used to identify the element where to display the counter)
      var writer = input.getAttribute("data-count");
      if (writer) {
        // If there is a data-count attribute, we count visible rows
        var count = rows.reduce(function (t, x) { return t + (x.style.display === "none" ? 0 : 1); }, 0);
        // Then we display the counter
        dquery(writer)[0].textContent = count;
      }
    }

    function filter(row) {
      // Caching the tr line in lowercase
      if (row.lowerTextContent === undefined)
        row.lowerTextContent = row.textContent.toLocaleLowerCase();
      // Hide the line if it does not contain the search text
      row.style.display = row.lowerTextContent.indexOf(search) === -1 ? "none" : "table-row";
    }

    return {
      init: function () {
        // get the list of input fields with a data-table attribute
        var inputs = dquery("input[data-table]");
        [].forEach.call(inputs, function (input) {
          // Triggers the search as soon as you enter a search filter
          input.oninput = onInputEvent;
          // If we already have a value (following navigation back), we relaunch the search
          if (input.value !== "") input.oninput({ target: input });
        });
      }
    };

  })();

  TableFilter.init();
})();
</script>
</body>
</html>