
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container-fluid">

      <a class="navbar-brand" href="{{ route('home') }}">Boolean Trains</a>
  

      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars text-light"></i>
      </button>
  

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
          <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
              <div>
                <i class="bi bi-house mb-1"></i>
              </div>
              Home
            </a>
          </li>
          <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link" href="{{ route('trains') }}">
              Trains
            </a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
          <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link" href="#!">
              Messages
            </a>
          </li>
          <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link" href="#!">
              News
            </a>
          </li>
        </ul>

        <form class="d-flex input-group w-auto ms-lg-3 my-3 my-lg-0">
          <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
          <button class="btn btn-primary" type="button" data-mdb-ripple-color="dark">
            Search
          </button>
        </form>
      </div>

    </div>

  </nav>
