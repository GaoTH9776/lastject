  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">YAYOKNEW<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">หน้าแรก</a></li>
          <li><a class="nav-link scrollto" href="#about">เมนู</a></li>
          <li><a class="nav-link scrollto" href="#services">ช่องทางการสั่งซื้อ</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">เกี่ยวกับ</a></li>
          <li><a class="nav-link scrollto" href="#team">ผู้จัดทำ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      @if (Route::has('login'))
      @auth
      <a href="{{ route('admin') }}" class="get-started-btn scrollto">Admin</a>
      @else
          
      <a href="{{ route('login') }}" class="get-started-btn scrollto">Login</a>
      @endif
      @endauth
    </div>
  </header><!-- End Header -->