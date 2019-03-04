<?php
     class Database{
         public $host   = "localhost";
         public $user   = "root";
         public $pass   = "";
         public $dbname = "mydb";

         public $link;
         public $error;


         public function __construct(){
             $this->connectDB();
         }


         private function connectDB(){
             $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
             if(!$this->link){
                 $this->error ="Connection fail".$this->link->connect_error;
                 return false;
             }

         }

         // Select or Read data

         public function select($query){
             $result = $this->link->query($query);
             if($result->num_rows > 0){
                 return $result;
             } else {
                 return false;
             }
         }

         // Insert data
         public function insert($query){
             $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
             if($insert_row){
                 header("Location: index.php?msg=".urlencode('Data Inserted successfully.'));
                 exit();
             } else {
                 die("Error :(".$this->link->errno.")".$this->link->error);
             }
         }

         // Update data
         public function update($query){
             $update_row = $this->link->query($query);
             if($update_row){
                 return true;
             } else {
                 return false;
             }
         }


         // Delete data
         public function delete($query){
             $delete_row = $this->link->query($query);
             if($delete_row){
                 header("Location: index.php?msg=".urlencode('Data Deleted successfully.'));
                 exit();
             } else {
                 die("Error :(".$this->link->errno.")".$this->link->error);
             }
         }

    }
?>