<div class="events-container">
	<div class="event-categories">
		<nav class="cl-effect-10" id="cl-effect-10">
			<a href="?page=events&amp;category=spotlight" data-hover="spotlight" <?php if($_GET['category']=='spotlight'){ echo 'class="active"'; } ?>><span>spotlight</span></a>
			<a href="?page=events&amp;category=empower" data-hover="empower" <?php if($_GET['category']=='empower'){ echo 'class="active"'; } ?>><span>empower</span></a>
			<a href="?page=events&amp;category=unwind" data-hover="unwind" <?php if($_GET['category']=='unwind'){ echo 'class="active"'; } ?>><span>unwind</span></a>
			<a href="?page=events&amp;category=workshops" data-hover="workshops" <?php if($_GET['category']=='workshops'){ echo 'class="active"'; } ?>><span>workshops</span></a>
		</nav>
	</div>
	<!--<div class="event-name"></div>-->
	<div class="image-slider">
		<div class="events coverflow">
			<?php
				if($_GET['page']=='events'){					
					switch($_GET['category']){
						case 'empower':
							include('events/empower.php');
							break;
						case 'unwind':
							include('events/unwind.php');
							break;
						case 'workshops':
							include('events/workshops.php');
							break;
						default:
							include('events/spotlight.php');
					}
				}
			 ?>
		</div>
	</div>
</div>