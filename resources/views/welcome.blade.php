<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lelang Online</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">

    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('landing/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('landing/css/templatemo-barber-shop.css') }}" rel="stylesheet">
    <!--TemplateMo 585 Barber Shop https://templatemo.com/tm-585-barber-shop-->
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

                <div
                    class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('landing/images/logo1.png') }}" class="logo-image img-fluid">
                    </a>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Our Story</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Upcoming</a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Price List</a>
                        </li> --}}

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
                <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                    <div class="container">
                        <div class="row">

                            <div class="col-lg-8 col-12">
                                <h1 class="text-white mb-lg-3 mb-4"><strong>Benn's <em>Auction</em></strong></h1>
                                <p class="text-black">Lelang online no.1 dihatimu</p>
                                <br>
                                <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2"
                                    href="#booking-section">Register</a>

                                <a class="btn custom-btn smoothscroll mb-2" href="/login">Sign-in</a>
                            </div>
                        </div>
                    </div>

                    <div class="custom-block d-lg-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('landing/images/sale.jpeg') }}" class="custom-block-image img-fluid"
                            alt="">

                        <h4><strong class="text-white">Buruan dapatkan voucher promo</strong></h4>

                        <a href="#featured-section" class="smoothscroll btn custom-btn custom-btn-italic mt-3">S&K</a>
                    </div>
                </section>


                <section class="about-section section-padding" id="section_2">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12 col-12 mx-auto">
                                <h2 class="mb-4">Ben's Lelang</h2>

                                <div class="border-bottom pb-3 mb-5">
                                    <p>Benn lelang adalah website penyedia lelang online terbesar di dunia dan sudah
                                        dipercaya sejak 1777</p>
                                </div>
                            </div>

                            <h6 class="mb-5">Temui Penjual</h6>
                            <p>para penjual lelang yang sudah dikenal akan terpercayanya ayo tunggu kapan lagi?, hubungi
                                mereka untuk mengenal lebih dalam dan munkin saja anda mendapatkan penawaran dari mereka
                            </p>

                            <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap me-lg-5 mb-5 mb-lg-0">
                                <img src="{{ asset('landing/images/seller1.png') }}"
                                    class="custom-block-bg-overlay-image img-fluid" alt="">

                                <div class="team-info d-flex align-items-center flex-wrap">
                                    <p class="mb-0">Tn.Buas</p>

                                    <ul class="social-icon ms-auto">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook">
                                            </a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-instagram">
                                            </a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-whatsapp">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap mt-4 mt-lg-0 mb-5 mb-lg-0">
                                <img src="{{ asset('landing/images/seller1.png') }}"
                                    class="custom-block-bg-overlay-image img-fluid" alt="">

                                <div class="team-info d-flex align-items-center flex-wrap">
                                    <p class="mb-0">Mr.Hijau Wangsaf</p>

                                    <ul class="social-icon ms-auto">
                                        <li class="social-icon-item">
                                            <a href="https://wa.link/nal611" class="social-icon-link bi-whatsapp">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="featured-section section-padding">
                    <div class="section-overlay"></div>

                    <div class="container">
                        <div class="row">

                            <div class="col-lg-10 col-12 mx-auto">
                                <h2 class="mb-3">Lelang Online</h2>

                                <p>Khusus pengguna baru</p>

                                <strong>Promo Code: BeniGanteng</strong>
                            </div>

                        </div>
                    </div>
                </section>


                <section class="services-section section-padding" id="section_3">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <h2 class="mb-5">Upcoming Auction</h2>
                                <p>Barang-barang lelang yang akan datang!, ayo buruan ambil sekarang sebelum di ambil
                                    orang
                            </div>

                            <div class="col-lg-6 col-12 mb-4">
                                <div class="services-thumb">
                                    <img src="{{ asset('landing/images/antik1.jpg') }}"
                                        class="services-image img-fluid" alt="">

                                    <div class="services-info d-flex align-items-end">
                                        <h4 class="mb-0"></h4>

                                        <strong class="services-thumb-price">$36.00</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 mb-4">
                                <div class="services-thumb">
                                    <img src="images/services/hairdresser-grooming-their-client.jpg"
                                        class="services-image img-fluid" alt="">

                                    <div class="services-info d-flex align-items-end">
                                        <h4 class="mb-0">Washing</h4>

                                        <strong class="services-thumb-price">$25.00</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                <div class="services-thumb">
                                    <img src="images/services/hairdresser-grooming-client.jpg"
                                        class="services-image img-fluid" alt="">

                                    <div class="services-info d-flex align-items-end">
                                        <h4 class="mb-0">Shaves</h4>

                                        <strong class="services-thumb-price">$30.00</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="services-thumb">
                                    <img src="images/services/boy-getting-haircut-salon-front-view.jpg"
                                        class="services-image img-fluid" alt="">

                                    <div class="services-info d-flex align-items-end">
                                        <h4 class="mb-0">Kids</h4>

                                        <strong class="services-thumb-price">$25.00</strong>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="booking-section section-padding" id="booking-section">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-10 col-12 mx-auto">
                                <form action="{{ route('register-store') }}" method="post"
                                    class="custom-form booking-form" id="bb-booking-form" role="form">
                                    <div class="text-center mb-5">
                                        <h2 class="mb-1">Registrasi</h2>

                                        <p>Registrasi sekarang untuk memulai lelang anda</p>
                                    </div>

                                    <div class="booking-form-body">
                                        <div class="row">

                                            <form action="{{ route('register-store') }}" method="POST">
                                                @csrf
                                                <div class="input-group mb-3">
                                                    <input type="text" name="name" value="{{ old('name') }}"
                                                        required autocomplete="name" autofocus
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        placeholder="Nama Lengkap">
                                                    {{-- <div class="input-group-append">
                                                        <div class="input-group-text">

                                                        </div>
                                                    </div> --}}
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="username"
                                                        value="{{ old('username') }}" required autocomplete="name"
                                                        autofocus
                                                        class="form-control @error('username') is-invalid @enderror"
                                                        placeholder="Username anda">
                                                    {{-- <div class="input-group-append">
                                                        <div class="input-group-text">

                                                        </div>
                                                    </div> --}}
                                                    @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="string" name="telepon"
                                                        value="{{ old('telepon') }}" required autocomplete="name"
                                                        autofocus
                                                        class="form-control @error('telepon') is-invalid  @enderror"
                                                        placeholder="Nomor telepon anda">
                                                    {{-- <div class="input-group-append">
                                                        <div class="input-group-text">

                                                        </div>
                                                    </div> --}}
                                                    @error('telepon')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="password" name="password"
                                                        value="{{ old('name') }}" required autocomplete="name"
                                                        autofocus
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        placeholder="Password anda">
                                                    {{-- <div class="input-group-append">
                                                        <div class="input-group-text">

                                                        </div> --}}
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                        </div>
                                        <div class="row">
                                            <!-- /.col -->
                                            <div class="col-12">
                                                <button type="submit"
                                                    class="btn btn-primary btn-block">Register</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                </form>
                                </form>
                            </div>
                        </div>
                </section>


                {{-- <section class="price-list-section section-padding" id="section_4">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-8 col-12">
                                <div class="price-list-thumb-wrap">
                                    <div class="mb-4">
                                        <h2 class="mb-2">Price List</h2>

                                        <strong>Starting at $25</strong>
                                    </div>

                                    <div class="price-list-thumb">
                                        <h6 class="d-flex">
                                            Haircut
                                            <span class="price-list-thumb-divider"></span>

                                            <strong>$32.00</strong>
                                        </h6>
                                    </div>

                                    <div class="price-list-thumb">
                                        <h6 class="d-flex">
                                            Beard Trim
                                            <span class="price-list-thumb-divider"></span>

                                            <strong>$26.00</strong>
                                        </h6>
                                    </div>

                                    <div class="price-list-thumb">
                                        <h6 class="d-flex">
                                            Razor Cut
                                            <span class="price-list-thumb-divider"></span>

                                            <strong>$36.00</strong>
                                        </h6>
                                    </div>

                                    <div class="price-list-thumb">
                                        <h6 class="d-flex">
                                            Shaves
                                            <span class="price-list-thumb-divider"></span>

                                            <strong>$30.00</strong>
                                        </h6>
                                    </div>

                                    <div class="price-list-thumb">
                                        <h6 class="d-flex">
                                            Styling / Color
                                            <span class="price-list-thumb-divider"></span>

                                            <strong>$25.00</strong>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="col-lg-4 col-12 custom-block-bg-overlay-wrap mt-5 mb-5 mb-lg-0 mt-lg-0 pt-3 pt-lg-0">
                                <img src="{{ asset('landing/images/antik2.jpg') }}"
                                    class="custom-block-bg-overlay-image img-fluid" alt="">
                            </div>

                        </div>
                    </div>
                </section> --}}


                <section class="contact-section" id="section_5">
                    <div class="section-padding section-bg">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-8 col-12 mx-auto">
                                    <h2 class="text-center">ITTOU-RYOU-DAN</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-padding">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <h5 class="mb-3"><strong>Contact</strong> Developer</h5>

                                    <p class="text-white d-flex mb-1">
                                        <a href="https://wa.link/pjivn5" class="site-footer-link">
                                            Beni Akbar
                                        </a>
                                    </p>

                                    <p class="text-white d-flex">
                                        <a href="beniakbar555@gmail.com" class="site-footer-link">
                                            beniakbar555@gmail.com
                                        </a>
                                    </p>

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="https://web.facebook.com/beni.akbar.5458/"
                                                class="social-icon-link bi-facebook">
                                            </a>
                                        </li>

                                        {{-- <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter">
                                            </a>
                                        </li> --}}

                                        <li class="social-icon-item">
                                            <a href="https://instagram.com/benny.a.k?igshid=ZDdkNTZiNTM="
                                                class="social-icon-link bi-instagram">
                                            </a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="https://www.youtube.com/channel/UC04gRs2XdThEtj-OHt2r9ZQ"
                                                class="social-icon-link bi-youtube">
                                            </a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="https://wa.link/pjivn5" class="social-icon-link bi-whatsapp">
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-5 col-12 contact-block-wrap mt-5 mt-lg-0 pt-4 pt-lg-0 mx-auto">
                                    <div class="contact-block">
                                        <h6 class="mb-0">
                                            <i class="custom-icon bi-shop me-3"></i>

                                            <strong>Feel Free To Chat</strong>

                                            <span class="ms-auto">10:00 AM - 8:00 PM</span>
                                        </h6>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12 mx-auto mt-5 pt-5">
                                    <iframe class="google-map"
                                        src="https://www.google.com/maps/embed?pb=vR9oXfSofBZYAdZy9" width="100%"
                                        height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <footer class="site-footer">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <h4 class="site-footer-title mb-4">Thanks To</h4>
                            </div>

                            <div class="col-lg-4 col-md-6 col-11">
                                <div class="site-footer-thumb">
                                    <strong class="mb-1">Ahmad Jumadi</strong>

                                    <p>My teacher!</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-11">
                                <div class="site-footer-thumb">
                                    <strong class="mb-1">My Friends</strong>

                                    <p>Thanks to my Friends who support me create this web</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-11">
                                <strong class="mb-1">SMKN 1 Karawang</strong>

                                <p>My school!</p>
                            </div>
                        </div>
                    </div>

                    <div class="site-footer-bottom">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-8 col-12 mt-4">
                                    <p class="copyright-text mb-0">Copyright © 2023 Beni Akbar
                                        - Design: <a href="https://templatemo.com" rel="nofollow"
                                            target="_blank">TemplateMo</a></p>
                                </div>

                                <div class="col-lg-2 col-md-3 col-3 mt-lg-4 ms-auto">
                                    <a href="#section_1" class="back-top-icon smoothscroll" title="Back Top">
                                        <i class="bi-arrow-up-circle"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </footer>
            </div>

            <!-- JAVASCRIPT FILES -->
            <script src="{{ asset('landing/js/jquery.min.js') }}"></script>
            <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('landing/js/click-scroll.js') }}"></script>
            <script src="{{ asset('landing/js/custom.js') }}"></script>

</body>

</html>
