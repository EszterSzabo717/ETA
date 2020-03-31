<div class="page-header">
				<h1 class="reqtoptitel bg-dark bg-light fixed-top">
					 <small>My request to</small> ETA
				</h1>
			
			</div>
<div class="mainbody"><img class="reqbgimg" src="https://static.vecteezy.com/system/resources/previews/000/095/727/original/administrative-assistant-free-vector.jpg "/img>
<div class="container-fluid">
	<div class="row">
	
		<form role="form">
		
		<div class="form-group col-md-4 leftside">
		
			<h4 style="text-align:center ; margin-top: -10px">Which topic suits best to your text?</h4>
		<br>
		<div style="text-align:center ; margin-top: -20px" class="radbox" required>
		<input type="radio" id="Economics" name="topic" value="Economics">
		<label for="Economics">Economics</label>
		<input type="radio" id="Law" name="topic" value="Law">
		<label for="Law">Law</label>
		<input type="radio" id="Technology" name="topic" value="Technology">
		<label for="Technology">Technology, products</label>
		<br>
		<input type="radio" id="Society" name="topic" value="Society">
		<label for="Society">Society</label>
		<input type="radio" id="Ordinary" name="topic" value="Ordinary">
		<label for="Ordinary">Ordinary, easy texts</label>
		</div>
		<br>
		
		<div>
		Translate from: 	<select class="langselect">
		<option value="volvo">English</option>
		<option value="saab">German</option>
		<option value="mercedes">Hungarian</option>
			</select>
		</div>
		<br>
		<div>
		to: 	<select class="langselect">
		<option value="volvo">English</option>
		<option value="saab">German</option>
		<option value="mercedes">Hungarian</option>
			</select>
		</div>
		<br>		
			
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
			
		</div>
		
		<div class="form-group col-md-8 textpaste">
		
		<textarea class="form-control" name="comments" id="comments" rows="26"><?php echo $content="Please select topic and language, and paste your text here to calculate approximate price"?><?php file_put_contents('counter.txt',$content);?></textarea>
		<br>
			<div class="wordcounter" style="position:relative; margin-top:180px">Number of words:	<input type="text"	value="<?php
			echo str_word_count(file_get_contents('counter.txt'));?>">
			<input type="submit" name="calculate_btn" method="POST" value="calculate">	
			CALCULATED COST: <input type="text" value="<?php echo "";?>">
				
			</div>
		</div>
		
		</form>

	</div>
</div>
</div>

<!-----
$datas=array();
	//$content = file_get_contents('here.txt');
	
//	file_put_contents('here.txt','asdasdasd');
	
	$content = file_get_contents('https://bulipest.hu');
	
	//$str = 'ÉlelMiszer';
	
	//$str = mb_strtolower($str);
	//die($str);
	
----->