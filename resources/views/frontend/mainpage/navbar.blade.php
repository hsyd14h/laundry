<nav
class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
<a href="/home" class="navbar-brand d-flex align-items-center">
  <h1 class="m-0">
    <img src="assets/img/frontend/mesincuci.png" alt="" height="50">
    <i class="text-primary me-3"></i>LAUNDRY</h1>
</a>
<button
  type="button"
  class="navbar-toggler"
  data-bs-toggle="collapse"
  data-bs-target="#navbarCollapse">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
    <a href="/home" class="nav-item nav-link {{ set_active('frontend.mainpage.home') }}">Home</a>
    <a href="/home/order" class="nav-item nav-link {{ set_active('frontend.pages.index') }}">Pesanan</a>
    <a href="/home/take" class="nav-item nav-link {{ set_active('frontend.pages.take') }}">Ambil Paket</a>
    <div class="navbar-nav ms-auto py-3 py-lg-0">
      <a class="nav-link" href="{{ route('logout') }}"
      onclick="event.preventDefault();document.getElementById('logout-form').submit();">
       Logout
     </a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
     </form>
     <div class="info">
      <a href="#" class="nav-item nav-link active">{{ Auth::user()->name }}</a>
    </div>
    </div>
</div>
</nav>