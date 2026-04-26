@extends('layouts.app')
 

@section('content')
   <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('evans-master/images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center text-center">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-3 bread">Projects and Experiences</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span> Work <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<section class="projects-section mt-5 pt-5">
  <div class="container">

    <!-- HEADER -->
    <div class="projects-header text-center mb-4">

        
      <div class="filters mt-3">
        <button class="active" data-filter="all">All</button>
        <button data-filter="desktop">Desktop</button>
        <button data-filter="web">Web</button>
        <button data-filter="ui">UI/UX</button>
        <button data-filter="qa">QA Tester</button>
      </div>
  

    </div>

    <!-- GRID -->
    <div class="projects-grid">

      <!-- GO-BOOK -->
      <div class="project-card" data-category="desktop">
        <img src="{{ asset('evans-master/images/gobook.png') }}" alt="">
        <div class="project-content">
          <h3>GO-BOOK POS System</h3>
          <p>
            Desktop-based cashier application using Java with UI/UX design and Scrum development process.
          </p>
          <div class="tags">
            <span>Java</span>
            <span>NetBeans</span>
            <span>UI/UX</span>
            <button class="btn-detail" data-toggle="modal" data-target="#modalGoBook">
  View Detail
</button>
          </div>
        </div>
      </div>

      <!-- MOOD FOOD -->
      <div class="project-card" data-category="ui">
        <img src="{{ asset('evans-master/images/mood.png') }}" alt="">
        <div class="project-content">
          <h3>Food Ordering by Mood</h3>
          <p>
            Mobile app that recommends food based on user mood with modern UI/UX design.
          </p>
          <div class="tags">
            <span>Figma</span>
            <span>Mobile</span>
            <button class="btn-detail" data-toggle="modal" data-target="#modalMood">
  View Detail
</button>
          </div>
        </div>
      </div>

      <!-- E-BLK -->
      <div class="project-card" data-category="web">
        <img src="{{ asset('evans-master/images/e-blk.png') }}" alt="">
        <div class="project-content">
          <h3>e-BLK System</h3>
          <p>
            Web-based test selection system built with PHP and MySQL.
          </p>
          <div class="tags">
            <span>PHP</span>
            <span>MySQL</span>
            <button class="btn-detail" data-toggle="modal" data-target="#modalEblk">
  View Detail
</button>
          </div>
        </div>
      </div>

      <!-- SIMPELSI -->
      <div class="project-card" data-category="qa">
        <img src="{{ asset('evans-master/images/simpelsi.png') }}" alt="">
        <div class="project-content">
          <h3>SIMPELSI QA Testing</h3>
          <p>
            Software testing and quality assurance to ensure system reliability.
          </p>
          <div class="tags">
            <span>QA</span>
            <span>Testing</span>
            <button class="btn-detail" data-toggle="modal" data-target="#modalSimpelsi">
  View Detail
</button>
        
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="modal fade" id="modalGoBook" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">GO-BOOK POS System</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <img src="{{ asset('evans-master/images/gobook.png') }}" class="img-fluid mb-3">

        <p>
          Aplikasi kasir berbasis desktop menggunakan Java dan NetBeans.
          Mendukung transaksi penjualan, manajemen produk, dan perhitungan pembayaran.
        </p>

        <p>
          Peran: Software Developer, UI/UX Designer, Scrum Master.
        </p>

        <a href="https://pameran-jti.polije.ac.id/x23241_ng/product/129/go-book"
           target="_blank" class="btn btn-primary">
          🔗 Lihat Project
        </a>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="modalMood" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Food Ordering by Mood</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <img src="{{ asset('evans-master/images/mood.png') }}" class="img-fluid mb-3">

        <p>
          Aplikasi mobile yang merekomendasikan makanan berdasarkan mood pengguna.
        </p>

        <p>
          Fokus pada UI/UX design, user flow, dan pengalaman pengguna.
        </p>

      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="modalEblk" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">e-BLK System</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <img src="{{ asset('evans-master/images/e-blk.png') }}" class="img-fluid mb-3">

        <p>
          Aplikasi web untuk sistem seleksi online berbasis PHP & MySQL.
        </p>

        <p>
          Mengelola data peserta, soal ujian, dan hasil seleksi.
        </p>

        <a href="https://e-blk.pbltifnganjuk.com/"
           target="_blank" class="btn btn-success">
          🌐 Kunjungi Website
        </a>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="modalSimpelsi" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">SIMPELSI QA Testing</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <img src="{{ asset('evans-master/images/simpelsi.png') }}" class="img-fluid mb-3">

        <p>
          Melakukan pengujian sistem untuk memastikan kualitas aplikasi.
        </p>

        <p>
          Termasuk bug testing, validasi fitur, dan dokumentasi hasil pengujian.
        </p>

      </div>

    </div>
  </div>
</div>

@endsection