<!DOCTYPE html>
<html>
<link 
			rel="stylesheet"
			type="text/css"
			href="ContinuumStyleMain.css"
/>
<head>
<style>
#dynamicInput {
		margin-left: 50px;	
}

#addButton {
        position: relative;
        left: 50px; 
        font-size: 115%; 
}

</style>
</head>
<body>
	<div id="foreground">
		<div id="header">
		</div>
		<img src="Continuum Logo.gif" alt="Continuum Managed Services" id="logo"/>
		<div id="topNav">
		<form method="link" action="ViewRecords.php">
				<input type="submit" value="View Records" class="topNavButton" id="viewButton">
			</form>
			<form method="link" action="CreateRecord.php">
				<input type="submit" value="Create Record" class="topNavButton" id="createButton">
			</form>
			<form method="link" action="UpdateRecord.php">
				<input type="submit" value="Update Record" class="topNavButton" id="updateButton">
			</form>
			<form method="link" action="DeleteRecord.php">
				<input type="submit" value="Delete Record" class="topNavButton" id="deleteButton">
			</form>
		</div> 
		<center>
		<div id="crossBar">
		</div>
		</center>
		<script src="addInput.js" language="Javascript" type="text/javascript"></script>
			<form method="POST">
     			<div id="dynamicInput">
          				Account #1 <br><input type="text" name="myInputs[]">
     			</div>
    		<input id="addButton" type="button" value="+" onClick="addInput('dynamicInput');">
			</form>
	</div>
</body>
</html>