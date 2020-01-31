<?php include "./includes/header.php"?>

<div id="contact_page" class="inner_page">

  <section id="inner_banner">
    <img src="assets/images/banner/contact.jpg" class="img-fluid" alt="">
  </section>
  <div class="page_header">
    <div class="container">
      <div class="page_title">Contact Us</div>
      <div class="breadcrumb_sec">
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="current"><a href="#!">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>

  <section id="contact_info">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="box">
            <div class="title"><i class="icon address"></i> Address</div>
            <ul>
              <li>Vidya Bharathi Nagar , Mattoor, <br>
                Kalady, Ernakulam, Kerala 683574</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="title"><i class="icon phone"></i> Phone</div>
              <ul>
                <li>0484-2463825 </li>
                <li>0484-2466066, 0484-2461933</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="title"><i class="icon email"></i> Email</div>
              <ul>
                <li>info@adishankara.ac.in</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="title"><i class="icon clock"></i> Working Hours</div>
              <ul>
                <li>Monday to Sunday - 9am - 4pm</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="form_sec">
      <div class="container">
        <div class="title_sec">
          <div class="title">
            Get in touch
          </div>
          <div class="form_info">
            Fill in the form below, and we'll get back to you within 24 hours.
          </div>
        </div>
        <form id="contact_form" action="" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" autocomplete="off" class="form-control" name="name" placeholder="Name" required="">
              </div>
              <div class="form-group">
                <input type="email" autocomplete="off" class="form-control" name="email" placeholder="Email" required="">
              </div>
              <div class="form-group">
                <input type="phone" autocomplete="off" class="form-control" name="phone" placeholder="Phone no" required="">
              </div>
              <div class="form-group">
                <input type="text" autocomplete="off" class="form-control" name="Contact Address" placeholder="Contact Address" required="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" autocomplete="off" name="Massage" placeholder="Massage" required="" ></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="submit">Send message</button>
              </div>
            </div>
          </div>
      </form>
    </div>
  </section>

  <section id="contact_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.0305853974446!2d76.42826395076982!3d10.178169272697135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0807bfa8906d61%3A0x11ad08dbd85357dc!2sAdi%20Shankara%20Institute%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1580195895839!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </section>

</div>

<?php include "./includes/footer.php"?>
