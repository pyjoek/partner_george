<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('js/materialize.min.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    fetch('{{asset('countries.json')}}')
      .then(response => response.json())
      .then(data => {
        const options = {};
        data.forEach(item => {
          options[item] = null;
        });

        // Initialize Autocomplete
        const autocompleteInput = document.getElementById('autocomplete-input');
        M.Autocomplete.init(autocompleteInput, {
          data: options,
          onAutocomplete: function(selection) {
            console.log('You selected: ' + selection);
          }
        });
      })
      .catch(error => console.error('Error fetching data:', error));
  });
    </script>
    <style>
        ul{
            color: red;
        }
    </style>
</head>
<body>
    <div class="input-field a col s12 m12">
        <input type="text" id="autocomplete-input" class="autocomplete">
        <label for="autocomplete-input">Search Item</label>
        </div>
        <!-- Autocomplete Options -->
        <div id="autocomplete-options" class="autocomplete-options red-text"></div>
    </div>
</body>
</html>