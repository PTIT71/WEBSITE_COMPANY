<?php
if(isset($_GET["asset-management-system"]))
{
	require_once('ams.php');
	return;

}

if(isset($_GET["production-management-tracking"]))
{
	require_once('pmt.php');
	return;

}

if(isset($_GET["production"]))
{
	require_once('production.php');
	return;

}
if(isset($_GET["introduction"]))
{
	require_once('introduction.php');
	return;

}
if(isset($_GET["vision"]))
{
	require_once('vision.php');
	return;

}
if(isset($_GET["contact"]))
{
	require_once('contact.php');
	return;

}

if(isset($_GET["home"]))
{
	require_once('home.php');
	return;

}

require_once('home.php');
?>