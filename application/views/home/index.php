<?php
  require CURR_VIEW_PATH . "top.php";
  require CURR_VIEW_PATH . "menu.php";
?>
 <!-- !PAGE CONTENT! -->
 <div class="w3-main" style="margin-left:300px;margin-top:43px;">

      <!-- Header -->
      <header class="w3-container" style="padding-top:22px">
	<h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
      </header>

      <div class="w3-row-padding w3-margin-bottom">
	<div class="w3-quarter">
	  <div class="w3-container w3-red w3-padding-16">
            <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>52</h3>
            </div>
            <div class="w3-clear"></div>
            <h4>Messages</h4>
	  </div>
	</div>

	<div class="w3-quarter">
	  <div class="w3-container w3-blue w3-padding-16">
            <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>99</h3>
            </div>
            <div class="w3-clear"></div>
            <h4>Views</h4>
	  </div>
	</div>
	<div class="w3-quarter">
	  <div class="w3-container w3-teal w3-padding-16">
            <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>23</h3>
            </div>
            <div class="w3-clear"></div>
            <h4>Shares</h4>
	  </div>
	</div>
      
	<div class="w3-quarter">
	  <div class="w3-container w3-orange w3-text-white w3-padding-16">
            <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>50</h3>
            </div>
            <div class="w3-clear"></div>
            <h4>Users</h4>
	  </div>
	</div>
      </div>

      <div class="w3-panel">
	<div class="w3-row-padding" style="margin:0 -16px">
	  <div class="w3-third">
            <h5>Regions</h5>
	    <table class="w3-table w3-striped w3-white">
	      <tr>
		<th>Region</th>
		<th>Transactions</th>
	      </tr>
	      <tr>
		<td>Africa</td>
		<td>364 450</td>
	      </tr>
	      <tr>
		<td>Asia</td>
		<td>64 450</td>
	      </tr>
	      <tr>
		<td>Mena</td>
		<td>43 503</td>
	      </tr>
	    </table>
	  </div>
	  <div class="w3-twothird">
            <h5>Feeds</h5>
            <table class="w3-table w3-striped w3-white">
              <tr>
		<td><i class="fa fa-user w3-text-blue w3-large"></i></td>
		<td>New record, over 90 views.</td>
		<td><i>10 mins</i></td>
              </tr>
              <tr>
		<td><i class="fa fa-bell w3-text-red w3-large"></i></td>
		<td>Database error.</td>
		<td><i>15 mins</i></td>
              </tr>
              <tr>
		<td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
		<td>New record, over 40 users.</td>
		<td><i>17 mins</i></td>
              </tr>
              <tr>
		<td><i class="fa fa-comment w3-text-red w3-large"></i></td>
		<td>New comments.</td>
		<td><i>25 mins</i></td>
              </tr>
              <tr>
		<td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
		<td>Check transactions.</td>
		<td><i>28 mins</i></td>
              </tr>
              <tr>
		<td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
		<td>CPU overload.</td>
		<td><i>35 mins</i></td>
              </tr>
              <tr>
		<td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
		<td>New shares.</td>
		<td><i>39 mins</i></td>
              </tr>
            </table>
	  </div>
	</div>
      </div>
      <hr>

      

      <!-- Footer -->
      <footer class="w3-container w3-padding-16 w3-light-grey">
	<h4>FOOTER</h4>
	<p>Powered by
	  <a href="https://www.w3schools.com/w3css/default.asp"
	     target="_blank">w3.css</a></p>
      </footer>
      
      <!-- End page content -->
    </div>
    
    <script>
      // Get the Sidebar
      var mySidebar = document.getElementById("mySidebar");

      // Get the DIV with overlay effect
      var overlayBg = document.getElementById("myOverlay");

      // Toggle between showing and hiding the sidebar, and add
      overlay effect
      function w3_open() {
      if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
      overlayBg.style.display = "none";
      } else {
      mySidebar.style.display = 'block';
      overlayBg.style.display = "block";
      }
      }
      
      // Close the sidebar with the close button
      function w3_close() {
      mySidebar.style.display = "none";
      overlayBg.style.display = "none";
      }
    </script>
  </body>
</html>
