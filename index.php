<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style type="text/css">



    



      
      
    
    </style>
  </head>
  <body>

<!-- nav start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Visit to Pakistan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/PakWebsite/">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/PakWebsite/about.php">About</a>
      </li>
       

      <li class="nav-item">
        <a class="nav-link" href="/PakWebsite/contact.php">Contact</a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cities
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Sialkot</a>
          <a class="dropdown-item" href="#">Lahore</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Isalamabad</a>
            <a class="dropdown-item" href="#">Visit all</a>
        </div>
      </li>
   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Any City</button>
    </form>
    <div class="mx-2">
       <button class="btn btn-success" data-toggle="modal" data-target="#login_modal">Login</button>
    <button class="btn btn-danger" data-toggle="modal" data-target="#sign_modal">Sign Up</button>
      
    </div>
   


  </div>
</nav>

<!-- nav end -->

<!-- modal login start -->



<!-- Modal -->
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login_modal">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
             <label for="exampleInputEmail1">Email address</label>
             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Password</label>
             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
           </div>
           <div class="form-check">
             <input type="checkbox" class="form-check-input" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Check me out</label>
           </div>
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


<!-- modal login end -->


<!-- modal signUP start -->



<!-- Modal -->
<div class="modal fade" id="sign_modal" tabindex="-1" role="dialog" aria-labelledby="sign_modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sign_modal">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        <form>
          <div class="form-group">
             <label for="exampleInputEmail1">User Name</label>
             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Password</label>
             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Confirm Password</label>
             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
           </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<!-- modal sign end -->





<!-- carousel start -->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="4.jpg" alt="First slide" width="1100" height="500">
       <div class="carousel-caption d-none d-block">
       <h5 >Karachi</h5>
       <p >Karachi is the capital of the Pakistani province of Sindh. It is the largest city in Pakistan and the twelfth largest city in the world. </p>
       <button type="button" class="btn btn-success"> History</button>
       <button type="button" class="btn btn-danger">  Population</button>
       <button type="button" class="btn btn-warning">Geography</button>
       </div>
       
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="5.jpg" alt="Second slide" width="1100" height="500">
        <div class="carousel-caption d-none d-block">
       <h5>Lahore</h5>
       <p>Lahore is the capital of the Pakistani province of Punjab and is the country's 2nd largest city after Karachi, as well as the 26th largest city in the world. Lahore is one of Pakistan's wealthiest cities with an estimated GDP of $65.14 billion as of 2017</p>
       <button type="button" class="btn btn-success"> History</button>
       <button type="button" class="btn btn-danger">  Population</button>
       <button type="button" class="btn btn-warning">Geography</button>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="6.jpg" alt="Third slide" width="1100" height="500">
        <div class="carousel-caption d-none d-block">
       <h5>Sialkot</h5>
       <p>Sialkot is a city in Punjab, Pakistan. Sialkot is Pakistan's 13th largest city by population and is located in north-east Punjab—one of Pakistan's most industrialised regions</p>
       <button type="button" class="btn btn-success"> History</button>
       <button type="button" class="btn btn-danger">  Population</button>
       <button type="button" class="btn btn-warning">Geography</button>
       </div>
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

<!-- carousel end -->


<!-- thumbnail start -->
<div class="container my-4">

  <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Government and politics</a>
              </h3>
              <div class="mb-1 text-muted">18 Dec</div>
              <p class="card-text mb-auto">Pakistan's political experience is essentially related to the struggle of Indian Muslims to regain the power they lost to British colonisation.[212].</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-block" class="img-fluid" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="thumb_1.jpg" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Foreign relations</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">Since Independence, Pakistan has attempted to balance its relations with foreign nations.[214][215][216] Pakistan is a strong ally of China, with both countries placing considerable importance on the maintenance.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-block" class="img-fluid" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="thumb_2.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
          </div>
        </div>

      </div><!-- row1 end of thumbnail -->
   <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Kashmir conflict</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">The Kashmir—the most northwesterly region of South Asia—is a major territorial dispute that has hindered relations between India and Pakistan. The two nations have fought at least three large-scale conventional wars in successive years in 1947, 1965, and 1971.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-block" class="img-fluid"  alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="thumb_3.jpg" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">  Economy</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">Economy of Pakistan is the 23rd largest in the world in terms of purchasing power parity (PPP), and 42nd largest in terms of nominal gross domestic product. Economists estimate that Pakistan was part of the wealthiest region of the world throughout the first millennium CE, with the largest economy by GDP.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-block" class="img-fluid"  data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="thumb_4.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
          </div>
        </div>
      </div><!-- row1 end of thumbnail -->
  

</div><!-- container end -->


<footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2020-2021 Company, Inc. · <a href="#">Pakistan policy and terms</a> · <a href="#">Terms</a></p>
      </footer>

    















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
