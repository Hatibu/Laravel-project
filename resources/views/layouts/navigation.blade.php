
  <nav class="navbar navbar-expand-lg navbar-light nav-bg">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <!--<a class="nav-link active" aria-current="page" href="#">Home</a>-->
          </li>
          <li class="nav-item">
            <!--<a class="nav-link" href="#">Link</a>-->
          </li>
          <!-- User icon-->
          <svg xmlns="http://www.w3.org/2000/svg"
          width="30"
           height="30"
           fill="currentColor"
           class="bi bi-person"
           viewBox="0 0 16 16">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            </svg>
            <li class="nav-item">
              <p class="nav-link2" >{{ $LoggedUserInfo->email }}</p>
            </li>

          <li class="nav-item dropdown">
            <a class="nav-link2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

            </a>
            <ul class="dropdown-menu dropdown-dashboard" aria-labelledby="navbarDropdown">
              <li><a  class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/auth/login">
                <svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor"
                class="bi bi-power" viewBox="0 0 16 16">
                <path d="M7.5 1v7h1V1h-1z"/>
                 <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                </svg>
                  Logout
                </a></li>
            </ul>
          </li>
          <li class="nav-item">
           <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
          </li>
        </ul>


      </div>
    </div>
  </nav>

