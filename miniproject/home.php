<?php
    session_start();

    include("php/config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
    }
?>    
<!DOCTYPE html>
<html lang="en" data-bs-theme="" id="htmlPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="stylesheet" href="style/homestyle.css">
    <link rel="stylesheet" href="style/darkmode.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="menu">
            <div class="toggle mt-0">
                <input type="checkbox" class="checkbox" id="checkbox">
                <label for="checkbox" class="checkbox-label">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <span class="ball"></span>
                </label>
            </div>
            <a href="php/logout.php">Logout</a>
            <a href="history.php">Track History</a>
            <a href="home.php">Home Page</a>
        </div>
    </nav>

<div class="homePage">
    <div class="contaner">
        <h1 class="heading">To Do List</h1>
        <div class="inputDiv">
            <input type="text" class="input"  id="taskInput" placeholder="Enter Your Task">
            <button action="submit" id="addBtn" class="btn">Add</button>
        </div>    
        <div class="list">
            <div class="listItems">
                <ul id="taskList">

                </ul>
            </div>
            <div class="notes"></div>
        </div>    
    </div>
</div>   

<div class="contact">
    <p class="p1">Contact Us:</p>
    <p>Email: prateekyadav12203@gmail.com  |</a>
    <a href="https://www.linkedin.com/in/prateek-yadav-686b311b7?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">Linkdin<i class="fa-brands fa-linkedin"></i></a>|
    <a href="https://github.com/prateekyadav2003" target="_blank">GitHub<i class="fa-brands fa-github"></i></a>

    <h5>Copyright@2024 Designed By Prateek Yadav</h5>
</div>


    <script src="javascript/home.js"></script>
</body>
</html>