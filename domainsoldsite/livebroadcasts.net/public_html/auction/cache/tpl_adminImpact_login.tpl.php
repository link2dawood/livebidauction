<!DOCTYPE html>
<html lang="en">
<head>
	<title>Auction Administration back-end</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo (isset($this->_rootref['CHARSET'])) ? $this->_rootref['CHARSET'] : ''; ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="WeBid">

	<link rel="stylesheet" type="text/css" href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/css/jquery.lightbox.css" media="screen">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/js/bootstrap.min.js"></script>
	
	<!-- Custom Fonts -->
    <link href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script src="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('a.new-window').click(function(){
				window.open(this.href, this.alt, "toolbar=0,location=0,directories=0,scrollbars=1,screenX=100,screenY=100,status=0,menubar=0,resizable=0,width=550,height=550");
				return false;
			});
			$(".selectall").click(function() {
				var checked_status = this.checked;
				var checkbox_name = this.value;
				$("input[name=\"" + checkbox_name + "[]\"]").each(function() {
					this.checked = checked_status;
				});
			});
		});
	</script>
	<script type="text/javascript">
		function window_open(url,title,width,height,x,y)
		{
			var window_= 'toolbar=0,location=0,directories=0,scrollbars=1,screenX='+x+',screenY='+y+',status=0,menubar=0,resizable=0,width='+width+',height='+height;
			open(url,title,window_);
		}
	</script>
</head>
<body class="body-login" id="<?php echo (isset($this->_rootref['CURRENT_PAGE'])) ? $this->_rootref['CURRENT_PAGE'] : ''; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
			    <div class="panel panel-default login-panel">
			        <div class="panel-heading text-center">
                        <img src="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/img/adminlogo.png">
                    </div>
			        <div class="panel-body">
<?php if ($this->_rootref['PAGE'] == (1)) {  ?>
				<div class="alert alert-info" role="alert"><i class="fa fa-info-circle"></i>   <?php echo ((isset($this->_rootref['L_441'])) ? $this->_rootref['L_441'] : ((isset($MSG['441'])) ? $MSG['441'] : '{ L_441 }')); ?></div>
<?php } else { ?>
				<div class="alert alert-success" role="alert"><i class="fa fa-info-circle"></i> <?php echo ((isset($this->_rootref['L_442'])) ? $this->_rootref['L_442'] : ((isset($MSG['442'])) ? $MSG['442'] : '{ L_442 }')); ?></div>
<?php } if ($this->_rootref['ERROR'] != ('')) {  ?>
				<div class="alert alert-danger" role="alert"><b><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></b></div>
<?php } ?>
				<form action="login.php" method="post">
					<input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
					<div class="form-group">
						<label for="username"><?php echo ((isset($this->_rootref['L_003'])) ? $this->_rootref['L_003'] : ((isset($MSG['003'])) ? $MSG['003'] : '{ L_003 }')); ?></label>
						<input type="text" name="username" size="20" class="form-control" autofocus>
					</div>
					<div class="form-group">
						<label for="password"><?php echo ((isset($this->_rootref['L_004'])) ? $this->_rootref['L_004'] : ((isset($MSG['004'])) ? $MSG['004'] : '{ L_004 }')); ?></label>
						<input type="password" name="password" class="form-control" size="20">
					</div>
<?php if ($this->_rootref['PAGE'] == (1)) {  ?>
					<div class="form-group">
						<label for="repeat_password"><?php echo ((isset($this->_rootref['L_005'])) ? $this->_rootref['L_005'] : ((isset($MSG['005'])) ? $MSG['005'] : '{ L_005 }')); ?></label>
						<input type="password" name="repeat_password" class="form-control" size="20">
					</div>
					<div class="text-center">
						<input type="hidden" name="action" value="insert">
						<button class="btn btn-primary" type="submit" name="submit"><?php echo ((isset($this->_rootref['L_5204'])) ? $this->_rootref['L_5204'] : ((isset($MSG['5204'])) ? $MSG['5204'] : '{ L_5204 }')); ?></button>
					</div>
<?php } else { ?>
					<div class="text-center">
						<input type="hidden" name="action" value="login">
						<button class="btn btn-lg btn-success btn-block" type="submit" name="submit"><?php echo ((isset($this->_rootref['L_052'])) ? $this->_rootref['L_052'] : ((isset($MSG['052'])) ? $MSG['052'] : '{ L_052 }')); ?></button>
					</div>
<?php } ?>
				</form>
				    </div>
				</div>
			</div>
		</div>