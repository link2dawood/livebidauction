<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body style="margin:0;">
<table class="table table-bordered table-hover table-striped" bgcolor="#0083D7">
	<tr>
		<td>
			<form name="conf" action="" method="post">
			<table class="table table-bordered table-hover table-striped" bgcolor="#FFFFFF">
			<tr valign="top">
				<td>
					{MESSAGE}
				</td>
			</tr>
			<tr valign="top">
				<td height="22">&nbsp;</td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="ignore" value="true">
					<input type="hidden" name="id" value="{ID}">
					<input type="hidden" name="offset" value="{OFFSET}">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" name="act" value="{STRING}">
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			</table>
			</form>
		</td>
	</tr>
</table>