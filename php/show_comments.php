
<?php

$domain_name=$_GET['domain'];

include "server_login.php";

include "functions.php";


$conn=server_login();


$sql="SELECT * FROM comments WHERE domain_name='$domain_name' ORDER BY time DESC";

$result=mysqli_query($conn,$sql);

?>

<hr class="hr">
<div class="container"  id="comment-system">


	<div class="row">

		<textarea placeholder=" write a new public comment...." id="comment_box" required></textarea>
		<button class="btn btn-success" value="<?php echo $domain_name;?>" onclick="add_comment(document.getElementById('comment_box').value,this.value)">Post</button>
	</div>
</div>

<?php
while($var=mysqli_fetch_array($result)){

		
	


?>

<div class="cds">
	
	<span class="user_name"> &nbsp;&nbsp;<?php echo $var['name']; ?> <span style="font-size: 10px; color:#888;">
		<?php echo time_diff($var['time']); ?> </span> </span><br>
	<p class="comment"><?php echo $var['comment']; ?></p>

			<?php
			$comment_id=$var['id'];

			$sql="SELECT t1.comment_id, t1.time, t1.reply, t1.name FROM reply AS t1 INNER JOIN comments AS t2 WHERE t1.comment_id=t2.id AND t2.id='$comment_id' ORDER BY t1.time ASC";

				$reply=mysqli_query($conn,$sql);


				while ($temp=mysqli_fetch_array($reply)){

						?>


						<span class="user_name" style="margin-left: 70px;">
							 <?php echo $temp['name']; ?>
						 	<span style="font-size: 10px; color:#888;">
						 		<?php echo time_diff($temp['time']); ?>
					 		</span><br>
				 		</span>

						<p class="comment" style="margin-left: 80px;"><i> <?php echo $temp['reply']; ?> </i></p>
						
					<?php
				}
	?>

	<button class="btn btn-link" onclick="show_reply()">Reply</button>
	<div class="reply-box">

		<input type="text" id="comment_id" value="<?php echo $var['id']; ?>" style="position:absolute;visibility: hidden;">


		<textarea class="reply-text-box" id="reply-text" placeholder="Write your reply..."></textarea>

		<button class="btn btn-success" onclick="add_reply()">></button>

					
</div>
</div>
	<div style="width:100%; height: 20px;"></div>

<?php

}

?>