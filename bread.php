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
    <link rel="stylesheet" type="text/css" href="css files/pos1_style.css">
    <style>
         body {
  background-image: url('photos/background_images/angas.webp');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
.container {
  border: 5px solid #333; /* Border with color (#333) and width (2px) */
  padding: 20px;
  border-radius: 30px; /* Optional: Add border radius for rounded corners */
  background-color: rgba(255, 255, 255, 0.5); /* 50% transparent white */
}
</style>
</head>

<body>
    <div class="d-flex">
        <div class="vh-100 sticky-top" style="width: 300px;">
            <section>
                <nav class="navbar">
                    <ul>
                        <li>
                        <a href="firstpage.php">
                                <p>Home
                            </a></li>
                        </p>
                        </li>
                        <li><a href="employee_registration_save.php">
                                <p>Employee Registration
                            </a></li>
                        </p>
                        <li><a href="payroll.php">
                                <p>Payroll
                            </a></li>
                        </p>
                        <li><a href="">
                                <p>Payroll Report
                            </a></li>
                        </p>
                        <li><a href="bread.php">
                                <p>POS
                            </a></li>
                        </p>
                        <li><a href="">
                                <p>POS SALES Report
                            </a></li>
                        </p>
                        <li><a href="user.php">
                                <p>User Account
                            </a></li>
                        </p>
                        <li><a href="login.php">
                                <p>Logout
                            </a></li>
                        </p>
                    </ul>
                </nav>
            </section>

        </div>
        <div class="container">
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

            <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; font-weight:bold; margin-top:40px;">BREAD SECTOR</h1>
            <div class="pic_group">
                <div class="pic_option">
                    <div><img src="photos/bread_images/bagel.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox1" name="checkbox1"class ="checkbox-group">
                    <label for="checkbox1" value="">Bagel</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/baguette.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox2" name="checkbox2"class ="checkbox-group">
                    <label for="checkbox2" value="">Baguette</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/brioches.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox3" name="checkbox3"class ="checkbox-group">
                    <label for="checkbox3" value="">Brioches</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/Challah.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox4" name="checkbox4"class ="checkbox-group">
                    <label for="checkbox4" value="">Challah</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/chapati.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox5" name="checkbox5"class ="checkbox-group">
                    <label for="checkbox5" value="">Chapati</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/ciabatta.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox6" name="checkbox6"class ="checkbox-group">
                    <label for="checkbox6">Ciabatta</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/English-muffin.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox7" name="checkbox7"class ="checkbox-group">
                    <label for="checkbox7">English Muffin</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/focaccia.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox8" name="checkbox8"class ="checkbox-group">
                    <label for="checkbox8">Focaccia</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/gluten-free-bread.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox9" name="checkbox9"class ="checkbox-group">
                    <label for="checkbox9">Gluten Free Bread</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/matzo.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox10" name="checkbox10"class ="checkbox-group">
                    <label for="checkbox10">Matzo</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/multigrain-bread.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox11" name="checkbox11"class ="checkbox-group">
                    <label for="checkbox11">MultiGrain Bread</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/naan-bread.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox12" name="checkbox12"class ="checkbox-group">
                    <label for="checkbox12">Naan Bread</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/pita-bread.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox13" name="checkbox13"class ="checkbox-group">
                    <label for="checkbox13">Pita Bread</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/rye-bread.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox14" name="checkbox14"class ="checkbox-group">
                    <label for="checkbox14">Rye Bread</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/soda-bread.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox15" name="checkbox15"class ="checkbox-group">
                    <label for="checkbox15">Soda Bread</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/sourdough-bread.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox16" name="checkbox16"class ="checkbox-group">
                    <label for="checkbox16">Sourdough Bread</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/Swedish-crispbread.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox17" name="checkbox17"class ="checkbox-group">
                    <label for="checkbox17">Swedish Bread</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/tortilla.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox18" name="checkbox18"class ="checkbox-group">
                    <label for="checkbox18">Tortilla</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/white-bread.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox19" name="checkbox19"class ="checkbox-group">
                    <label for="checkbox19">White Bread</label>
                </div>
                <div class="pic_option">
                    <div><img src="photos/bread_images/wholemeal-bread.jpg" alt="Cinque Terre"></div>
                    <input type="checkbox" id="checkbox20" name="checkbox20" class ="checkbox-group">
                    <label for="checkbox20">Wholemeal Bread</label>
                </div>
                <div style="width:100%; text-align:left;">
                    <div style="width:40%; float:left;">
                        <div style="width:100%; text-align:left; padding-left:50px;">
                            <h5 class="text-left" style="padding-top:10px; font-weight:bold;"> Food Order Choices:</h5>
                            <div class="bundle_checkbox">
                                <label>Discount Options:</label>
                                <div>
                                    <label>
                                        <input type="radio" name="discount_option" value="senior_citizen" onchange="updateDiscountAmount()"> Senior Citizen
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="discount_option" value="with_disc_card"onchange="updateDiscountAmount()"> With Discount Card
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="discount_option" value="employee_discount"onchange="updateDiscountAmount()"> Employee Discount
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="discount_option" value="no_discount" checked onchange="updateDiscountAmount()"> No Discount
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                <div class = "row">
                    <div class="col-md-6">
                        <!-- Left Column: Order Details -->
                        <div class="form-group">
                            <label for="item_name">Name of Item:</label>
                            <input type="text" class="form-control" id="item_name"  readonly>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" id="quantity" min="1" onchange="updateTotalPrice()">
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" class="form-control" disabled id="item_price">
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount Amount:</label>
                            <input type="text" class="form-control" id="discount"readonly>
                        </div>
                        <div class="form-group">
                            <label for="discounted_amount">Discounted Amount:</label>
                            <input type="text" class="form-control" id="discounted_amount" readonly>
                        </div>
                         </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="total_price">Total Price:</label>
                            <input type="text" class="form-control" id="total_price" readonly>
                        </div>
                        <div class="form-group">
                            <label for="total_discount_given">Total Discount Given:</label>
                            <input type="text" class="form-control" id="total_discount_given" readonly>
                        </div>
                        <div class="form-group">
                            <label for="total_discounted_amount">Total Discounted Amount:</label>
                            <input type="text" class="form-control" id="total_discounted_amount" readonly>
                        </div>
                        <div class="form-group">
                            <label for="cash_given">Cash Given:</label>
                            <input type="text" class="form-control" id="cash_given">
                        </div>
                        <div class="form-group">
                            <label for="change">Change:</label>
                            <input type="text" class="form-control" disable id="change"  readonly>
                        </div>
                    </div>
            <div class="" id="process_button" style="margin-top:43px;">
            <button type="button" id="calculateButton"onclick="updateTotalPrice()" name="Update" class="btn btn-primary btn_process">Change </button>
        </div>
        </div>

    </div>
    </div>
    <script>
         // Get all checkboxes with the class "checkbox-group"
        var checkboxes = document.querySelectorAll('.checkbox-group');
        // Add an event listener to each checkbox
        checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
        // Uncheck all other checkboxes in the group
        checkboxes.forEach(function(otherCheckbox) {
            if (otherCheckbox !== checkbox) {
                otherCheckbox.checked = false;
                       }
                  });
             });
        });
        // Function to update input boxes when a checkbox is checked
        function updateInputBoxes(checkboxId, itemName, itemPrice) {
            var checkbox = document.getElementById(checkboxId);
            var itemNameInput = document.getElementById('item_name');
            var itemPriceInput = document.getElementById('item_price');

            if (checkbox.checked) {
                itemNameInput.value = itemName;
                itemPriceInput.value = itemPrice;
            } else {
                itemNameInput.value = '';
                itemPriceInput.value = '';
            }
        }
function updateDiscountAmount() {
    var discountOption = document.querySelector('input[name="discount_option"]:checked').value;
    var discountInput = document.getElementById('discount');

    if (discountOption === "no_discount") {
        discountInput.value = ''; // Clear the input when no discount is selected
        discountInput.disabled = true;
    } else if (discountOption === "senior_citizen" || discountOption === "with_disc_card") {
        discountInput.value = '20%'; // Set the input value to '20%'
        discountInput.disabled = true;
    } else if (discountOption === "employee_discount") {
        discountInput.value = '30%'; // Set the input value to '30%'
        discountInput.disabled = true;
    } else {
        discountInput.value = ''; // Clear the input when no specific discount is selected
        discountInput.disabled = false;
    }
}
function updateTotalPrice() {
    // Get the quantity and price per item
    var quantity = parseFloat(document.getElementById('quantity').value);
    var pricePerItem = parseFloat(document.getElementById('item_price').value);
    var cashgiven= parseFloat(document.getElementById('cash_given').value);   

    // Calculate the total price
    var totalPrice = quantity * pricePerItem;

    // Get the selected discount option
    var discountOption = document.querySelector('input[name="discount_option"]:checked').value;
    var discountAmount = 0;

    // Calculate the discount amount based on the selected option
    if (discountOption === "senior_citizen" || discountOption === "with_disc_card") {
        discountAmount = 0.2 * pricePerItem; // 20% discount
    } else if (discountOption === "employee_discount") {
        discountAmount = 0.3 * pricePerItem; // 30% discount
    }

    // Calculate the discounted price per item
    var discountedPricePerItem = pricePerItem - discountAmount;
    var totalpriceDiscount= totalPrice-(discountAmount*quantity);

    // Calculate the total discounted price
    var totalDiscountedPrice = quantity * discountedPricePerItem;

    // Update the "Total Price" input field with the calculated value
    document.getElementById('total_price').value = totalPrice.toFixed(2); // Display the result with two decimal places

    // Update the "Discounted Amount per Item" input field with the calculated value
    document.getElementById('discounted_amount').value = (discountAmount).toFixed(2);

    //Update the "Total Discounted Amount" input field with the calculated value
    document.getElementById('total_discount_given').value=(discountAmount*quantity).toFixed(2);
     //Update the "Total Price With Discount" input field with the calculated value
     document.getElementById('total_discounted_amount').value = (totalpriceDiscount).toFixed(2);
    //Update the "Change" input field with the calculated value
    document.getElementById('change').value=(cashgiven-totalpriceDiscount).toFixed(2)

}
    function calculateChange() {
    // Get the total price with discount
    var total_discounted_amount = parseFloat(document.getElementById('total_discounted_amount').value);

    // Get the cash given by the customer
    var cashgiven = parseFloat(document.getElementById('cash_given').value);

    // Calculate the change
    var change = cashgiven - total_discounted_amount;

    // Display the change in the "Change" input field
    document.getElementById('change').value = change.toFixed(2);
}


        // Add event listeners to each checkbox
        document.getElementById('checkbox1').addEventListener('change', function() {
            updateInputBoxes('checkbox1', 'Bagel', '50');
        });
        document.getElementById('checkbox2').addEventListener('change', function() {
            updateInputBoxes('checkbox2', 'Baguette', '55');
        });
        document.getElementById('checkbox3').addEventListener('change', function() {
            updateInputBoxes('checkbox3', 'Brioches', '55');
        });
        document.getElementById('checkbox4').addEventListener('change', function() {
            updateInputBoxes('checkbox4', 'Challah', '60');
        });
        document.getElementById('checkbox5').addEventListener('change', function() {
            updateInputBoxes('checkbox5', 'Chapati', '75');
        });
        document.getElementById('checkbox6').addEventListener('change', function() {
            updateInputBoxes('checkbox6', 'Ciabatta', '45');
        });
        document.getElementById('checkbox7').addEventListener('change', function() {
            updateInputBoxes('checkbox7', 'English Muffin', '55');
        });
        document.getElementById('checkbox8').addEventListener('change', function() {
            updateInputBoxes('checkbox8', 'Focaccia', '100');
        });
        document.getElementById('checkbox9').addEventListener('change', function() {
            updateInputBoxes('checkbox9', 'Gluten Free Bread', '70');
        });
        document.getElementById('checkbox10').addEventListener('change', function() {
            updateInputBoxes('checkbox10', 'Matzo', '55');
        });
        document.getElementById('checkbox11').addEventListener('change', function() {
            updateInputBoxes('checkbox11', 'MultiGrain Bread', '60');
        });
        document.getElementById('checkbox12').addEventListener('change', function() {
            updateInputBoxes('checkbox12', 'Naan Bread', '50');
        });
        document.getElementById('checkbox13').addEventListener('change', function() {
            updateInputBoxes('checkbox13', ' Pita Bread', '70');
        });
        document.getElementById('checkbox14').addEventListener('change', function() {
            updateInputBoxes('checkbox14', 'Rye Bread', '50');
        });
        document.getElementById('checkbox15').addEventListener('change', function() {
            updateInputBoxes('checkbox15', 'Soda Bread', '45');
        });
        document.getElementById('checkbox16').addEventListener('change', function() {
            updateInputBoxes('checkbox16', 'Sourdough Bread', '55');
        });
        document.getElementById('checkbox17').addEventListener('change', function() {
            updateInputBoxes('checkbox17', 'Swedish Bread', '40');
        });
        document.getElementById('checkbox18').addEventListener('change', function() {
            updateInputBoxes('checkbox18', 'Tortilla', '100');
        });
        document.getElementById('checkbox19').addEventListener('change', function() {
            updateInputBoxes('checkbox19', 'White Bread', '30');
        });
        document.getElementById('checkbox20').addEventListener('change', function() {
            updateInputBoxes('checkbox20', 'Wholemeal Bread', '80');
        });
        // Add event listeners for other checkboxes in a similar manner

     $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    });
    updateDiscountAmount();
    </script>
</body>

</html>
