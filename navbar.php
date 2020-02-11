<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    	<a class="navbar-brand" href="index.php">DynamicNavbar</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php if($url!='index.php'){ echo ""; }else{ echo "active"; } ?>"><a href="index.php"> HOME </a></li>
		  <li class="<?php if($url!='page1.php'){ echo ""; }else{ echo "active"; } ?>"><a href="page1.php"> PAGE 1 </a></li>
		  <li class="<?php if($url!='page2.php'){ echo ""; }else{ echo "active"; } ?>"><a href="page2.php"> PAGE 2 </a></li>
    </ul>
  </div>
</nav>