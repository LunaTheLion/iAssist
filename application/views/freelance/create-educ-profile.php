<title>Educational Background</title>
<!-- <div class="jumbotron">
<div class="row">
	<div class="col-lg-4 col-sm-4">
		<div class="card">
			<div class="card-header"></div>
			<div class="card-body">
				<a href="<?php echo site_url('user/general/'.$this->session->userdata('email')); ?>">Back to profile</a>
			</div>
			<div class="card-footer"></div>
		</div>
	</div> -->
	<div class="col-lg-6 col-sm-6">
		<div class="card">
			<div class="card-header">Educational Profile</div>
			<form method="POST" action="<?php echo base_url('user/validate_post') ?>">
			<div class="card-body">
				
					<div class="row">
						<div class="col-lg-2 col-sm-2">
							Title
						</div>
						<div class="col-lg-10 col-sm-10">
							<input type="text" class="form-control" name="title" value="<?php
							if(!empty($_POST['title']))
							{
								echo $_POST['title'];
							}
							else
							{
								echo "";
							}
							  ?>" required>
							
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-2 col-sm-2">
							Description
						</div>
						<div class="col-lg-10 col-sm-10">
							<textarea class="form-control" name="description" rows="5" required 
							value="<?php
							if(!empty($_POST['description']))
							{
								echo $_POST['description'];
							}
							else
							{
								echo "";
							}
							  ?>"
							></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-2 col-sm-2">
							Skill/ Expertise
						</div>
						<div class="col-lg-10 col-sm-10">
							<input type="text" class="form-control" name="skill">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-2 col-sm-2">
							Rate/Hour:
						</div>
						<div class="col-lg-5 col-sm-5">
							<select class="form-control" id="exampleSelect1" length="4" name="rate">
							        <option value="1">1</option>
							        <option value="1">2</option>
							        <option value="1">3</option>
							        <option value="1">4</option>
							        <option value="1">5</option>
							      </select>
							      <br>
						</div>
						<div class="col-lg-5 col-sm-5">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2 col-sm-2">
							Minimum Budget:
						</div>
						<div class="col-lg-5 col-sm-5">
							<input type="text" name="budget" class="form-control">
							      <br>
						</div>
						<div class="col-lg-5 col-sm-5">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2 col-sm-2">
							Category
						</div>
						<div class="col-lg-5 col-sm-5">
							<select class="form-control" id="exampleSelect1" length="4" name="category">
							        <option value="1">1</option>
							        <option value="1">2</option>
							        <option value="1">3</option>
							        <option value="1">4</option>
							        <option value="1">5</option>
							      </select>
							      <br>
						</div>
						<div class="col-lg-5 col-sm-5">
						</div>
					</div>
					
				
			</div>
			<div class="card-footer">
				
				<button type="submit" class="btn btn-info">Post</button>
			</div>
			</form>
		</div>
	</div>
</div>
</div>