<?php
$conn = mysqli_connect('localhost', 'root', '', 'phptutorial');
if (isset($_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];

    $sql = "DELETE FROM student WHERE id = $deleteid";
    if(mysqli_query($conn, $sql)==TRUE){
        header('location:view.php');
    };

}
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class= "col-sm-2">
                </div>
                <div class= "col-sm-8 pt-4 mt-4 border border-success">
                    <h3 class="text-center p-2 m-2 bg-success text-white">Student Infromation</h3>
                    <?php
                        $sql = "SELECT * FROM student";
                        $query = mysqli_query($conn, $sql);
                        echo "<table class='table table-white'>
                        <tr><th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Actions</th></tr>";
                        while($data = mysqli_fetch_assoc($query)){

                        $id = $data['id'];
                        $firstName = $data['firstName'];
                        $lastName = $data['lastName'];
                        $email = $data['email'];

                        echo "<tr>
                        <td>$id</td>
                        <td>$firstName</td>
                        <td>$lastName</td>
                        <td>$email</td>
                        <td><span class='btn btn-success'><a href='edit.php?id=$id' class='text-white text-decoration-none'>Edit</a></span> 
                        <span class='btn btn-danger'><a href='view.php?deleteid=$id' class='text-white text-decoration-none'>Delete</a></span></td>
                        </tr>";
                        }
                        echo "</table>";
                    ?>    
                </div>
                <div class= "col-sm-2">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-12 text-center">
                <input type="button" value="Add Student" name="add" class="btn btn-success" onclick="window.location.href='insert.php'">
                </div>
            </div>
        </div>
    </body>
</html>