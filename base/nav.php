<div class="nav-container">
	<nav>
		<ul>
			<li><a href="?page=home"><img src="img/chemclave-logo.png" alt="chemclave-logo"></a></li>
			<li <?php if($_GET['page']=='home'){ echo 'class="active"'; } ?>><a href="?page=home">Home</a></li>
			<li <?php if($_GET['page']=='events'){ echo 'class="active"'; } ?>><a href="?page=events&amp;category=spotlight">Events</a></li>
			<li <?php if($_GET['page']=='timeline'){ echo 'class="active"'; } ?>><a href="?page=timeline">Timeline</a></li>
			<li <?php if($_GET['page']=='people'){ echo 'class="active"'; } ?>><a href="?page=people">People</a></li>
			<li <?php if($_GET['page']=='spons'){ echo 'class="active"'; } ?>><a href="?page=spons">Sponsors</a></li>
			<li <?php if($_GET['page']=='contact'){ echo 'class="active"'; } ?>><a href="?page=contact">Reach Us</a></li>
			<li <?php if($_GET['page']=='register'){ echo 'class="active"'; } ?>><a href="?page=register">Register</a></li>
			<li><a href="https://plus.google.com/107084146838658784427" class="fa fa-google-plus"></a></li>
			<li><a href="http://www.facebook.com/chemclave" class="fa fa-facebook"></a></li>
			<li><a href="http://www.twitter.com/chemclave" class="fa fa-twitter"></a></li>
		</ul>
	</nav>
	<i class="fa fa-bullhorn ticker-icon"></i>
	<ul id="webticker">
		<li>The chemclave is going to start on March14-15.</li>
	</ul>
</div>