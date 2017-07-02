<?php
    $readUsername = $_POST["name"];
    $readPassword = $_POST["password"];
    $con = mysql_connect("hdm174585215.my3w.com","hdm174585215","yhn5682747");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }

    mysql_select_db("hdm174585215_db", $con);

    $sql="SELECT * FROM cashflow_user";

   $result = mysql_query($sql);
   if(!$result){
     echo mysql_error();
   }
   $flag=0;
    while($row = mysql_fetch_array($result))
      {
          if($readUsername == $row["username"]){
              if($readPassword == $row["password"]){
                $flag =1;
                echo "welcome:".$readUsername;
              }
          }
      }
      if($flag==0){
        header("location:../index.php");
        echo "username or password wrong";
      }
    mysql_close($con)
?>