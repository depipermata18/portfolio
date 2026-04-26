<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Evans - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('evans-master/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('evans-master/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('evans-master/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('evans-master/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('evans-master/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('evans-master/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('evans-master/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('evans-master/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('evans-master/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('evans-master/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('evans-master/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('evans-master/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>
    <body>
        <style>
        /* ================= ROOT ================= */
/* ================= ROOT ================= */
:root {
  --primary: #fbbf24;
  --primary-soft: #fde68a;
  --primary-dark: #f59e0b;
  --gradient: linear-gradient(135deg, #fde68a, #fd7e14);

  --text-light: #ffffff;
  --text-muted: #cbd5e1;
}

/* ================= GLOBAL ================= */
body {
  background: radial-gradient(circle at top, #0f172a, #020617);
  color: var(--text-light);
}

/* paksa semua text putih */
h1, h2, h3, h4, h5, h6,
p, span, a {
  color: var(--text-light);
}

p {
  color: var(--text-muted);
}

/* ================= HERO ================= */
.hero-wrap .overlay {
  pointer-events: none;
}

/* ================= SECTION ================= */
.certificate-section {
  margin-top: 80px;
  padding: 80px 0;
  background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.02));
  border-top: 1px solid rgba(255,255,255,0.1);
}

/* ================= GRID ================= */
.projects-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 30px;
}

/* ================= CARD ================= */
.project-card {
  position: relative;
  background: rgba(255,255,255,0.05);
  border-radius: 20px;
  overflow: hidden;
  transition: 0.4s;
  border: 1px solid rgba(255,255,255,0.1);
}

.project-card:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow: 0 20px 40px rgba(0,0,0,0.6);
}

/* ================= IMAGE ================= */
.project-card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
}

/* ================= CONTENT ================= */
.project-content {
  padding: 20px;
}

.project-content h3 {
  font-size: 20px;
  font-weight: 600;
}

.project-content p {
  font-size: 14px;
  color: var(--text-muted);
}

/* ================= FILTER ================= */
.filters {
  margin-top: 20px;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 10px;
}

.filters button {
  padding: 10px 20px;
  border-radius: 999px;
  border: 1px solid rgba(253,126,20,0.3);
  background: rgba(253,126,20,0.08);
  color: #fd7e14;
  font-size: 13px;
  font-weight: 500;
  cursor: pointer;
  transition: 0.3s;
}

.filters button:hover {
  background: rgba(253,126,20,0.2);
  transform: translateY(-2px);
}

.filters button.active {
  background: linear-gradient(135deg, #facc15, #fd7e14);
  color: #000;
  border: none;
  font-weight: 600;
  box-shadow: 0 5px 15px rgba(253,126,20,0.4);
}

/* ================= TAG ================= */
.tags span {
  display: inline-block;
  background: rgba(253,126,20,0.15);
  color: var(--primary);
  padding: 5px 10px;
  border-radius: 10px;
  margin-right: 5px;
  font-size: 12px;
}

/* ================= BUTTON ================= */
.btn-detail {
  margin-top: 15px;
  padding: 8px 15px;
  border-radius: 10px;
  background: var(--gradient);
  color: #000;
  border: none;
  cursor: pointer;
  font-weight: 600;
  transition: 0.3s;
}

.btn-detail:hover {
  background: linear-gradient(135deg, #fbbf24, #ea580c);
  color: #fff;
}

/* ================= OVERLAY ================= */
.overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(2,6,23,0.95), rgba(2,6,23,0.3));
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  padding: 20px;
  color: #fff;
  opacity: 0;
  transition: 0.4s;
}

.project-card:hover .overlay {
  opacity: 1;
}

.overlay h4 {
  font-size: 18px;
  font-weight: 600;
  color: var(--primary);
}

.overlay p {
  font-size: 13px;
  color: var(--text-muted);
}

/* ================= BADGE ================= */
.badge-cert {
  display: inline-block;
  background: rgba(253,126,20,0.15);
  color: var(--primary);
  padding: 5px 10px;
  border-radius: 10px;
  font-size: 11px;
  margin-bottom: 8px;
}

/* ================= MODAL ================= */
.modal-content {
  background: #111;
  color: #fff;
  border-radius: 15px;
}

/* ================= CONTACT ================= */
.contact-section {
  padding: 120px 0;
}

/* CARD */
.contact-card,
.contact-wrapper {
  max-width: 800px;
  margin: auto;
  padding: 60px 40px;
  border-radius: 30px;

  background: rgba(255,255,255,0.04);
  backdrop-filter: blur(20px);

  border: 1px solid rgba(255,255,255,0.1);

  box-shadow: 
    0 0 40px rgba(0,0,0,0.6),
    0 0 60px rgba(251,191,36,0.1);

  text-align: center;
  position: relative;
  overflow: hidden;
}

/* glow */
.contact-card::before {
  content: "";
  position: absolute;
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, rgba(251,191,36,0.2), transparent);
  top: -100px;
  right: -100px;
  filter: blur(80px);
}

/* TITLE */
.contact-title,
.title {
  font-size: 40px;
  font-weight: 700;
  margin-bottom: 10px;
  color: #fff !important;
}

/* SUBTITLE */
.contact-subtitle,
.subtitle {
  color: var(--text-muted);
  max-width: 550px;
  margin: 0 auto 40px;
  font-size: 15px;
  line-height: 1.6;
}

/* ICON GROUP */
.icon-group {
  display: flex;
  justify-content: center;
  gap: 18px;
  flex-wrap: wrap;
  margin-bottom: 30px;
}

/* ================= ICON FIX (ANTI BUG) ================= */
.icon-group::before,
.icon-group::after,
.icon-box::before,
.icon-box::after {
  content: none !important;
  display: none !important;
}

/* ICON BOX FINAL */
.icon-box {
  width: 65px;
  height: 65px;
  border-radius: 18px;

  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.1);

  display: flex;
  align-items: center;
  justify-content: center;

  color: #e5e7eb;
  font-size: 22px;

  transition: 0.3s;
  text-decoration: none;
}

.icon-box i {
  display: inline-block;
}

/* HOVER */
.icon-box:hover {
  background: var(--gradient);
  color: #000;
  transform: translateY(-6px) scale(1.1);
  box-shadow: 0 10px 25px rgba(253,126,20,0.5);
}

/* LOCATION */
.contact-location,
.location {
  font-size: 14px;
  color: var(--text-muted);
}

.contact-location i,
.location i {
  color: var(--primary);
  margin-right: 5px;
}

/* ================= SPACING ================= */
.portfolio-item {
  margin-bottom: 25px;
}
/* ================= BUTTON VIEW FIX ================= */
.overlay button {
  padding: 8px 18px;
  border-radius: 12px;
  border: none;

  background: linear-gradient(135deg, #fde68a, #fd7e14);
  color: #000;

  font-size: 13px;
  font-weight: 600;

  cursor: pointer;
  transition: all 0.3s ease;

  width: fit-content;
  min-width: 90px;

  box-shadow: 0 5px 15px rgba(253,126,20,0.3);
}

/* HOVER */
.overlay button:hover {
  background: linear-gradient(135deg, #fbbf24, #ea580c);
  color: #fff;

  transform: translateY(-3px) scale(1.05);

  box-shadow: 0 10px 25px rgba(253,126,20,0.6);
}

/* ACTIVE (klik) */
.overlay button:active {
  transform: scale(0.95);
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
  .projects-grid {
    grid-template-columns: 1fr;
  }
}
        </style>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="/">Devi Permatasari</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/about" class="nav-link">Certificates</a></li>
        <li class="nav-item"><a href="/work" class="nav-link">Work</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- END NAV -->


<!-- 🔥 INI PENTING -->
@yield('content')

<!-- FOOTER -->
<footer class="ftco-footer ftco-section">
  <div class="container text-center">
    <p>© {{ date('Y') }} DEVI Portfolio</p>
  </div>
</footer>

<!-- SCRIPT -->
<script src="{{ asset('evans-master/js/jquery.min.js') }}"></script>
<script src="{{ asset('evans-master/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('evans-master/js/main.js') }}"></script>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('evans-master/js/jquery.min.js') }}"></script>
  <script src="{{ asset('evans-master/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('evans-master/js/popper.min.js') }}"></script>
  <script src="{{ asset('evans-master/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('evans-master/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('evans-master/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('evans-master/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('evans-master/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('evans-master/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('evans-master/js/aos.js') }}"></script>
  <script src="{{ asset('evans-master/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('evans-master/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('evans-master/js/google-map.js') }}"></script>
  <script src="{{ asset('evans-master/js/main.js') }}"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const buttons = document.querySelectorAll(".filters button");
  const cards = document.querySelectorAll(".project-card");

  buttons.forEach(button => {
    button.addEventListener("click", function () {

      // set active
      buttons.forEach(btn => btn.classList.remove("active"));
      this.classList.add("active");

      const filter = this.dataset.filter;

      cards.forEach(card => {
        const category = card.dataset.category;

        if (filter === "all" || category === filter) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });

    });
  });

});
</script>

</body>
</html>