<?php
	include"../include/connect.php";
	include"../include/functions.php";
	$data = listcontent();

	//print_r($data);
?>

<div class="container">
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>หัวข้อ</th>
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
				$msg .="<tr><td>$i</td><td><b onclick='showformedit($value[id])' class='pointer'>$value[title]</b></td>";
				$msg .="<td>$value[creat_time]</td><td>$value[update_time]</td><td>$value[creat_by]</td></tr>";
				$i++;
			}
		echo $msg;
       ?>
    </tbody>
  </table>
  </div>
</div>
<script>
	function showformedit(idedit){
		//console.log(idedit);
		$("#Modalcontent").modal();
		$.ajax({
				url: "getdatatojsonscontent.php?id="+idedit,
				type: "POST",
				beforeSend: function(){
					showanimation(1);
				},
				success: function(result)
					{
						showanimation(2);
						var myObj = JSON.parse(result);
						//console.log(myObj.id);
						$("#txttitle").html(myObj.title);
						$("#hidenid").val(myObj.id);
						$("#titlecontent").val(myObj.title);
						$("#imgsct1").attr("src",myObj.img1);
						$("#imgsct2").attr("src",myObj.img2);
						$("#imgsct3").attr("src",myObj.img3);
						$("#detailcontent").val(myObj.content);
						
					}
		});
		
		
		
	}
</script>
<?php
 include "content.php";
	
?>




