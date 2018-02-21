<div class="container mt-5">
	<title>Educational</title>
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
						
						<label>School:</label><input type="text"  class="form-control form-control-sm " name="school" readonly="true" value="University of Makati"><p></p>
				      <label for="colleges">College</label>
				      <select class="form-control form-control-sm" id="colleges" name="College" required="required">
				      	<option value="">-- SELECT COLLEGE --</option>
				        <option value="College of Allied Health and Studies">COAHS - College of Allied Health and Studies</option>
				        <option value="College of Science">COS - College of Science</option>
				        <option value="CAL">CAL - College of Arts and Letters</option>
				        <option value="CBFS">CBFS - College of Business Finance and Sciences</option>
				        <option value="CCS">CCS - College of Computer Science</option>
				        <option value="CCSCE">CCSCE - College of Construction Science and Civil Engineering</option>
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
				        <option value="Bachelor of Science in Nursing 2011">Bachelor of Science in Nursing 2011</option>
				        <option value="Bachelor of Science in Nursing (REGIS) 2008">Bachelor of Science in Nursing (REGIS) 2008</option>
				        <option value="Bachelor of Science in Radiologic Technology">Bachelor of Science in Radiologic Technology</option>
				        <option value="Bachelor of Science in Pharmacy 2011">Bachelor of Science in Pharmacy 2011</option>
				        <option value="Bachelor of Science in Nursing 2007">Bachelor of Science in Nursing 2007</option>
				        <option value="Bachelor of Science in Nursing 2013-2014">Bachelor of Science in Nursing 2013-2014</option>
				        <option value="Bachelor of Science in Pharmacy (2014)">Bachelor of Science in Pharmacy (2014)</option>
				        <option value="Master of Science in Radiologic Technology (2nd sem14-15">Master of Science in Radiologic Technology (2nd sem14-15</option>
				      </select>
				    
				      <select class="form-control form-control-sm hide COS" name="Major" id="COS">
				        <option value="Bachelor of Science in Psychology">Bachelor of Science in Psychology</option>
				        <option value="Bachelor of Science in Psychology Research and Measurements">Bachelor of Science in Psychology Research and Measurements</option>
				        <option value="Bachelor of Science in Psychology Major Research and Measurements (2014)">Bachelor of Science in Psychology Major Research and Measurements (2014)</option>
				      </select>
				  
				      <select class="form-control form-control-sm hide CAL" name="Major" id="CAL">
				        <option value="Associate in Contact Center Services">Associate in Contact Center Services</option>
				        <option value="Associate in Customer Service Communication">Associate in Customer Service Communication</option>
				        <option value="Bachelor of Arts in Organizational and Communication">Bachelor of Arts in Organizational and Communication</option>
				        <option value="Bachelor in Digital Arts Animation">Bachelor in Digital Arts Animation</option>
				        <option value="Bachelor in Integrated Arts Broadcast Arts">Bachelor in Integrated Arts Broadcast Arts</option>
				        <option value="Bachelor of Arts in Communication and Service Management 2nd Sem 2011-2012">Bachelor of Arts in Communication and Service Management 2nd Sem 2011-2012</option>
				        <option value="Bachelor of Arts in Organizational Communication 09-10">Bachelor of Arts in Organizational Communication 09-10</option>
				        <option value="Bachelor in Performing Arts Major in Theater Arts (2014)">Bachelor in Performing Arts Major in Theater Arts (2014)</option>
				        <option value="Bachelor in Performing Arts Major in Dance (2014)">Bachelor in Performing Arts Major in Dance (2014)</option>
				        <option value="Bachelor of Music in Music Education Minor in Music Production">Bachelor of Music in Music Education Minor in Music Production</option>
				        <option value="Bachelor of Arts in Communication and Service Management (2014)">Bachelor of Arts in Communication and Service Management (2014)</option>
				        <option value="Bachelor of Arts in Digital Arts and Animation (2014)">Bachelor of Arts in Digital Arts and Animation (2014)</option>
				        <option value="Bachelor of Arts in Broadcast Production (2014)">Bachelor of Arts in Broadcast Production (2014)</option>
				        <option value="Bachelor of Arts in Communication and Service Management (2017)">Bachelor of Arts in Communication and Service Management (2017)</option>
				        <option value="Bachelor of Arts in Broadcast Production (2017)">Bachelor of Arts in Broadcast Production (2017)</option>
				        <option value="Bachelor in Performing Arts Major in Music Education Minor in Music Production (2017)">Bachelor in Performing Arts Major in Music Education Minor in Music Production (2017)</option>
				       </select>
				 
				      <select class="form-control form-control-sm hide CBFS" name="Major" id="CBFS">
				         <option value="Associate in Office Management Technology">Associate in Office Management Technology</option>
				         <option value="Associate in Salesmanship">Associate in Salesmanship</option>
				         <option value="Bachelor of Science in Accountancy Fifth Year Program">Bachelor of Science in Accountancy Fifth Year Program</option>
				         <option value="Bachelor of Science in Business Administration Bldg and Property Management">Bachelor of Science in Business Administration Bldg and Property Management</option>
				         <option value="Bachelor of Science in Business Administration Purchasing and Supply Chain Management">Bachelor of Science in Business Administration Purchasing and Supply Chain Management</option>
				         <option value="Bachelor of Science in Business Administration Supply Management">Bachelor of Science in Business Administration Supply Management</option>
				         <option value="Bachelor of Science in Finance">Bachelor of Science in Finance</option>
				         <option value="Bachelor of Science in Management Accounting">Bachelor of Science in Management Accounting</option>
				         <option value="Bachelor of Science in Marketing">Bachelor of Science in Marketing</option>
				         <option value="Bachelor of Science in Marketing Retail Management">Bachelor of Science in Marketing Retail Management</option>
				         <option value="Bachelor of Science in Office Management">Bachelor of Science in Office Management</option>
				         <option value="Certificate in Computer Secretarial">Certificate in Computer Secretarial</option>
				         <option value="Bachelor of Science in Business Administration in Supply Management (2016-2017)">Bachelor of Science in Business Administration in Supply Management (2016-2017)</option>
				         <option value="Bachelor of Science in Office Management (2014)">Bachelor of Science in Office Management (2014)</option>
				         <option value="Bachelor of Science in Financial Management (2014)">Bachelor of Science in Financial Management (2014)</option>
				         <option value="BSBA Human Resource Development Management">BSBA Human Resource Development Management</option>
				         <option value="Bachelor of Science in Marketing Management">Bachelor of Science in Marketing Management</option>
				         <option value="Applied Business in Entrepreneurship (2014)">Applied Business in Entrepreneurship (2014)</option>
				         <option value="Bachelor of Science in Entrepreneurial Management (2014)">Bachelor of Science in Entrepreneurial Management (2014)</option>
				         <option value="Bachelor of Science in Business Administration Major in Building and Property Management">Bachelor of Science in Business Administration Major in Building and Property Management</option>
				         <option value="Bachelor of Science in Business Administration Major in Management">Bachelor of Science in Business Administration Major in Management</option>
				         <option value="Bachelor of Science in Business Administration Major is Supply Management (2014-2015)">Bachelor of Science in Business Administration Major is Supply Management (2014-2015)</option>
				         <option value="Bachelor of Science in Business Administration in Building and Property Management (2016)">Bachelor of Science in Business Administration in Building and Property Management (2016)</option>
				         <option value="Bachelor of Science in Entrepreneurial Management (Revised 2017-2018)">Bachelor of Science in Entrepreneurial Management (Revised 2017-2018)</option>
				         <option value="Bachelor of Science in Business Administration Major is Supply Management (4th Revision 2017-2018)">Bachelor of Science in Business Administration Major is Supply Management (4th Revision 2017-2018)</option>
				      </select>
				    
				      <select class="form-control form-control-sm hide CCS" name="Major" id="CCS">
				        <option value="Associate in Computer Applications Technology">Associate in Computer Applications Technology</option>
				        <option value="Associate in Computer Technology 2009">Associate in Computer Technology 2009</option>
				        <option value="Associate in Multimedia Technology">Associate in Multimedia Technology</option>
				        <option value="Bachelor of Science in Computer Network Administration 2011">Bachelor of Science in Computer Network Administration 2011</option>
				        <option value="Bachelor of Science in Computer Science Application Development">Bachelor of Science in Computer Science Application Development</option>
				        <option value="Bachelor of Science in Computer Network Administration 2011">Bachelor of Science in Computer Network Administration 2011</option>
				        <option value="Bachelor of Science in Information Technology in Service Management">Bachelor of Science in Information Technology in Service Management</option>
				        <option value="Certificate in Computer Technician">Certificate in Computer Technician</option>
				        <option value="Associate in Computer Technology 2011">Associate in Computer Technology 2011</option>
				        <option value="Bachelor of Science in Computer Science Application Development 2010">Bachelor of Science in Computer Science Application Development 2010</option>
				        <option value="Bachelor of Science in Computer Science Application Development 2008">Bachelor of Science in Computer Science Application Development 2008</option>
				        <option value="Bachelor of Science in Computer Network Administration 2003">Bachelor of Science in Computer Network Administration 2003</option>
				        <option value="Bachelor of Science in Computer Network Administration (2014)">Bachelor of Science in Computer Network Administration (2014)</option>
				        <option value="Bachelor of Science in Information Technology in Service Management (2014)">Bachelor of Science in Information Technology in Service Management (2014)</option>
				        <option value="Bachelor of Science in Computer Science Application Development (2014)">Bachelor of Science in Computer Science Application Development (2014)</option>
				        <option value="Associate in Application Development (2014)">Associate in Application Development (2014)</option>
				        <option value="Associate in Information Technology in Service Management (2014)">Associate in Information Technology in Service Management (2014)</option>
				        <option value="Associate in Computer Network Administration (2014)">Associate in Computer Network Administration (2014)</option>
				        <option value="Bachelor of Science in Computer Major in Application Development (2003)">Bachelor of Science in Computer Major in Application Development (2003)</option>
				        <option value="CSS - Cross Enrollee">CSS - Cross Enrollee</option>
				      </select>
				 
				      <select class="form-control form-control-sm hide CCSCE" name="Major" id="CCSCE">
				        <option value="Bachelor of Science in Civil Engineering">Bachelor of Science in Civil Engineering</option>
				        <option value="Bachelor of Science in Civil Technology">Bachelor of Science in Civil Technology</option>
				        <option value="BS in Construction Engineering Technology (2014)">BS in Construction Engineering Technology (2014)</option>
				        <option value="BS in Civil Engineering (2014)">BS in Civil Engineering (2014)</option>
				        <option value="BS in Civil Engineering (2016)">BS in Civil Engineering (2016)</option>
				        <option value="BS in Construction Engineering Technology (2016)">BS in Construction Engineering Technology (2016)</option>
				        <option value="Diploma in Construction Engineering Management">Diploma in Construction Engineering Management</option>
				        <option value="Bachelor of Science in Construction Engineering Technology">Bachelor of Science in Construction Engineering Technology</option>
				      </select>
				    
				      <select class="form-control form-control-sm hide COE" name="Major" id="COE">
				        <option value="Bachelor in Elementary Education">Bachelor in Elementary Education</option>
				        <option value="Bachelor in Elementary Education Early Childhood Education">Bachelor in Elementary Education Early Childhood Education</option>
				        <option value="Bachelor in Elementary Education Non Bac">Bachelor in Elementary Education Non Bac</option>
				        <option value="Bachelor in Elementary Education Special Education">Bachelor in Elementary Education Special Education</option>
				        <option value="Bachelor in Elementary Education with Training in Pre School">Bachelor in Elementary Education with Training in Pre School</option>
				        <option value="Bachelor in Elementary Education with Training in Special Educ">Bachelor in Elementary Education with Training in Special Educ</option>
				        <option value="Bachelor in Secondary Education">Bachelor in Secondary Education</option>
				        <option value="Bachelor in Secondary Education Biological Science">Bachelor in Secondary Education Biological Science</option>
				        <option value="Bachelor in Secondary Education English">Bachelor in Secondary Education English</option>
				        <option value="Bachelor in Secondary Education Filipino (2013)">Bachelor in Secondary Education Filipino (2013)</option>
				        <option value="Bachelor in Secondary Education Mathematics">Bachelor in Secondary Education Mathematics</option>
				        <option value="Bachelor in Secondary Education Social Studies">Bachelor in Secondary Education Social Studies</option>
				        <option value="Bachelor in Secondary Education Tech and Livelihood Educ">Bachelor in Secondary Education Tech and Livelihood Educ</option>
				        <option value="Bachelor of Science Biological Science">Bachelor of Science Biological Science</option>
				        <option value="Master of Arts in Education in Educational Management">Master of Arts in Education in Educational Management</option>
				        <option value="Master of Arts in Education in Instructional Media and Design 2013">Master of Arts in Education in Instructional Media and Design 2013</option>
				        <option value="Master of Arts in Education in Instructional Media and Design">Master of Arts in Education in Instructional Media and Design</option>
				        <option value="Doctor of Philosophy in Education in Speed 2013">Doctor of Philosophy in Education in Speed 2013</option>
				      </select>
				  
				      <select class="form-control form-control-sm hide CGPP" name="Major" id="CGPP">
				        <option value="Bachelor of Arts in Political Science">Bachelor of Arts in Political Science</option>
				        <option value="Bachelor of Arts in Political Science Local Government Admin">Bachelor of Arts in Political Science Local Government Admin</option>
				        <option value="Bachelor of Arts in Political ScienceParalegal Studies">Bachelor of Arts in Political ScienceParalegal Studies</option>
				        <option value="Bachelor of Arts in Political Science Policy Management">Bachelor of Arts in Political Science Policy Management</option>
				        <option value="ABPS LGA 2011">ABPS LGA 2011</option>
				        <option value="ABPS LEG 2011">ABPS LEG 2011</option>
				        <option value="ABPS PCY 2011">ABPS PCY 2011</option>
				        <option value="Master in Public Administration">Master in Public Administration</option>
				        <option value="Master in Public Administration Program Major in Local Governance">Master in Public Administration Program Major in Local Governance</option>
				        <option value="ABPS LGA 2014">ABPS LGA 2014</option>
				        <option value="ABPS LEG 2014">ABPS LEG 2014</option>
				        <option value="ABPS PCY 2014">ABPS PCY 2014</option>
				        <option value="ABPS 2014">ABPS 2014</option>
				        <option value="Bachelor of Arts in Political Science -2015">Bachelor of Arts in Political Science -2015</option>
				        <option value="Bachelor of Arts in Political Science -2016">Bachelor of Arts in Political Science -2016</option>
				        <option value="Bachelor of Arts in Political Science -2017">Bachelor of Arts in Political Science -2017</option>
				        <option value="Doctor of Public Administration">Doctor of Public Administration</option>
				      </select>
				     
				      <select class="form-control form-control-sm hide CMLI" name="Major" id="CMLI">
				        <option value="BS Marine Transportation (2014)">BS Marine Transportation (2014)</option>
				        <option value="BS Marine Engineering (2014)">BS Marine Engineering (2014)</option>
				        <option value="Associate Degree in Marine Deck Rating">Associate Degree in Marine Deck Rating</option>
				        <option value=">Associate Degree in Marine Engine Rating">Associate Degree in Marine Engine Rating</option>
				      </select>
				   
				      <select class="form-control form-control-sm hide CTM" name="Major" id="CTM">
				        <option value="Bachelor of Science in Telecommunications Technology">Bachelor of Science in Telecommunications Technology</option>
				        <option value="Certificate in Industrial Technology Automotive">Certificate in Industrial Technology Automotive</option>
				        <option value="Certificate in Industrial Technology Drafting">Certificate in Industrial Technology Drafting</option>
				        <option value="Certificate in Industrial Technology Mechanical">Certificate in Industrial Technology Mechanical</option>
				        <option value="Diploma in Civil Engineering Technology">Diploma in Civil Engineering Technology</option>
				        <option value="Diploma in Electrical Technology">Diploma in Electrical Technology</option>
				        <option value="Diploma in Facilities Technology">Diploma in Facilities Technology</option>
				        <option value=">Diploma in Facilities Technology Service Mechanics">Diploma in Facilities Technology Service Mechanics</option>
				        <option value="Diploma in Telecom Access Network Technology">Diploma in Telecom Access Network Technology</option>
				        <option value=">Diploma in Telecommunications Technology">Diploma in Telecommunications Technology</option>
				        <option value="Bachelor of Science in BLDG Technology Management 2011">Bachelor of Science in BLDG Technology Management 2011</option>
				        <option value="Associate in Electronics Technology">Associate in Electronics Technology</option>
				        <option value="Certificate in Building Technology Management 2011">Certificate in Building Technology Management 2011</option>
				        <option value="Bachelor of Science in Industrial Technology (BSIT) 1984">Bachelor of Science in Industrial Technology (BSIT) 1984</option>
				        <option value="Diploma in Industrial Facilities Technology Major in Service Mechanics (2014)">Diploma in Industrial Facilities Technology Major in Service Mechanics (2014)</option>
				        <option value="Diploma in Industrial Facilities Technology 2014">Diploma in Industrial Facilities Technology 2014</option>
				        <option value="BS Electronics and Telecommunications Tech (2014)">BS Electronics and Telecommunications Tech (2014)</option>
				        <option value="BS Building Technology Management (2014)">BS Building Technology Management (2014)</option>
				        <option value="BS Electrical Tech (2014)">BS Electrical Tech (2014)</option>
				        <option value="BS Civil Technology">BS Civil Technology</option>
				      </select>
				   
				      <select class="form-control form-control-sm hide CHK" name="Major" id="CHK">
				        <option value="Associate in Dance Instruction and Dance Sports 2010">Associate in Dance Instruction and Dance Sports 2010</option>
				        <option value="Associate in Sports Coaching 2010">Associate in Sports Coaching 2010</option>
				        <option value="Bachelor in Physical Wellness - Sports 2010">Bachelor in Physical Wellness - Sports 2010</option>
				        <option value="Certificate in Folk Dancing 2010">Certificate in Folk Dancing 2010</option>
				        <option value="Certificate in Sports Officiating 2010">Certificate in Sports Officiating 2010</option>
				        <option value="Diploma in Sports and Recreational Facilities Management - Sports 2010">Diploma in Sports and Recreational Facilities Management - Sports 2010</option>
				        <option value="Diploma in Sports and Recreational Facilities Management - Dance 2010">Diploma in Sports and Recreational Facilities Management - Dance 2010</option>
				        <option value="Bachelor in Physical Wellness">Bachelor in Physical Wellness</option>
				        <option value="Diploma in Sports and Recreational Facilities Management - Dance 2005">Diploma in Sports and Recreational Facilities Management - Dance 2005</option>
				        <option value=">Diploma in Sports and Recreational Facilities Management - Sports 2005">Diploma in Sports and Recreational Facilities Management - Sports 2005</option>
				        <option value="Bachelor in Physical Wellness - Dance 2005">Bachelor in Physical Wellness - Dance 2005</option>
				        <option value="Bachelor in Physical Wellness - Sports 2005">Bachelor in Physical Wellness - Sports 2005</option>
				        <option value="Associate in Sports Coaching 2005">Associate in Sports Coaching 2005</option>
				        <option value="Associate in Dance Instruction and Dance Sports 2005">Associate in Dance Instruction and Dance Sports 2005</option>
				        <option value="Certificate in Sports Officiating 2005">Certificate in Sports Officiating 2005</option>
				        <option value="Certificate in Folk Dancing 2005">Certificate in Folk Dancing 2005</option>
				        <option value=">Bachelor in Physical Wellness (2014)">Bachelor in Physical Wellness (2014)</option>
				        <option value=">Bachelor in Physical Wellness Major in Sports Management(2016)">Bachelor in Physical Wellness Major in Sports Management(2016)</option>
				        <option value="Bachelor in Physical Wellness Major in Sports Management(2017)">Bachelor in Physical Wellness Major in Sports Management(2017)</option>
				      </select>
				  
				      <select class="form-control form-control-sm hide CTHM" name="Major" id="CTHM">
				        <option value="Associate in Hotel Restaurant Operations">Associate in Hotel Restaurant Operations</option>
				        <option value="Bachelor of Science in Hospitality Management Hotel and Restaurant Mgmt">Bachelor of Science in Hospitality Management Hotel and Restaurant Mgmt</option>
				        <option value="Bachelor of Science in Hospitality Management Travel and Tourism Mgmt">Bachelor of Science in Hospitality Management Travel and Tourism Mgmt</option>
				        <option value="Bachelor of Science in Tourism Management">Bachelor of Science in Tourism Management </option>
				        <option value="Bachelor of Science in Hospitality Management Major in Travel and Tourism Mgmt (2014)">Bachelor of Science in Hospitality Management Major in Travel and Tourism Mgmt (2014)</option>
				        <option value="Bachelor of Science in Hospitality Management Major in Hotel and Restaurant Mgmt (2014)">Bachelor of Science in Hospitality Management Major in Hotel and Restaurant Mgmt (2014)</option>
				        <option value="Bachelor in international Culinary Management (2012)">Bachelor in international Culinary Management (2012)</option>
				      </select>
				    
				      <select class="form-control form-control-sm hide DCNB" name="Major" id="DCNB">
				        <option value="NSTP Subjects">NSTP Subjects</option>
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
					      <select class="form-control" id="skill" name="skill">
					        <option value="Beginner">Beginner</option>
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
					<input type="submit" class="btn btn-success btn-outline btn-block">
				</div>
				<div class="col-lg-3"></div>
			</div>			
		</div>



		<div class="col-lg-3">			
		</div>
	</div>
</div>
</div>