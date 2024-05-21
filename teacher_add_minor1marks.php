<?php
include "connection.php";
$exam=$_REQUEST['c'];
$course=$_REQUEST['d'];
$sem=$_REQUEST['e'];
$sub=$_REQUEST['f'];

if($exam=="minor_1_marks")
{
$query18="Select * from admin_add_student where coursename='".$course."' && sem_id=".$sem;

$res4=mysqli_query($conn,$query18);

?>

<form  action="teacher_add_marks_action.php?q=<?php echo $course ?>&s=<?php echo $sem ?>&r=<?php echo $sub ?>&m=<?php echo $exam ?>" method="post">
    <?php



    $ans="<table align='center' border=\"1\">
<tr>
    <th>Sr.no</th><th>Student ID</th><th>University Roll No</th><th>Name</th><th>Photo</th><th>Minor1 Marks</th>
    </tr>";

    $count=0;
    while($row=mysqli_fetch_array($res4))
    {
        $count++;
        $ans.="<tr>";
        $ans=$ans."<td>$count</td>";
        $ans=$ans."<td>$row[0]</td>";
        $ans=$ans."<td>$row[1]</td>";
        $ans=$ans."<td>$row[2]</td>";
        $ans=$ans."<td><img src='$row[31]' height='100' width='100'></td>";
        $ans=$ans."<td><input type='text' id='m1_$row[0]' name='m1_$row[0]' onblur='go1(this,\"minor1\")'required></td>";
        $ans.="</tr>";
    }

    $ans.="</table>";

    echo $ans;
    }


    else if($exam=="minor_2_marks")
    {
    $query18="Select * from admin_add_student where coursename='".$course."' && sem_id=".$sem;

    $res4=mysqli_query($conn,$query18);

    ?>

    <form action="teacher_add_marks_action.php?q=<?php echo $course ?>&s=<?php echo $sem ?>&r=<?php echo $sub ?>&m=<?php echo $exam ?>" method="post">
        <?php



        $ans="<table align='center' border=\"1\">
<tr>
    <th>Sr.no</th><th>Student ID</th><th>University Roll No</th><th>Name</th><th>Photo</th><th>Minor2 Marks</th>
    </tr>";

        $count=0;
        while($row=mysqli_fetch_array($res4))
        {
            $count++;
            $ans.="<tr>";
            $ans=$ans."<td>$count</td>";
            $ans=$ans."<td>$row[0]</td>";
            $ans=$ans."<td>$row[1]</td>";
            $ans=$ans."<td>$row[2]</td>";
            $ans=$ans."<td><img src='$row[31]' height='100' width='100'></td>";
            $ans=$ans."<td><input type='text' id='m2_$row[0]'name='m2_$row[0]' onblur='go1(this,\"minor2\")' required></td>";
            $ans.="</tr>";
        }

        $ans.="</table>";

        echo $ans;
        }
        else if($exam=="quiz_marks")
        {
        $query18="Select * from admin_add_student where coursename='".$course."' && sem_id=".$sem;

        $res4=mysqli_query($conn,$query18);

        ?>

        <form action="teacher_add_marks_action.php?q=<?php echo $course ?>&s=<?php echo $sem ?>&r=<?php echo $sub ?>&m=<?php echo $exam ?>" method="post">
            <?php



            $ans="<table align='center' border=\"1\">
<tr>
    <th>Sr.no</th><th>Student ID</th><th>University Roll No</th><th>Name</th><th>Photo</th><th>Quiz Marks</th>
    </tr>";

            $count=0;
            while($row=mysqli_fetch_array($res4))
            {
                $count++;
                $ans.="<tr>";
                $ans=$ans."<td>$count</td>";
                $ans=$ans."<td>$row[0]</td>";
                $ans=$ans."<td>$row[1]</td>";
                $ans=$ans."<td>$row[2]</td>";
                $ans=$ans."<td><img src='$row[31]' height='100' width='100'></td>";
                $ans=$ans."<td><input type='text' id='q_$row[0]' name='q_$row[0]' onblur='go1(this,\"quiz\")' required></td>";
                $ans.="</tr>";
            }

            $ans.="</table>";

            echo $ans;
            }
            else if($exam=="major_marks")
            {
            $query18="Select * from admin_add_student where coursename='".$course."' && sem_id=".$sem;

            $res4=mysqli_query($conn,$query18);

            ?>

            <form action="teacher_add_marks_action.php?q=<?php echo $course ?>&s=<?php echo $sem ?>&r=<?php echo $sub ?>&m=<?php echo $exam ?>" method="post">
                <?php



                $ans="<table align='center' border=\"1\">
<tr>
    <th>Sr.no</th><th>Student ID</th><th>University Roll No</th><th>Name</th><th>Photo</th><th>Major Marks</th>
    </tr>";

                $count=0;
                while($row=mysqli_fetch_array($res4))
                {
                    $count++;
                    $ans.="<tr>";
                    $ans=$ans."<td>$count</td>";
                    $ans=$ans."<td>$row[0]</td>";
                    $ans=$ans."<td>$row[1]</td>";
                    $ans=$ans."<td>$row[2]</td>";
                    $ans=$ans."<td><img src='$row[31]' height='100' width='100'></td>";
                    $ans=$ans."<td><input type='text' id='ma_$row[0]' name='ma_$row[0]' onblur='go1(this,\"major\")' required></td>";
                    $ans.="</tr>";
                }

                $ans.="</table>";

                echo $ans;
                }
                    ?>
                <br>
                 <center><input type="submit" value="submit"></center><br>
                </form>


            </form>
</form>
</form>