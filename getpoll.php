<?php
include "connection.php";
$op=$_GET["q"];
$r="select * from poll";
$result=mysqli_query($conn,$r);
$row=mysqli_fetch_array($result);
if($op==1)
{
    $yes=$row[0];
    $yes++;

    $query="update poll set yes=".$yes;
}
else if($op==2)
{
    $no=$row[1];
    $no++;

    $query="update poll set no=".$no;
}
else if($op==3)
{
    $cant=$row[2];
    $cant++;

    $query="update poll set cant=".$cant;
}


mysqli_query($conn,$query);


$qt="select yes+no+cant from poll";


$result=mysqli_query($conn,$qt);

$row=mysqli_fetch_array($result);

$total=$row[0];
echo "<br>"."Total Votes are ".$row[0];


$t="select * from poll";



$result=mysqli_query($conn,$t);

$row=mysqli_fetch_array($result);
$y=$row[0]/$total*100;
$n=$row[1]/$total*100;
$cant=$row[2]/$total*100;




echo '<div style=" color: white  ; background-color: red;width: '.$y.'px ">
&nbsp;
</div>Yes
<br>

<div style=" color: white  ; background-color: blue;width: '.$n.'px">
&nbsp;
</div> No
<br>
<div style=" color: white  ; background-color: green;width: '.$cant.'px">
&nbsp;
</div> Can t Say';






















