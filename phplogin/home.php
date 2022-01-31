<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<style>
		body {
		  font-family: Arial, Helvetica, sans-serif;
		}

		.navbar {
		  overflow: hidden;
		  background-color: #333;
		}

		.navbar a {
		  float: left;
		  font-size: 25px;
		  color: white;
		  text-align: center;
		  padding: 20px 35px;
		  text-decoration: none;
			border-right:2px solid #bbb;

		}

		.dropdown {
		  float: left;
		  overflow: hidden;
		}

		.dropdown .dropbtn {
		  font-size: 25px;
		  border: none;
		  outline: none;
		  color: white;
		  padding: 20px 35px;
		  background-color: inherit;
		  font-family: inherit;
		  margin: 0;
		}

		.navbar a:hover, .dropdown:hover .dropbtn {
		  background-color: purple;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f9f9f9;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dropdown-content a {
		  float: none;
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  text-align: left;
		}

		.dropdown-content a:hover {
		  background-color: #ddd;
		}

		.dropdown:hover .dropdown-content {
		  display: block;
		}
		</style>
		<meta charset="utf-8">
		<title>Insurance Managemant System</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav>
			<ul>
			<div class="navbar">
		<li>
		  <a href="#home">Home</a>
		</li>
		<li>
		  <a href="#news">News</a>
		</li>
		<li>
		  <div class="dropdown">
		    <button class="dropbtn">Agent
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdown-content">
					<a href="agent/agent.php">Agent Registration</a>
				  <a href="agent/modified1.php">Agent Data</a>
		    </div>
		  </div>
		</li>
		<li>
			<div class="dropdown">
		    <button class="dropbtn">Client
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdown-content">
					<a href="client/client.php">Client Registration</a>
					<a href="client/modified1.php">Client Data</a>
		    </div>
		  </div>
		</li>
		<li>
			<div class="dropdown">
				<button class="dropbtn">Policy
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="policy/policy.php">Policy Registration</a>
					<a href="policy/modified1.php">Policy Data</a>
				</div>
			</div>
		</li>
		<li>
			<div class="dropdown">
				<button class="dropbtn">Premium
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="premium/premium.php">Premium Registration</a>
					<a href="premium/modified1.php">Premium Data</a>
				</div>
			</div>
		</li>
		</ul>

		</nav>
		<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
		<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
		<div class="content">
			<h2>Insurance Managemant System</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>
