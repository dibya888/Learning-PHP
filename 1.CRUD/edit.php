<?php
    $conn = mysqli_connect('localhost', 'root', '', 'phptutorial');
    if($_GET['id']){
        $getid = $_GET['id'];
        $sql = "SELECT * FROM student WHERE id = $getid";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($query);
        $id = $data['id'];
        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $email = $data['email'];
    }

    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];

        $sql1 = "UPDATE student SET firstName = '$firstName', lastName = '$lastName', email = '$email' WHERE id = $id";
        if(mysqli_query($conn, $sql1) == TRUE){
            echo "Record updated successfully";
            header('location:view.php');
        } else {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
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
                    <h3 class="text-center p-2 bg-success text-white">Edit Form</h3>
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                        <input type="text" name="id" value=<?php echo $id?> hidden/>
                        First Name: <br>
                        <input type="text" name="firstName" value=<?php echo $firstName?>> <br> <br>
                        Last Name: <br>
                        <input type="text" name="lastName" value=<?php echo $lastName?>> <br> <br>
                        Email: <br>
                        <input type="email" name="email" value=<?php echo $email?>> <br> <br>
                        <input type="submit" value="Done" name="edit" class="btn btn-success"/>
                    </form>
            </div>
        </div>
    </body>
</html>
