<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sale A</title>
    <!-- Latest compiled and minified CSS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" type="text/css" href="css files/pos1_style.css">
    <link rel="stylesheet" type="text/css" href="css files/design1.css">
    <style>
        body {
            background-image: url('photos/background_images/angas.webp');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .container {
            border: 5px solid #333;
            /* Border with color (javascript:void(0);333) and width (2px) */
            padding: 20px;
            border-radius: 30px;
            /* Optional: Add border radius for rounded corners */
            background-color: rgba(255, 255, 255, 0.5);
            /* 50% transparent white */
            width: 100%;
        }

        .calculator {
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .calculator input[type="text"] {
            width: 100%;
            height: 40px;
            margin-bottom: 10px;
            font-size: 18px;
            padding: 5px;
        }

        .calculator button {
            width: 70px;
            height: 50px;
            font-size: 18px;
            margin: 5px;
        }
         /* Define CSS rules for the navbar */
        .navbar {
        background-color: #333;
         overflow: hidden;
         padding: 20px 0; /* Adjust top and bottom padding, leave no padding on the sides */
         }

            .navbar ul.navbar-nav {
            list-style-type: none;
        padding: 0;
        }

            .navbar ul.navbar-nav li {
         margin: 0;
              padding: 0;
            }

    .navbar ul.navbar-nav li a {
    display: block;
        color: white;
            text-align: left;
                padding: 14px 16px;
                    text-decoration: none;
            }

        /* Define a hover rule to change the color when hovering */
        .navbar ul.navbar-nav li a:hover {
        background-color: #ddd;
            color: #333;
        }
        .navbar a {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  font-size: 18px; /* Adjust padding to resize the items */
  
}
     /* CSS for selected text choices */
     .selected {
            background-color: rgba(255, 255, 255, 0.5);
            color: black;
        }
       /* CSS class for text choices */
       .text-choice {
            padding: 0px 20px;
            color: #007bff; /* Default text color */
            text-decoration: none;
            font-family: 'Arial Black', sans-serif; /* Change 'YourFontName' to your preferred font */
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            transition: color 0.3s; /* Smooth transition for text color */
        }

        /* Underline effect for text choices */
        .text-choice::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            transition: background-color 0.3s; /* Smooth transition for underline color */
        }

        /* Function to add effect to the underline when hovering */
        .text-choice:hover::before {
            background-color: #ff5733; /* Underline color changes on hover */
        }
        .text-choice:hover{
             color: #ff5733; /* Text color changes on hover */
            text-decoration: none;
        }
        /* Change the text color when selected (clicked) */
        .text-choice.selected {
            color: black; /* Text color changes when selected */
        }
        .custom-font-color {
            color: black; /* Change this to the color you want */
        }
        /* CSS for the dropdown container */
        .dropdown {
        display: inline-block;
        }
    </style>
</head>
<body>
<div class="d-flex">
    <div class="vh-100 sticky-top" style="width: 300px;">
        <section>
            <nav class="navbar">
                <ul class="navbar-nav mr-auto mt-20 mt-lg-20">
                    <li>
                        <a href="firstpage.php">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="employee_registration_save.php">
                            Employee Registration
                        </a>
                    </li>
                    <li>
                        <a href="payroll.php">
                            Payroll
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            Payroll Report
                        </a>
                    </li>
                    <li>
                        <a href="bread.php">
                            POS
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            POS SALES Report
                        </a>
                    </li>
                    <li>
                        <a href="user.php">
                            User Account
                        </a>
                    </li>
                    <li>
                        <a href="login.php">
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </div>


        <div class="container">
        <div class="dropdown">
                <button class="dropbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
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
            <h1 class="text-center" style="padding-bottom:20px; font-weight:bold;">BREAD SECTOR</h1>
            <div class="pic_group" style="padding-bottom:10px;">
                <div class="choice-container"style="padding-bottom:20px; margin-top: 50px;">
                     <div class="pic_option">
                     <div><img src="photos/car logos_images/acura.jpg" alt="Acura"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color"onclick="updateInputBoxes('Acura', 'Acura', '500000.00');toggleSelection(this); ">Acura - <strong>P500k</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/astonmartin.jpg" alt="astonmartin"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color"onclick="updateInputBoxes('astonmartin', 'astonmartin', '600000');toggleSelection(this); ">A|martin - <strong>P600k</strong></a>
                    </div>  
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/audi.jpg" alt="Audi"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Audi', 'Audi', '400000');toggleSelection(this); ">Audi - <strong>P400k</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/bmw.png" alt="BMW"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('BMW', 'BMW', '550000');toggleSelection(this); ">BMW - <strong>P550k</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/bugatti.jpg" alt="Bugatti"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Bugatti', 'Bugatti', '2000000');toggleSelection(this); ">Bugatti - <strong>P2M</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/cadillac.jpg" alt="Cadillac"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Cadillac', 'Cadillac', '1500000');toggleSelection(this); ">Cadillac - <strong>P1.5M</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/dacia.jpg" alt="Dacia"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Dacia', 'Dacia', '700000');toggleSelection(this); ">Dacia - <strong>P700k</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/ferrari.jpg" alt="Ferarri"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Ferarri', 'Ferarri', '1800000');toggleSelection(this); ">Ferarri - <strong>P1.8M</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/holden.jpg" alt="Holden"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes(' Holden', ' Holden', '600000');toggleSelection(this); ">Holden - <strong>P600k</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/infiniti.jpg" alt="Infiniti"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Infiniti', 'Infiniti', '550000');toggleSelection(this); ">Infiniti - <strong>P550k</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/jaguar.jpg" alt="Jaguar"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Jaguar', 'Jaguar', '700000');toggleSelection(this); ">Jaguar - <strong>P700k</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/kia.png" alt="KIA"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('KIA', 'KIA', '400000');toggleSelection(this); ">KIA - <strong>P400k</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/koenigsegg.png" alt="Koenigsegg"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Koenigsegg', 'Koenigsegg', '1100000');toggleSelection(this);">Koenigsegg-<strong>1.1M</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/lamborghini.jpg" alt="Lamborghini"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes(' Lamborghini', ' Lamborghini', '2000000.00');toggleSelection(this); ">Lamborghini-<strong>P2M</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/maserati.png" alt="Maserati"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Maserati', 'Maserati', '450000');toggleSelection(this); ">Maserati- <strong>P450k</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/mclaren.png" alt="Mclaren"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Mclaren', 'Mclaren', '1300000');toggleSelection(this); ">Mclaren - <strong>P1.3M</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/porsche.jpg" alt="Porsche"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Porsche', 'Porsche', '1600000');toggleSelection(this); ">Porsche - <strong>P1.6M</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/rollsroyce.jpg" alt="Rollsroyce"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Rollsroyce', 'Rollsroyce', '2000000');toggleSelection(this); ">Rollsroyce - <strong>P2M</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/seat.png" alt="Seat"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Seat', 'Seat', '1000000');toggleSelection(this); ">Seat - <strong>P1M</strong></a>
                    </div>
                    <div class="pic_option">
                    <div><img src="photos/car logos_images/volkswagen.jpg" alt="Volkswagen"></div>
                    <a href="javascript:void(0);" class="text-choice custom-font-color" onclick="updateInputBoxes('Volkswagen', 'Volkswagen', '1000000');toggleSelection(this); ">Volkswagen-<strong>P1M</strong></a>
                    </div>
                </div>
            </div> 
                <div style="width:100%; text-align:left;">
                    <div style="width:40%; float:left;">
                        <div style="width:100%; text-align:left; padding-left:30px; margin-right: 30px;">
                            <h5 class="text-left" style="padding-top:10px; font-weight:bold;"> Food Order Choices:</h5>
                            <div class="bundle_checkbox">
                                <label>Discount Options:</label>
                                <div>
                                    <label>
                                        <input type="radio" name="discount_option" value="senior_citizen"  onchange="disableRadioButtons();updateDiscountAmount();"> Senior Citizen
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="discount_option" value="with_disc_card"  onchange="disableRadioButtons();updateDiscountAmount();"> With Discount Card
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="discount_option" value="employee_discount"  onchange="disableRadioButtons();updateDiscountAmount();"> Employee Discount
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="discount_option" value="no_discount"   onchange="disableRadioButtons();updateDiscountAmount();"> No Discount
                                    </label>
                                </div>
                            </div>
                            <div class="my-6    ">
                                <div class="row row-cols-4" style = "margin-right: 5px;" >
                                    <div class="p-2 col">
                                        <button type="button" class="btn btn-primary w-100 " style="white-space:nowrap" onclick="updateTotalPrice()"> Change</button>
                                    </div>
                                    <div class="p-2 col">
                                        <button type="button" class="btn btn-danger w-100 " onclick="resetinputs() ">New</button>
                                    </div>
                                    <div class="p-2 col">
                                        <button type="button" class="btn btn-warning w-100">Save</button>
                                    </div>
                                    <div class="p-2 col">
                                        <button type="button" class="btn btn-dark w-100">Update</button>
                                    </div>
                                </div>
                            <div class="calculator" style = "margin-right: 21px;" >
                                <button class="btn btn-dark" onclick="addToCalculator('7')">7</button>
                                <button class="btn btn-dark" onclick="addToCalculator('8')">8</button>
                                <button class="btn btn-dark" onclick="addToCalculator('9')">9</button>
                                <button class="btn btn-dark" onclick="addToCalculator('+')">+</button>
                                <br>
                                <button class="btn btn-dark" onclick="addToCalculator('4')">4</button>
                                <button class="btn btn-dark" onclick="addToCalculator('5')">5</button>
                                <button class="btn btn-dark" onclick="addToCalculator('6')">6</button>
                                <button class="btn btn-dark" onclick="addToCalculator('-')">-</button>
                                <br>
                                <button class="btn btn-dark" onclick="addToCalculator('1')">1</button>
                                <button class="btn btn-dark" onclick="addToCalculator('2')">2</button>
                                <button class="btn btn-dark" onclick="addToCalculator('3')">3</button>
                                <button class="btn btn-dark" onclick="addToCalculator('*')">*</button>
                                <br>
                                <button class="btn btn-dark" onclick="addToCalculator('0')">0</button>
                                <button class="btn btn-dark" onclick="clearDisplay()">C</button>
                                <button class="btn btn-dark" onclick="calculateResult()">=</button>
                                <button class="btn btn-dark" onclick="addToCalculator('/')">/</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" >
                        <!-- Left Column: Order Details -->
                        <div class="form-group">
                            <label for="item_name">Name of Item:</label>
                            <input type="text" class="form-control" id="item_name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" id="quantity" min="1" onchange="updateTotalPrice()" disabled>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" class="form-control" disabled id="item_price">
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount Amount:</label>
                            <input type="text" class="form-control" id="discount" readonly>
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
                            <input type="text" class="form-control" disable id="change" readonly>
                        </div>
                    </div>
                    
                </div>
                <script>
                     // Function to disable radio buttons after selection
                    function disableRadioButtons() {
                        var radioButtons = document.querySelectorAll('input[type="radio"]');
                        radioButtons.forEach(function (radio) {
                            radio.disabled = true;
                        });
        }
                    const enableDisableRadios = document.querySelectorAll('input[name="discount_option"]');
                    const text1 = document.getElementById('quantity');

                    enableDisableRadios.forEach(function(radio) {
                        radio.addEventListener('change', function() {
                            if (radio.value === 'senior_citizen') {
                                text1.removeAttribute('disabled');

                            }
                            if (radio.value === 'with_disc_card') {
                                text1.removeAttribute('disabled');

                            }
                            if (radio.value === 'employee_discount') {
                                text1.removeAttribute('disabled');

                            }
                            if (radio.value === 'no_discount') {
                                text1.removeAttribute('disabled');

                            }
                        });
                    });
                    function resetinputs() {
                        // Store the initial state and associated functions for radio buttons
                        const initialRadioStates = {
                            "senior_citizen": false,
                            "with_disc_card": false,
                            "employee_discount": false,
                            "no_discount": false
                        };
                        const text1 = document.getElementById('quantity');
                        

                        // Reset input fields
                        document.getElementById("item_name").value = '';
                        document.getElementById("item_price").value = '';
                        document.getElementById("discount").value = '';
                        document.getElementById("discounted_amount").value = '';
                        document.getElementById("total_price").value = '';
                        document.getElementById("total_discount_given").value = '';
                        document.getElementById("total_discounted_amount").value = '';
                        document.getElementById("cash_given").value = '';
                        document.getElementById("change").value = '';
                        document.getElementById("quantity").value = '';
                        var textChoices = document.querySelectorAll('.text-choice');
            
                            // Deselect all choices
                            textChoices.forEach(function (textChoice) {
                                textChoice.classList.remove('selected');
                            });
                            
                            
                        // Reset radio buttons and associated functions
                        var radioButtons = document.querySelectorAll('input[type="radio"][name="discount_option"]');
                        for (let radioButton of radioButtons) {
                            const value = radioButton.value;
                            radioButton.checked = initialRadioStates[value]; // Reset selected state
                            radioButtons.forEach(function (radio) {
                            radio.disabled = false;
                            radio.checked = false; // Uncheck the selected radio
                        });
                            document.getElementById("quantity").disabled = !initialRadioStates[value];
                            
                        }
                        
                        
                    }
                    
                    // Function to update input boxes when a checkbox is checked
                     // Function to update input boxes when a text choice is clicked
                        function updateInputBoxes(choiceId, itemName, itemPrice) {
                            var textChoice = document.getElementById(choiceId);
                            var itemNameInput = document.getElementById('item_name');
                            var itemPriceInput = document.getElementById('item_price');

                            itemNameInput.value = itemName;
                            itemPriceInput.value = itemPrice;
                        }
                        // Function to select one choice and deselect others
                        function toggleSelection(choice) {
                            // Get all text choices
                            var textChoices = document.querySelectorAll('.text-choice');
                            var selectedChoice = document.querySelector('.text-choice.selected');
                            if (selectedChoice) {
                                window.scroll({
                                top: document.body.scrollHeight,
                                behavior: 'smooth'
                            });
                            }
                            
                            // Deselect all choices
                            textChoices.forEach(function (textChoice) {
                                textChoice.classList.remove('selected');
                            });

                            // Select the clicked choice
                            choice.classList.add('selected');
                        }

                        // Function to execute updateInputBoxes
                        function functionToUpdateInputBoxes(itemName, itemPrice) {
                            updateInputBoxes(itemName, itemPrice);
                        }
                                        

                    function addToCalculator(number) {
                        const cashGivenInput = document.getElementById("cash_given");
                        cashGivenInput.value += number;
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
                        var cashgiven = parseFloat(document.getElementById('cash_given').value);

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
                        var totalpriceDiscount = totalPrice - (discountAmount * quantity);

                        // Calculate the total discounted price
                        var totalDiscountedPrice = quantity * discountedPricePerItem;

                        // Update the "Total Price" input field with the calculated value
                        document.getElementById('total_price').value = totalPrice.toFixed(2); // Display the result with two decimal places

                        // Update the "Discounted Amount per Item" input field with the calculated value
                        document.getElementById('discounted_amount').value = (discountAmount).toFixed(2);

                        //Update the "Total Discounted Amount" input field with the calculated value
                        document.getElementById('total_discount_given').value = (discountAmount * quantity).toFixed(2);
                        //Update the "Total Price With Discount" input field with the calculated value
                        document.getElementById('total_discounted_amount').value = (totalpriceDiscount).toFixed(2);
                        //Update the "Change" input field with the calculated value
                        document.getElementById('change').value = (cashgiven - totalpriceDiscount).toFixed(2)

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

                    function clearDisplay() {
                        document.getElementById('cash_given').value = '';
                    }
                    // Add event listeners for other checkboxes in a similar manner

                    $(document).ready(function() {
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                    updateDiscountAmount();
                </script>
 </body>
 </html>