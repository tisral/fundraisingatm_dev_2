<?php
    $query = "Select * FROM distributors  WHERE setupID='$id' and role='VP' ORDER BY `distributors`.`LName` ASC";
    $result = mysqli_query($link, $query)or die("MySQL ERROR om query 2: ".mysqli_error($link));

     while($row = mysqli_fetch_assoc($result))
        {
         echo '<option value="'.$row['loginid'].'">'.$row[FName].' '.$row[LName].' '.$row[loginid].'</option>';
        }
 ?>