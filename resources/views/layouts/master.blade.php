
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <script>
      alert("it's javascript code");
    </script>
  </head>

  <body>

    @include('layouts.nav')

    <div class="container">
      
      <div class="jumbotron p-3 p-md-0 text-blue rounded bg-dark">
        <div class="col-md-5 px-2">
          <h1 class="display-9 font-italic">Picture's Post</h1>
        </div>
      </div>

      <script>
        alert("it's javascript code");
      </script>

      <script>
        alert("it's javascript code");
      </script>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Section</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Dernier Contenu Poster</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
             
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Section</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Dernier commentaire</a>
              </h3>
              <div class="mb-1 text-muted">Date</div>
                
                <a href="#">Continue reading</a>
              </div>
             <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
            </div>
          </div>
        </div>
    </div>

    <div class="container">
      <div class="row">
        @yield ('content')
        
        
      </div>
    </div>

      

    
  </body>
</html>
