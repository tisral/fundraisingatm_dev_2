<?php
    $query = "Select * FROM distributors  WHERE setupID='$id' and role='VP' ORDER BY `distributors`.`LName` ASC";
    $result = mysqli_query($link, $query)or die("MySQL ERROR om query 2: ".mysqli_error($link));

     while($row = mysqli_fetch_assoc($result))
        {
         echo '<option value="'.$row['loginid'].'">'.$row[FName].' '.$row[LName].' '.$row[loginid].'</option>';
        }

        /* This Query script needs to be updated to follow PDO procedure in binding and prepare at a later date.

            $query = $pdo->prepare( "Select * FROM distributors  WHERE setupID='$id' and role='VP' ORDER BY `distributors`.`LName` ASC");
    $query->execute();

    $arr = $query->fetchall(PDO::FETCH_ASSOC);
    if(!$arr) exit('No rows');
    var_export($arr);
    $query = null;

    */
 ?>