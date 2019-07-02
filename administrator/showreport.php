<?php
	include"../include/connect.php";
	include"../include/functions.php";

	$data = getreport();
	

?>
<div class="container">
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>หมายเลข</th>
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
				$msg .="<tr><td>$i</td><td>$value[id]</td><td>$value[thfirstname]</td>";
				$msg .="<td>$value[thlastname]</td><td>$value[nicname]</td><td>$value[province]</td><td>$value[telephone]</td></tr>";
				$i++;
			}
		echo ($msg);
       ?>
    </tbody>
  </table>
  </div>
</div>