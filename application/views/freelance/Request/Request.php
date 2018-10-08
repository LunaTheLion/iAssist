<title>iAssist - Request</title>

<div class="col-lg-8 col-sm-8">
			
			<br>
			<div class="card border-primary" style="padding: 10px; border:none;">
				

				<?php foreach ($jobs as $row): ?>
					<br>
					<div class="card">
						<div class="card-body">
							<p class="text-primary" style="font-size: 25px; margin-bottom: 2px;">
								 <a href="<?php echo site_url('user/ViewRequest/'.$row->request_title_slug.'/'.$row->id) ?>" > 
								<?php echo $row->request_category; ?></p></a>
							<p><?php echo $row->request_description; ?></p>
							<button class="btn btn-info" type="submit" style="float:0; right:0px;">Apply</button>
						</div>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>	
</div>