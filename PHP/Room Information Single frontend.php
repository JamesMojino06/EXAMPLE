<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!--CSS link-->
    <link rel="stylesheet" href="../CSS/Room Information Single.css">

    <title>Document</title>

</head>

<body class="dark-mode">
      <div class="custom-header-bg"><!-- Head -->
        <div>
            <h3 class="custom-title">
                <strong>Tenants</strong>
            </h3>
            <span class="custom-txt">DORM</span>
        </div>
        <div class="d-flex align-items-center">
          <label class="toggle-switch">
            <input type="checkbox" id="themeToggle"> 
            <span class="slider"></span>
          </label>
                <a href="#"><i class="bi bi-bell icon-bell"></i></a>
                <a href="#"><i class="bi bi-envelope-fill icon-envelop"></i></a>
                <a href="../../Backend/Navigators/login.php" class="btn btn-primary botton-signout">Sign out</a>
        </div>
      </div>

  <div class="grid-container">
    <div class="item1">
      <div class="sidebar "><!-- Side -->
        <a href="Dashboard frontend.php" class="nav-link">
            <i class="bi bi-display"></i> Dashboard
        </a>
        <a href="#" class="nav-link active">
            <i class="bi bi-house-door "></i> Rooms Information
            <span class="indicator bi bi-caret-left-fill"></span> <!-- Aarow -->
        </a>
        <a href="Payments frontend.php" class="nav-link">
            <i class="bi bi-cash-coin"></i> Payments
        </a>
        <a href="Transactions frontend.php" class="nav-link">
            <i class="bi bi-arrow-left-right"></i> Transactions
        </a>
        <a href="Reports frontend.php" class="nav-link">
            <i class="bi bi-flag-fill"></i> Report
        </a>
      </div>
    </div>
      
    <div class ="item2">
      <div class="container ">
        <div class="column">
          <strong><i class="room-title "style="color: #0080FF;">Rooms Information</i></strong> 
            <div class="room-assign">Your Assigned Room:
            <strong><div href="#">Room 103</div></strong> <!--error unable to link href-->
            </div>
            <div class="row">
              <div>
                <label for="name">Search</label> <!--Unable to visible search bar-->
                <input type="text" id="name">
              </div>
            </div>
              <a href="#"> Single</a>          
              <a href="Room Information Double.html"> Double</a>
              <a href="Room Information Triple.html"> Triple</a>
          <strong><div style="font-size: 15px; padding-top:50px;">1st floor: Single Rooms</div></strong>
            <div class="room"> <!--Not connected to database-->
              <div class="room-number occupied">101</div>
              <div class="room-number occupied">102</div>
              <div class="room-number available">103</div>
              <div class="room-number occupied">104</div>
              <div class="room-number almost-full">105</div>
              <div class="room-number occupied">106</div>
              <div class="room-number available">107</div>
            </div>
            <div class="room">
              <div class="room-number available">108</div>
              <div class="room-number available">109</div>
              <div class="room-number almost-full">110</div>
              <div class="room-number occupied">111</div>
              <div class="room-number occupied">112</div>
              <div class="room-number occupied">113</div>
              <div class="room-number available">114</div>
            </div>
          <strong>
            <div style="font-size: 15px; color: #0080FF; text-align: center; padding-top: 20px;">For Room Inquiries please contact admin
            </div>
          </strong>
            <i style="padding-left:350px;">
              <strong><a style="color:#0080FF; padding-right: 10px;">Next Page</a></strong>
              <icon-room class =" bi bi-caret-right-fill" style="font-size: 30px; color: #0080FF; "></icon-room>
            </i>
            <i style="font-size: 10px">
              <icon-room class =" bi bi-circle-fill" style="font-size: 10px; color: #00ff26; padding-right: 10px;"></icon-room><i style="font-size: 10px;">Available</i>
              <icon-room class =" bi bi-circle-fill" style="font-size: 10px; color: #ff0000; padding-right: 10px;"></icon-room><i style="font-size: 10px;">Occupied</i>
              <icon-room class =" bi bi-circle-fill" style="font-size: 10px; color: #ffae00; padding-right: 10px;"></icon-room><i style="font-size: 10px;">Almost full</i>
            </i>
        </div>
  
        <div class="features-container">
          <strong><a href="#" style="font-size: 30px; padding: 10px; ">Room 103</a></strong> <!--error unable to link href-->
          
          <div>
            <img src="#" alt="Insert image"> <!-- Unarrange image-->
          </div>
          <div style=" padding-left: 5% ;font-size: 20px; padding-bottom: 8%;">Triple Room</div>
          <div style="font-size: 20px; padding-bottom: 5%;"><strong>Availability:</strong> Immediate</div>
          <div style="font-size: 20px; padding-bottom: 5%;"><strong>Price: ₱30,000 per month per student</strong></div>
          <div style="font-size: 15px; font-weight: bold;">Features:</div>
            <ul class="#">
              <strong><li>Room Size: </strong>120 sq ft</li>
              <li>Single bed with mattress and linens</li>
              <li>Study desk with chair and lamp</li>
              <li>Wardrobe and storage shelves</li>
              <li>Private en-suite bathroom (in some dormitories)</li>
              <li>High-speed internet access</li>
              <li>Heating and air conditioning</li>
              <li>Small refrigerator and microwave</li>
            </ul>
          <a href="#" style="padding: 23%;">Contact us today to schedule a tour!</a> <!--error unable to link href-->
        </div>
      </div>
    </div> 
  </div>



<footer class="bg-dark text-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-2   ">
      <!-- Section: Social media -->
      
      <!-- Section: Social media -->

      <!-- Section: Text -->
      
      <section>
          <div class="row" >
              <div class="col-lg-3 col-md-6 mb-2 ">
                  <h5 class="text-uppercase">Section</h5>
                  <ul class="list-unstyled">
                      <li><a class="text-body text-light" href="#!">FAQS</a></li>
                   
                  </ul>
              </div>
              <div class="col-lg-3 col-md-6 mb-2">
                  <h5 class="text-uppercase">Section</h5>
                  <ul class="list-unstyled">
                    
                      <li><a class="text-body text-light" href="#!">Home</a></li>
                      <li><a class="text-body text-light" href="#!">About </a></li>
                      
                  </ul>
              </div>
              <div class="col-lg-3 col-md-6 mb-2">
                  <h5 class="text-uppercase">Section</h5>
                  <ul class="list-unstyled">
                      
                      <li><a class="text-body text-light" href="#!">Features</a></li>
                      <li><a class="text-body text-light" href="#!">Twitter</a></li>
                      
                  </ul>
              </div>
              <div class="col-lg-2 col-md-6 mb-1">
                  <h5 class="text-uppercase">Section</h5>
                  <ul class="list-unstyled">
                  
                      <li><a class="text-body text-light" href="#!">Facebook</a></li>
                      <li><a class="text-body text-light" href="#!">Instagram</a></li>
                      
                  </ul>
              </div>
          </div>
      </section>
      <!-- Section: Links -->
 
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-1 bg-light">
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="#">Dormitory Billing System</a>
  </div>
  <!-- Copyright -->
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
      const toggleSwitch = document.getElementById('themeToggle');
      const currentTheme = localStorage.getItem('theme');
  
      // Load saved theme from localStorage if exists
      if (currentTheme === 'dark') {
          document.body.classList.add('dark-mode');
          toggleSwitch.checked = true;
      }
  
      toggleSwitch.addEventListener('change', function () {
          if (this.checked) {
              document.body.classList.add('dark-mode');
              localStorage.setItem('theme', 'dark');
          } else {
              document.body.classList.remove('dark-mode');
              localStorage.setItem('theme', 'light');
          }
      });
  });
</script>
</body>
