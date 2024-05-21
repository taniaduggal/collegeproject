<?php
$mysqli=new mysqli("127.0.0.1","root","","gndu_database");
if($mysqli->connect_errno)
echo "connection failed";


if(isset($_POST['submit']))
{
$ISNB=$_POST['ISNB'];
$Title=$_POST['Title'];
$Author=$_POST['Author'];
$Edition=$_POST['Edition'];
$publication=$_POST['publication'];
$insert="INSERT INTO BOOKS(ISNB,Title,Author,Edition,publication) VALUES ('$ISNB','$Title','$Author','$Edition''$publication)";


$mysqli->query($insert);
$insertid=$mysqli->insert_id;
?>
<script type="text/javascript">
alert('entry saved');
window.location.href="BOOKS.php?id=<?php echo $insertid ; ?>";
</script>
<?php
}
?>



 
<form action="BOOKS.php" method="post"><br>
ISNB<input type="text" name="ISNB" placeholder="ISNB"><br>
Title<input type="text" name="Title" placeholder="Title"><br>
Author<input type="text" name="Author" placeholder="Author"><br>
Edition<input type="text" name="Edition" placeholder="Edition"><br>
publication<input type="text" name="publication" placeholder="publication"><br>
<input type="submit" value="submit" name="submit">
</form>

