<?php include "./includes/header.php"?>

<div id="academics_page" class="inner_page">

    <section id="inner_banner">
        <img src="assets/images/banner/academics.jpg" class="img-fluid" alt="">
    </section>
    <div class="page_header">
        <div class="container">
        <div class="page_title">Previous Question Papers</div>
        <div class="breadcrumb_sec">
            <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#!">Academics</a></li>
            <li class="current"><a href="#!">Previous Question Papers</a></li>
            </ul>
        </div>
        </div>
    </div>

    <section id="contnt_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="lft_sec">
                        <div class="qstn_papr_list_box">
                            <form action="" method="get">
                                <div class="form_title">Search Previous Question Papers</div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-3 col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Branch" name="Branch" placeholder="Branch" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Year" name="Year" placeholder="Year" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Subject" name="Subject" placeholder="Subject" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-md-12">
                                        <div class="form-group">
                                        <button type="submit" id="submit" class="btn">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="qstn_papr_list">
                                <ul>
                                    <li><a target="blank" href="#!">B Tech 1st Year Examinations</a></li>
                                    <li><a target="blank" href="#!">b.tech chemical engineering 1</a></li>
                                    <li><a target="blank" href="#!">b.tech chemical engineering 2</a></li>
                                    <li><a target="blank" href="#!">b.tech civil engineering 1</a></li>
                                    <li><a target="blank" href="#!">b.tech civil engineering 2</a></li>
                                    <li><a target="blank" href="#!">b.tech computer science and engineering 1</a></li>
                                    <li><a target="blank" href="#!">b.tech computer science and engineering 2</a></li>
                                    <li><a target="blank" href="#!">b.tech electrical and electronics engineering 1</a></li>
                                    <li><a target="blank" href="#!">b.tech electrical and electronics engineering 2</a></li>
                                    <li><a target="blank" href="#!">b.tech electronics and communication engineering 1</a></li>
                                    <li><a target="blank" href="#!">b.tech electronics and communication engineering 2</a></li>
                                    <li><a target="blank" href="#!">b.tech mechanical engineering 1</a></li>
                                    <li><a target="blank" href="#!">b.tech mechanical engineering 2</a></li>
                                    <li><a target="blank" href="#!">b.tech production engineering 1</a></li>
                                    <li><a target="blank" href="#!">b.tech production engineering 2</a></li>
                                    <li><a target="blank" href="#!">M.tech communication engineering and signal processing</a></li>
                                    <li><a target="blank" href="#!">M.tech computer science</a></li>
                                    <li><a target="blank" href="#!">M.tech environmental engineering</a></li>
                                    <li><a target="blank" href="#!">M.tech internal combustion engines</a></li>
                                    <li><a target="blank" href="#!">M.tech manufacturing systems management</a></li>
                                    <li><a target="blank" href="#!">M.tech process control</a></li>
                                    <li><a target="blank" href="#!">M.tech production engineering</a></li>
                                    <li><a target="blank" href="#!">M.tech water resources and hydro informatics</a></li>
                                    <li><a target="blank" href="#!">Master of computer applications</a></li>
                                    <li><a target="blank" href="#!">Master of planning</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="rit_sec">
                        <?php include "./includes/academics.php"?>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </div>

  <?php include "./includes/footer.php"?>