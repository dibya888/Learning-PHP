<?php
    class db{
        public $hostname;               //These information needed for the connection to the database with php
        public $username;
        public $password;
        public $db_name;
        public $conn;
        //Connection to the database
        public function __construct($hostname, $username, $password, $db_name){ //This is the constructor of the class
            
            $this->hostname = $hostname;    //Assigning the values to the properties of the class
            $this->username = $username;
            $this->password = $password;
            $this->db_name = $db_name;

            $this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name); //This is the connection to the database

            if(!$this->conn){
                echo "Connection failed: " . mysqli_error($this->conn);
            } else {
                echo "Database Connected successfully<br>";
            }
        }
        //Inserting data to the database
        public function insert($cname, $centrydate){
            $sql = "INSERT INTO category(category_name, category_entrydate) 
            VALUES ('$cname', '$centrydate')";

            if (mysqli_query($this->conn, $sql) == TRUE){
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
        //Updating data in the database
        public function update(){
            $sql = "UPDATE category SET category_name = 'Stationary', category_entrydate = '2023-01-23' WHERE category_id = '2'";

            if (mysqli_query($this->conn, $sql)==TRUE){
                echo "Record updated successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }

        //Selecting data from the database
        public function select($tablename, $columnname){
            $sql = "SELECT * FROM category";
            $data = mysqli_query($this->conn, $sql);

            while ($row = mysqli_fetch_array($data)){
                echo $data1 = $row[$columnname] . "<br>";
            }
        }
        //Deleting data from the database
        public function delete($tablename, $columnname, $cvalue){
            $sql = "DELETE FROM category WHERE category_id = $cvalue";

            if (mysqli_query($this->conn, $sql)==TRUE){
                echo "Record deleted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
    }

    }

    $database = new db('localhost', 'root', '', 'store_db');
    
    $database->select('category', 'category_name');
    // $database->delete('category', 'category_id', '3');

?>    