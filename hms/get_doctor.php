<?php
include('include/config.php');
if(!empty($_POST["specilizationid"])) 
{
 $getsimilar_json = file_get_contents('https://n0hm97i7th.execute-api.us-east-1.amazonaws.com/prod?specilizationid='.$_POST["specilizationid"]);
 $getsimilar_array = json_decode($getsimilar_json,true);
 $results = $getsimilar_array['all_doctors'];
 ?>
 
 <option selected="selected">Select Doctor </option>
 <?php
foreach($results as $result)
 	{?>
  <option value="<?php echo htmlentities($result['id']); ?>"><?php echo htmlentities($result['doctorName']); ?></option>
  <?php
}
}


if(!empty($_POST["doctor"])) 
{

 $sql=mysqli_query($con,"select docFees from doctors where id='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
}
}

?>

