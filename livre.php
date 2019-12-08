<?php
$idA=$_GET['ida'];
$conn=mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($conn,"helloajax") or die(mysqli_error());
$req="select * from livre where idAuteur=$idA";
$rs=mysqli_query($conn,$req) or die(mysqli_error());
?>
<select name="livres">
<?php while($liv=mysqli_fetch_assoc($rs)){?>
<option value="<?php echo($liv['id'])?>"><?php echo($liv['titre'])?></option>
<?php } ?>
</select>