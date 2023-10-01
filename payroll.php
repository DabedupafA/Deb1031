<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type = "text/css" href = "css files/payroll.css"/>
</head>
<style>
      body {
  background-image: url('photos/background_images/angas.webp');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
    .container {
  border: 5px solid #333; /* Border with color (#333) and width (2px) */
  border-radius: 30px; /* Optional: Add border radius for rounded corners */
  background-color: rgba(255, 255, 255, 0.5); /* 50% transparent white */
  width: 100%;
  display: flex;
  justify-content: space-between;
  padding: 20px;
  align-content: center;


}
    </style>
<body>
<div class="d-flex">
        <div class="vh-100 sticky-top" style="width: 300px;">
            <section>
                <nav class="navbar">
                    <ul>
                        <li>
                            <a href="firstpage.php">
                                <p>Home
                            </a>
                        </li>
                        </p>
                        </li>
                        <li><a href="employee_registration_save.php">
                                <p>Employee Registration
                            </a></li>
                        </p>
                        <li>
                        <a href="payroll.php">
                                <p>Payroll
                            </a>
                        </p>
                        </li>
                        <li><a href="">
                                <p>Payroll Report
                            </a></li>
                        </p>
                        <li><a href="snacks.php">
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
        <div class="left-column">
            <h2>Employee Basic Info:</h2>
            <form action="" method="post">
                <div class="pic">
                    <img src="image.jpg" width="200px" height="200px">
                </div>
                <div class="form-group">
                    <label for="employee_number">Employee Number:</label>
                    <input type="text" id="employee_number" name="employee_number" required>
                </div>
                <div class="form-group">
                    <label for="search-button">Search Employee:</label>
                    <button type="submit" class="search-btn">Search</button>
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" id="department" name="department" readonly>
                </div>
                <h2>Basic Income:</h2>
                    <div class="form-group">
                        <label for="rate_per_hour">Rate / Hour:</label>
                        <input type="text" id="rate_per_hour" name="rate_per_hour" required>
                    </div>
                    <div class="form-group">
                        <label for="hours_per_cutoff">No. of Hours / Cut Off:</label>
                        <input type="text" id="hours_per_cutoff" name="hours_per_cutoff" required>
                    </div>
                    <div class="form-group">
                        <label for="income_per_cutoff">Income / Cut Off:</label>
                        <input type="text" id="income_per_cutoff" name="income_per_cutoff" readonly>
                    </div>
                <h2>Honorarium Income:</h2>
                    <div class="form-group">
                        <label for="rate_per_hour">Rate / Hour:</label>
                        <input type="text" id="rate_per_hour" name="rate_per_hour" required>
                    </div>
                    <div class="form-group">
                        <label for="hours_per_cutoff">No. of Hours / Cut Off:</label>
                        <input type="text" id="hours_per_cutoff" name="hours_per_cutoff" required>
                    </div>
                    <div class="form-group">
                        <label for="income_per_cutoff">Income / Cut Off:</label>
                        <input type="text" id="income_per_cutoff" name="income_per_cutoff" readonly>
                    </div>
                    <h2>Other Income:</h2>
                    <div class="form-group">
                        <label for="rate_per_hour">Rate / Hour:</label>
                        <input type="text" id="rate_per_hour" name="rate_per_hour" required>
                    </div>
                    <div class="form-group">
                        <label for="hours_per_cutoff">No. of Hours / Cut Off:</label>
                        <input type="text" id="hours_per_cutoff" name="hours_per_cutoff" required>
                    </div>
                    <div class="form-group">
                        <label for="income_per_cutoff">Income / Cut Off:</label>
                        <input type="text" id="income_per_cutoff" name="income_per_cutoff" readonly>
                    </div>
                <h2>Summary Income:</h2>
                    <div class="form-group">
                        <label for="gross_incom">Gross Income:</label>
                        <input type="text" id="gross_income" name="gross_income" required>
                    </div>
                    <div class="form-group">
                        <label for="net_income">Net Income:</label>
                        <input type="text" id="net_income" name="net_income" readonly>
                    </div>
            </form>
        </div>
        <div class="right-column">
            <form action="" method="post">
                <br><br></br></br>
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" readonly>
                </div>
                <div class="form-group">
                    <label for="middle_name">Middle Name:</label>
                    <input type="text" id="middle_name" name="middle_name" readonly>
                </div>
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" id="surname" name="surname" readonly>
                </div>
                <div class="form-group">
                    <label for="civil_status">Civil Status:</label>
                    <input type="text" id="civil_status" name="civil_status" readonly>
                </div>
                <div class="form-group">
                    <label for="qualified_dependents">Qualified Dependents:</label>
                    <input type="text" id="qualified_dependents" name="qualified_dependents" readonly>
                </div>
                <div class="form-group">
                    <label for="paydate">Paydate:</label>
                    <input type="text" id="paydate" name="paydate" required>
                </div>
                <div class="form-group">
                    <label for="employee_status">Employee Status:</label>
                    <input type="text" id="employee_status" name="employee_status" readonly>
                </div>
                <div class="form-group">
                    <label for="designation">Designation:</label>
                    <input type="text" id="designation" name="designation" readonly>
                </div>
                <h2>Regular Deductions:</h2>
                    <div class="form-group">
                        <label for="sss_contribution">SSS Contribution:</label>
                        <input type="text" id="sss_contribution" name="sss_contribution" readonly>
                    </div>
                    <div class="form-group">
                        <label for="philhealth_contribution">Philhealth Contribution:</label>
                        <input type="text" id="philhealth_contribution" name="philhealth_contribution" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pagibig_contribution">Pag-IBIG Contribution:</label>
                        <input type="text" id="pagibig_contribution" name="pagibig_contribution" readonly>
                    </div>
                    <div class="form-group">
                        <label for="income_tax_contribution">Income Tax Contribution:</label>
                        <input type="text" id="income_tax_contribution" name="income_tax_contribution" readonly>
                    </div>
                <h2>Other Deductions:</h2>
                    <div class="form-group">
                        <label for="sss_loan">SSS Loan:</label>
                        <input type="text" id="sss_loan" name="sss_loan" required>
                    </div>
                    <div class="form-group">
                        <label for="pagibig_loan">Philhealth Contribution:</label>
                        <input type="text" id="pagibig_loan" name="pagibig_loan" required>
                    </div>
                    <div class="form-group">
                        <label for="faculty_savings_deposit">Faculty Savings Deposit:</label>
                        <input type="text" id="faculty_savings_deposit" name="faculty_savings_deposit" required>
                    </div>
                    <div class="form-group">
                        <label for="faculty_savings_loan">Faculty Savings Loan:</label>
                        <input type="text" id="faculty_savings_loan" name="faculty_savings_loan" required>
                    </div>
                    <div class="form-group">
                        <label for="salary_loan">Salary Loan:</label>
                        <input type="text" id="salary_loan" name="salary_loan" required>
                    </div>
                    <div class="form-group">
                        <label for="other_loan">Other Loan:</label>
                        <input type="text" id="other_loan" name="other_loan" required>
                    </div>
                <h2>Deduction Summary:</h2>
                    <div class="form-group">
                        <label for="total_deductions">Total Deductions:</label>
                        <input type="text" id="total_deductions" name="total_deductions" readonly>
                    </div>
            </form>
            <div>
                <button type="button" class="blue-btn">GROSS INCOME</button>
                <button type="button" class="blue-btn">NET INCOME</button>
                <button type="button" class="green-btn">SAVE</button>
                <button type="button" class="green-btn">UPDATE</button>
                <button type="button" class="new-btn">NEW</button>
            </div>
        </div>
    </div>
</body>
</html>
