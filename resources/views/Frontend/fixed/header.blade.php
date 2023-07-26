 <style>
  /* Search Box Styles */
 .search-box {
  margin-right: 20px;
  position: relative;
}

.search-box form {
  display: flex;
}

.search-box input[type="text"] {
  width: 237px;
  padding: 9px;
  border: 1px solid #d9232d;
  border-radius: 8px 0 0 4px;
}

.search-box button {
  background-color: #d9232d;
  color: #ffffff;
  padding: 11px 13px;
  border: none;
  border-radius: 0 8px 4px 0;
  cursor: pointer;
}
 </style>
 
 
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Black Apple</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>

        <li>
            <div class="search-box">
              <form action="{{Route('search')}}" method="GET">
                <input type="text" name="search" placeholder="Search Product ...">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div>
          </li>

          <li><a href="index.html" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Abaya</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach($cats as $category)
              <li><a href="team.html">{{$category->name}}</a></li>
              @endforeach
                 
            </ul>
          </li>
          <li><a href="services.html">Hijab</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="portfolio.html">Reviews</a></li>

          <li><a href="contact.html">Contact</a></li>
          <li><a href="{{route('user.login')}}" class="getstarted">Login</a></li>
         
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->