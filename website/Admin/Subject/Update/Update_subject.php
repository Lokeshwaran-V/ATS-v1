<?php

    include 'connection_establishment.php';
    // Retrieve form data
    $SUBJECT_CODE = $_POST["SUBJECT_CODE"];
    $SUBJECT_NAME = $_POST["SUBJECT_NAME"];
    $SUBJECT_TYPE = $_POST["SUBJECT_TYPE"];
    
    function update_faculty($SUBJECT_CODE,$SUBJECT_NAME,$SUBJECT_TYPE){
        
        // SQL query to update data into the database
        $update_sql = "UPDATE FACULTY_REGISTER SET 
        SUBJECT_CODE = '$SUBJECT_CODE',
        SUBJECT_NAME = '$SUBJECT_NAME',
        SUBJECT_TYPE = '$SUBJECT_TYPE'
        WHERE FACULTY_ID = '$SUBJECT_CODE'";

        try{
            if ($GLOBALS["conn"]->query($update_sql) === TRUE) {
                echo "Record updated successfully";
            }

        }
        catch(mysqli_sql_exception){
            echo "Error: " .$GLOBALS["conn"]->error;
            
        }
    }

update_faculty($SUBJECT_CODE,$SUBJECT_NAME,$SUBJECT_TYPE);
?>