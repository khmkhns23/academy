<?php
	include"../include/connect.php";
	include"../include/functions.php";

switch($_GET['type']){
	case 1 :
		$data = getreport();
		break;
	case 2 :
		$data = getreportorderby("THLastName");
		break;
	case 4 :
		$data = getreportorderby("Province");
		break;
	case 5 :
		$data = getreportorderby("NumsGEN");
		break;
}
	
	

?>
<style>
	table{
		font-size: 14px;
	}
</style>
<div class="container">
  <h2>Table</h2>
  <p>คำอธิบาย : </p>
  <p><input type="button" value="Export To Excel" class="btn btn-success" onClick="openpages('administrator/showreportxls.php?type=<?php echo($_GET['type']);?>');"></p>    
  <div class="table-responsive">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>หมายเลข</th>
		  <th>รุ่น</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>ชื่อเล่น</th>
		 <th>จังหวัด</th>
        <th>หมายเลขโทรศัพท์</th>
		  
      </tr>
    </thead>
    <tbody>
		<?php
		$i = 1;
		$msg = "";
			foreach($data AS $key=>$value)	{
				$msg .="<tr><td>$i</td><td>$value[id]</td><td>$value[numsgen]</td><td>$value[thfirstname]</td>";
				$msg .="<td>$value[thlastname]</td><td>$value[nicname]</td><td>$value[province]</td><td>$value[telephone]</td></tr>";
				$i++;
			}
		echo ($msg);
       ?>
    </tbody>
  </table>
  </div>
</div>