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
 <script src="js/script.js"></script>
 <link rel="stylesheet" href="css/pos1_styles.css">
</head>
<div style="width:40%; float:left;">
 <h5 class="text-left" style="padding-top:10px; padding-left:10px; fontweight:bold;">Order Details:</h5>
 <div style="width:100%; text-align:left; padding-left:10px; margin-bottom:50px;">
 <div class="input_box" >
 <span>Price:</span>
 <input type="text" name="price" id="price" value="<?php echo $price; ?>">
 </div>
 <div class="input_box">
 <span>Quantity:</span>
 <input type="text" name="quantity" id="quantity" value="<?php echo $quantity; ?>">
 </div>

 <div class="input_box">
 <span>Amount To Pay:</span>
 <input type="text" name="amount_to_pay" id="amount_to_pay" value="<?php echo $amount_to_pay; ?>">
 </div>

 <div class="input_box">
 <span>Cash From Customer:</span>
 <input type="text" name="amount_from_customer" id="amount_from_customer" value="<?phpecho $cash_from_customer; ?>">
 </div>
 <div class="input_box" style="margin-bottom:10px;">
 <span>Change:</span><input type="text" name="change" id="change" value="<?php echo $change; ?>">
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <div class="container" id="process_button" style="margin-top:43px;">
 <button type="submit" id="btn_calculate_bills" name="calculate_bills" class="btn btnprimary btn_process">CALCULATE BILLS</button>
 <button type="submit" id="btn_change" name="change" class="btn btninfo btn_process">CHANGE</button>
 <button type="submit" id="btn_new" name="new" class="btn btnsecondary btn_process">NEW</button>
 </div>
 </form>
 </div>