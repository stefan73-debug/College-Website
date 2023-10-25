<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="Stylesheet/Full_Stylesheet.css">
        
        <title>
            Share Resources page
        </title>
        <style>
            body{
            min-height:110vh;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            }
            #Alfa {
                padding-top: 7%;
                color: white;
}

#Delta {
    padding-top: 1%;
    color: white;
}

#charly {
    padding-top: 0%;
    color: white;
}

#charly1 {
    position: relative;
    top: 0px;
    left: 0;
    color: white;
}

#charly2 {
    position: relative;
    top: 0px;
    left: 35px;
}

.charly3{
    position: relative;
    top: 0px;
}

#Sem {
    padding-top: 1%;
    padding-right: 10%;
    list-style: none;
    
    
    color: white;
}

#Sem1 {
    padding-top: -10%;
    padding-left: 10%;
    list-style: none    ;
    
    color: white;
}

#bravo1 {
    
    color: rgb(148, 169, 165);
    font-style: italic;
}

#bravo2 {
    
    color: rgb(148, 169, 165);
    font-style: italic;
}

#bravo3 {
    
    color: rgb(148, 169, 165);
    font-style: italic;
}

#bravo4 {
    
    color: rgb(148, 169, 165);
    font-style: italic;
}

#bravo5 {
    
    color: rgb(148, 169, 165);
    font-style: italic;
}

#bravo6 {
    
    color: rgb(148, 169, 165);
    font-style: italic;
}

#bravo7 {
    
    color: rgb(148, 169, 165);
    font-style: italic;
}

#bravo8 {
    
    color: rgb(148, 169, 165);
    font-style: italic;
}
    a{color: aqua;}
    a:active {color:purple}
    a:hover {color: purple}
    ul {
        list-style: none;
    }
    #Thingie{
        display: grid;
        align-items: center;
        grid-template-columns: 1fr 1fr;
        column-gap: 50px;
        
        
    }
        </style>
        
    </head>
    <body>
        <header>
            <a href="#">
                <img src="Stylesheet/CTU buddy Corner.png" alt="Your Website Logo" class="logo">
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
                                        <p>Enter Text here.</p>
                                        <button class="btn_login" onclick="change_to_login()">LOGIN</button>
                                    </div>
                                </div>
                                <div class="col_md_sign_up">
                                    <div class="cont_ba_opcitiy">
                                        <h2>SIGN UP</h2>
                                        <p>Enter Text here.</p>
                                        <button class="btn_sign_up" onclick="change_to_sign_up()">SIGN UP</button>
                                    </div>
                                </div>
                            </div>
                            <div class="cont_back_info">
                                <div class="cont_img_back_grey">
                                    <img src="Stylesheet/backtin.jpg" alt="" />
                                </div>
                            </div>
                            <div class="cont_forms" >
                                <div class="cont_img_back_">
                                    <img src="Stylesheet/backtin.jpg" alt="" />
                                </div>
                                <div class="cont_form_login">
                                    <a href="Shared recources.html" onclick="hidden_login_and_sign_up()" >
                                    <i class="material-icons">&#xE5C4;</i></a>
                                    <h2>LOGIN</h2>
                                    <input type="text" placeholder="Email" />
                                    <input type="password" placeholder="Password" onclick="testLogin()"/>
                                    <input type="submit" id="btn_login_id" class="btn_login"
                                    name="btn_login" value="LOGIN" onclick="testLogin()" />
                                </div>
                                <div class="cont_form_sign_up">
                                    <a href="Shared recources.html" onclick="hidden_login_and_sign_up()">
                                    <i class="material-icons">&#xE5C4;</i></a>
                                    <h2>SIGN UP</h2>
                                    <input type="text" placeholder="Email" />
                                    <input type="text" placeholder="User" />
                                    <input type="password" placeholder="Password" />
                                    <input type="password" placeholder="Confirm Password" />
                                    <input type="submit" id="btn_login_id" class="btn_sign_up"
                                    name="btn_login" value="SIGN UP" onclick="testLogin()" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="display">
                <div class="navigation" style="z-index: auto;">
                    <ul>
                        <li>
                            <a href="HomePage.html"> <!--Link to the Home page-->
                                <span class="icon">
                                    <ion-icon name="Home-outline"></ion-icon>
                                </span>
                                <span class="title" >Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="TimeTable.html"> <!--Link to the TimeTable page-->
                                <span class="icon">
                                    <ion-icon name="calendar-outline"></ion-icon>
                                </span>
                                <span class="title" data-title="">TimeTable</span>
                            </a>
                        </li>
                        <li>
                            <a href="Discussion.html"> <!--Link to the Discussion page-->
                                <span class="icon">
                                    <ion-icon name="chatbubbles-outline"></ion-icon>
                                </span>
                                <span class="title" data-title="">Discussion</span>
                            </a>
                        </li>
                        <li>
                            <a href="Shared recources.html"> <!--Link to the Share Resources page-->
                                <span class="icon">
                                    <ion-icon name="share-outline"></ion-icon>
                                </span>
                                <span class="title" data-title="" >Share Resources</span>
                            </a>
                        </li>
                        <li>
                            <a href="About Us.html"> <!--Link to the About us page-->
                                <span class="icon">
                                    <ion-icon name="help-circle-outline"></ion-icon>
                                </span>
                                <span class="title" data-title="" style="padding-left: -20px;">About us</span>
                            </a>
                        </li>
                        <li>
                            <a href="Contact Us.html"> <!--Link to the Contact us page-->
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
                window.location.href = "Homepage.html"; // Redirect to home page
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
            Click on login and Sign Up to  changue and view the effect
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
                window.location.href = "Shared recources.html";
            }
        </script>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        
        <script src="Stylesheet/script.js"></script>

        <h1 id="Alfa">Share Resources</h1>

        <h2 id="Delta">Programming Foundation Year 1 Room</h2>
        <h2 id="charly">Upload a New Resource:</h2>

        <!--Display uploaded PDF if available -->
        <div style="height: 10%;">
            <?php
            if(isset($_POST['upload'])) {
                $file_name = $_FILES['pdf_file']['name'];
                $file_data = file_get_contents($_FILES['pdf_file']['tmp_name']);

                // Establish a database connection (you may need to modify this)
                $conn = new mysqli("localhost", "root", "", "demo");

                if($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $stmt = $conn->prepare("INSERT INTO pdf_files (file_name, file_data) VALUES (?, ?)");
                $stmt->bind_param("ss", $file_name, $file_data);

                if($stmt->execute()) {
                    echo "PDF file uploaded successfully.";
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
                $conn->close();
            }
            ?>

            <!-- File upload form -->
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="pdf_file" id="charly1">
                <input type="submit" name="upload" value="Upload PDF" id="charly2">
            </form>

            <form action="" method="GET" class="charly3">
                <input type="text" name="search" placeholder="Search files">
                <button type="submit">Search</button>
            </form>

            <!-- Display and download uploaded PDFs -->
            <?php
            // Establish a database connection (you may need to modify this)
            $conn = new mysqli("localhost", "root", "", "demo");

            if($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT id, file_name FROM pdf_files";
            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $file_name = $row['file_name'];
                    echo "<a href='download.php?id=$id'>$file_name</a><br>";
                }
            } else {
                echo "No PDF files available.";
            }

            $conn->close();
            ?>

            <?php
            // Include your database connection code here
            $conn = new mysqli("localhost", "root", "", "demo");

            // Check if the search query is provided
            if (isset($_GET['search'])) {
                $searchQuery = '%' . $_GET['search'] . '%'; // Add wildcard characters for partial matching

                // Create a SQL query to search for files
                $sql = "SELECT * FROM pdf_files WHERE file_name LIKE ?";

                // Prepare and execute the query
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $searchQuery);
                $stmt->execute();

                $result = $stmt->get_result();

                // Display the search form
                echo '<form action="index.php" method="GET">
                <input type="text" name="search" 
                placeholder="Search files" value="' . htmlspecialchars($_GET['search']) . '">
                <button type="submit">Search</button>
                </form>';

                // Display the search results
                if ($result->num_rows > 0) {
                    echo '<h2>Search Results:</h2>';
                    echo '<ul>';
                    while ($row = $result->fetch_assoc()) {
                        $fileName = $row['file_name'];
                        $fileLink = 'path/to/files/' . $fileName; // Replace with the actual path to the files
                        echo '<li><a href="' . $fileLink . '">' . $fileName . '</a></li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<p>No files found matching the search criteria.</p>';
                }

                // Close the database connection
                $stmt->close();
                $conn->close();
            }
            ?>
        </div>
    
        <footer class="Hfooter" style="width: 100%;">
            <div class="Hfooter-content">
                <div class="footer-section2">
                    <h3 style="position: absolute; left: 12.9%; top: -3%;">
                        Navigation
                    </h3>
                    <nav>
                        <ul class="space">
                            <li><a href="Homepage.html">Home</a></li>
                            <li><a href="Timetable.html">Timetable</a></li>
                            <li><a href="Discussion.html">Discussion</a></li>
                            <br>
                            <li><a href="Shared recources.html">Shared Resources</a></li>
                            <li><a href="About Us.html">About us</a></li>
                            <li><a href="Contact Us.html">Contact us</a></li>
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
                        &copy; 2023 Your Website. All rights reserved.
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
    </body>
</html>
