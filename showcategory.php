<?php 
include "server_login.php";

				$conn=server_login();
				$sql="SELECT DISTINCT category FROM site_rank ORDER BY category";

				$result=mysqli_query($conn,$sql);
				$c=" ";
				while($var=mysqli_fetch_array($result)){
					$d=$var['category'];
					$d=$d[0];
					$d=strtoupper($d);
				$x=strcmp($d, $c);
				
					
					if($x){
						echo "</div><div class=\"row\">&nbsp;&nbsp;&nbsp;<h3>$d[0]</h3>";

                        $c=$d[0];
                       
				?> 

                        <h5>
					<a href="category.php?category=<?php echo $var['category']; ?>"><?php echo $var['category'];?></a>
				</h5>
					<?php



				

			echo "</div>";



					}}
?>