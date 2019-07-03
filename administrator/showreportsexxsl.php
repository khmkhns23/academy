<?php
	include"../include/connect.php";
	include"../include/functions.php";

	$data = getreportbysex('M');
	$data2 = getreportbysex('F');
//print_r($data);
$strExcelFileName="Member-OrderBy-Sex.xls";
header("Content-Type: application/x-msexcel; name=\"$strExcelFileName\"");
header("Content-Disposition: inline; filename=\"$strExcelFileName\"");
header("Pragma:no-cache");
?>

<style>
	table{
		font-size: 14px;
	}
</style>
<div class="container">
  <h2>Table</h2>
  <p>คำอธิบาย : </p>                                                                                   
  <div class="table-responsive">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>หมายเลข</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>ชื่อเล่น</th>	
        <th>หมายเลขโทรศัพท์</th> 
		<th>รวม</th>   
      </tr>
    </thead>
    <tbody>
		<?php
		$i = 1;
		$msg = "";
			foreach($data AS $key=>$value)	{
				$msg .="<tr><td>$i</td><td>$value[id]</td><td>$value[thfirstname]</td>";
				$msg .="<td>$value[thlastname]</td><td>$value[province]</td><td>$value[telephone]</td><td></td></tr>";				
				$i++;
			}
				$msg .="<tr><td colspan='6' align='right'>รวมเพศชาย : </td><td>$value[sum] คน</td></tr>";
			foreach($data2 AS $key=>$value2)	{
				$msg .="<tr><td>$i</td><td>$value2[id]</td><td>$value2[thfirstname]</td>";
				$msg .="<td>$value2[thlastname]</td><td>$value2[province]</td><td>$value2[telephone]</td><td></td></tr>";				
				$i++;
			}
				$msg .="<tr><td colspan='6' align='right'>รวมเพศหญิง : </td><td>$value2[sum] คน</td></tr>";
		echo ($msg);
       ?>
    </tbody>
  </table>
  </div>
	<script>
window.onbeforeunload = function(){return false;};
setTimeout(function(){window.close();}, 10000);
</script>
</div>