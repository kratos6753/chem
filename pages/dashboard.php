<?php
	if(!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']){
		header("Location: ?page=register");
	}

	if(isset($_POST['event'])){
		$event = $_POST['event'];
		$email = $_SESSION['email'];
		$query = "UPDATE users SET {$event}=0 WHERE email='{$email}'";
		$result = mysql_query($query);
		header("Location: ?page=dashboard");
	}
?>
<div class="dashboard-container">
	<?php
		echo "<a href=\"api/logout.php\">Logout</a>";
		$email = $_SESSION['email'];
		$query = "SELECT * FROM users WHERE email='{$email}'";
		$result = mysql_query($query) or die('Query Failed '.mysql_error());
		$row = mysql_fetch_array($result);
	?>
	<div class="row">
		<div class="col-md-6">
			<h3>Profile:</h3>
		<?php
			$id = $row['id'];
			if($id<10){$id='00'.(string)$id;}elseif($id<100){$id='0'.(string)$id;}
			echo "Chemclave ID&nbsp;&nbsp;: CH15A".$id.'<br>';
			echo "Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ".ucwords($row['name']).'<br>';
			echo "Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        : ".$row['email'].'<br>';
			echo "college&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       : ".$row['college'].'<br>';
			echo "city&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          : ".ucwords($row['city']).'<br>';
			echo "mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        : ".$row['phone_number'].'<br>';
			$accomodation = $row['accomodation'] ? 'yes' : 'no';
			echo "Accomodation : ".$accomodation.'<br>';
		?>
		</div>
		<div class="col-md-6">	
			<h3>The Registered Events are:</h3>
			<?php
				$query = "SELECT censeo, ensino, paper_presentation, poster_presentation, chem_innovate, cheq, project_x, puzzle_champ, chem_e_trix, open_quiz, fluent_workshop, comsol_workshop FROM users WHERE email='{$email}'";
				$result = mysql_query($query) or die('Query Failed '.mysql_error());
				$row = mysql_fetch_array($result);
				$registered = 0;
				echo "<table border='0' class='event-display'>";
				foreach($row as $a => $b){
					if(is_int($a)){
						unset($row[$a]);
					}elseif($b){
						$registered += 1;
						$formated_a = ucwords(str_replace('_', ' ', $a));
						echo "<tr><td>{$formated_a}</td><td><form method='post'><button type='submit' name='event' value='{$a}'>Unregister</button></form></td></tr>";
					}
				}
				if(!$registered){
					echo "<tr><td class='not-registered'>You haven't registered for any event.Go to <a href='?page=events&category=spotlight'>Events Page</a>.</td></tr>";
				}
				echo "</table>";
			?>
		</div>
	</div>
</div>