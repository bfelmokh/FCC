<?php
$conn=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($conn,"helloajax") or die(mysqli_error());
$req="select * from auteur";
$rs=mysqli_query($conn,$req) or die(mysqli_error());

?>
<select name="auteur" id="auteur" onchange="chargerLivres(this.value)">
<?php while($aut=mysqli_fetch_assoc($rs)){?>
<option value="<?php echo($aut['id'])?>"><?php echo($aut['nom'])?></option>
<?php } ?>
</select>