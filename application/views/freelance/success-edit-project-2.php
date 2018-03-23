









  <div class="modal fade" id="updateProject" tabindex="-1" role="dialog">
		 	    <div class="modal-dialog" role="document">
		 	    	<!-- <form method="POST" action="<?php echo base_url()?>users/update_project" id="user_form"> -->
		 	    		<form method="POST" id="user_form">
		 	      <div class="modal-content">
		 	        <div class="modal-header">
		 	          <h5 class="modal-title text-center">Update Project</h5>
		 	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		 	            <span aria-hidden="true">&times;</span>
		 	          </button>
		 	        </div>
		 	        <div class="modal-body">
		 	          <p class="text-primary">Please input your password to continue</p>
		 	          <input class="form-control p-1 mb-1" type="text" id="username" name="username" value="<?php echo $this->session->userdata('email');?>">
		 	          <input class="form-control mb-1" type="password" required="true" id="password" name="password" placeholder="password">
		 	        </div>
		 	        <div class="modal-footer">
		 	          <input type="submit" class="btn btn-primary" name="action" value="Proceed">
		 	          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		 	        </div>
		 	      </div>

		 	      </form><!-- end form -->
		 	    </div>
		 	</div>