<!doctype html>
<html>
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Search Articles</title>
    <script src="{{ asset('/js/article.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>
  <body>
    <div class="container search-container">
      <h4>Search Results</h4>
      <input type="text" class="search-bar" id="search-bar"/>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Article</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
