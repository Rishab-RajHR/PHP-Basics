<?php
   
    $con = mysqli_connect('localhost','root','','insertdb');

    function showData() {
        
        global $con;

        $query = "SELECT * FROM `userdata`";
        $run = mysqli_query($con,$query);
        if($run == TRUE){
            
        while( $data = mysqli_fetch_assoc($run)) {
            echo "<pre>";
            print_r($data);
        }
                  
        }
        else{
           echo "Error !";
        }
    }
?>
<html>
    <head>
        <title>Show Data</title>
    </head>
    <body>

    <?php showData(); ?>
        
    </body>
</html>