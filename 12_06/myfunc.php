
<?php
//get the database connection file
require_once 'dbconf.php';
 //GET DATA FROM DB
 function book($connect){
            try{
            
                $sql = "SELECT book_id,name FROM  book";
            
            
                $result = mysqli_query($connect,$sql);
            
                if (mysqli_num_rows($result)>0) {
                
            
                    echo "<table border=1> ";
            
                $col = mysqli_fetch_fields($result);
            
                echo "<tr>";
                foreach ($col as $value) {
                    
                        echo "<td>".$value->name."</td>";
                    }

                    echo "<td> View details </td>";
                    echo "</tr>";
                    while($row = mysqli_fetch_assoc($result)){ 
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    $id=$row['book_id'];
                    //query string
                    echo "<td><a href='printtable.php? book_id=$book_id '> View </a> </td>";
                    echo "</tr>";
                    
                    }

                    echo "</table>";
                } 
                else{
                    echo "No results"; 
                }
            
                }
            
            
            catch(Exception $e){
                die($e->getMessage());
            }
        }



         function bookdetails($book_id,$connect){
            try{
            
                $sql = "SELECT * FROM  book where book_id= $book_id";
            
            
                $result = mysqli_query($connect,$sql);
            
                if (mysqli_num_rows($result)>0) {
                
            
                    echo "<table border=1> ";
            
                $col = mysqli_fetch_fields($result);
            
                echo "<tr>";
                foreach ($col as $value) {
                    
                        echo "<td>".$value->name."</td>";
                    }
                    echo "</tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                    }
                    echo "</table>";
                } 
                else{
                    echo "No results"; 
                }
            
                }
            
            
            catch(Exception $e){
                die($e->getMessage());
            }
        }

?>
