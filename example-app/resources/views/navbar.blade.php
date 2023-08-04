<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FindIt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <style>
      .country-text {
        margin-left: 10px;
        font-size: 16px;
      }
      .howtouse-text {
        margin-left: -100px;
        margin-top: 50px;
        font-size:  40px;
        font-weight: bold;
      }
      .use-text {
        font-size: 20px;
        margin-left: -100px;
        margin-top: 50px;
        font-weight: bold;
      }
      .result-text {
        margin-left: -100px;
        margin-top: 50px;
        font-size:  40px;
        font-weight: bold;
      }
      .result-text-2 {
        font-size: 20px;
        margin-left: -100px;
        margin-top: 50px;
      }
      
    </style>



  </head>
  <body>
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>


  

  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand " href="{{route('mainPage')}}">FindIt</a>
    <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('aboutUs')}}">About Us</a>
        </li>
        
        <form class="d-flex" role="search" method="post" action="{{route('result')}}">
        @csrf

        <li class="nav-item dropdown">
        <span class="country-text" style="color: white;">Country</span>
        <select name="country">
        <option value="USA">United States</option>
        <option value="UK">United Kingdom</option>
        <option value="Canada">Canada</option>
        <option value="Australia">Australia</option>    
        <option value="Germany">Germany</option>
        <option value="France">France</option>
        <option value="Japan">Japan</option>
        <option value="Brazil">Brazil</option>
        <option value="India">India</option>
        <option value="China">China</option>
        <option value="Italy">Italy</option>
        <option value="Mexico">Mexico</option>
        <option value="Spain">Spain</option>
        <option value="South Korea">South Korea</option>
        <option value="Netherlands">Netherlands</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Argentina">Argentina</option>
        <option value="Russia">Russia</option>
        <option value="Turkey">Turkey</option>
        <option value="Egypt">Egypt</option>
        <option value="Greece">Greece</option>
        <option value="Israel">Israel</option>
        <option value="Norway">Norway</option>
        <option value="Portugal">Portugal</option>
        <option value="Singapore">Singapore</option>
        <option value="Thailand">Thailand</option>
        <option value="United Arab Emirates">United Arab Emirates</option>
        <option value="Vietnam">Vietnam</option>
        <option value="South Africa">South Africa</option>
    </select>
        </li>

        <li class="nav-item2">
          <a class="nav-link active" aria-current="page" href="{{route('entries_admin')}}">Admin Page</a>
        </li>

        <li class="nav-item3">
          <a class="nav-link active" aria-current="page" href="{{route('piechart')}}">Search Statistics</a>
        </li>

      </ul>

      
        <input class="form-control me-2" name="metin" type="search" placeholder="Search" aria-label="Search" style="width: 250px;">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
    </nav>


    <div class="content min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-8">
                <h1 class="howtouse-text" style="color:Red;">How to Use ?</h1>
                <p class="use-text">1. Select Your Country from the Menu <br> 2. Enter Your Movie or Series in the Search Bar Correctly<br> 3. Easily See Digital Platforms Where You Can Watch Your Series or Movie  </p>
            </div>
            <div class="col-4">
            <h1 class="result-text" style="color:Red;">Result:</h1>
            <p class="result-text-2">{{$var}} </p>
            </div>
            </div>
        </div>
    </div>


    <footer class="container-fluid bg-dark text-center min-">
      
        <p class="text-center text-white" style="margin-bottom:0" > &copy; {{date('Y')}} -- Baris Aydinay</p>
     
    </footer>
    

  </body>
</html>