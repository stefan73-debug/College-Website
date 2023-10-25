<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../Stylesheet/Full_Stylesheet.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <title>
            Discussion page
        </title>
        
    </head>

    <style>
        /*#DiscH {
            position: absolute;
            top: 15%;
            left: 40.6%;
        }*/

        #DiscPic {
            width: 80%;
            height: 90%;
            padding-left: 8%;
            padding-top: 10%;
            padding-right: 11%;
        }

        h1{
            text-align: center;
            padding-top: 10%;
            font-family:"Engravers MT", cursive;
            color: rgb(255, 255, 255);
        }
        .h1{
            text-align: center;
            padding-top: 2%;
            font-family:"Engravers MT", cursive;
            color: rgb(255, 255, 255);
        }

        #Sem {
            padding-top: 1%;
            padding-right: 10%;
            list-style: none;
            color: white;
        }

        #Sem1 {
            padding-top: 0;
            padding-left: 10%;
            list-style: none;
            color: white;
        }

        button{
            background-color: transparent;
            color: white;
            padding: 5px;
        }
    </style>

    <body>
        <header>
            <a href="../HomePage.html">
                <img src="../Stylesheet/CTU buddy Corner.png" alt="Your Website Logo" class="logo">
            </a>

            <button type="button" class="login-btn" onclick="toggleLogin()">Login</button>
            <div class="login-overlay" id="loginOverlay">
                <div class="cotn_principal">
                    <div class="cont_centrar">
                        <div class="cont_login">
                            <div class="cont_info_log_sign_up">
                                <div class="col_md_login">
                                    <div class="cont_ba_opcitiy">
                                        <h2>LOGIN</h2>
                                        <button class="btn_login" onclick="change_to_login()">LOGIN</button>
                                    </div>
                                </div>
                                <div class="col_md_sign_up">
                                    <div class="cont_ba_opcitiy">
                                        <h2>SIGN UP</h2>
                                        <button class="btn_sign_up" onclick="change_to_sign_up()">SIGN UP</button>
                                    </div>
                                </div>
                            </div>
                            <div class="cont_back_info">
                                <div class="cont_img_back_grey">
                                    <img src="../Stylesheet/backtin.jpg" alt="" />
                                </div>
                            </div>
                            <div class="cont_forms" >
                                <div class="cont_img_back_">
                                    <img src="../Stylesheet/backtin.jpg" alt="" />
                                </div>
                                <div class="cont_form_login">
                                    <a href="Discussion.php" onclick="hidden_login_and_sign_up()" >
                                    <i class="material-icons">&#xE5C4;</i></a>
                                    <h2>LOGIN</h2>
                                    <form method="post" action="login.php">
                                        <label>Email/Username:</label>
                                        <input type="text" name="email_username" required><br>
                                        
                                        <label>Password:</label>
                                        <input type="password" name="password" required><br>
                                        
                                        <input type="submit" value="Login">
                                    </form>
                                    <?php
                                    if (isset($error_message)) {
                                        echo "<p>$error_message</p>";
                                    }
                                    ?>
                                </div>
                                <div class="cont_form_sign_up">
                                    <a href="Discussion.php" onclick="hidden_login_and_sign_up()">
                                    <i class="material-icons">&#xE5C4;</i></a>
                                    <h2>SIGN UP</h2>
                                    <form method="post" action="register.php">
                                        <label>Email:</label>
                                        <input type="text" name="email" required><br>
                                        
                                        <label>Username:</label>
                                        <input type="text" name="username" required><br>
                                        
                                        <label>Password:</label>
                                        <input type="password" name="password" required><br>
                                        
                                        <input type="submit" value="Sign Up">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="display">
            <div class="navigation" style="z-index: 100;">
                <ul>
                    <li>
                        <a href="../HomePage.html"> <!--Link to the Home page-->
                            <span class="icon">
                                <ion-icon name="Home-outline"></ion-icon>
                            </span>
                            <span class="title" >Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="../TimeTable.html"> <!--Link to the TimeTable page-->
                            <span class="icon">
                                <ion-icon name="calendar-outline"></ion-icon>
                            </span>
                            <span class="title" data-title="">TimeTable</span>
                        </a>
                    </li>
                    <li>
                        <a href="Discussion.php"> <!--Link to the Discussion page-->
                            <span class="icon">
                                <ion-icon name="chatbubbles-outline"></ion-icon>
                            </span>
                            <span class="title" data-title="">Discussion</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Shared Resources/shared_resources.php"> <!--Link to the Share Resources page-->
                            <span class="icon">
                                <ion-icon name="share-outline"></ion-icon>
                            </span>
                            <span class="title" data-title="" >Share Resources</span>
                        </a>
                    </li>
                    <li>
                        <a href="../About Us.html"> <!--Link to the About us page-->
                            <span class="icon">
                                <ion-icon name="help-circle-outline"></ion-icon>
                            </span>
                            <span class="title" data-title="" style="padding-left: -20px;">About us</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Contact Us.html"> <!--Link to the Contact us page-->
                            <span class="icon">
                                <ion-icon name="phone-portrait-outline"></ion-icon>
                            </span>
                            <span class="title" data-title="">Contact us</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </header>

        <h1 id="DiscH">Welcome to the Discussion page:</h1>
        <p class="h1">
            Please select a module below to enter the chat area
        </p>
        <div style="height: 350px; padding-top: 10%;">
            <p style="position: relative; right: 0%; top: -140px; color: white;">
                Semester&nbsp;1
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                Semester&nbsp;2
            </p>
            <a href="#">
                <button style="position: relative; top: -130px; right: 15%;" onclick="SubmitAlert()">CAF411</button>
                <br>
            </a>
            <a href="DLP411_message.php">
                <button style="position: relative; top: -128px; right: 15%;">DLP411</button>
                <br>
            </a>
            <a href="#">
                <button style="position: relative; top: -126px; right: 15%;" onclick="SubmitAlert()">PPD411</button>
                <br>
            </a>
            <a href="#">
                <button style="position: relative; top: -124px; right: 12.76%;" onclick="SubmitAlert()">PRP411</button>
            </a>
            <a href="#">
                <button style="position: relative; left: 13%; top: -220px;" onclick="SubmitAlert()">ENA412</button>
                <br>
            </a>
            <a href="#">
                <button style="position: relative; left: 15.2%; top: -218px;" onclick="SubmitAlert()">CW412</button>
                <br>
            </a>
            <a href="#">
                <button style="position: relative; left: 15.2%; top: -216px;" onclick="SubmitAlert()">RD412</button>
                <br>
            </a>
            <a href="#">
                <button style="position: relative; left: 15.2%; top: -214px;" onclick="SubmitAlert()">CF412</button>
            </a>
        </div>

        <script>
                    function SubmitAlert() {
                        alert("Thank you for your interest in messaging us.
                        Unfortunately this feature is still in development.
                        We apologize for any inconvenience this may cause. ");
                    }
        </script>

        <footer class="Hfooter">
            <div class="Hfooter-content">
                <div class="footer-section2">
                    <h3 style="position: absolute; left: 12.9%; top: -3%;">
                        Navigation
                    </h3>
                <nav>
                    <ul class="space">
                        <li><a href="../HomePage.html">Home</a></li>
                        <li><a href="../TimeTable.html">Timetable</a></li>
                        <li><a href="../Discussion/Discussion.php">Discussion</a></li>
                        <br>
                        <li><a href="../Shared Resources/shared_resources.php">Shared Resources</a></li>
                        <li><a href="../About Us.html">About us</a></li>
                        <li><a href="../Contact Us.html">Contact us</a></li>
                    </ul>
                </nav>
                </div>
                <div class="Lfooter-section2">
                    <h3>
                        Location
                    </h3>
                    <p>
                        CTU Buddy 1st Floor, Pretty Suites Office Block,
                        <br> Pretty Gardens Lifestyle Centre, Du Plessis Road,
                        <br> Langenhoven Park, Bloemfontein
                    </p>
                    <P>
                        South Africa
                    </p>
                    <p id="Text">
                        &copy; 2023 Secret Agent Benjamin Sandwich. All rights reserved.
                    </p>
                </div>
                <div class="footer-section2">
                    <h3 style="position: absolute; right: 14.5%;">
                        Connect
                    </h3>
                    <ul class="social">
                        <li class="reddit">
                            <a href="https://www.reddit.com/r/CTUBuddyTHING/">
                                <i class="fa fa-reddit" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com/SecretAgentBeni">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="linkedin">
                            <a href="http://www.linkedin.com/in/benjamin-undefined-a09a57285">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <script>
            // Show/hide login overlay when the login button is clicked
            function toggleLogin() {
                const loginOverlay = document.getElementById('loginOverlay');
                loginOverlay.style.visibility = "visible";
            }
            
            // Handle login form submission
            function handleLogin(event) {
                event.preventDefault();
                // Perform login logic here (e.g., redirect to home page)
                window.location.href = "Discussion.html"; // Redirect to home page
                return false;
            }

            // JavaScript to handle navigation opening and closing
            const navigation = document.querySelector('.navigation');
            const navigationIcons = document.querySelectorAll('.navigation ul li');
            
            navigationIcons.forEach((icon) => {
                icon.addEventListener('mouseover', () => {
                    navigation.classList.add('active');
                });
                
                icon.addEventListener('mouseout', () => {
                    navigation.classList.remove('active');
                });
            });

            /* ------------------------------------
            Click on login and Sign Up to  change and view the effect
            ---------------------------------------*/
            const time_to_show_login = 400;
            const time_to_hidden_login = 200;

            function change_to_login() {
                document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
                document.querySelector('.cont_form_login').style.display = "block";
                document.querySelector('.cont_form_sign_up').style.opacity = "0";

                setTimeout(function(){
                    document.querySelector('.cont_form_login').style.opacity = "1"; 
                },time_to_show_login);

                setTimeout(function(){
                    document.querySelector('.cont_form_sign_up').style.display = "none";
                },time_to_hidden_login);
            }

            const time_to_show_sign_up = 100;
            const time_to_hidden_sign_up = 400;

            function change_to_sign_up() {
                document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
                document.querySelector('.cont_form_sign_up').style.display = "block";
                document.querySelector('.cont_form_login').style.opacity = "0";

                setTimeout(function(){
                    document.querySelector('.cont_form_sign_up').style.opacity = "1";
                },time_to_show_sign_up);

                setTimeout(function(){
                    document.querySelector('.cont_form_login').style.display = "none";
                },time_to_hidden_sign_up);
            }

            const time_to_hidden_all = 500;

            function hidden_login_and_sign_up() {
                document.querySelector('.cont_forms').className = "cont_forms";
                document.querySelector('.cont_form_sign_up').style.opacity = "0";
                document.querySelector('.cont_form_login').style.opacity = "0";

                setTimeout(function(){
                    document.querySelector('.cont_form_sign_up').style.display = "none";
                    document.querySelector('.cont_form_login').style.display = "none";
                },time_to_hidden_all);
            }

            document.getElementsById('btn_login_id').addEventListener('click', testLogin);

            function testLogin()
            {
                window.location.href = "Discussion.html";
            }
        </script>
</body>
</html>