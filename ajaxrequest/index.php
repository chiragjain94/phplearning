<!DOCTYPE html>

<head>
  <title>
    AJAX REQUEST
  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script>
    function showSuggestions(str) {
      if (str.length == 0) {
        document.getElementById('output').innerHTML = '';
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 & this.status == 200) {
            document.getElementById('output').innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "suggestion.php?q=" + str, true);
        xmlhttp.send();
      }

    }
  </script>
</head>



<body class="container">
  <h1>Search Form <h1>
      <form>
        Search User : <input type="text" class="form-control" onkeyup="showSuggestions(this.value)">
      </form>
      <p>Suggestion of name : <span id="output"></span></p>
</body>

</html>