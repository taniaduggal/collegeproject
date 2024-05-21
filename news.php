<?php
include "connection.php";
$query="select description from news";

$result=mysqli_query($conn,$query);

//$row=mysqli_fetch_array($result);
//echo $row[0];




?>



          <div class="evenSection">

			<div class="evenText textPost">
					<marquee style="height:160px;" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="3" >
 					      <p text align="justify" style="color:#000000;">

    <?php while($row=mysqli_fetch_array($result))
    {
     ?>   <img src="img/dot.jpg" />
      <?php  echo $row[0];?> <br> <?php }
                    ?>
                              </strong></a></p>

                        </marquee>
                </div>
              </div>
