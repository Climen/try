



<!DOCTYPE html>
<html>
<head>
	<title>Omnibus Certification</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<form method="POST" action="omnibus_process.php">
		<div class="in">
		<h4>Omnibus Certification of Authenticity and Veracity of Documents</h4><br>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I,	
		<input type = "text" name="name" placeholder="Enter your name" value = "<?php if(isset($_POST['name'])) {echo $_POST['name'];} ?>" required="required" />	
		, Filipino, of legal age, with permanent address at
		<input type = "text" name="address" placeholder="Enter your address" value = "<?php if(isset($_POST['address'])) {echo $_POST['address'];} ?>" required="required" />	
		 , after being sworn in accordance with law, hereby depose and state that: </p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I am applying for 
		<input type = "text" name="position" placeholder="Position" value = "<?php if(isset($_POST['position'])) {echo $_POST['position'];} ?>" required="required" /> at
		<input type = "text" name="school" placeholder="School" value = "<?php if(isset($_POST['school'])) {echo $_POST['school'];} ?>" required="required" />,
		<input type = "text" name="sc_address" placeholder="Enter the address of the School" value = "<?php if(isset($_POST['sc_address'])) {echo $_POST['sc_address'];} ?>" required="required" /></p>
		</div>

		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I have submitted the following documents:<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "checkbox" name="documents[]" value="1. Transcript of Records"/>Transcript of Records<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "checkbox" name="documents[]" value="2. PRC license ID"/>PRC license ID<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "checkbox" name="documents[]" value="3. PRC Verification"/>PRC Verification<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "checkbox" name="documents[]" value="4. NBI Clearance"/>NBI Clearance<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "checkbox" name="documents[]" value="5. CSC form 211 (Medical Certificate)"/>CSC form 211 (Medical Certificate)<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "checkbox" name="documents[]" value="6. NSO Birth Certificate"/>NSO Birth Certificate<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "checkbox" name="documents[]" value="7. Statement of Assets, Liabilities and Networth (SALN)"/>Statement of Assets, Liabilities and Networth (SALN)<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "checkbox" name="documents[]" value="8. BIR Form 1902 or 2305"/>BIR Form 1902 or 2305<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "checkbox" name="documents[]" value="9. Marriage Contract (if applicable)"/>Marriage Contract (if applicable)<br/>
		
		</p>	
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I am executing this Certification to attest to the authenticity and veracity of all documents submitted.<br/></p>
		<div class="in"> 
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By executing this <b>Omnibus Certification of Authenticity and Vercity of Documents,</b> I hereby authorize the Department of Education, Division of
		<input type = "text" name="place" placeholder="" value = "<?php if(isset($_POST['place'])) {echo $_POST['place'];} ?>" required="required" /> through the School Principal, to verify the authenticity of the above mentioned documents.
		</div>	
		</p><br/><br/><br/>

		
		<div class="in">
			<p style="text-align: right">
				<input type = "text" name="signature" placeholder="" value = "<?php if(isset($_POST['signature'])) {echo $_POST['signature'];} ?>" required="required" /><br/>	
			</p>
			<p style="text-align: right">
					
				<i>Signature over printed name</i>
			</p>
			<br/><br/>
			<p style="text-align: right">
				<input type = "text" name="date" placeholder="" value = "<?php if(isset($_POST['date'])) {echo $_POST['date'];} ?>" required="required" /><br/>	
			</p>
			<p style="text-align: right">
					
				<i>Date</i>
			</p>

		</div>
			
			
		<div class="button">
		<p><a href="omnibus_process.php"><input type = "submit" name="btnSave" value="Save" required="required" /><a></p>
	    </div>
		

		 
	</form>
</body>
</html>