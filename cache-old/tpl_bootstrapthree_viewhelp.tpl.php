<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" dir="<?php echo (isset($this->_rootref['DOCDIR'])) ? $this->_rootref['DOCDIR'] : ''; ?>">
<head>
<title><?php echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo (isset($this->_rootref['CHARSET'])) ? $this->_rootref['CHARSET'] : ''; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo (isset($this->_rootref['INCURL'])) ? $this->_rootref['INCURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo (isset($this->_rootref['INCURL'])) ? $this->_rootref['INCURL'] : ''; ?>themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/css/style.css">

</head>
<body>
<div class="container">
    <div class="row grid-margin-top-md">
	<div class="col-md-12">
	   <?php echo (isset($this->_rootref['LOGO'])) ? $this->_rootref['LOGO'] : ''; ?>
	</div>
     </div>
	<div class="row">
		<div class="col-md-12">
			<legend>
				<?php echo ((isset($this->_rootref['L_5236'])) ? $this->_rootref['L_5236'] : ((isset($MSG['5236'])) ? $MSG['5236'] : '{ L_5236 }')); ?>
			</legend>
                          <div class="text-right grid-margin-btm-md">
                    <a class="btn btn-warning btn-xs" href="help.php"><?php echo ((isset($this->_rootref['L_5243'])) ? $this->_rootref['L_5243'] : ((isset($MSG['5243'])) ? $MSG['5243'] : '{ L_5243 }')); ?></a> <a class="btn btn-danger btn-xs" href="javascript:window.close()"><?php echo ((isset($this->_rootref['L_678'])) ? $this->_rootref['L_678'] : ((isset($MSG['678'])) ? $MSG['678'] : '{ L_678 }')); ?></a>
                          </div>
			<div class="well">
			<form name="faqsindex" action="viewhelp.php" method="post">
            	<input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
                <select class="form-control" name="cat" onChange="document.faqsindex.submit()">
                    <option value="">- <?php echo (isset($this->_rootref['FNAME'])) ? $this->_rootref['FNAME'] : ''; ?> -</option>
<?php $_cats_count = (isset($this->_tpldata['cats'])) ? sizeof($this->_tpldata['cats']) : 0;if ($_cats_count) {for ($_cats_i = 0; $_cats_i < $_cats_count; ++$_cats_i){$_cats_val = &$this->_tpldata['cats'][$_cats_i]; ?>
					<option value="<?php echo $_cats_val['ID']; ?>"><?php echo $_cats_val['CAT']; ?></option>
<?php }} ?>
				</select>
                
			</form>
                        </div>
			<legend><?php echo (isset($this->_rootref['FNAME'])) ? $this->_rootref['FNAME'] : ''; ?></legend>
			<div class="panel panel-default">
                                   <div class="list-group">
<?php $_faqs_count = (isset($this->_tpldata['faqs'])) ? sizeof($this->_tpldata['faqs']) : 0;if ($_faqs_count) {for ($_faqs_i = 0; $_faqs_i < $_faqs_count; ++$_faqs_i){$_faqs_val = &$this->_tpldata['faqs'][$_faqs_i]; ?>  
				<a class="list-group-item" href="#faq<?php echo $_faqs_val['ID']; ?>"><?php echo $_faqs_val['Q']; ?></a>
<?php }} ?>
                                    </div>
			</div>
<?php $_faqs_count = (isset($this->_tpldata['faqs'])) ? sizeof($this->_tpldata['faqs']) : 0;if ($_faqs_count) {for ($_faqs_i = 0; $_faqs_i < $_faqs_count; ++$_faqs_i){$_faqs_val = &$this->_tpldata['faqs'][$_faqs_i]; ?>
            <div class="panel panel-default">
            <a name="faq<?php echo $_faqs_val['ID']; ?>"></a>
            <div class="panel-heading"><?php echo $_faqs_val['Q']; ?></div>
            <div class="panel-body"><?php echo $_faqs_val['A']; ?>
            <div class="text-right"><a href="#top"><span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span></a></div>
            </div>
            </div>
<?php }} ?>
			
		</div>
	</div>
</div>
</body>
</html>