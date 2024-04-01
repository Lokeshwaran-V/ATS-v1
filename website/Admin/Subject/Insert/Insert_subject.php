<?php

    include 'connection_establishment.php';
    // Retrieve form data
    $SUBJECT_CODE = $_POST["SUBJECT_CODE"];
    $SUBJECT_NAME = $_POST["SUBJECT_NAME"];
    $SUBJECT_TYPE = $_POST["SUBJECT_TYPE"];
    
    function update_faculty($SUBJECT_CODE,$SUBJECT_NAME,$SUBJECT_TYPE){
        
        // SQL query to insert data into the database
        $insert_sql = "INSERT INTO SUBJECT_RECORDS 
        (SUBJECT_CODE,SUBJECT_NAME,SUBJECT_TYPE)
        VALUES 9('$SUBJECT_CODE', '$SUBJECT_NAME', '$SUBJECT_TYPE'))";

        try{
            if ($GLOBALS["conn"]->query($insert_sql) === TRUE) {
                echo "Record updated successfully";
            }

        }
        catch(mysqli_sql_exception){
            echo "Error: " .$GLOBALS["conn"]->error;
            
        }
    }

update_faculty($SUBJECT_CODE,$SUBJECT_NAME,$SUBJECT_TYPE);
?>