<?php
session_start();
include("connect.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to IIT Indore</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
            color:#fff;
            font-weight: 1000;
        }

        body {
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('b1.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            
        }

        header {
            display: flex;
            justify-content : top;
            background : transparent;
            padding: 20px;
            text-align: center;
        }

        header img {
            width: 100px;
            height: auto;
        }

        .container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            background : transparent;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        img {
            border: 2px solid #fff;
            padding: 1em;
            border-radius: 50%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 2px solid #fff;
            font-weight: 500;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background: transparent;
            color: white;
        }

        .footer {
            text-align: center;
            padding: 10px;
            background: transparent;
            color: white;
            bottom: 0;
            width: 100%;
            margin: .5em;
        }
        h1{
            display: flex;
            justify-content: center;
            color: #fff;
        }
    
    </style>
</head>

<body>

    <header>
        <img src="iiti_logo.png" alt="IIT Indore Logo" >
        <a href="logout.php">Logout</a>
    </header>

    <div class="container">
        <h1>Welcome to IIT Indore</h1>
        <h2>BTech CSE Course Details</h2>
        <table>
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Credits</th>
            </tr>
            <tr>
                <td>CS 103</td>
                <td>Computer Programming</td>
                <td>2</td>
            </tr>
            <tr>
                <td>CS 153</td>
                <td>Computer Programming Lab</td>
                <td>1.5</td>
            </tr>
            <tr>
                <td>CS 201</td>
                <td>Discrete Mathematical Structures</td>
                <td>3</td>
            </tr>
            <tr>
                <td>CS 202</td>
                <td>Automata Theory and Logic</td>
                <td>3</td>
            </tr>
            <tr>
                <td>CS 203</td>
                <td>Data Structures and Algorithms</td>
                <td>3</td>
            </tr>
            <tr>
                <td>CS 253</td>
                <td>Data Structures and Algorithms Lab</td>
                <td>1.5</td>
            </tr>
            <tr>
                <td>CS 204</td>
                <td>Design and Analysis of Algorithms</td>
                <td>3</td>
            </tr>
            <tr>
                <td>CS 254</td>
                <td>Design and Analysis of Algorithms Lab</td>
                <td>1.5</td>
            </tr>
            <tr>
                <td>CS 206</td>
                <td>Login Design</td>
                <td>3</td>
            </tr>
            <tr>
                <td>CS 206</td>
                <td>Login Design Lab</td>
                <td>1.5</td>
            </tr>
            <tr>
                <td>CS 207</td>
                <td>Database and Information System</td>
                <td>3</td>
            </tr>
            <tr>
                <td>CS 357</td>
                <td>Database and Information System Lab</td>
                <td>1.5</td>
            </tr>
            <tr>
                <td>CS 208</td>
                <td>Software Engineering</td>
                <td>3</td>
            </tr>
            <tr>
                <td>CS 258</td>
                <td>Software Engineering Lab</td>
                <td>1.5</td>
            </tr>
            <tr>
                <td>CS 302</td>
                <td>Computer Graphics and Visualization</td>
                <td>3</td>
            </tr>
            <tr>
                <td>CS 352</td>
                <td>Computer Graphics and Visualization Lab</td>
                <td>1.5</td>
            </tr>
            <tr>
                <td>CS 304N</td>
                <td>Computer Intelligence</td>
                <td>3</td>
            </tr>
        </table>
    </div>

    <div class="footer">
        <p>&copy; 2024 IIT Indore.</p>
    </div>

</body>

</html>