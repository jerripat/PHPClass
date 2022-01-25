<?php
/**
 * Get the article record based on the id
 * 
 * @param object $conn Connection to the database
 * @param integer $id to the article
 * @return mixed associative array containing the article
 * withthat id,or null if not found 
 */

function getArticle($conn, $id){ 
    $sql="SELECT * FROM  article
                WHERE id= ? ";
                
    $stmt = mysqli_prepare($conn, $sql);   
    
    if ($stmt === false) {
         echo mysqli_error($conn);
     }else {
        mysqli_stmt_bind_param($stmt, "i", $id);
                
                if (mysqli_stmt_execute($stmt)){
                    $result = mysqli_stmt_get_result($stmt);
                    
                    return mysqli_fetch_array($result, MYSQL1_ASSOC);
                    
                }
    }
    
}            
