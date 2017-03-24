<!--<table>
  <tr>
    <td>Hi <?php echo $_SESSION["user"]; ?> | </td>
	<td><a href="home.php">Home Page</a> | </td> 
	<td><a href="admin.php">Admin Page</a> | </td> 
    <td><a href="lukebook.php">LukeBook</a> | </td>
	<td><a href="logout.php">Logout</a></td>
  </tr>
</table>-->
<script src="script.js"></script>
<ul class="w3-navbar w3-lightgrey">
  <li><a class="w3-padding-16" onclick="goto('home.php')" class="h">Home</a></li>
  <li><a class="w3-padding-16" onclick="goto('lukebook.php')" class="h">LukeBook</a></li>
  <li><a class="w3-padding-16" onclick="goto('cal.php')" class="h">Calculator</a></li>
  <li style="float:right"><a class="active w3-padding-16" onclick="goto('logout.php')">Logout (<?php echo $_SESSION["user"]; ?>)</a></li>
</ul>

