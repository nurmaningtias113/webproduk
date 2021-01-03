<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min1.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-left">Login</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<div class="login-panel panel panel-primary">
		        <div class="panel-heading">
		            <h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span>
		            </h3>
		        </div>
		    	<div class="panel-body">
		    		<fieldset>
		        	<form method="POST" action="<?php echo base_url(); ?>index.php/sepatu/login">
		                 <div class="mb-3">
      						<label for="name" class="form-label">username</label>
     					 	<input class="form-control" placeholder="username" type="text" name="username" required style="margin-top:10px;">
    					 </div>
						<div class="mb-3">
      						<label for="password" class="form-label">password</label>
     					 	<input class="form-control" placeholder="Password" type="password" name="password" required style="margin-top:10px;">
    					 </div>
		                	<button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> Login</button>
		        	</form>
		        	 </fieldset>
		    	</div>
		    </div>
			<?php
				if($this->session->flashdata('error')){
					?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('error'); ?>
					</div>
					<?php
				}
			?>
		</div>
	</div>
</div>
</body>
</html>