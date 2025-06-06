<?php
include("connect.php");
if (isset($_POST['sub'])) {
    $uiser_id = $_POST['user_id'];
    $password = $_POST['password'];

    $query = "select campus from login where user_id='$uiser_id' and password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $campus = $row['campus'];
        if ($campus == "Gida") {
            header("Location: gida-campus/admin/dashboard.php");
        } else if ($campus == "Buxipur") {
            header("Location: buxipur-campus/admin/dashboard");
        } else {
            header("Location:admin/dashboard.php");
        }
    } else {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid User ID or Password',
                    text: 'Please try again.',
                    confirmButtonText: 'OK'
                });
            </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Islamia College Of Commerce</title>
    

</head>

<body>
    <header>
        <div class="header-top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-9 d-flex justify-content-start">
                        <a href="index.php" class="logo"><img src="images/logo.png" alt="Logo" class="logo"></a>
                        <div class="banner-logo">
                            <h2 class="mt-2 logo-text">
                                ISLAMIA COLLEGE OF COMMERCE <br>
                            </h2>
                            <h5>Preservance Commands Success</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-3 d-flex justify-content-end">

                        <div class="admission d-none d-lg-block">
                            <a href="#" class="pgdm-btn">Admission</a>
                        </div>
                        <button class="navbar-toggler menu-btn d-block d-lg-none" type="button"
                            data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <button class="btn btn-primary login" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="fa fa-user"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav w-100 d-flex justify-content-between">

                        <li class="nav-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="nav-link d-block d-lg-none">
                                Admission
                            </a>
                        </li>

                </div>
            </div>
        </nav>
    </header>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/banner2.jpg" class="d-block w-100" alt="...">
            </div>
             <div class="carousel-item">
                <img src="images/toppers.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev carousel-btn" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="container-fluid campus">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-6">
                <a href="gida-campus/index.php" class="text-decoration-none">
                    <div class="card shadow shadow-primary floating-button">
                        <div class="card-body">
                            <img src="images/college-image.jpg" alt="Islamia College of Commerce - Gida Campus" />
                            <p class="text-primary fw-bold mt-3">Islamia College of Commerce - Gida Campus</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6">
                <a href="buxipur-campus/index.php" class="text-decoration-none">
                    <div class="card shadow shadow-primary floating-button">
                        <div class="card-body">
                            <img src="images/banner2.jpg" alt="Islamia College of Commerce - Buxipur Campus" />
                            <p class="text-primary fw-bold mt-3">Islamia College of Commerce - Buxipur Campus</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>
    <section class="about-section container my-5" aria-label="About Islamia College of Commerce">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="about-content">
                    <div class="about-text">
                        <h2>Welcome to<br>Islamia College of Commerce</h2>
                        <p class="justify">Empowering Futures Through Quality Education</p>
                        <p class="justify">Islamia College of Commerce, affiliated with Deen Dayal Upadhyay University, Gorakhpur, is
                            recognized as one of the best colleges of commerce in Gorakhpur, dedicated to academic
                            excellence and holistic development. With a reputation built on trust, quality education, and
                            consistent performance, we have emerged as a leading name in commerce, management, and
                            technology education in the region.</p>
                        <p class="justify">As the best commerce college in Gorakhpur, we aim to nurture the next generation of professionals
                            and entrepreneurs through our industry-relevant undergraduate and postgraduate programs: BBA,
                            BCA, B.Com, B.Sc (Bio &amp; Math), M.Com, and M.Sc (Botany). Our well-structured curriculum
                            seamlessly blends theoretical concepts with practical applications, preparing students for
                            real-world challenges and dynamic career opportunities.</p>
                        <p class="justify">Rooted in strong values, driven by innovation, and supported by experienced faculty, Islamia
                            College of Commerce provides a vibrant learning environment where students evolve
                            intellectually, professionally, and personally.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12" style="align-content: center;">
                <div class="about-image">
                    <img src="images/banner3.jpg" class="d-block w-100" alt="About Islamia College of Commerce" />
                </div>
            </div>
        </div>
    </section>

    <section class="welcome-section container">
        <h3>Accredition & Recognition</h3>
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">30+</div>
                <div>Years of Excellence</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">50+</div>
                <div>Eminent Faculty</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">100+</div>
                <div>Prominent Recruiters</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">15k+</div>
                <div>Alumni Network</div>
            </div>
        </div>
        <section>

        </section>
    </section>

    <section class="message-section container" aria-label="Message from Manager">
        <div class="message-content">
            <div class="message-text">
                <p>Two words...</p>
                <p class="justify">In this modern era, everyone knows and understands the importance of education. Keeping the
                    importance of education in mind, Islamia College of Commerce was established in Gorakhpur. The
                    college developed due to the hard work of the teachers and staff here and the discipline and
                    dedication of the students, for which I express my heartfelt gratitude to all the students,
                    teachers and staff.</p>
                <p class="justify">The management of Islamia College of Commerce is constantly striving to provide competitive and
                    excellent education to the youth in the field of higher education. In this sequence, the college
                    management runs classes of B.Com. / M.Com. / B.Sc. (Biology and Mathematics) / M.Sc. (Botany)
                    and B.C.A. courses along with B.Pharm., D.Pharm., B.Com. and B.C.A. classes in GIDA Campus.</p>
                <p class="justify">I wish that everyone associated with the college progresses in every sphere of life with the
                    mantra of 'Sabka Sahayog' and 'Sabka Yogdan', which will take our college to new heights.
                </p>

            </div>
            <div class="message-image">
                <img src="images/Shoeb-manager.png" alt="Shoeb Ahmed, Manager/Secretary" />
                <p><strong>Mr Shoeb Ahmed<br>Manager/ Secretary</strong></p>
            </div>
        </div>
    </section>
    </main>

    <section class="container my-5" aria-label="Our Students">
        <h1 class="text-center mb-4" style="color: #00378b;">Our Students</h1>
        <div id="studentsCarousel" class="carousel slide topper" data-bs-interval="2500" data-bs-ride="carousel" aria-label="Student carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" role="group" aria-label="Student 1">
                    <div class="card student-card mx-auto" style="width: 18rem;" tabindex="0">
                        <img src="images/student1.jpg" class="card-img-top" alt="Student 1">
                    </div>
                </div>
                <div class="carousel-item" role="group" aria-label="Student 2">
                    <div class="card student-card mx-auto" style="width: 18rem;" tabindex="0">
                        <img src="images/student2.jpg" class="card-img-top" alt="Student 2">
                    </div>
                </div>
                <div class="carousel-item" role="group" aria-label="Student 3">
                    <div class="card student-card mx-auto" style="width: 18rem;" tabindex="0">
                        <img src="images/student3.jpg" class="card-img-top" alt="Student 3">
                    </div>
                </div>
                <div class="carousel-item" role="group" aria-label="Student 4">
                    <div class="card student-card mx-auto" style="width: 18rem;" tabindex="0">
                        <img src="images/student4.jpeg" class="card-img-top" alt="Student 3">
                    </div>
                </div>
                <div class="carousel-item" role="group" aria-label="Student 5">
                    <div class="card student-card mx-auto" style="width: 18rem;" tabindex="0">
                        <img src="images/student5.jpeg" class="d-block w-100" alt="Student 3">
                    </div>
                </div>
                <div class="carousel-item" role="group" aria-label="Student 6">
                    <div class="card student-card mx-auto" style="width: 18rem;" tabindex="0">
                        <img src="images/student6.jpeg" class="card-img-top" alt="Student 3">
                    </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#studentsCarousel" data-bs-slide="prev"
                aria-label="Previous Student">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#studentsCarousel" data-bs-slide="next"
                aria-label="Next Student">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </section>
    <div class="container-fluid px-lg-5 my-5">
    <div class="row g-4">
      <!-- Affiliated To -->
      <div class="col-lg-4 col-12">
        <div class="card h-100 border-success shadow-sm">
          <div class="card-body">
            <div class="text-center mb-3">
              <img src="gida-campus/asset/images/deen-dayal-updhayay-university.jpg" class="img-fluid" alt="Affiliation Icon" style="height: 60px;">
              <h4 class="heading mt-2">Affiliated To</h4>
              <h6 class="card-subtitle mb-2 text-muted">DDU Gorakhpur University</h6>
            </div>
            <p class="card-text text-justify">
              Islamia College of Commerce, affiliated with Deen Dayal Upadhyay Gorakhpur University, is recognized by the UGC under Section 2(f) and 12(B) of the UGC Act, 1956. The college is accredited by NAAC, reflecting its commitment to quality education and holistic student development.
            </p>
            
          </div>
        </div>
      </div>

      <!-- Approved By -->
      <div class="col-lg-4 col-12">
        <div class="card h-100 border-info shadow-sm">
          <div class="card-body">
            <div class="text-center mb-3">
              <img src="gida-campus/asset/images/aicte.png" class="img-fluid" alt="AICTE Icon" style="height: 60px;">
              <h4 class="heading mt-2">Approved By</h4>
              <h6 class="card-subtitle mb-2 text-muted">AICTE, New Delhi</h6>
            </div>
            <p class="card-text text-justify">
              Islamia College of Commerce is approved by the All India Council for Technical Education (AICTE), New Delhi. This approval ensures the institution adheres to AICTE standards, delivering industry-relevant knowledge and a strong academic foundation.
            </p>
            
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="card h-100 border-primary shadow-sm">
          <div class="card-body">
            <div class="text-center mb-3">
              <img src="gida-campus/asset/images/ibm.jpg" alt="IBM" class="img-fluid rounded shadow-sm" style="width: 60px;">
              <img src="gida-campus/asset/images/timespro.jpg" alt="TimesPro" class="img-fluid rounded shadow-sm" style="width: 60px;">
              <img src="gida-campus/asset/images/vodafon.png" alt="Vodafone" class="img-fluid rounded shadow-sm" style="width: 60px;">

              <h4 class="heading mt-2">Our Tie-UP</h4>
              <h6 class="card-subtitle mb-2 text-muted">Close Tie UP With Industry</h6>
            </div>
            <p class="card-text text-justify">
              At Islamia College of Commerce, our academic tie-ups with leading industry giants are not just about partnerships — they are about building futures. Through these collaborations, our students develop vital competencies like project management, business communication, and team-building — skills essential across every career path and sector.
            </p>
          
          </div>
        </div>
      </div>
    </div>
  </div>
    <section class="container-fluid my-5 p-5" aria-label="Top Recruiters">
        <h2 class="heading mb-5 text-center" style="color: #00317a; font-weight: 700; letter-spacing: 1.5px;">Top Recruiters</h2>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="logo-marquee" role="list" aria-label="Scrolling list of top recruiters logos" style="background: white; border-radius: 12px; box-shadow: 0 4px 12px rgba(1, 163, 79, 0.2); padding: 15px 0;">
                    <div class="logo-track" style="display: flex; width: max-content; animation: scrollMarquee 30s linear infinite;">
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/hcl.png" alt="HCL" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/hdfc.png" alt="HDFC" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/icici.png" alt="ICICI" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/itc.png" alt="ITC" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/naukari.png" alt="Naukri" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/pepsi.png" alt="Pepsi" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/quick-heal.png" alt="Quick Heal" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>

                        <!-- Repeat the same logos again for seamless loop -->
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/hcl.png" alt="HCL" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/hdfc.png" alt="HDFC" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/icici.png" alt="ICICI" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/itc.png" alt="ITC" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/naukari.png" alt="Naukri" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/pepsi.png" alt="Pepsi" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                        <div class="logo-item" role="listitem" style="padding: 0 30px; display: flex; align-items: center;">
                            <img src="images/quick-heal.png" alt="Quick Heal" style="height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1)); border-radius: 8px;">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel" style="color:#2e78e8">Islamia College Of Commerce -
                        Admission Enquiry Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <!-- Form Side -->
                        <div class="col-md-6">
                            <form method="post" id="enquiry-form">
                                <div class="mb-3">
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Your Name">
                                </div>
                                <div class="mb-3">
                                    <input type="text" id="contact" class="form-control" name="contact" placeholder="Contact No">
                                </div>
                                <div class="mb-3">
                                    <select name="campus" id="campus" class="form-select">
                                        <option value="">Select Campus</option>
                                        <option value="Gida">Gida</option>
                                        <option value="Buxipur">Buxipur</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <select class="form-select" name="course" style="display: none;" id="course">
                                        <option selected>--Select Course--</option>

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="message" rows="8" name="message" placeholder="Message"></textarea>
                                </div>

                                <button type="submit" id="sub" name="sub" class="btn mt-2"
                                    style="background-color: #02a54a; color:aliceblue">Submit</button>


                            </form>
                        </div>

                        <!-- Info Side -->
                        <div class="col-md-6">
                            <img src="images/modal-pop-up.jpg" alt="islamia college of commerce-gorakhpur"
                                class="img d-block w-100">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Login</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="post" class="login-form">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="">User ID</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Ex: college_xyz_231">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" id="login" value="Login" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Elfsight WhatsApp Chat | Islamia college of commerce -->
    <!-- Elfsight WhatsApp Chat | Islamia college of commerce -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var enquiryModal = new bootstrap.Modal(document.getElementById('enquiryModal'));
            enquiryModal.show();
        });
    </script>
    <script>
        $(".pgdm-btn").click(function() {
            let modal = $("#enquiryModal");
            let course = $("#course");
            course.hide();
            modal.modal('show');
        });
        $("#campus").change(function() {
            var campus = $(this).val();
            let gida = ['BBA', 'BCA', 'B.Com'];
            let buxipur = ['B.Sc(Bio/Math) ', 'BCA', 'B.Com(Hons) ', 'M.Sc(Botany)', 'M.Com'];
            let courseSelect = $("#course");

            courseSelect.empty();
            courseSelect.append(new Option("Select Course", ""));
            if (campus == "Gida") {
                gida.forEach(function(course) {
                    courseSelect.append(new Option(course, course));
                });
                courseSelect.show();
            } else if (campus == "Buxipur") {
                buxipur.forEach(function(course) {
                    courseSelect.append(new Option(course, course));
                });
                courseSelect.show();
            } else {
                courseSelect.hide();
            }
        });
    </script>
    <footer class="footer bg-dark text-light pt-4">
        <div class="container">
            <div class="row">

                <!-- About Us -->
                <div class="col-md-3 mb-4">
                    <h5>About Us</h5>
                    <p>Islamia College of Commerce is dedicated to providing quality education and fostering academic excellence.</p>
                </div>

                <!-- Quick Links -->


                <!-- Contact -->
                <div class="col-md-3 mb-4">
                    <h5>Contact (Gida Campus)</h5>
                    <ul class="list-unstyled">
                        <li>Email: islamiacollegeofcommercegida@gmail.com</li>
                        <li>Phone: <a href="8009903946" class="text-decoration-none text-light">+91-8009903946</a> </li>
                        <li>Address: Plot no. BL-02, Sector-7, Gida, Uttar Pradesh 273209</li>

                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Contact (Buxipur Campus)</h5>
                    <ul class="list-unstyled">
                        <li>Email: islamiacollegeofcommercegkp@gmail.com</li>
                        <li>Phone: <a href="tel:7754817022" class="text-decoration-none text-light">+91-7754817022</a> , <a href="tel:7408129786" class="text-decoration-none text-light">+91-7408129786</a> </li>
                        <li>Address:Buxipur, Gorakhpur, Uttar Pradesh 273001</li>

                    </ul>
                </div>

                <!-- Google Map Embed -->
                <div class="col-md-3 mb-4">
                    <h5>Our Location</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.741394244818!2d83.36174419999999!3d26.7526274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991446f37600403%3A0x4ca876b1a9664929!2sIslamia%20College%20of%20Commerce!5e0!3m2!1sen!2sin!4v1746263311239!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

            <div class="text-center text-secondary py-3" style="border-top: 1px solid #555;">
                &copy; 2025 Islamia College of Commerce. All rights reserved. Designed by <a href="https://www.limatsoftsolutions.co.in/" class="text-secondary text-decoration-none" target="_blank">Li-Mat Soft Solutions</a>.
            </div>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $(".login-form").on("submit", function(e) {
                e.preventDefault();
                data = new FormData(this);
                let modal = $("#enquiryModal");
                modal.modal('hide');
                data.append("login", "login");
                $.ajax({
                    type: "POST",
                    url: "backend.php",
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data == "Gida") {
                            window.location.href = "gida-campus/admin/dashboard.php";
                        } else if (data == "Buxipur") {
                            window.location.href = "buxipur-campus/admin/dashboard.php";
                        } else if (data == "Admin") {
                            window.location.href = "admin/dashboard.php";
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Invalid User ID or Password!',
                                showConfirmButton: false,
                                timer: 6000
                            });

                        }
                    }
                });
            });
        });
        $("#enquiry-form").on("submit", function(e) {
            e.preventDefault();
            let modal = $("#enquiryModal");
            data = new FormData(this);
            data.append("enquiry", "enquiry");
            $.ajax({
                type: "POST",
                url: "backend.php",
                data: data,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data === "success") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Your enquiry has been received.',
                            showConfirmButton: false,
                            timer: 6000
                        });

                    }
                    $("#name").val("");
                    $("#contact").val("");
                    $("#campus").val("");
                    $("#course").val("");
                    $("#message").val("");
                    modal.modal('hide');
                }

            });

        });
    </script>
</body>

</html>