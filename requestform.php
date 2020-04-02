<?php
if (!empty($_POST['calculate_btn'])) {
		
		header('Location: requestpage.php?msg=request.');
	
	}


?>


<div class="page-header">
				<h1 class="reqtoptitel bg-dark bg-light fixed-top">
					 <small>My request to</small> ETA
				</h1>
			
			</div>
<div class="mainbody"><img class="reqbgimg" src="https://static.vecteezy.com/system/resources/previews/000/095/727/original/administrative-assistant-free-vector.jpg "/img>
<div class="container-fluid">
	<div class="row">
	
		
		
		<div class="col-md-4">
		
			<h4 style="text-align:center ; margin-top: -10px">Which topic suits best to your text?</h4>
		<br>
		<div style="text-align:center ; margin-top: -20px" class="radbox" required>
		<input type="radio" id="Economics" name="Economics" value="Economics">
		<label for="Economics">Economics</label>
		<input type="radio" id="Law" name="Law" value="Law">
		<label for="Law">Law</label>
		<input type="radio" id="Technology" name="Technology" value="Technology">
		<label for="Technology">Technology, products</label>
		<br>
		<input type="radio" id="Society" name="Society" value="Society">
		<label for="Society">Society</label>
		<input type="radio" id="Ordinary" name="Ordinary" value="Ordinary">
		<label for="Ordinary">Ordinary, easy texts</label>
		</div>
		<br>
		
		<div>
		Translate from: 	<select class="langselect">
		<option value="fromenglish">English</option>
		<option value="fromgerman">German</option>
		<option value="fromhungarian">Hungarian</option>
			</select>
		</div>
		<br>
		<div>
		to: 	<select class="langselect">
		<option value="toenglish2">English</option>
		<option value="togerman">German</option>
		<option value="tohungarian">Hungarian</option>
			</select>
		</div>
		<br>		
			<form role="form">
			<div class="form-group">
					 
					<label for="exampleInputFile">
					
					</label>
					<button type="file" name="upload" value="upload">Upload document here</button>
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Email address
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				
				<div class="checkbox">
					 
					<label>
						<input type="checkbox" /> Check me out
					</label>
				</div> 
				<button type="submit" class="btn btn-primary" name="request_btn">
					Submit
				</button>
			</form>
		</div>
		
		<div class="col-md-8 textpaste">
		
		<textarea class="form-control" name="comments2" id="comments2" onkeyup="countWords()" rows="26" style="height: 350px" placeholder="Please select topic and language, and paste your text here to calculate approximate price"></textarea>
			<div class="wordcounter" style="margin-top:10px">
				Number of words:	<input type="text" id="word_count"	value="">
				<input type="submit" name="calculate_btn" method="GET" value="calculate">	
			    CALCULATED COST: <input type="text" value="">	
			</div>
		</div>
		
		

	</div>
</div>
</div>


