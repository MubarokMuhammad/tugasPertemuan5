<?php
	$link=mysql_connect('localhost','root','') or die('Could not connect: '.mysql_error());
	mysql_select_db('mahasiswa') or die('Could not select database');