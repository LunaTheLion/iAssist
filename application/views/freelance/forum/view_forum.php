<title>iAssist -Forum</title>

<div class="col-lg-8 col-sm-8">
			
			<br>
			<div class="card border-primary" style="padding: 10px; border:none;">
			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="<?php echo base_url('user/forum') ?>">Forums</a></li>
			  <li class="breadcrumb-item"><a href="<?php echo site_url('forum/ViewForum/'.$this->session->userdata('forum_topic_slug').'/'.$this->session->userdata('forum_topic_id'));?>"><?php echo $this->session->userdata('forum_topic') ?></a></li>
			  
			</ol>
			
				<div class="list-group">
					<?php foreach ($jobs as $row): ?>
						  <a href="<?php echo base_url('forum/ViewTopic/'.$row->title_slug.'/'.$row->topic_id) ?>" class="list-group-item list-group-item-action ">
						   <?php echo $row->title ?><br>
						   <?php echo $row->creator ?>
						  </a>
						  <?php endforeach; ?> 
						 <!--  <a href="https://bootswatch.com/lux/#" class="list-group-item list-group-item-action">Dapibus ac facilisis in
						  </a> -->
						  
						</div>
					<br>
					
					
				</div>
				

			</div>

		</div>
	</div>	
</div>