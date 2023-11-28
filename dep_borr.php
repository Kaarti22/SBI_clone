<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBI Clone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="dep_borr1.css">   
</head>
<body>
    <header>

        <div class="navbar">
            <div class="navbar-logo">
                <img class="logo" src="logo.png">
            </div>
            <div class="navbar-headings">
                <div class="headings-first">
                    <a class="home" href="index.html">Home</a>
                    <a class="Login" href="login_page.html">Login</a>
                    <a>Corporate Governance</a>
                    <a>Investor Relations</a>
                    <a>SBI in the News</a>
                    <a>Grahak Setu</a>
                    <a>Customer Care</a>
                    <a>Careers</a>
                    <span class="net-Ban">Net Banking</span>
                </div>
                <div class="headings-second">
                    <a>PERSONAL</a>
                    <a>NRI</a>
                    <a>BUSINESS</a>
                    <a>AGRICULTURE & RURAL</a>
                    <a>INTERNATIONAL BANKING</a>
                    <a>SBI Wealth</a>
                    <span>
                        <img class="yono" src="yono_icons.png">
                    </span>
                    <div class="search">
                        <input class="search-bar" placeholder="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-options">
                <img class="panel-img" src="accounts.png"><a class="accounts_login" href="account_opening.html">Accounts</a></div>
            <div class="panel-options">
            <img class="panel-img" src="investments_deposits.png"><a class="accounts_login" href="depositors_borrowers.html">Depositors and Borrowers</a></div>
            <div class="panel-options">
                <img class="panel-img" src="">
                <img class="panel-img loans" src="loans.png">Loans</div>
            <div class="panel-options">
                <img class="panel-img" src="cards.png">Cards</div>
            <div class="panel-options">
                <img class="panel-img" src="digital.png">Digital</div>
            <div class="panel-options">
                <img class="panel-img" src="information_services.png">Information & Services</div>
        </div>

    </header>

    <div class="main-section">
        <div class="dep_borr">
            <div class="heading">List of Depositors</div>
            <div class="content">
        
            <?php
                $depositors = [
                    [
                        "name" => "Kartikeya",
                        "accountNumber" => "123456",
                        "balance" => "$5000",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Jane",
                        "accountNumber" => "789012",
                        "balance" => "$7500",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Samuels",
                        "accountNumber" => "345678",
                        "balance" => "$5200",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Rohit Shetty",
                        "accountNumber" => "901234",
                        "balance" => "$100000",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Gopal Rao",
                        "accountNumber" => "567890",
                        "balance" => "$5590",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Chris Jordan",
                        "accountNumber" => "135791",
                        "balance" => "$1234",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Alex Hales",
                        "accountNumber" => "357913",
                        "balance" => "$34235",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "David Warner",
                        "accountNumber" => "579135",
                        "balance" => "$5666",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Michael",
                        "accountNumber" => "791357",
                        "balance" => "$99999",
                        "details" => "<a href='#'>Click Here</a>"
                    ]
                ];

                echo '<table><tr><th>  Name  </th><th>  A/C No.  </th><th>  Balance  </th></tr>';
                foreach ($depositors as $depositor) {
                    echo '<tr>';
                    echo '<td>' . $depositor["name"] . '</td>';
                    echo '<td>' . $depositor["accountNumber"] . '</td>';
                    echo '<td>' . $depositor["balance"] . '</td>';
                    echo '<td>' . $depositor["details"] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            ?>

            </div>
        </div>
        <div class="dep_borr">
            <div class="heading">List of Borrowers</div>
            <div class="content">
        
            <?php
                $borrowers = [
                    [
                        "name" => "Kartikeya",
                        "accountNumber" => "123456",
                        "balance" => "$5000",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Jane",
                        "accountNumber" => "789012",
                        "balance" => "$7500",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Samuels",
                        "accountNumber" => "345678",
                        "balance" => "$5200",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Rohit Shetty",
                        "accountNumber" => "901234",
                        "balance" => "$100000",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Gopal Rao",
                        "accountNumber" => "567890",
                        "balance" => "$5590",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Chris Jordan",
                        "accountNumber" => "135791",
                        "balance" => "$1234",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Alex Hales",
                        "accountNumber" => "357913",
                        "balance" => "$34235",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "David Warner",
                        "accountNumber" => "579135",
                        "balance" => "$5666",
                        "details" => "<a href='#'>Click Here</a>"
                    ],
                    [
                        "name" => "Michael",
                        "accountNumber" => "791357",
                        "balance" => "$99999",
                        "details" => "<a href='#'>Click Here</a>"
                    ]
                ];

                echo '<table><tr><th>  Name  </th><th>  A/C No.  </th><th>  Balance  </th></tr>';
                foreach ($borrowers as $borrower) {
                    echo '<tr>';
                    echo '<td>' . $borrower["name"] . '</td>';
                    echo '<td>' . $borrower["accountNumber"] . '</td>';
                    echo '<td>' . $borrower["balance"] . '</td>';
                    echo '<td>' . $borrower["details"] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            ?>

            </div>
        </div>
    </div>

    <footer>

        <div class="blue-section">
            <div class="first">
                <a>About Us</a>
                <a>Subsidiaries</a>
                <a>Corporate Governance</a>
                <a>Investor Relations</a>
                <a>SBI in the News</a>
                <a>Contact Us</a>
                <a>Careers</a>
                <a>Site Map</a>
                <a>Disclaimer</a>
            </div>
            <div class="middle">
                <div class="boxes">
                    <div class="yellow">Home</div>
                    <div class="white">
                        <li><a>Forex Card Rates</a></li>
                        <li><a>Interest Rates</a></li>
                        <li><a>Download Forms</a></li>
                        <li><a>Corporate Social Responsibility</a></li>
                        <li><a>Sustainability and Business</a></li>
                        <li><a>Responsibility Policy</a></li>
                        <li><a>Bank Calendar</a></li>
                        <li><a>RTI 2005</a></li>
                        <li><a>Grahak Setu</a></li>
                        <li><a>Equal Opportunity Policy for PWD</a></li>
                    </div>
                </div>
                <div class="boxes">
                    <div class="yellow">NRI</div>
                    <div class="white">
                        <li><a>Accounts</a></li>
                        <li><a>Investments</a></li>
                        <li><a>Loans</a></li>
                        <li><a>Remittances</a></li>
                        <li><a>Information</a></li>
                        <li><a>Privacy Notice and Consent Forms</a></li>
                    </div>
                </div>
                <div class="boxes">
                    <div class="yellow">Personal</div>
                    <div class="white">
                        <li><a>Savings Account</a></li>
                        <li><a>Loans</a></li>
                        <li><a>Investments & Deposits</a></li>
                        <li><a>Cards</a></li>
                        <li><a>Digital</a></li>
                        <li><a>Information & Services</a></li>
                    </div>
                </div>
                <div class="boxes">
                    <div class="yellow">International Banking</div>
                    <div class="white">
                        <li><a>Banking</a></li>
                        <li><a>Credit Finance</a></li>
                        <li><a>Services</a></li>
                    </div>
                </div>
                <div class="boxes">
                    <div class="yellow">Business</div>
                    <div class="white">
                        <li><a>CAG & MCG</a></li>
                        <li><a>Current Account</a></li>
                        <li><a>SME - Deposits</a></li>
                        <li><a>SME - Loans</a></li>
                        <li><a>Information</a></li>
                    </div>
                </div>
                <div class="boxes">
                    <div class="yellow">Wealth Management</div>
                    <div class="white">
                        <li><a>SBI Wealth</a></li>
                        <li><a>Products</a></li>
                    </div>
                </div>
            </div>
            <hr>
            <div class="last">
                IMPORTANT: State Bank of India never ask for your user id / password / pin no. through phone call / SMSes / e-mails. Any such phone call / SMSes / e-mails asking you to reveal credential or One Time Password through SMS could be attempt to withdraw money from your account.NEVER share these details to anyone. State Bank of India wants you to be secure. If you come across any such instances please inform us through e-mail to the following address- <a style="color: #12a8e0;"/>epg.cms@sbi.co.in</a>
            </div>
        </div>
        <div class="copyright">
            <div class="rights">© Copyright State Bank of India (APM Id : Webs_Info_875)</div>
            <div class="rights right2">Site best viewed at 1420 x 768 resolution in Edge, Mozilla 40 +, Google Chrome 45 +</div>
        </div>

    </footer>
</body>
</html>