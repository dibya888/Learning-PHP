<?php 
    class insert extends db{

    }
?>

<html>
    <head>
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class= "col-sm-3">
                </div>
                <div class= "col-sm-6 pt-4 mt-4 border border-success">
                    <h3 class="text-center p-2 bg-success text-white">Registration Form</h3>
                    <form action="insert.php" method="POST">
                        First Name: <br>
                        <input type="text" name="category_name" /> <br> <br>
                        Last Name: <br>
                        <input type="text" name="category_entrydate" /> <br> <br>
                        <input type="submit" value="Submit" name="submit" class="btn btn-success"/>
                            <input type="button" value="Back" name="back" class="btn btn-danger" onclick="window.location.href='view.php'"/>
                    </form>
            </div>
        </div>
    </body>
</html>
