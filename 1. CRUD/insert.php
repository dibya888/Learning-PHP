<?php
    $conn = mysqli_connect('localhost', 'root', '', 'phptutorial');
    if (isset ($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];

        $sql = "INSERT INTO student (firstName, lastName, email) VALUES ('$firstName', '$lastName', '$email')";

        if (mysqli_query($conn, $sql) == TRUE) {
            echo "New record created successfully";
            header('location:view.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } 
    
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class= "col-sm-3">
                </div>
                <div class= "col-sm-6 pt-4 mt-4 border border-success">
                    <h3>Registration Form</h3>
                    <form action="insert.php" method="POST">
                        First Name: <br>
                        <input type="text" name="firstName" /> <br> <br>
                        Last Name: <br>
                        <input type="text" name="lastName" /> <br> <br>
                        Email: <br>
                        <input type="email" name="email" /> <br> <br>
                        <input type="submit" value="Submit" name="submit" class="btn btn-success"/>
                            <input type="button" value="Back" name="back" class="btn btn-danger" onclick="window.location.href='view.php'"/>
                    </form>
            </div>
        </div>
    </body>
</html>
