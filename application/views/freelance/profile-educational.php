<div class="container mt-5">
<br>
		<div class="row">
		<div class="col-lg-3">
		</div>
		

	
		<div class="col-lg-6">
			<h2>Educational Background</h2>
			<form action="<?php echo base_url('users/validate_profile_educational');?>" method="POST">
			<div class="row"> 
				<div class="col-lg-12">
					<div class="form-group">
				      <label for="colleges">College</label>
				      <select class="form-control form-control-sm" id="colleges" name="College" required="required">
				      	<option value="">-- SELECT COLLEGE --</option>
				        <option value="COAHS">COAHS - College of Allied Health and Studies</option>
				        <option value="COS">COS - College of Science</option>
				        <option value="CAL">CAL - College of Arts and Letters</option>
				        <option value="CBFS">CBFS - College of Business Finance and Sciences</option>
				        <option value="CCS">CCS - College of Computer Science</option>
				        <option value="CCSE">CCSCE - College of Construction Science and Civil Engineering</option>
				        <option value="COE">COE - College of Education</option>
				        <option value="CGPP">CGPP - College of Governance and Public Policy</option>
				        <option value="CMLI">CMLI - College of Maritime and Leadership Innovation</option>
				        <option value="CTM">CTM - College of Technology Management</option>
				        <option value="CHK">CHK - College of Human Kinestetics</option>
				        <option value="CTHM">CTHM - College of Tourism and Hospitality Management </option>
				        <option value="CWBL">CWBL - College for Workplace Based Learning </option>
				        <option value="HSU">HSU - Higher School ng UMak</option>
				        <option value="DCNB">DCNB - Design Center for Nation Building </option>
				      </select>
				    </div>
				</div>
			</div>
		
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
				 
				      <select class="form-control form-control-sm hide COAHS" name="Major" id="COAHS">
				        <option>Bachelor of Science in Nursing 2011</option>
				        <option>Bachelor of Science in Nursing (REGIS) 2008</option>
				        <option>Bachelor of Science in Radiologic Technology</option>
				        <option>Bachelor of Science in Pharmacy 2011</option>
				        <option>Bachelor of Science in Nursing 2007</option>
				        <option>Bachelor of Science in Nursing 2013-2014</option>
				        <option>Bachelor of Science in Pharmacy (2014)</option>
				        <option>Master of Science in Radiologic Technology (2nd sem14-15</option>
				      </select>
				    
				      <select class="form-control form-control-sm hide COS" name="Major" id="COS">
				        <option>Bachelor of Science in Psychology</option>
				        <option>Bachelor of Science in Psychology Research and Measurements</option>
				        <option>Bachelor of Science in Psychology Major Research and Measurements (2014)</option>
				      </select>
				  
				      <select class="form-control form-control-sm hide CAL" name="Major" id="CAL">
				        <option>Associate in Contact Center Services</option>
				        <option>Associate in Customer Service Communication</option>
				        <option>Bachelor of Arts in Organizational and Communication</option>
				        <option>Bachelor in Digital Arts Animation</option>
				        <option>Bachelor in Integrated Arts Broadcast Arts</option>
				        <option>Bachelor of Arts in Communication and Service Management 2nd Sem 2011-2012</option>
				        <option>Bachelor of Arts in Organizational Communication 09-10</option>
				        <option>Bachelor in Performing Arts Major in Theater Arts (2014)</option>
				        <option>Bachelor in Performing Arts Major in Dance (2014)</option>
				        <option>Bachelor of Music in Music Education Minor in Music Production</option>
				        <option>Bachelor of Arts in Communication and Service Management (2014)</option>
				        <option>Bachelor of Arts in Digital Arts and Animation (2014)</option>
				        <option>Bachelor of Arts in Broadcast Production (2014)</option>
				        <option>Bachelor of Arts in Communication and Service Management (2017)</option>
				        <option>Bachelor of Arts in Broadcast Production (2017)</option>
				        <option>Bachelor in Performing Arts Major in Music Education Minor in Music Production (2017)</option>
				       </select>
				 
				      <select class="form-control form-control-sm hide CBFS" name="Major" id="CBFS">
				         <option>Associate in Office Management Technology</option>
				         <option>Associate in Salesmanship</option>
				         <option>Bachelor of Science in Accountancy Fifth Year Program</option>
				         <option>Bachelor of Science in Business Administration Bldg and Property Management</option>
				         <option>Bachelor of Science in Business Administration Purchasing and Supply Chain Management</option>
				         <option>Bachelor of Science in Business Administration Supply Management</option>
				         <option>Bachelor of Science in Finance</option>
				         <option>Bachelor of Science in Management Accounting</option>
				         <option>Bachelor of Science in Marketing</option>
				         <option>Bachelor of Science in Marketing Retail Management</option>
				         <option>Bachelor of Science in Office Management</option>
				         <option>Certificate in Computer Secretarial</option>
				         <option>Bachelor of Science in Business Administration in Supply Management (2016-2017)</option>
				         <option>Bachelor of Science in Office Management (2014)</option>
				         <option>Bachelor of Science in Financial Management (2014)</option>
				         <option>BSBA Human Resource Development Management</option>
				         <option>Bachelor of Science in Marketing Management</option>
				         <option>Applied Business in Entrepreneurship (2014)</option>
				         <option>Bachelor of Science in Entrepreneurial Management (2014)</option>
				         <option>Bachelor of Science in Business Administration Major in Building and Property Management</option>
				         <option>Bachelor of Science in Business Administration Major in Management</option>
				         <option>Bachelor of Science in Business Administration Major is Supply Management (2014-2015)</option>
				         <option>Bachelor of Science in Business Administration in Building and Property Management (2016)</option>
				         <option>Bachelor of Science in Entrepreneurial Management (Revised 2017-2018)</option>
				         <option>Bachelor of Science in Business Administration Major is Supply Management (4th Revision 2017-2018)</option>
				      </select>
				    
				      <select class="form-control form-control-sm hide CCS" name="Major" id="CCS">
				        <option>Associate in Computer Applications Technology</option>
				        <option>Associate in Computer Technology 2009</option>
				        <option>Associate in Multimedia Technology</option>
				        <option>Bachelor of Science in Computer Network Administration 2011</option>
				        <option>Bachelor of Science in Computer Science Application Development</option>
				        <option>Bachelor of Science in Computer Network Administration 2011</option>
				        <option>Bachelor of Science in Information Technology in Service Management</option>
				        <option>Certificate in Computer Technician</option>
				        <option>Associate in Computer Technology 2011</option>
				        <option>Bachelor of Science in Computer Science Application Development 2010</option>
				        <option>Bachelor of Science in Computer Science Application Development 2008</option>
				        <option>Bachelor of Science in Computer Network Administration 2003</option>
				        <option>Bachelor of Science in Computer Network Administration (2014)</option>
				        <option>Bachelor of Science in Information Technology in Service Management (2014)</option>
				        <option>Bachelor of Science in Computer Science Application Development (2014)</option>
				        <option>Associate in Application Development (2014)</option>
				        <option>Associate in Information Technology in Service Management (2014)</option>
				        <option>Associate in Computer Network Administration (2014)</option>
				        <option>Bachelor of Science in Computer Major in Application Development (2003)</option>
				        <option>CSS - Cross Enrollee</option>
				      </select>
				 
				      <select class="form-control form-control-sm hide CCSE" name="Major" id="CCSE">
				        <option>Bachelor of Science in Civil Engineering</option>
				        <option>Bachelor of Science in Civil Technology</option>
				        <option>BS in Construction Engineering Technology (2014)</option>
				        <option>BS in Civil Engineering (2014)</option>
				        <option>BS in Civil Engineering (2016)</option>
				        <option>BS in Construction Engineering Technology (2016)</option>
				        <option>Diploma in Construction Engineering Management</option>
				        <option>Bachelor of Science in Construction Engineering Technology</option>
				      </select>
				    
				      <select class="form-control form-control-sm hide COE" name="Major" id="COE">
				        <option>Bachelor in Elementary Education</option>
				        <option>Bachelor in Elementary Education Early Childhood Education</option>
				        <option>Bachelor in Elementary Education Non Bac</option>
				        <option>Bachelor in Elementary Education Special Education</option>
				        <option>Bachelor in Elementary Education with Training in Pre School</option>
				        <option>Bachelor in Elementary Education with Training in Special Educ</option>
				        <option>Bachelor in Secondary Education</option>
				        <option>Bachelor in Secondary Education Biological Science</option>
				        <option>Bachelor in Secondary Education English</option>
				        <option>Bachelor in Secondary Education Filipino (2013)</option>
				        <option>Bachelor in Secondary Education Mathematics</option>
				        <option>Bachelor in Secondary Education Social Studies</option>
				        <option>Bachelor in Secondary Education Tech and Livelihood Educ</option>
				        <option>Bachelor of Science Biological Science</option>
				        <option>Master of Arts in Education in Educational Management</option>
				        <option>Master of Arts in Education in Instructional Media and Design 2013</option>
				        <option>Master of Arts in Education in Instructional Media and Design</option>
				        <option>Doctor of Philosophy in Education in Speed 2013</option>
				      </select>
				  
				      <select class="form-control form-control-sm hide CGPP" name="Major" id="CGPP">
				        <option>Bachelor of Arts in Political Science</option>
				        <option>Bachelor of Arts in Political Science Local Government Admin</option>
				        <option>Bachelor of Arts in Political ScienceParalegal Studies</option>
				        <option>Bachelor of Arts in Political Science Policy Management</option>
				        <option>ABPS LGA 2011</option>
				        <option>ABPS LEG 2011</option>
				        <option>ABPS PCY 2011</option>
				        <option>Master in Public Administration</option>
				        <option>Master in Public Administration Program Major in Local Governance</option>
				        <option>ABPS LGA 2014</option>
				        <option>ABPS LEG 2014</option>
				        <option>ABPS PCY 2014</option>
				        <option>ABPS 2014</option>
				        <option>Bachelor of Arts in Political Science -2015</option>
				        <option>Bachelor of Arts in Political Science -2016</option>
				        <option>Bachelor of Arts in Political Science -2017</option>
				        <option>Doctor of Public Administration</option>
				      </select>
				     
				      <select class="form-control form-control-sm hide CMLI" name="Major" id="CMLI">
				        <option>BS Marine Transportation (2014)</option>
				        <option>BS Marine Engineering (2014)</option>
				        <option>Associate Degree in Marine Deck Rating</option>
				        <option>Associate Degree in Marine Engine Rating</option>
				      </select>
				   
				      <select class="form-control form-control-sm hide CTM" name="Major" id="CTM">
				        <option>Bachelor of Science in Telecommunications Technology</option>
				        <option>Certificate in Industrial Technology Automotive</option>
				        <option>Certificate in Industrial Technology Drafting</option>
				        <option>Certificate in Industrial Technology Mechanical</option>
				        <option>Diploma in Civil Engineering Technology</option>
				        <option>Diploma in Electrical Technology</option>
				        <option>Diploma in Facilities Technology</option>
				        <option>Diploma in Facilities Technology Service Mechanics</option>
				        <option>Diploma in Telecom Access Network Technology</option>
				        <option>Diploma in Telecommunications Technology</option>
				        <option>Bachelor of Science in BLDG Technology Management 2011</option>
				        <option>Associate in Electronics Technology</option>
				        <option>Certificate in Building Technology Management 2011</option>
				        <option>Bachelor of Science in Industrial Technology (BSIT) 1984</option>
				        <option>Diploma in Industrial Facilities Technology Major in Service Mechanics (2014)</option>
				        <option>Diploma in Industrial Facilities Technology 2014</option>
				        <option>BS Electronics and Telecommunications Tech (2014)</option>
				        <option>BS Building Technology Management (2014)</option>
				        <option>BS Electrical Tech (2014)</option>
				        <option>BS Civil Technology</option>
				      </select>
				   
				      <select class="form-control form-control-sm hide CHK" name="Major" id="CHK">
				        <option>Associate in Dance Instruction and Dance Sports 2010</option>
				        <option>Associate in Sports Coaching 2010</option>
				        <option>Bachelor in Physical Wellness - Sports 2010</option>
				        <option>Certificate in Folk Dancing 2010</option>
				        <option>Certificate in Sports Officiating 2010</option>
				        <option>Diploma in Sports and Recreational Facilities Management - Sports 2010</option>
				        <option>Diploma in Sports and Recreational Facilities Management - Dance 2010</option>
				        <option>Bachelor in Physical Wellness</option>
				        <option>Diploma in Sports and Recreational Facilities Management - Dance 2005</option>
				        <option>Diploma in Sports and Recreational Facilities Management - Sports 2005</option>
				        <option>Bachelor in Physical Wellness - Dance 2005</option>
				        <option>Bachelor in Physical Wellness - Sports 2005</option>
				        <option>Associate in Sports Coaching 2005</option>
				        <option>Associate in Dance Instruction and Dance Sports 2005</option>
				        <option>Certificate in Sports Officiating 2005</option>
				        <option>Certificate in Folk Dancing 2005</option>
				        <option>Bachelor in Physical Wellness (2014)</option>
				        <option>Bachelor in Physical Wellness Major in Sports Management(2016)</option>
				        <option>Bachelor in Physical Wellness Major in Sports Management(2017)</option>
				      </select>
				  
				      <select class="form-control form-control-sm hide CTHM" name="Major" id="CTHM">
				        <option>Associate in Hotel Restaurant Operations</option>
				        <option>Bachelor of Science in Hospitality Management Hotel and Restaurant Mgmt</option>
				        <option>Bachelor of Science in Hospitality Management Travel and Tourism Mgmt</option>
				        <option>Bachelor of Science in Tourism Management </option>
				        <option>Bachelor of Science in Hospitality Management Major in Travel and Tourism Mgmt (2014)</option>
				        <option>Bachelor of Science in Hospitality Management Major in Hotel and Restaurant Mgmt (0214)</option>
				        <option>Bachelor in international Culinary Management (2012)</option>
				      </select>
				    
				      <select class="form-control form-control-sm hide DCNB" name="Major" id="DCNB">
				        <option>NSTP Subjects</option>
				      </select> 
				    </div>
				</div>
			</div>
			
				

				
				<a href="#"> Add courses</a>
				
				
				<br><br>
			<h2>Hobbies and Other Skills</h2>
		
			<div class="form-group">
				<label>Field:</label><input type="text"  class="form-control form-control-sm " name="field"><p></p>
					<div class="form-group">
					    <label for="skill">Skill Level</label>
					      <select class="form-control" id="skill">
					        <option>Novice</option>
					        <option>Advance Beginner</option>
					        <option>Competent</option>
					        <option>Proficient</option>
					        <option>Expert</option>
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
					<a class="btn btn-success btn-outline btn-block" href="<?php echo base_url('users/create_profile_2')?>">Next</a>
				</div>
				<div class="col-lg-3"></div>
			</div>			
		</div>



		<div class="col-lg-3">			
		</div>
	</div>
</div>
</div>