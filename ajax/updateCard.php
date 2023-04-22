<?php 

include_once "connect.php";

use core\Core;
require "../core/Core.php";
use models\Users;
require "../models/Users.php";
use models\Board;
require "../models/Board.php";
require "../views/main/board.php";



$con=mysqli_connect("109.251.199.4","remoteroot","a2SV369?UcZ{AXjn","db_teamx","33060");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST["cid"]) && isset($_POST["status"])){
    $cat=(int)$_POST["status"];
    $cid=(int)$_POST["cid"];
$query="UPDATE `tbl_card` SET fk_tbl_cat=$cat where cid=$cid";
$res=mysqli_query($con,$query);
echo 1;
}
