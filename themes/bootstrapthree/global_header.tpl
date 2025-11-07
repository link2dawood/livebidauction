<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>{PAGE_TITLE}</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{DESCRIPTION}">
<meta name="keywords" content="{KEYWORDS}">
<meta name="generator" content="WeBid">

<link rel="stylesheet" type="text/css" href="{INCURL}themes/{THEME}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{INCURL}themes/{THEME}/css/style.css">
<link rel="stylesheet" type="text/css" href="{INCURL}themes/{THEME}/css/jquery.lightbox.css" media="screen">
<link rel="stylesheet" type="text/css" href="{INCURL}inc/calendar.css">

<link rel="alternate" type="application/rss+xml" title="{L_924}" href="{SITEURL}rss.php?feed=1">
<link rel="alternate" type="application/rss+xml" title="{L_925}" href="{SITEURL}rss.php?feed=2">
<link rel="alternate" type="application/rss+xml" title="{L_926}" href="{SITEURL}rss.php?feed=3">
<link rel="alternate" type="application/rss+xml" title="{L_927}" href="{SITEURL}rss.php?feed=4">
<link rel="alternate" type="application/rss+xml" title="{L_928}" href="{SITEURL}rss.php?feed=5">
<link rel="alternate" type="application/rss+xml" title="{L_929}" href="{SITEURL}rss.php?feed=6">
<link rel="alternate" type="application/rss+xml" title="{L_930}" href="{SITEURL}rss.php?feed=7">
<link rel="alternate" type="application/rss+xml" title="{L_931}" href="{SITEURL}rss.php?feed=8">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{INCURL}themes/{THEME}/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{INCURL}loader.php?js={JSFILES}"></script>
<!-- IF LOADCKEDITOR -->
	<script type="text/javascript" src="{INCURL}ckeditor/ckeditor.js"></script>
<!-- ENDIF -->

<script type="text/javascript">
$(document).ready(function() {
    // Get the server-provided date from the template
    var serverdate = new Date("{ACTUALDATE}"); // Replace {ACTUALDATE} with the server-side date
    
    // Function to add padding for single-digit values
    function padlength(what) {
        return (what.toString().length == 1) ? "0" + what : what;
    }

    // Function to update and display the server time
    function displaytime() {
        serverdate.setSeconds(serverdate.getSeconds() + 1); // Increment seconds
        var timestring = padlength(serverdate.getHours()) + ":" +
                         padlength(serverdate.getMinutes()) + ":" +
                         padlength(serverdate.getSeconds());
        $("#servertime").html(timestring); // Update the time display
    }

    // Set an interval to update the time every second
    setInterval(displaytime, 1000);

    // Initialize the gallery (if applicable)
    $(function() {
        $('#gallery a').lightBox();
    });
});
</script>


</head>

<body>
<div class="container">
      <div class="row header">
           <div class="col-md-6"><a href="{URL_CONTACT}"><img src="uploaded/logo/{LOGO}"/></a></div>
           <div class="col-md-6 hidden-xs text-right">{BANNER}</div>
      </div>
      <div class="row">
           <div class="col-md-6 text-muted"><small><!-- IF B_LOGGED_IN -->{L_200} {YOURUSERNAME}. <a href="{SSLURL}logout.php?">{L_245}</a><!-- ENDIF --></small></div>
           <div class="col-md-6 text-right text-muted"><small>{HEADERCOUNTER}</small></div>
      </div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
            <li><a href="{SITEURL}index.php?"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
            <!-- IF B_CAN_SELL -->
	    <li><a href="{SITEURL}select_category.php?">{L_028}</a></li>
            <!-- ENDIF -->
            <!-- IF B_LOGGED_IN -->
            <li><a href="{SITEURL}user_menu.php?">{L_622}</a></li>
            <li><a href="{SSLURL}logout.php?">{L_245}</a></li>
             <!-- ELSE -->
            <li><a href="{SSLURL}registerlivebid.php?">{L_235}</a></li>
            <li><a href="{SSLURL}user_login.php?">{L_052}</a></li>
            <!-- ENDIF -->
            <!-- IF B_BOARDS -->
	    <li><a href="{SITEURL}boards.php">{L_5030}</a></li>
            <!-- ENDIF -->
            <li><a href="{SITEURL}help.php" alt="faqs" class="new-window">{L_148}</a></li>
            <li><a href="{SITEURL}adsearch.php">{L_464}</a></li>
        
      </ul>
      <form class="navbar-form navbar-right" role="search" action="{SITEURL}search.php" method="get">
        <div class="input-group">
          <input type="text" class="form-control" name="q" value="{Q}" placeholder="{L_861}">
              <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary" name="sub" value="{L_399}">{L_399}</button>
              </span>
        </div>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
