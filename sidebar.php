
	<div id="mySidenav" class="sidenav">
		<div class="row">
		<div class="col-xs-2">
		<img src="<?php echo $_SESSION['Pic'];?>" style="margin-top:9px;border:solid 3px #768;margin-left:5px; height:70px;width:70px; border-radius:100px;" alt="<?php echo $_SESSION['Name'];?> "> 
		</div>
		<div class="col-xs-7"><P style="text-align:center;font-size:12px; margin-left:29px; margin-top:15%; " >Welcome  <i><?php echo $_SESSION['Name'];?> </i></P>	
			</div>

			<div class="col-xs-3">
				<i href="javascript:void(0)" style="margin-right:20%;  font-size:30px; margin-top:20px;" id="sidenavclose" class="glyphicon glyphicon-remove"></i>
		</div>
						
	</div><br><br>
		<a href="bookmark.php">Bookmarks</a>

		<a href="tutorials/">Tutorials</a>

		<a href="suggest.php">Suggest a Website</a>

		<button onclick="logout()" class="btn btn-danger" style="margin-top: 90%;margin-left: 40%;">Logout</button>					
	</div>