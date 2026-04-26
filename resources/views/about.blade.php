@extends('layouts.app')

@section('content')
    
   <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('evans-master/images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center text-center">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-3 bread">Certificates</h2>
            <p style="color:#aaa;">
            Showcasing my learning journey and accomplishments
            </p>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span> Work <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<section class="certificate-section mt-3">
  <div class="container">

   

</div>
      </div>
    </div>

    <div class="row g-4">

  <!-- 1 -->
  <div class="col-md-4 portfolio-item mb-4">
    <div class="project-card">
      <img src="https://drive.google.com/thumbnail?id=16D-7DK76JbQ0EE14KTF63GTNrxGbLQzm&sz=w1000">
      <div class="overlay">
        <h4>LKMM Training</h4>
        <p>Politeknik Negeri Jember • 2024</p>
        <button data-toggle="modal" data-target="#modalCert1">View</button>
      </div>
    </div>
  </div>

  <!-- 2 -->
  <div class="col-md-4 portfolio-item mb-4">
    <div class="project-card">
      <img src="https://drive.google.com/thumbnail?id=1fJkCJtf9IFSIynQi3PwHefDLDRrdz3oQ&sz=w1000">
      <div class="overlay">
        <h4>EPT Certificate</h4>
        <p>Politeknik Negeri Jember • 2025</p>
        <button data-toggle="modal" data-target="#modalCert2">View</button>
      </div>
    </div>
  </div>

  <!-- 3 -->
<div class="col-md-4 portfolio-item mb-4">
    <div class="project-card">
      <img src="https://drive.google.com/thumbnail?id=1CrlK8FqEjlC8v1GahnqZXs3afMncr8JT&sz=w1000">
      <div class="overlay">
        <h4>UI/UX Study Club</h4>
        <p>Politeknik Negeri Jember • 2025</p>
        <button data-toggle="modal" data-target="#modalCert3">View</button>
      </div>
    </div>
  </div>

  <!-- 4 -->
<div class="col-md-4 portfolio-item mb-4">
    <div class="project-card">
      <img src="https://drive.google.com/thumbnail?id=1Un3yNc-NxWNG2hmSXmk8NIYTXC-QLm7w&sz=w1000">
      <div class="overlay">
        <h4>Bela Negara Training</h4>
        <p>Politeknik Negeri Jember • 2024</p>
        <button data-toggle="modal" data-target="#modalCert4">View</button>
      </div>
    </div>
  </div>

  <!-- 5 -->
  <div class="col-md-4 portfolio-item mb-4">
    <div class="project-card">
      <img src="https://drive.google.com/thumbnail?id=1SNcREFXMWpM-lNKSY6-6B3b9N6taZ6V1&sz=w1000">
      <div class="overlay">
        <h4>Global Business Insight</h4>
        <p>Polije x Johns Hopkins • 2026</p>
        <button data-toggle="modal" data-target="#modalCert5">View</button>
      </div>
    </div>
  </div>

  <!-- 6 -->
   
  <div class="col-md-4 portfolio-item mb-4">
    <div class="project-card">
      <img src="https://drive.google.com/thumbnail?id=1ZiCTIwqndDJnRYThstnjDm8-5avxNtwd&sz=w1000">
      <div class="overlay">
        <h4>SIPORA & Paraphrasing</h4>
        <p>Politeknik Negeri Jember • 2025</p>
        <button data-toggle="modal" data-target="#modalCert6">View</button>
      </div>
    </div>
  </div>

</div>
  </div>
</section>
   
<!-- MODAL 1 -->
<div class="modal fade" id="modalCert1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>UI/UX Study Club</h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="https://drive.google.com/thumbnail?id=16D-7DK76JbQ0EE14KTF63GTNrxGbLQzm&sz=w1000" class="img-fluid mb-3">

        <p>
          This certificate was awarded for participating in the <b>UI/UX Study Club</b> organized by the Informatics Engineering Student Association at Politeknik Negeri Jember.
        </p>

        <p>
          The program focused on user-centered design, interface structuring, and improving user experience through real case studies. I gained hands-on experience in creating wireframes, designing interfaces, and understanding user behavior.
        </p>

        <p>
          This experience strengthened my ability to integrate UI/UX principles into web development, ensuring both functionality and usability.
        </p>

        <a href="https://drive.google.com/file/d/16D-7DK76JbQ0EE14KTF63GTNrxGbLQzm/view" target="_blank" class="btn btn-primary">
          View Certificate
        </a>
      </div>
    </div>
  </div>
</div>


<!-- MODAL 2 -->
<div class="modal fade" id="modalCert2">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Paraphrasing & SIPORA Training</h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="https://drive.google.com/thumbnail?id=1fJkCJtf9IFSIynQi3PwHefDLDRrdz3oQ&sz=w1000" class="img-fluid mb-3">

        <p>
          This certificate represents my participation in a training session on <b>Paraphrasing and SIPORA (Academic Writing System)</b>.
        </p>

        <p>
          The training focused on improving academic writing skills, including paraphrasing techniques, avoiding plagiarism, and managing references properly.
        </p>

        <p>
          This experience enhanced my ability to produce structured documentation, which is essential in software development and technical reporting.
        </p>

        <a href="https://drive.google.com/file/d/1fJkCJtf9IFSIynQi3PwHefDLDRrdz3oQ/view" target="_blank" class="btn btn-primary">
          View Certificate
        </a>
      </div>
    </div>
  </div>
</div>


<!-- MODAL 3 -->
<div class="modal fade" id="modalCert3">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Global Business Insight</h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="https://drive.google.com/thumbnail?id=1CrlK8FqEjlC8v1GahnqZXs3afMncr8JT&sz=w1000" class="img-fluid mb-3">

        <p>
          This certificate was awarded for participating in the <b>Global Business Insight Virtual Session</b>, a collaboration between Politeknik Negeri Jember and Johns Hopkins Carey Business School.
        </p>

        <p>
          The program provided insights into global business trends, digital transformation, and career opportunities in an international environment.
        </p>

        <p>
          This experience expanded my perspective on how technology and business work together in building impactful digital solutions.
        </p>

        <a href="https://drive.google.com/file/d/1CrlK8FqEjlC8v1GahnqZXs3afMncr8JT/view" target="_blank" class="btn btn-primary">
          View Certificate
        </a>
      </div>
    </div>
  </div>
</div>


<!-- MODAL 4 -->
<div class="modal fade" id="modalCert4">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Basic Leadership Training</h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="https://drive.google.com/thumbnail?id=1Un3yNc-NxWNG2hmSXmk8NIYTXC-QLm7w&sz=w1000" class="img-fluid mb-3">

        <p>
          This certificate was awarded for completing <b>Basic Leadership Training</b> at Politeknik Negeri Jember.
        </p>

        <p>
          The program focused on leadership skills, teamwork, communication, and responsibility in organizational settings.
        </p>

        <p>
          This experience supports my role in team-based projects, especially as a Scrum Master, where coordination and leadership are essential.
        </p>

        <a href="https://drive.google.com/file/d/1Un3yNc-NxWNG2hmSXmk8NIYTXC-QLm7w/view" target="_blank" class="btn btn-primary">
          View Certificate
        </a>
      </div>
    </div>
  </div>
</div>


<!-- MODAL 5 -->
<div class="modal fade" id="modalCert5">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Global Business & Technology Session</h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="https://drive.google.com/thumbnail?id=1SNcREFXMWpM-lNKSY6-6B3b9N6taZ6V1&sz=w1000" class="img-fluid mb-3">

        <p>
          This certificate represents participation in a virtual session focused on global business trends and technology development.
        </p>

        <p>
          The session provided valuable insights into how digital transformation affects industries and how technology skills can be applied in real-world scenarios.
        </p>

        <p>
          This experience improved my understanding of combining technical skills with business awareness.
        </p>

        <a href="https://drive.google.com/file/d/1SNcREFXMWpM-lNKSY6-6B3b9N6taZ6V1/view" target="_blank" class="btn btn-primary">
          View Certificate
        </a>
      </div>
    </div>
  </div>
</div>


<!-- MODAL 6 -->
<div class="modal fade" id="modalCert6">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Scientific Writing & SIPORA</h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="https://drive.google.com/thumbnail?id=1ZiCTIwqndDJnRYThstnjDm8-5avxNtwd&sz=w1000" class="img-fluid mb-3">

        <p>
          This certificate was awarded for participating in a training session on <b>scientific writing and reference management using SIPORA</b>.
        </p>

        <p>
          The program focused on structuring academic writing, managing citations, and ensuring originality in research documentation.
        </p>

        <p>
          This experience strengthens my ability to create professional documentation, reports, and technical writing in software development projects.
        </p>

        <a href="https://drive.google.com/file/d/1ZiCTIwqndDJnRYThstnjDm8-5avxNtwd/view" target="_blank" class="btn btn-primary">
          View Certificate
        </a>
      </div>
    </div>
  </div>
</div>
@endsection