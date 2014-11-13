<?php 
include_once("configuration.php");

$sqlSelect = "SELECT * FROM tblairport";
$result = mysql_query($sqlSelect) or die(mysql_error());
$numOfRows = mysql_num_rows($result);
if($numOfRows > 0)
{
	?>
    <select class="airports">
    <option>Select Airport</option>
    <?php
	while($res = mysql_fetch_array($result))
	{
		?>
        <option value="<?php echo $res['id'];?>"><?php echo $res['name']; ?></option>
        <?php
		
	}
	?>
    </select>
    <?php
}
else
{
	?>
    <div style="color:#F00">Sorry! There is no airport.</div>
    <?php
}

?>