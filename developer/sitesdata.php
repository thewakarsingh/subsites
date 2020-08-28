<?php

include "header.php";

include '../php/server_login.php';

$conn=server_login();

$sql="SELECT * from site_rank WHERE category='' LIMIT 1";
$query=mysqli_query($conn,$sql);

$var=mysqli_fetch_array($query);
echo $var['rank'];
echo ",";
echo $var['domain_name'];
?>


<script type="text/javascript" src="../js/ajax_functions.js"></script>

<style type="text/css">
	
label{

margin-left: 0px;
float: left;

}

input{
	float: right;
}
textarea{
	float: right;
}

</style>

<script type="text/javascript">



function timeFunction() {

for(var j=0;j<100;j++){
	setTimeout(function(){ alert("Hello"); }, 5000);


}		

}

function getsitesdata(){
document.getElementById('sitedata').innerHTML="<div class=\"container-fluid\"><div class=\"row \" style=\"border:solid 1px #333;\"><div class='col-xs-1'>rank</div><div class='col-xs-1'>domain Name</div><div class='col-xs-1'>category</div> <div class='col-xs-2'>wiki_description</div> <div class='col-xs-2'>description</div><div class='col-xs-1'>keywords</div><div class='col-xs-2'>title logo</div><div class='col-xs-2'>binglogo</div><br></div>";
var no =document.getElementById('no_of_sites').value;
var rank=document.getElementById('start_rank').value;
var n=parseInt(no);
var r=parseInt(rank);
document.getElementById('start_rank').value=n+r;


while(no--){

	
printsiteinfo(rank);


rank++;
}

}

</script>




<div class="container-fluid" style="width: 500px; background-color: ;">
	<h4><u>Provide following information of the site</u></h4><br>
	
	  <div class="row">
			<div class="col-sm-6">
				
					<label>Enter Start rank:</label> <input class="form-control input-md" type="number" name="start_rank" id="start_rank" required>
					
				
			</div>
			<div class="col-sm-6">
				
					<label>Enter No of Sites:</label> <input class="form-control input-md" type="number" name="no_of_sites" id="no_of_sites" required>
					
				
			</div>
		</div>
		<div class="col-sm-4">
		<br>
		<button onclick="getsitesdata()" class="btn btn-primary" id="timeFunction">Get Site Data</button>

		<button onclick="timeFunction()" class="btn btn-primary" >start searching</button>

		</div>



	</div>
	<div class="container-fluid" id="sitedata">

	</div>

</body>
</html>