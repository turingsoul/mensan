<?php
    $con = mysql_connect("hdm174585215.my3w.com","hdm174585215","yhn5682747");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }

    mysql_select_db("cashflow_user", $con);

    $sql="select * from cashflow_user";

   $result = mysql_query($sql);

   while($row = mysql_fetch_array($result))
     {
     echo $row['username'] . " " . $row['password'];
     echo "<br />";
     }

    mysql_close($con)
?>