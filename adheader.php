<script src="script.js"></script>
<ul class="w3-navbar w3-light-grey">
  <li><a class="w3-padding-16" onclick="goto('home.php')" class="h">Home</a></li>
  <li><a class="w3-padding-16" onclick="goto('admin.php')" class="h">Admin Page</a></li>
  <li><a class="w3-padding-16" onclick="goto('lukebook.php')" class="h">LukeBook</a></li>
  <li><a class="w3-padding-16" onclick="goto('cal.php')" class="h">Calculator</a></li>
  <li style="float:right"><a class="active w3-padding-16" onclick="goto('logout.php')">Logout (<?php echo $_SESSION["user"]; ?>)</a></li>
</ul>