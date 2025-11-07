<!DOCTYPE html>
<html lang="en">
<head>
	<title>WeBid Administration back-end</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo (isset($this->_rootref['CHARSET'])) ? $this->_rootref['CHARSET'] : ''; ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="WeBid">

	<link rel="stylesheet" media="screen,projection" type="text/css" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>includes/calendar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/css/sb-admin.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/css/style.css">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/js/jquery.js"></script>
	<script src="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/js/jquery-ui.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/js/bootstrap.min.js"></script>
	
	<!-- Custom Fonts -->
    <link href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
<body id="<?php echo (isset($this->_rootref['CURRENT_PAGE'])) ? $this->_rootref['CURRENT_PAGE'] : ''; ?>">
	<div id="wrapper">
	    <!-- Navigation --><!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/img/adminlogo.png"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo (isset($this->_rootref['ADMIN_USER'])) ? $this->_rootref['ADMIN_USER'] : ''; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="editadminuser.php?id=<?php echo (isset($this->_rootref['ADMIN_ID'])) ? $this->_rootref['ADMIN_ID'] : ''; ?>"><i class="fa fa-fw fa-user"></i> <?php echo ((isset($this->_rootref['L_5142'])) ? $this->_rootref['L_5142'] : ((isset($MSG['5142'])) ? $MSG['5142'] : '{ L_5142 }')); ?></a>
						</li>
						<li>
                            <a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>" target="_blank"><i class="fa fa-fw fa-gear"></i> <?php echo ((isset($this->_rootref['L_5001'])) ? $this->_rootref['L_5001'] : ((isset($MSG['5001'])) ? $MSG['5001'] : '{ L_5001 }')); ?></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> <?php echo ((isset($this->_rootref['L_245'])) ? $this->_rootref['L_245'] : ((isset($MSG['245'])) ? $MSG['245'] : '{ L_245 }')); ?></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php" alt="<?php echo ((isset($this->_rootref['L_166'])) ? $this->_rootref['L_166'] : ((isset($MSG['166'])) ? $MSG['166'] : '{ L_166 }')); ?>"><i class="fa fa-fw fa-dashboard"></i> <?php echo ((isset($this->_rootref['L_166'])) ? $this->_rootref['L_166'] : ((isset($MSG['166'])) ? $MSG['166'] : '{ L_166 }')); ?></a>
                    </li>
                    <li>
                        <a href="settings.php" alt="<?php echo ((isset($this->_rootref['L_5142'])) ? $this->_rootref['L_5142'] : ((isset($MSG['5142'])) ? $MSG['5142'] : '{ L_5142 }')); ?>"><i class="fa fa-fw fa-cogs"></i> <?php echo ((isset($this->_rootref['L_5142'])) ? $this->_rootref['L_5142'] : ((isset($MSG['5142'])) ? $MSG['5142'] : '{ L_5142 }')); ?></a>
                    </li>
                    <li>
                        <a href="fees.php" alt="<?php echo ((isset($this->_rootref['L_25_0012'])) ? $this->_rootref['L_25_0012'] : ((isset($MSG['25_0012'])) ? $MSG['25_0012'] : '{ L_25_0012 }')); ?>"><i class="fa fa-fw fa-money"></i> <?php echo ((isset($this->_rootref['L_25_0012'])) ? $this->_rootref['L_25_0012'] : ((isset($MSG['25_0012'])) ? $MSG['25_0012'] : '{ L_25_0012 }')); ?></a>
                    </li>
                    <li>
                        <a href="theme.php" alt="<?php echo ((isset($this->_rootref['L_25_0009'])) ? $this->_rootref['L_25_0009'] : ((isset($MSG['25_0009'])) ? $MSG['25_0009'] : '{ L_25_0009 }')); ?>"><i class="fa fa-fw fa-edit"></i> <?php echo ((isset($this->_rootref['L_25_0009'])) ? $this->_rootref['L_25_0009'] : ((isset($MSG['25_0009'])) ? $MSG['25_0009'] : '{ L_25_0009 }')); ?></a>
                    </li>
                    <li>
                        <a href="managebanners.php" alt="<?php echo ((isset($this->_rootref['L_25_0011'])) ? $this->_rootref['L_25_0011'] : ((isset($MSG['25_0011'])) ? $MSG['25_0011'] : '{ L_25_0011 }')); ?>"><i class="fa fa-fw fa-desktop"></i> <?php echo ((isset($this->_rootref['L_25_0011'])) ? $this->_rootref['L_25_0011'] : ((isset($MSG['25_0011'])) ? $MSG['25_0011'] : '{ L_25_0011 }')); ?></a>
                    </li>
                    <li>
                        <a href="listusers.php" alt="<?php echo ((isset($this->_rootref['L_25_0010'])) ? $this->_rootref['L_25_0010'] : ((isset($MSG['25_0010'])) ? $MSG['25_0010'] : '{ L_25_0010 }')); ?>"><i class="fa fa-fw fa-users"></i> <?php echo ((isset($this->_rootref['L_25_0010'])) ? $this->_rootref['L_25_0010'] : ((isset($MSG['25_0010'])) ? $MSG['25_0010'] : '{ L_25_0010 }')); ?></a>
                    </li>
					 <li>
                        <a href="listauctions.php" alt="<?php echo ((isset($this->_rootref['L_239'])) ? $this->_rootref['L_239'] : ((isset($MSG['239'])) ? $MSG['239'] : '{ L_239 }')); ?>"><i class="fa fa-fw fa-gavel"></i> <?php echo ((isset($this->_rootref['L_239'])) ? $this->_rootref['L_239'] : ((isset($MSG['239'])) ? $MSG['239'] : '{ L_239 }')); ?></a>
                    </li>
					 <li>
                        <a href="news.php" alt="<?php echo ((isset($this->_rootref['L_25_0018'])) ? $this->_rootref['L_25_0018'] : ((isset($MSG['25_0018'])) ? $MSG['25_0018'] : '{ L_25_0018 }')); ?>"><i class="fa fa-fw fa-edit"></i> <?php echo ((isset($this->_rootref['L_25_0018'])) ? $this->_rootref['L_25_0018'] : ((isset($MSG['25_0018'])) ? $MSG['25_0018'] : '{ L_25_0018 }')); ?></a>
                    </li>
					 <li>
                        <a href="viewaccessstats.php" alt="<?php echo ((isset($this->_rootref['L_25_0023'])) ? $this->_rootref['L_25_0023'] : ((isset($MSG['25_0023'])) ? $MSG['25_0023'] : '{ L_25_0023 }')); ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?php echo ((isset($this->_rootref['L_25_0023'])) ? $this->_rootref['L_25_0023'] : ((isset($MSG['25_0023'])) ? $MSG['25_0023'] : '{ L_25_0023 }')); ?></a>
                    </li>
					 <li>
                        <a href="errorlog.php" alt="<?php echo ((isset($this->_rootref['L_5436'])) ? $this->_rootref['L_5436'] : ((isset($MSG['5436'])) ? $MSG['5436'] : '{ L_5436 }')); ?>"><i class="fa fa-fw fa-wrench"></i> <?php echo ((isset($this->_rootref['L_5436'])) ? $this->_rootref['L_5436'] : ((isset($MSG['5436'])) ? $MSG['5436'] : '{ L_5436 }')); ?></a>
                    </li>
					 <li>
                        <a href="help.php" alt="<?php echo ((isset($this->_rootref['L_148'])) ? $this->_rootref['L_148'] : ((isset($MSG['148'])) ? $MSG['148'] : '{ L_148 }')); ?>"><i class="fa fa-fw fa-info-circle"></i> <?php echo ((isset($this->_rootref['L_148'])) ? $this->_rootref['L_148'] : ((isset($MSG['148'])) ? $MSG['148'] : '{ L_148 }')); ?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


	    
	   <!-- 
	    <div class="row">
			<div class="col-md-6"><small><?php echo ((isset($this->_rootref['L_559'])) ? $this->_rootref['L_559'] : ((isset($MSG['559'])) ? $MSG['559'] : '{ L_559 }')); ?>: <?php echo (isset($this->_rootref['LAST_LOGIN'])) ? $this->_rootref['LAST_LOGIN'] : ''; ?></small></div>
			<div class="col-md-6 text-muted text-right">
<?php $_langs_count = (isset($this->_tpldata['langs'])) ? sizeof($this->_tpldata['langs']) : 0;if ($_langs_count) {for ($_langs_i = 0; $_langs_i < $_langs_count; ++$_langs_i){$_langs_val = &$this->_tpldata['langs'][$_langs_i]; if (! $_langs_val['B_DEFAULT']) {  ?>
				<a href="index.php?lan=<?php echo $_langs_val['LANG']; ?>"><img src="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>images/flags/<?php echo $_langs_val['LANG']; ?>.gif"></a>
	<?php } }} ?> -->
			
	    <div id="page-wrapper">

            <div class="container-fluid">
		
    <?php $_alerts_count = (isset($this->_tpldata['alerts'])) ? sizeof($this->_tpldata['alerts']) : 0;if ($_alerts_count) {for ($_alerts_i = 0; $_alerts_i < $_alerts_count; ++$_alerts_i){$_alerts_val = &$this->_tpldata['alerts'][$_alerts_i]; ?>
		<div id="alerts">
			<div class="alert alert-<?php echo $_alerts_val['TYPE']; ?>"><?php echo $_alerts_val['MESSAGE']; ?></div>
		</div>
	<?php }} ?>