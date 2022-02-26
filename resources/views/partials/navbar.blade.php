<nav class="navbar navbar-expand-lg navbar-dark bg-dark"
style="background-color:#00000085">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Zhiendkira.com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse dark" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Home") ? 'active' : ' '}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "About") ? 'active' : ' ' }}" href="/About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Blogs") ? 'active' : ' ' }}" href="/Blogs">Blogs</a>
          </li>
          
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link {{ ($title == "pesan") ? 'active' : ' ' }}" href="/pesan" class="nav-link"><i class="bi bi-cart-plus-fill"></i>
              Pesan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "login") ? 'active' : ' ' }}" href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> login</a>
            </li>
        </ul>
      </div>
    </div>
  </nav> 