<?
	require_once "config.php";
	require_once "process_date.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script language="Javascript" type="text/javascript" src="js/jquery-1.4.1.js"></script>
	<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
	<script language="Javascript" type="text/javascript" src="js/misc.js"></script>
	<link rel="Stylesheet" type="text/css" href="style/main.css"></link>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

              <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>

	<title>BACK MY LOVE S2 !!!!!</title>
</head>

<body>
	<div id="container">

		<h1>BACK SOON, PLEASE ....</h1>
		<h2 class="subtitle">My love Camila Maria....</h2>

		<!-- Countdown dashboard start -->
		<div id="countdown_dashboard">
			<div class="dash weeks_dash">
				<span class="dash_title">Weeks</span>
				<div class="digit"><?=$date['weeks'][0]?></div>
				<div class="digit"><?=$date['weeks'][1]?></div>
			</div>

			<div class="dash days_dash">
				<span class="dash_title">Days</span>
				<div class="digit"><?=$date['days'][0]?></div>
				<div class="digit"><?=$date['days'][1]?></div>
			</div>

			<div class="dash hours_dash">
				<span class="dash_title">Hours</span>
				<div class="digit"><?=$date['hours'][0]?></div>
				<div class="digit"><?=$date['hours'][1]?></div>
			</div>

			<div class="dash minutes_dash">
				<span class="dash_title">Minutes</span>
				<div class="digit"><?=$date['mins'][0]?></div>
				<div class="digit"><?=$date['mins'][1]?></div>
			</div>

			<div class="dash seconds_dash">
				<span class="dash_title">Seconds</span>
				<div class="digit"><?=$date['secs'][0]?></div>
				<div class="digit"><?=$date['secs'][1]?></div>
			</div>

		</div>
		<!-- Countdown dashboard end -->

		<div class="dev_comment">
			I await you with a love and miss you, love you my sweetheart!!!
		</div>

		<div class="subscribe">



		</div>

		<script language="javascript" type="text/javascript">
			jQuery(document).ready(function() {
				$('#countdown_dashboard').countDown({
					targetDate: {
						'day': 	<?=$config['targetDate']['day']?>,
						'month':<?=$config['targetDate']['month']?>,
						'year': 	<?=$config['targetDate']['year']?>,
						'hour': 	<?=$config['targetDate']['hour']?>,
						'min': 	<?=$config['targetDate']['minute']?>,
						'sec': 	<?=$config['targetDate']['second']?>
					}
				});

			});
		</script>

	</div>
</body>

</html>
