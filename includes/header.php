<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" class="" xml:lang="en">
<!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta name="robots" content="noindex,nofollow"/>
  <title>Adi Shankara</title>
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <link href="assets/css/app.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <header id="Header" class="header main_header">
    <section cla ss="navbar-custom" role="navigation">
      <div class="main_nav_section">
        <div class="container">
          <div class="row">
            <nav class="navbar navbar-toggleable-lg navbar-light bg-faded navbar-expand-lg">
              <div class="collapse navbar-collapse" id="navbarNavDropdown2">
                <ul class="navbar-nav">
                  <li class="nav-list <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'index' ? 'active' : '' ?>">
                    <a class="link" href="index.php">Home</a>
                  </li>
                  <li class="dropdown nav-list <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '#!' ? 'active' : '' ?>">
                    <a class="link" data-toggle="dropdown" href="#!">About Us</a>
                    <div class="dropdown-menu first_drop">
                      <ul>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'institute-profile' ? 'active' : '' ?>"><a href="institute-profile.php">Institute Profile</a></li>
                        <li class="dropdown-submenu <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '#!' ? 'active' : '' ?>">
                          <a data-toggle="dropdown" href="">Administration</a>
                          <ul class="dropdown-menu second_drop">
                            <li class="dropdown">
                              <a data-toggle="dropdown" href="">Governing</a>
                              <div class="dropdown-menu third_drop">
                                  <ul>
                                    <li><a href="patron.php">Patron</a></li>
                                    <li><a href="ceo_administrator.php">Ceo & Administrator</a></li>
                                    <li><a href="">Organizational Stracture</a></li>
                                    <li><a href="board_of_governors.php">Board Of Governors</a></li>
                                    <li><a href="trust.php">Adi Shankara Trust</a></li>
                                    <li><a href="">Academic Council</a></li>
                                  </ul>
                              </div>
                            </li>
                            <li class="dropdown">
                              <a data-toggle="dropdown" href="">Officials</a>
                              <div class="dropdown-menu third_drop">
                                  <ul>
                                    <li><a href="">Managing Trustee</a></li>
                                    <li><a href="">Group Coo</a></li>
                                    <li><a href="">Associate Director</a></li>
                                    <li><a href="">Principal</a></li>
                                    <li><a href="">Deans</a></li>
                                    <li><a href="departments_head.php">Head Of The Departments</a></li>
                                    <li><a href="">Iqac</a></li>
                                  </ul>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'professional-collaboration' ? 'active' : '' ?>"><a href="professional-collaboration.php">Professional Collaboration</a></li>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'certifications' ? 'active' : '' ?>"><a href="certifications.php">Awards & Certifications</a></li>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'dignitaries_visited' ? 'active' : '' ?>"><a href="dignitaries_visited.php">Dignitaries Visited</a></li>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '#!' ? 'active' : '' ?>"><a href="">Mandatory Disclosure</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="dropdown nav-list <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '#!' ? 'active' : '' ?>">
                    <a class="link" data-toggle="dropdown" href="#!">Academics</a>
                    <div class="dropdown-menu first_drop">
                      <ul>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'approved_affiliation' ? 'active' : '' ?>"><a href="approved_affiliation.php">Aicte/Ktu Approval/Affiliation</a></li>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'nba-accreditation' ? 'active' : '' ?>"><a href="nba-accreditation.php">Nba Accreditation</a></li>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '#!' ? 'active' : '' ?>"><a href="#!">Under Graduate</a></li>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '#!' ? 'active' : '' ?>"><a href="#!">Post Graduate</a></li>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'add-on-courses' ? 'active' : '' ?>"><a href="add-on-courses.php">Add-On Courses</a></li>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'carriculum' ? 'active' : '' ?>"><a href="carriculum.php">Curriculum</a></li>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'syllsbus' ? 'active' : '' ?>"><a href="syllsbus.php">Syllsbus</a></li>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'previous_qstn_papers' ? 'active' : '' ?>"><a href="previous_qstn_papers.php">Previous Question Papers</a></li>
                        <li class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '#!' ? 'active' : '' ?>"><a href="#!">Moodle @ Adi Shankara</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-list <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'department' ? 'active' : '' ?>">
                    <a class="link" href="department.php">Departments</a>
                  </li>
                  <li class="nav-list <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'campus' ? 'active' : '' ?>">
                    <a class="link" href="campus.php">Campus</a>
                  </li>
                  <li class="nav-list <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '#!' ? 'active' : '' ?>">
                    <a class="link" href="#!">Admissions</a>
                  </li>
                  <li class="nav-list <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '#!' ? 'active' : '' ?>">
                    <a class="link" href="#!">Research</a>
                  </li>
                  <li class="nav-list <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'gallery' ? 'active' : '' ?>">
                    <a class="link" href="gallery.php">Gallery</a>
                  </li>
                  <li class="nav-list <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'contact' ? 'active' : '' ?>">
                    <a class="link" href="contact.php">Contact Us</a>
                  </li>
                </ul>
                <ul class="qck_action">
                  <li><a href="#!">VIRTUAL TOUR</a></li>
                  <li><a href="#!"><img src="assets/images/icons/mod_logo.png" class="img-fluid" alt=""> MOODLE @ ASIET</a></li>
                  <li class="dropdown"><a href="#!">Login</a>
                    <div class="dropdown-menu">
                      <ul>
                        <li><a href="#!">dropdown</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div class="header_main">
        <div class="container">
          <div class="row">
            <div class="logo_sec"><a href="index.php" class="logo"><img src="assets/images/logo.png" alt="logo" class="img-fluid"/></a></div>

            <div class="qck_contct">
              <ul>
                <li><a href="tel:0484-2463825"><i class="fas fa-phone"></i> 0484-2463825</a></li>,
                <li><a href="tel:0484-2466066">2466066</a></li>,
                <li><a href="tel:0484-2461933">2461933</a></li>
              </ul>
            </div>

            <ul class="affiliations_list">
              <li><img src="assets/images/certifications/1.png" class="img-fluid" alt=""></li>
              <li><img src="assets/images/certifications/2.png" class="img-fluid" alt=""></li>
              <li><img src="assets/images/certifications/3.png" class="img-fluid" alt=""></li>
              <li><span>College Code:</span><img src="assets/images/certifications/4.png" class="img-fluid" alt=""></li>
            </ul>

            <div class="menu-icon">
              <button class="navbar-toggler navbar-toggler-right" type="button"
              data-toggle="collapse" data-target="#navbarNavDropdown2"
              aria-controls="navbarNavDropdown2" aria-expanded="false"
              aria-label="Toggle navigation">
              <!-- <div class="main-icon-bar"> <i class="fa fa-bars"></i></div> -->
              <div class="main-icon-bar">
                <div class="icon"></div>
                <div class="icon"></div>
                <div class="icon"></div>
              </div>
            </button>
          </div>
        </div>
      </div>
    </section>
  </header>
  <!--header-->
