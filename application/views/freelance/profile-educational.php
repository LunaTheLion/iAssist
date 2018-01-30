<div class="container mt-5">
<br>
		<div class="row">
		<div class="col-lg-3">
		</div>
		<div class="col-lg-6">
			<h2>Educational Background</h2>
			<form method="POST" action="<?php echo base_url('users/validate_profile_educational');?>">
			
				<div class="form-group">
					<input class="read-only" type="text" name="school" value="University of Makati">
				      <label for="college1">College</label>
				      <select class="form-control form-control-sm" id="college1" name="college1">
				        <!-- <option>COAHS - College of Allied Health and Studies</option>
				        <option>CAS - College of Arts and Sciences</option>
				        <option>CAL - College of Arts and Letters</option>
				        <option>CBFS - College of Business Finance and Sciences</option> -->
				        <option value="College of Computer Science">CCS - College of Computer Science</option>
				        <!-- <option>CCSCE - College of Construction Science and Civil Engineering</option>
				        <option>COE - College of Education</option>
				        <option>CGPP - College of Governance and Public Policy</option>
				        <option>CMLI - College of Maritime and Leadership Innovation</option>
				        <option>CTM - College of Technology Management</option>
				        <option>CHK - College of Human Kinestetics</option>
				        <option>SCOPE - School of Continuing Professional Education</option>
				        <option>HSU - Higher School ng UMak</option> -->
				      </select>
				    </div>

				<div class="form-group">
				     <!--  <label for="exampleSelect1">Course</label>
				      if COAHS
				      <select class="form-control form-control-sm" id="exampleSelect1">
				        <option>ITSM - Information Technology Service Management</option>
				        <option>APPDEV - Appication Development</option>
				        <option>NETAD - Network Administration</option>
				      </select>
				      if CAS
				      <label for="exampleSelect1">Course</label>
				      <select class="form-control form-control-sm" id="exampleSelect1">
				        <option>ITSM - Information Technology Service Management</option>
				        <option>APPDEV - Appication Development</option>
				        <option>NETAD - Network Administration</option>
				      </select>
				      if CAL
				      <label for="exampleSelect1">Course</label>
				      <select class="form-control form-control-sm" id="exampleSelect1">
				        <option>ITSM - Information Technology Service Management</option>
				        <option>APPDEV - Appication Development</option>
				        <option>NETAD - Network Administration</option>
				      </select>
				      if CBFS
				      <label for="exampleSelect1">Course</label>
				      <select class="form-control form-control-sm" id="exampleSelect1">
				        <option>ITSM - Information Technology Service Management</option>
				        <option>APPDEV - Appication Development</option>
				        <option>NETAD - Network Administration</option>
				      </select> -->
				     <!--if CCS   -->
				      <label for="ccs">Course</label>
				      <select class="form-control form-control-sm" id="ccs" name="ccs">
				        <option value="Information Technology Service Management">ITSM - Information Technology Service Management</option>
				        <option value="Appication Development">APPDEV - Appication Development</option>
				        <option value="Network Administration">NETAD - Network Administration</option>
				      </select>
				      <!-- if CCSCE
				      <label for="exampleSelect1">Course</label>
				      <select class="form-control form-control-sm" id="exampleSelect1">
				        <option>ITSM - Information Technology Service Management</option>
				        <option>APPDEV - Appication Development</option>
				        <option>NETAD - Network Administration</option>
				      </select>
				      if COE
				      <label for="exampleSelect1">Course</label>
				      <select class="form-control form-control-sm" id="exampleSelect1">
				        <option>ITSM - Information Technology Service Management</option>
				        <option>APPDEV - Appication Development</option>
				        <option>NETAD - Network Administration</option>
				      </select>
				      if CGPP
				      <label for="exampleSelect1">Course</label>
				      <select class="form-control form-control-sm" id="exampleSelect1">
				        <option>ITSM - Information Technology Service Management</option>
				        <option>APPDEV - Appication Development</option>
				        <option>NETAD - Network Administration</option>
				      </select>
				      if SCOPE
				      <label for="exampleSelect1">Course</label>
				      <select class="form-control form-control-sm" id="exampleSelect1">
				        <option>ITSM - Information Technology Service Management</option>
				        <option>APPDEV - Appication Development</option>
				        <option>NETAD - Network Administration</option>
				      </select>
				      if HSU
				      <label for="exampleSelect1">Course</label>
				      <select class="form-control form-control-sm" id="exampleSelect1">
				        <option>ITSM - Information Technology Service Management</option>
				        <option>APPDEV - Appication Development</option>
				        <option>NETAD - Network Administration</option>
				      </select> -->

				    </div>
				<a href="#"> Add courses</a>
				
				
				<br><br>
			<h2>Hobbies and Other Skills</h2>
		
			<div class="form-group">
				<label>Field:</label><input type="text"  class="form-control form-control-sm " name="field" ><p></p>
					<div class="form-group">
					      <label for="skill">Skill Level</label>
					      <select class="form-control" id="skill" name="skill">
					        <option value="Novice">Novice</option>
					        <option value="Advance-Beginner">Advance Beginner</option>
					        <option value="Competent">Competent</option>
					        <option value="Proficient">Proficient</option>
					        <option value="Expert">Expert</option>
					      </select>
					    </div>	
				</div>
				<br><br>		
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-3">
					<a class="btn btn-primary btn-outline btn-block" href="javascript:window.history.go(-1);">Back</a>
				</div>
				<div class="col-lg-3">
					<button class="btn btn-success btn-block" type="submit">Next</a>
				</div>
				<div class="col-lg-3"></div>
			</div>			
		</div>
		<div class="col-lg-3">			
		</div>
	</div>
</div>
</div>