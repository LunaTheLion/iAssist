<title>Project</title>
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
			<div class="card-header">Projects</div>
			<form method="POST" action="<?php echo base_url('user/v_project') ?>">
			<div class="card-body">
				
					<div class="row">
						<div class="col-lg-2 col-sm-2">
							Skill field
						</div>
						<div class="col-lg-10 col-sm-10">
							<input type="text" class="form-control" name="field">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-2 col-sm-2">
							Description
						</div>
						<div class="col-lg-10 col-sm-10">
							<textarea class="form-control" name="description" rows="5"></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-2 col-sm-2">
							Skill/ Expertise
						</div>
						<div class="col-lg-10 col-sm-10">
							<input type="text" class="form-control" name="title">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-2 col-sm-2">
							Rate/Hour:
						</div>
						<div class="col-lg-5 col-sm-5">
							<select class="form-control" id="rate" length="4">
							        <option>1</option>
							        <option>2</option>
							        <option>3</option>
							        <option>4</option>
							        <option>5</option>
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
							<select class="form-control" id="exampleSelect1" length="4">
							        <option>1</option>
							        <option>2</option>
							        <option>3</option>
							        <option>4</option>
							        <option>5</option>
							      </select>
							      <br>
						</div>
						<div class="col-lg-5 col-sm-5">
						</div>
					</div>
					
				
			</div>
			<div class="card-footer">
				
				<button type="submit" class="btn btn-info">Validate</button>
				<a href="<?php echo base_url('user/interest') ?>" class="btn btn-danger">Skip</a>
			</div>
			</form>
		</div>
	</div>
</div>
</div>