<title>iAssist - Skill</title>

<div class="col-lg-8 col-sm-8">
			<br>
			<div class="row">
				<?php foreach ($jobs as $row): ?>
					<br>
					<div class="col-lg-4 col-sm-1">
						<div class="card">
						<div class="card-body">
							<p class="text-primary" style="font-size: 25px; margin-bottom: 2px;"><a href="<?php echo site_url('user/ViewProject/'.$row->title_slug.'/'.$row->post_id) ?>" ><?php echo $row->title; ?></p></a>
							<a href="<?php echo base_url('user/clickbyCategory/'.$row->category); ?>"><?php echo $row->category ?></a> |&nbsp<a href=""><?php echo $row->budget ?></a> 
							<p style="font-size: 20px;"><?php //echo $row->description; ?>
								<?php 
								$string = "Oh squiggly line in my eye fluid. I see you lurking there on the peripheral of my vision. But when I try to look at you, you scurry away. Are you shy, squiggly line? Why only when I ignore you, do you return to the center of my eye? Oh, squiggly line, it's alright, you are sdfsfsfsadfasdfasdfasdfasdfasdfasdfasdfasdfsdf.";
								$string = strip_tags($string);
								if (strlen($string) > 200) {

								    // truncate string
								    $stringCut = substr($string, 0, 200);
								    $endPoint = strrpos($stringCut, ' ');

								    //if the string doesn't contain any space then it will cut without word basis.
								    $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
								    $string .= '... <a href="'.base_url('user/clickbyCategory/'.$row->category).'">Read More</a>';
								}
								echo $string;



								 ?>



							</p>
							<a class="btn btn-info" type="submit" style="float:0; right:0px;" a href="<?php echo site_url('search/ViewProject/'.$row->title_slug.'/'.$row->post_id) ?>">Visit</a>
						</div>
					</div>
					</div>
					
				<?php endforeach; ?>
			
			</div>
			<br>
			<script>
				// window.addEventListener("scroll", function(){
				//             var wrap = document.getElementById('timeline');
				//             var contentHeight = wrap.offsetHeight;
				//             var yOffset = window.pageYOffset; 
				//             var y = yOffset + window.innerHeight;
				//             if(y >= contentHeight)
				//             {
				//                 //load new content
				//                 wrap.innerHTML = wrap.innerHTML + "<div>Random text</div>";
				//             }



					$('#Ptype').hide();
					
				$('#cp').on('click', function(){
					$('#post2').toggle();
					$('#pic').toggle();
				});

				// $('#JobForm').on('submit', function(){
				// 	//alert('Hello');
				// 	event.preventDefault();
				// 	console.log($(this).serialize());

				// 	$.ajax({
				// 		type:'ajax',
				// 		method: 'Post',
				// 		url: '<?php echo base_url()?>user/PostSkill',
				// 		data: $(this).serialize(),
				// 		async: false,
				// 		dataType: 'json',
				// 		success: function(data){
				// 			console.log(data);
				// 			$('#post2').hide();
				// 			$('#pic').show();
				// 			// alert('Your Skill Post will be reviewed by the Admin first, please wait for the confirmation.'+data.post_result);
				// 			$('#JobForm')[0].reset();
				// 			location.reload();
				// 			//showAllPost();
				// 		},
				// 		error: function(){
				// 			alert('Could not save');
				// 		}
				// 	});
				// });
			</script>
		</div>
	</div>	
</div>