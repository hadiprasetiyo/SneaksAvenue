@extends('frontend.layouts.master')

@section('title', 'Home')
@section('content')
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
        <div>
          <h1>Selamat Datang di SneaksAvenue</h1>
          <p>
            Selamat datang di SneaksAvenue, tujuan Anda untuk mendapatkan sneaker premium dari merek-merek paling terkenal di industri ini. Kami berkomitmen untuk menyediakan Anda dengan opsi sepatu terbaru dan paling stylish untuk meningkatkan gaya Anda di jalanan.
          </p>
          <p>
            Di SneaksAvenue, kami percaya bahwa setiap langkah penting, dan dengan koleksi sneaker yang kami kurasi, Anda dapat membuat setiap langkah menjadi pernyataan. Jelajahi beragam merek ikonis kami dan temukan pasangan sempurna untuk mengekspresikan individualitas Anda.
          </p>
        </div>
      </div>
      <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
        <img src="{{ asset('/landingpage/assets/img/landingpage.png') }}" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>

<section id="features" class="features">
  <div class="container">

    <div class="section-title">
      <h2>Cara Kerja Kami</h2>
      <p>Dengan SneaksAvenue, Anda dapat dengan mudah menemukan dan membeli sneaker favorit Anda dari kenyamanan rumah Anda sendiri. Berikut cara kerjanya:</p>
    </div>

    <div class="row no-gutters">
      <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
        <div class="content d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-md-6 icon-box" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <h4>1</h4>
              <p>Jelajahi website kami dan temukan pasangan sneaker yang sempurna dari koleksi kami yang luas.</p>
            </div>
            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-cube-alt"></i>
              <h4>2</h4>
              <p>Lakukan pemesanan Anda secara aman dan nyaman melalui proses checkout online kami.</p>
            </div>
            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-images"></i>
              <h4>3</h4>
              <p>Tim kami memverifikasi dan memproses pesanan Anda dengan cepat untuk memastikan pengalaman berbelanja yang lancar.</p>
            </div>
            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-shield"></i>
              <h4>4</h4>
              <p>Sneaker Anda dikemas dengan hati-hati dan dikirimkan ke pintu depan Anda dengan cepat.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="{{ asset('Landingpage/assets/img/3.png') }}" class="img-fluid" alt="">
      </div>
    </div>

  </div>
</section>

<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Kenalan dengan Tim Kami</h2>
      <p>
        Kami adalah tim penggemar sneaker yang berdedikasi untuk memberikan Anda pilihan sepatu terbaik. Pelajari lebih lanjut tentang anggota tim kami di bawah ini:
      </p>
    </div>
</section>

@endsection
