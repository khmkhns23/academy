<?php
	include"../include/connect.php";
	include"../include/functions.php";
	$data = listmanagergens();

	//print_r($data);
?>
<style>
	table{
		font-size: 16px;
	}
</style>
<div class="container">
	<div class="row"><div class="col-lg-10"></div>
		<div class="col-lg-2"><input type="button" class="btn btn-primary" onClick="creatgens()" value="เพิ่ม คณก. รุ่น"></div>
	</div>
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>ชื่อ</th>
		<th>คณก.รุ่นที่</th> 
        <th>วันที่สร้าง</th>
        <th>วันที่แก้ไข</th>
        <th>สร้างโดย</th>
      </tr>
    </thead>
    <tbody>
		<?php
		$i = 1;
		$msg = "";
			foreach($data AS $key=>$value)	{
				$msg .="<tr><td>$i</td><td><b onclick='showformeditmg($value[id])' class='pointer'>$value[title]</b></td><td>$value[numsgen]</td>";
				$msg .="<td>$value[creat_time]</td><td>$value[update_time]</td><td>$value[creat_by]</td></tr>";
				$i++;
			}
		echo ($msg);
       ?>
    </tbody>
  </table>
  </div>
</div>
<script>
	function showformeditmg(idedit){
		//console.log(idedit);
		$("#Modalmanager").modal();
		$.ajax({
				url: "getdatatojsonsmanager.php?id="+idedit,
				type: "POST",
				beforeSend: function(){
					showanimation(1);
				},
				success: function(result)
					{
						showanimation(2);
						var myObj = JSON.parse(result);
						//console.log(myObj.id);
						$("#hidenidmg").val(myObj.id);
						$("#titlemg").val(myObj.title);
						$("#imgsmg").attr("src",myObj.img);
						$("#numsgen").val(myObj.numsgen);
						$("#detailmg").val(myObj.detail);
						
					}
		});
		
		
		
	}
	function creatgens(){
		$("#Modaladdmanager").modal();
	}
</script>
<?php
 include "contentmanager.php";
include "addmanager.php";
	
?>




