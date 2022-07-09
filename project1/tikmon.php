
<!DOCTYPE HTML>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <title>Monitor Traffic</title>       
<?php
	include_once "including.php"
?>
</head>

    


<main role="main" class="container ml-5">
    <div class="row">
		<div class="col-md-12">
		    <div class="card">
		    <div id="graph"></div>
			</div>
			<div class="table">
			<table class="table table-bordered">
			<tr>
				<th>Interface</th>
				<th>TX</th>
				<th>RX</th>
			</tr>
			<tr>
				<td>
					<select name="interface" id="interface" class="form-control">
  						<option>ether1</option>
  						<option>ether2</option>
  						<option>ether3</option>
  						<option>ether4</option>
  						<option>ether5</option>
					</select>
				</td>
				<td width="150"><div id="tabletx"></div></td>
				<td width="150"><div id="tablerx"></div></td>
			</tr>
			</table>
			</div>
			
        </div>
	</div>	
</main><!-- /.container -->
	

</body>
</html>


