<title>iAssist -Forum</title>

<div class="col-lg-8 col-sm-8">
			
			<br>
			<div class="card border-primary" style="padding: 10px; border:none;">
			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="<?php echo base_url('user/forum') ?>">Forums</a></li>
			  <li class="breadcrumb-item"><a href="<?php echo site_url('forum/ViewForum/'.$this->session->userdata('forum_topic_slug').'/'.$this->session->userdata('forum_topic_id'));?>"><?php echo $this->session->userdata('forum_topic') ?></a></li>
			  <li class="breadcrumb-item"><a href="<?php echo site_url('forum/ViewTopic/'.$this->session->userdata('topic').'/'.$this->session->userdata('topic_id'));?>"><?php echo $this->session->userdata('topic') ?></a></li>
			  
			</ol>
			
				<div class="list-group">
					<?php if(!empty($jobs)){
						foreach ($jobs as $row)
							{ ?>
						  <a href="<?php //echo base_url('forum/ViewTopic/'.$row->title_slug) ?>" class="list-group-item list-group-item-action ">
						   <?php echo $row->creator ?><br>
						   <?php echo $row->content ?>
						  </a>
						  <?php //endforeach; ?> 
						 <!--  <a href="https://bootswatch.com/lux/#" class="list-group-item list-group-item-action">Dapibus ac facilisis in
						  </a> -->
						  <a href="#topic" data-toggle="modal" data-target="#topic">Add</a>
						<?php } 
					}else{ ?>
						<p>No topics yet...</p>
						<a href="#topic" data-toggle="modal" data-target="#topic">Add</a>
						<?php } ?>
				</div>
					<br>
					
					
				</div>
<div id="topic" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Posts
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form id="RequestForm" action="<?php echo base_url('forum/CreatePost')?>" method="post" >
				    <input type="hidden" name="topic_id" value="<?php echo $this->session->userdata('topic_id');?>">   
				    <br>
				    <div class="row">
				    	<div class="col-lg-2 col-sm-2">
				    		<p class="text-primary center">Content</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<textarea class="form-control" name="content" required rows="3"></textarea>
				    	</div>
				    </div>
				    <br>
				 
			
				
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary" >Submit</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>




	</div>
</div>				

			</div>

		</div>
	</div>	
</div>