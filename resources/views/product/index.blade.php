<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ucf</title>

  <!-- Bootstrap core CSS -->
  //<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
 
  <!-- Custom styles for this template -->
  
 //<link href="{{ secure_asset('css/index.css') }}" rel="stylesheet">
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <img src="assets/cup_yellow.jpg" width="40" height="30" class="d-inline-block align-top" alt="">
      <a class="navbar-brand" href="#"> 　UENO COFFEE FACTORY </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      
      <div class="col-lg-3">
        <h3 class="my-4"></h3>
        <div class="list-group">
          <a href="" class="list-group-item">Category 1</a>
          <a href="" class="list-group-item">Category 2</a>
          <a href="" class="list-group-item">Category 3</a>
        </div>
      </div>
      
    <div class="col-lg-9">
      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
             
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="products-index-logo1" src="{{ secure_asset('/assets/square_brown.JPG') }}" style="margin-top: 55px"　rel="stylesheet">
            </div>
            <div class="carousel-item">
              <img class= "products-index-logo1" src="{{ secure_asset('/assets/cup_yellow.jpg') }}" style="margin-top: 55px"　rel="stylesheet">
            </div>
            <div class="carousel-item">
              <img class="products-index-logo1" src="{{ secure_asset('/assets/square_yellow.JPG') }}" style="margin-top: 55px"　rel="stylesheet">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
      @foreach($posts as $post)
       <div class="row">
         <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="products-photo-2" src="{{ $post->photo }}">
              <div class="card-body">
                <h4 class="card-title"></h4>
                 <a href="{{ $post->name }}"</a>
                 <h5 class="card-price"></h5>
                 <a href="{{ $post->price }}"</a>
                 <h5 class="card-text"></h5>
                 <a href="{{ $post->introduction}}"</a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>-->
                    </div>
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>  
              </div>
            </div>
         </div>
       </div>
@endforeach      
    </div>
    <!-- /.row -->
   </div>
   <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">UENO COFFEE FACTORY</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
