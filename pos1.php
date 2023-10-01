<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Point of Sale A</title>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type= "text/css"  href="css files/pos1_style.css">
</head>
<body>
<div class="row d-flex">
    <div class="col vh-100" style="width: 200px;">
    <div class="header">
  <h1>DevC Incorporated</h1>
</div>

      <section>
        <nav>
          <ul>
            <li><p style="color: red;">Home</p></li>
            <li><a href="employee_registration_save.php"><p>Employee Registration</a></li></p>
            <li><a href="payroll.php"><p>Payroll</a></li></p>
            <li><a href=""><p>Payroll Report</a></li></p>
            <li><a href="bread.php"><p>POS</a></li></p> 
            <li><a href=""><p>POS SALES Report</a></li></p>
            <li><a href="user.php"><p>User Account</a></li></p>
            <li><a href="login.php"><p>Logout  </a></li></p>
          </ul>
        </nav>
      </section>
    </div>
    
    <div class="col-10 flex-grow-20 "></div>
    
  </div>
  
  <div class="dropdown">
        <button class="dropbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown">
            Products
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="car.php">Car</a>
            <a class="dropdown-item" href="coffee.php">Coffee</a>
            <a class="dropdown-item" href="snacks.php">Snacks</a>
            <a class="dropdown-item" href="bread.php">Bread</a>
            <a class="dropdown-item" href="school_supplies.php">School Supplies</a>
        </div>
    </div>

    <div class="container pag">
        <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; font-weight:bold;">Sample Food Ordering Application</h1>
         <div class="pic_group">
            <div class="pic_option">
        <div><img src="photos/Snacks_images/Banana-chips.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox1" name="checkbox1">
        <label for="checkbox1" value="" >Banana Chips</label>
    </div>
    <div class="pic_option">
        <div><img src="photos/Snacks_images/Banana-Cue.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox2" name="checkbox2">
        <label for="checkbox2" value="" >Banana Cue</label>
    </div>
    <div class="pic_option">
        <div><img src="photos/Snacks_images/Bibingka.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox3" name="checkbox3">
         <label for="checkbox3" value="" >Bibingka</label>
     </div>
    <div class="pic_option">
        <div><img src="photos/Snacks_images/Binatog.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox4" name="checkbox4">
        <label for="checkbox4" value="" >Binatog</label>
    </div>
    <div class="pic_option">
        <div><img src="photos/Snacks_images/Champorado.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox5" name="checkbox5">
        <label for="checkbox5" value="" >Champorado</label>
    </div>
    <div class="pic_option">
        <div><img src="photos/Snacks_images/Corned-Beef-Pandesal.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox6" name="checkbox6">
        <label for="checkbox6">Corned Beef Pandesal</label>
    </div>
    <div class="pic_option">
         <div><img src="photos/Snacks_images/Crispy-Lumpia Shanghai.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox7" name="checkbox7">
        <label for="checkbox7">Lumpia</label>
    </div>
    <div class="pic_option">
        <div><img src="photos/Snacks_images/Empanada.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox8" name="checkbox8">
        <label for="checkbox8">Empanada</label>
    </div>
    <div class="pic_option">
        <div><img src="photos/Snacks_images/Empanada-Kaliskis.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox9" name="checkbox9">
        <label for="checkbox9">Empanda Kaliskis</label>
    </div>
    <div class="pic_option">
        <div><img src="photos/Snacks_images/Ginataang-Bilo.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox10" name="checkbox10">
        <label for="checkbox10">Ginataang Bilo</label>
     </div>
    <div class="pic_option">
        <div><img src="photos/Snacks_images/Halo-Halo.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox11" name="checkbox11">
         <label for="checkbox11">Halo Halo</label>
    </div>
        <div class="pic_option">
        <div><img src="photos/Snacks_images/Kamote-Cue.jpeg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox12" name="checkbox12">
         <label for="checkbox12">Kamote Cue</label>
     </div>
    <div class="pic_option">
        <div><img src="photos/Snacks_images/Lugaw.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox13" name="checkbox13">
        <label for="checkbox13">Lugaw</label>
    </div>
    <div class="pic_option">
        <div><img src="photos/Snacks_images/Maja-Blanca.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox14" name="checkbox14">
        <label for="checkbox14">Maja Blanca</label>
    </div>
    <div class="pic_option">
        <div><img src="photos/Snacks_images/Manggang-hilaw.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox15" name="checkbox15">
        <label for="checkbox15">Manggang Hilaw</label>
    </div>
    <div class ="pic_option">
        <div><img src="photos/Snacks_images/Pancit-Canton.jpg" alt="Cinque Terre"></div>
         <input type="checkbox" id="checkbox16" name="checkbox16">
        <label for="checkbox16">Pancit Canton</label>
    </div>
     <div class ="pic_option">
            <div><img src="photos/Snacks_images/Pancit-Palabok.jpg" alt="Cinque Terre"></div>
         <input type="checkbox" id="checkbox17" name="checkbox17">
        <label for="checkbox17">Pancit Palabok</label>
    </div>
    <div class ="pic_option">
        <div><img src="photos/Snacks_images/Siopao.jpg" alt="Cinque Terre"></div>
           <input type="checkbox" id="checkbox18" name="checkbox18">
         <label for="checkbox18">Siopao</label>
    </div>
    <div class ="pic_option">
        <div><img src="photos/Snacks_images/Taho.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox19" name="checkbox19">
        <label for="checkbox19">Taho</label>
    </div>
    <div class ="pic_option">
        <div><img src="photos/Snacks_images/Turon.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox20" name="checkbox20">
      <label for="checkbox20">Turon</label>
    </div>
        <div style="width:100%; text-align:left;">
            <div style="width:40%; float:left;">
        <div style="width:100%; text-align:left; padding-left:50px;">
        <h5 class="text-left" style="padding-top:10px; font-weight:bold;"> Food Order Choices:</h5>
        <div class="bundle_checkbox">
        <label>Discount Options:</label>
        <div>
            <label>
                <input type="radio" name="bundle_option" value="bundle1"> Food bundle 1
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="bundle_option" value="with_disc_card"> Food Bundle 2
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="bundle_option" value="employee_disc"> No Bundle
            </label>
        </div>
    </div>
</div>
 <div style="width:100%; text-align:left; padding-left:100px;">
 <h6 class="text-left" style="padding-top:10px; font-weight:bold;">Food Bundles A:</h6>
 <div class="bundle_checkbox">
 <input type="checkbox" name="bundle1" id="bundle1" value="bundle1" disabled> 10 pcs. Delici
 ous Friend Chicken
 </div>
 </div>
    <div style="width:100%; text-align:left; padding-left:100px">
    <h6 class="text-left" style="padding-top:10px; font-weight:bold;">Food Bundles B:</h6>
    <div class="bundle_checkbox">
 <input type="checkbox" name="halo_halo" id="halo_halo" value="" disabled> 4 Cups Special Halo- Halo Regular
             </div>
         </div>
    </div>
    <div style="width:40%; float:left;">
    <h5 class="text-left" style="padding-top:10px; padding-left:10px; font-
    weight:bold;">Order Details:</h5>
 <div style="width:100%; text-align:left; padding-left:10px; margin-bottom:50px;">
        <div class="input_box" >
          <span>Price:</span>
            <input type="text" name="price" id="price" value="" disabled>
        </div>
            <div class="input_box">
             <span>Quantity:</span>
             <input type="text" name="quantity" id="quantity" value="">
            </div>
                <div class="input_box">
                    <span>Amount To Pay:</span>
                <input type="text" name="amount_to_pay" id="amount_to_pay" value="" disabled>
            </div>
                <div class="input_box">
                <span>Cash From Customer:</span>
                <input type="text" name="amount_from_customer" id="amount_from_customer" value="">
                </div>
                    <div class="input_box" style="margin-bottom:10px;">
                        <span>Change:</span><input type="text" name="change" id="change" value="" disabled>
                     </div>
                </div>
            </div>
        </div>
     </div>
 </div>
 <div class="container" id="process_button" style="margin-top:43px;">
 <button type="submit" id="btn_calculate_bills" name="calculate_bills" class="btn btn-
 primary btn_process">CALCULATE BILLS</button>
 <button type="submit" id="btn_change" name="change" class="btn btn-info btn_process">CHANGE</button>
 <button type="submit" id="btn_new" name="new" class="btn btn-secondary btn_process">NEW</button>
    </div>
    </div>
</body>
</html>