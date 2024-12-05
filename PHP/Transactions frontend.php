<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!--CSS link-->
    <link rel="stylesheet" href="../CSS/Transactiton.css">

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
            <div class="sidebar" > <!-- Side -->
                <a href="Dashboard frontend.php" class="nav-link">
                    <i class="bi bi-display"></i> Dashboard
                </a>
                <a href="Room Information Single frontend.php" class="nav-link">
                    <i class="bi bi-house-door"></i> Rooms Information
                </a>
                <a href="Payments frontend.php" class="nav-link">
                    <i class="bi bi-cash-coin"></i> Payments
                </a>
                <a href="#" class="nav-link active">
                    <i class="bi bi-arrow-left-right "></i> Transactions
                    <span class="indicator bi bi-caret-left-fill"></span> <!-- Aarow -->
                </a>
                <a href="Reports frontend.php" class="nav-link">
                    <i class="bi bi-flag-fill"></i> Report
                </a>
            </div>
        </div>
        <div class="item2">
            <table> <!--Not connected to database-->
                <thead style="margin-right: 10px; border-bottom: solid 2px black;">
                    <tr>
                        <th>Date of Payment</th>
                        <th>Mode of Payment</th>
                        <th style="padding-right: 80px;">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1/23/2024</td>
                        <td>Thru Cashier</td>
                        <td><c>₱6700</c><a href="#">Show Receipt</a></td>
                    </tr>
                    <tr>
                        <td>2/23/2024</td>
                        <td>Thru Gcash</td>
                        <td><c>₱6700</c><a href="#">Show Receipt</a></td>
                    </tr>
                    <tr>
                        <td>3/23/2024</td>
                        <td>Thru Gcash</td>
                        <td><c>₱6700</c><a href="#">Show Receipt</a></td>
                    </tr>
                    <tr>
                        <td>4/24/2024</td>
                        <td>Thru Gcash</td>
                        <td><c>₱6700</c><a href="#">Show Receipt</a></td>
                    </tr>
                    <tr>
                        <td>5/24/2024</td>
                        <td>Thru Gcash</td>
                        <td><c>₱6700</c><a href="#">Show Invoice</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
      <!-- Footer -->
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
<!-- Footer -->
</div>
    <!-- Bootstrap Icon -->

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
</html>