<?php

include_once("auth.php");
check_authentication();

// Connect to the database (you need to replace these with your actual credentials)
$servername = "localhost"; // Change to your MySQL server hostname
$username = "id21286680_benjamin";
$password = "Benjamin@23";
$database = "id21286680_cw412";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $message = $_POST["message"];

    // Insert the new message into the database
    $sql = "INSERT INTO PRP411_messages (name, message, timestamp) VALUES ('$name', '$message', NOW())";
    
    if ($conn->query($sql) === true) {
        // Message inserted successfully
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve messages from the database
$sql = "SELECT * FROM PRP411_messages ORDER BY timestamp";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../Stylesheet/Full_Stylesheet.css">
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>PRPPD411 Discussion</title>
    <style>
        /* Existing CSS styles here */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        h1{
            color: aqua;
            position: relative;
            top: 50px;
        }

        .container {
            width: 80%;
            max-width: 600px;
            /*padding: 20px;*/
            border: 1px solid #ccc;
            border-radius: 5px;
            /*background-color: #f9f9f9;*/
            overflow-y: scroll;
            height: 500%;
            color: aqua;
            position: relative;
            top: 50px;
        }

        .message-container {
            display: flex;
            flex-direction: column;
        }

        .message {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            align-self: <?php echo $userLoggedIn ? 'flex-end' : 'flex-start'; ?>;
        }
        .message p {
            margin: 0;
        }

        .form-container {
            width: 80%;
            max-width: 600px;
            margin-top: 20px;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            margin-bottom: 10px;
            padding: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <a href="../HomePage.html">
            <img src="../Stylesheet/CTU buddy Corner.png" alt="Your Website Logo" class="logo">
        </a>
        
        <div class="display">
                <div class="navigation" style="z-index: auto;">
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
                            <a href="../Discussion/Discussion.php"> <!--Link to the Discussion page-->
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
    <h1>PRP411 Discussion</h1>

    <!-- Messages Container -->
    <!-- Display messages -->
    <div id="message-container" class="container">
        <div class="message-container">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='message'>";
                    echo "<p>Name: " . $row["name"] . "</p>";
                    echo "<p>Message: " . $row["message"] . "</p>";
                    echo "<p>Timestamp: " . $row["timestamp"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "No messages yet.";
            }
            ?>
        </div>
    </div>

    <!-- Message submission form -->
    <div class="form-container">
        <form method="post" action="">
            <label for="name" style="color:aqua;">Name:</label>
            <input type="text" name="name" required><br>
            <label for="message" style="color:aqua;">Message:</label>
            <textarea name="message" rows="4" cols="50" required></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <footer class="Hfooter" style="width: 100%;">
        <div class="Hfooter-content">
            <div class="footer-section2">
                <h3 style="position: absolute; left: 12.9%; top: -3%;">
                    Navigation
                </h3>
                <nav>
                    <ul class="space">
                        <li><a href="../Homepage.html">Home</a></li>
                        <li><a href="../Timetable.html">Timetable</a></li>
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

    <script>
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
    </script>
</body>
</html>