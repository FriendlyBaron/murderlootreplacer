<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="shortcut icon" href="/favicon.ico">
<title>Murder Loot Re-placer</title>
<style type ="text/css">
	body {
		background-color: white;
		background-repeat:no-repeat;
		background-size:100% 100%;
	}
	p {text-align:center;}
	h1 {text-align:center;}
	h3 {text-align:center;}
</style>
</head>
  <body>
	<?php
	if(isset($_GET['codes']))
	{
		echo '<div class="container">';
		echo '<div class="well">';
		
		$array = array("models/props_lab/desklamp01.mdl",
			"models/props_junk/glassbottle01a.mdl",
			"models/items/car_battery01.mdl",
			"models/props_lab/huladoll.mdl",
			"models/props_c17/suitcase001a.mdl",
			"models/props_c17/doll01.mdl",
			"models/props_c17/suitcase_passenger_physics.mdl",
			"models/props/cs_militia/toothbrushset01.mdl",
			"models/props_lab/cactus.mdl",
			"models/props_c17/consolebox01a.mdl",
			"models/props_c17/cashregister01a.mdl",
			"models/props_junk/sawblade001a.mdl",
			"models/props_combine/breenclock.mdl",
			"models/props_c17/BriefCase001a.mdl",
			"models/props/cs_militia/circularsaw01.mdl",
			"models/props/cs_militia/axe.mdl",
			"models/Gibs/HGIBS.mdl",
			"models/props_c17/tools_wrench01a.mdl",
			"models/props_junk/glassjug01.mdl",
			"models/props_combine/breenbust.mdl",
			"models/Gibs/Antlion_gib_Large_2.mdl",
			"models/props_lab/clipboard.mdl",
			"models/props/de_tides/vending_turtle.mdl");
		
		$code = $_GET['codes'];
		$length = count($array);
		$changed = 0;
		
		$code = str_replace("models/props_lab/clipboard.mdl", "placeholder", $code);
		$newCode = preg_replace('/placeholder/', $array[rand(0, $length-1)], $code, 1, $count);
		$changed = $count;
		
		while($changed > 0)
		{
			$newCode = preg_replace('/placeholder/', $array[rand(0, $length-1)], $newCode, 1, $count);
			$changed = $count;
		}
		
		echo $newCode;
		echo '</div>';
		echo '</div>';
	}	
	?>
	<div class="container">
	<div class="well">
	<form action="lootreplace.php" method="get">
        Enter Loot.txt line: <input type="text" name="codes">
        <input type="submit">
	</form>
	<hr />
	<p>This page will convert a loot.txt for Garry's Mod Murder to be full of random loot. If you need help, read the steps below and then see contact info on <a href="index.php">my main page.</a> Worried about how it works? - Source on Github <a href="https://github.com/itsatacoshop247/murderlootreplacer">here</a>.</p>
	<br />
	<p><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Gmodlogo.svg/220px-Gmodlogo.svg.png" width="150px"><img src="img/murder.jpg" width="150px"</p>
	<br />
	<p>1. Open a server or single player in Garrys Mod Murder, running the map that you want to add loot onto.</p>
	<p>2. Run the command <b>bind "l" "mu_loot_add clipboard"</b> in Gmod Console (You can use a key other than L, that just what I preferred.) By pressing the key, the location you are looking at will become a loot spot.</p>
	<p>3. Use your binded key to create a bunch of loot locations around the map of choice.</p>
	<p>4. Find your loot.txt, it'll be under your Data/murder/[mapname]/ in your Garrys Mod install folder. Default may be: ProgramFiles(x86)/Steam/steamapps/common/garrysmod/garrysmod/data/murder/</p>
	<p>5. Enter the entire loot.txt line into this webpage and submit</p>
	<p>6. Copy and paste the text that appears back into loot.txt (overwriting the old text). It will have the same locations, but a randomized loot model instead of all Clipboards.</p>
	<p>7. Move the loot.txt to the server to garrysmod/gamemodes/murder/content/data/murder. You may need to create the folders for the first one.</p>
	<p>8. Feeling nice? Upload the text to <a href="http://pastie.org/">Pastie.org</a> and post it, along with which map it is for, somewhere for others to use - preferably <a href="http://steamcommunity.com/workshop/filedetails/discussion/187073946/558746017867068651/">this discussion</a> on the Steam Forums for Murder. <a href="gmod/">A few of my own examples can be found here</a>.</p>
	<p>9. If you want to add custom spawns into a map, do the same binding to a key as in step 2, but instead bind the command <b>mu_spawn_add spawns</b>, which will add a spawn to the [mapname]/spawns/spawns.txt file. No further editing needs to be done to this file.</p>
</body>
