<?php

	require_once("../../includes-nct/config-nct.php");
	require_once("class.home-nct.php");

	$module  = 'home-nct';
	$objHome = new Home();
	$winTitle  = "RoomRaccoon Technical Assessment | Shopping Cart Example";
	$home      = true;

	require_once(DIR_THEME."default-nct.nct");
