<!--
    MLP:FIM Episode-Browser
    Copyright (C) 2014 Gian Sass <gian.sass@nukesoftware.de>

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along
    with this program; if not, write to the Free Software Foundation, Inc.,
    51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
-->

<?php

// Set Defaults
$ep = 1;
$season = 1;

// Get S/E number from URL
$ep = $_GET['e'];
$season = $_GET['s'];

// Redirect to first episode, when url is invalid
if(!is_numeric($ep) || !is_numeric($season)) {
	header('Location: /?e=1&s=1');
}

// Convert to int
$ep = intval($ep);
$season = intval($season);

// Check valid season number
if($season < 1 || $season > 4) {
	header('Location: /?e=1&s=1');
}

// Set the max episodes per season
switch($season) {
case 1:
	$ep_max = 26;
break;

case 2:
	$ep_max = 26;
break;

case 3:
	$ep_max = 13;
break;

case 4:
	$ep_max = 12;
break;
}

// Check valid episode number
if($ep < 1 || $ep > $ep_max) {
	header('Location: /?e=1&s=1');
}

// Set episode names
switch($season) {
case 1:
	$ep_name_array = array(
		1 => "Mare in the Moon - Part 1",
		2 => "Mare in the Moon - Part 2",
		3 => "The Ticket Master",
		4 => "Applebuck Season",
		5 => "Griffon the Brush-Off",
		6 => "Boast Busters",
		7 => "Dragonshy",
		8 => "Look Before You Sleep",
		9 => "Bridle Gossip",
		10 => "Swarm of the Century",
		11 => "Winter Wrap Up",
		12 => "Call of the Cutie",
		13 => "Fall Weather Friends",
		14 => "Suited for Success",
		15 => "Feeling Pinkie Keen",
		16 => "Sonic Rainboom",
		17 => "Stare Master",
		18 => "The Show Stoppers",
		19 => "A Dog and Pony Show",
		20 => "Green Isn't Your Color",
		21 => "Over a Barrel",
		22 => "A Bird in the Hoof",
		23 => "The Cutie Mark Chronicles",
		24 => "Owl's Well That Ends Well",
		25 => "Party of One",
		26 => "The Best Night Ever",
	);
break;

case 2:
	$ep_name_array = array(
		1 => "The Return of Harmony - Part 1",
		2 => "The Return of Harmony - Part 2",
		3 => "Lesson Zero",
		4 => "Luna Eclipsed",
		5 => "Sisterhooves Social",
		6 => "The Cutie Pox",
		7 => "May the Best Pet Win!",
		8 => "The Mysterious Mare Do Well",
		9 => "Sweet and Elite",
		10 => "Secret of My Excess",
		11 => "Family Appreciation Day",
		12 => "Baby Cakes",
		13 => "Hearth's Warming Eve",
		14 => "The Last Roundup",
		15 => "The S. S. Cider Squeezy 6000",
		16 => "Read It and Weep",
		17 => "Hearts and Hooves Day",
		18 => "A Friend in Deed",
		19 => "Putting Your Hoof Down",
		20 => "It's About Time",
		21 => "Dragon Quest",
		22 => "Hurricane Fluttershy",
		23 => "Ponyville Confidential",
		24 => "MMMystery on the Friendship Express",
		25 => "Canterlot Wedding - Part 1",
		26 => "Canterlot Wedding - Part 2",
	);
break;

case 3:
	$ep_name_array = array(
		1 => "The Crystal Empire - Part 1",
		2 => "The Crystal Empire - Part 2",
		3 => "Too Many Pinkie Pies",
		4 => "One Bad Apple",
		5 => "Magic Duel",
		6 => "Sleepless in Ponyville",
		7 => "Wonderbolts Academy",
		8 => "Just for Sidekicks",
		9 => "Apple Family Reunion",
		10 => "Spike at Your Service",
		11 => "Keep Calm and Flutter On",
		12 => "Games Ponies Play",
		13 => "Magical Mystery Cure"
	);
break;

case 4:
	$ep_name_array = array(
		1 => "Princess Twilight Sparkle - Part 1",
		2 => "Princess Twilight Sparkle - Part 2",
		3 => "Castle Mane-ia",
		4 => "Daring Don't",
		5 => "Flight to the Finish",
		6 => "Power Ponies",
		7 => "Bats!",
		8 => "Rarity Takes Manehattan",
		9 => "Pinkie Apple Pie",
		10 => "Rainbow Falls",
		11 => "Tree's A Crowd",
		12 => "Pinkie Pride",
		13 => "",
		14 => "",
		15 => "",
		16 => "",
		17 => "",
		18 => "",
		19 => "",
		20 => "",
		21 => "",
		22 => "",
		23 => "",
		24 => "",
		25 => "",
		26 => "",
	);
break;
}

// Set episode urls
switch($season) {
case 1:
	$ep_vid_array = array(
		1 => "//www.youtube.com/embed/hfeppJnQFnk",
		2 => "//www.youtube.com/embed/IsEmE51qP0o",
		3 => "//www.youtube.com/embed/TewsM81TLUg",
		4 => "//www.youtube.com/embed/_MgecXll-ts",
		5 => "//www.youtube.com/embed/HIbYUFVleVg",
		6 => "//www.youtube.com/embed/jyDuc_R6too",
		7 => "//www.youtube.com/embed/DHqS3k1vrKc",
		8 => "//www.youtube.com/embed/3c_5Icgi44k",
		9 => "//www.youtube.com/embed/DJ9M9sn7YGI",
		10 => "//www.youtube.com/embed/2SwdNTomR_s",
		11 => "//www.youtube.com/embed/w8vfPllOJfA",
		12 => "//www.youtube.com/embed/vxCGhHY0qq8",
		13 => "//www.youtube.com/embed/rNWiy7ctWdk",
		14 => "//www.youtube.com/embed/XN0OwIUXgPc",
		15 => "//www.youtube.com/embed/EgnrSbLXJOo",
		16 => "//www.youtube.com/embed/yMSQMHHNUIY",
		17 => "//www.youtube.com/embed/UhK4y9ZeSks",
		18 => "//www.youtube.com/embed/jiDYTcxqy4k",
		19 => "//www.youtube.com/embed/JOFDjx2YnKU",
		20 => "",
		21 => "//www.youtube.com/embed/2wTi4BBgaBc",
		22 => "//www.youtube.com/embed/bwVUIs-Rn9M",
		23 => "//www.youtube.com/embed/0WrpBT_PXz4",
		24 => "//www.youtube.com/embed/ZEPQWbkfjzU",
		25 => "//www.youtube.com/embed/jrE5TQ5TYmo",
		26 => "//www.youtube.com/embed/Lz7t_-G_kVA",
	);
break;

case 2:
	$ep_vid_array = array(
		1 => "//www.youtube.com/embed/9uyaEnrhWPM",
		2 => "//www.youtube.com/embed/T0D7m0gAaFM",
		3 => "//www.youtube.com/embed/Y01YoZqHZ0A",
		4 => "//www.youtube.com/embed/CJdRp2n6bo0",
		5 => "//www.youtube.com/embed/N40C-wJsnIA",
		6 => "//www.youtube.com/embed/KLBwOxse_Hg",
		7 => "//www.youtube.com/embed/80fi17vjTM8",
		8 => "//www.youtube.com/embed/zEyUeLwPE2E",
		9 => "//www.youtube.com/embed/dppa0-IfQ8Y",
		10 => "//www.youtube.com/embed/W2eNIKtiOqg",
		11 => "//www.youtube.com/embed/g38fsq7sGh0",
		12 => "//www.youtube.com/embed/FRyFGvbZ8gI",
		13 => "//www.youtube.com/embed/1ElxyeQhsOY",
		14 => "//www.youtube.com/embed/UEivZvF-dvI",
		15 => "//www.youtube.com/embed/uyfTRM48lm8",
		16 => "//www.youtube.com/embed/OFhSwKOzzeY",
		17 => "//www.youtube.com/embed/Bx_-rt2vffA",
		18 => "//www.youtube.com/embed/SbXOHIvhr0o",
		19 => "//www.youtube.com/embed/FPct-a0g370",
		20 => "//www.youtube.com/embed/-uN7_7xPETE",
		21 => "//www.youtube.com/embed/l8P5sogXgz0",
		22 => "//www.youtube.com/embed/lUJXjMe6am0",
		23 => "//www.youtube.com/embed/zdjAUWSQIdU",
		24 => "//www.youtube.com/embed/wQJiGicc1Sk",
		25 => "//www.youtube.com/embed/Sln4DN4hWsM",
		26 => "//www.youtube.com/embed/oUAQal91Q3M",
	);
break;

case 3:
$ep_vid_array = array(
		1 => "//www.youtube.com/embed/G2dUprBOsqE",
		2 => "//www.youtube.com/embed/92W1Yh8AyI0",
		3 => "//www.youtube.com/embed/bgy2rVIdN1s",
		4 => "//www.youtube.com/embed/HEN6OoZkUyE",
		5 => "//www.youtube.com/embed/SlmAObQ4DkI",
		6 => "//www.youtube.com/embed/mQMoRJ32MHM",
		7 => "//www.youtube.com/embed/Vq4nmUrvypA",
		8 => "//www.youtube.com/embed/grcosJdtvnE",
		9 => "//www.youtube.com/embed/wM-GDIm7OUE",
		10 => "//www.youtube.com/embed/9id74n82Gzw",
		11 => "//www.youtube.com/embed/OV-NZJfq5zI",
		12 => "//www.youtube.com/embed/ZPeDgsA3U70",
		13 => "//www.youtube.com/embed/gg2etVctPMs"
);
break;

case 4:
$ep_vid_array = array(
		1 => "//www.youtube.com/embed/hfeppJnQFnk",
		2 => "//www.youtube.com/embed/81FkfhcvTA4",
		3 => "//www.youtube.com/embed/TewsM81TLUg",
		4 => "//www.youtube.com/embed/_MgecXll-ts",
		5 => "//www.youtube.com/embed/HIbYUFVleVg",
		6 => "//www.youtube.com/embed/jyDuc_R6too",
		7 => "//www.youtube.com/embed/DHqS3k1vrKc",
		8 => "//www.youtube.com/embed/3c_5Icgi44k",
		9 => "//www.youtube.com/embed/DJ9M9sn7YGI",
		10 => "//www.youtube.com/embed/2SwdNTomR_s",
		11 => "//www.youtube.com/embed/w8vfPllOJfA",
		12 => "//www.youtube.com/embed/War_9fB-S7o",
		13 => "",
		14 => "",
		15 => "",
		16 => "",
		17 => "",
		18 => "",
		19 => "",
		20 => "",
		21 => "",
		22 => "",
		23 => "",
		24 => "",
		25 => "",
		26 => "",
);
break;
}

$ep_name = $ep_name_array[$ep];
$ep_vid = $ep_vid_array[$ep];

// If there are more than 13 episode to display,
// we split the navigation into two parts
$nav_split = $ep_max > 13;

?>

<!DOCTYPE html>

<html>

<head>

<?
echo ("<title>MLP:FIM Season $season Episode $ep</title>");
?>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<div id="wrapper">

<div class="space"></div>

<div id="headertext">

<h1>Luna Theatre</h1>

</div>

<div class="space"></div>

<div id="box">

<div id="boxvideo">

<?
echo ("<strong><p>Season $season Episode $ep - $ep_name</p></strong>");
?>

<?
echo ("<iframe width='560' height='315' src=$ep_vid frameborder='0' allowfullscreen></iframe>"); 
?>

</div>
<div id="navigation">
<?
echo ("<h2>Season $season</h2>");
?>
<?
if($nav_split) {
?>
<div id="nav_l">
<?
}
?>
<ul>
<?
if($nav_split) {
	for ($i = 1; $i <= 13; $i++) {
		$tmp = $ep_name_array[$i];
		
		echo ("<li><a href='/?e=$i&s=$season'>$tmp</a></li>" . PHP_EOL);
	}
} else {
	for ($i = 1; $i <= $ep_max; $i++) {
		$tmp = $ep_name_array[$i];
		
		echo ("<li><a href='/?e=$i&s=$season'>$tmp</a></li>" . PHP_EOL);
	}
}
?>
</ul>
<?
if($nav_split) {
?>
</div>
<?
}
?>
<div id="nav_r">
<ul>
<?
if($nav_split) {
	for ($i = 14; $i <= $ep_max; $i++) {
		$tmp = $ep_name_array[$i];		
		echo ("<li><a href='/?e=$i&s=$season'>$tmp</a></li>" . PHP_EOL);
	}
}
?>
</ul>
</div>

<div id="season_nav_head">

<h2>Seasons</h2>

</div>

<div id="season_nav">

<ul>
<li><a href="/?e=1&s=1">1</a></li>
<li><a href="/?e=1&s=2">2</a></li>
<li><a href="/?e=1&s=3">3</a></li>
<li><a href="/?e=1&s=4">4</a></li>
</ul>

</div>

</div>

<div id="footer">

<div id="footer_content">
<p>Suggest better- or report missing links by <a href="mailto:gian.sass@nukesoftware.de">mailing me.</a></p>
<hr>
<p>Copyright &copy; 2013 <a href="http://nukesoftware.de">NukeSoftware.</a></p>
<p>My Little Pony: Friendship Is Magic &copy; Hasbro.</p>
</div>

</div>

</div>

</div>

<div class="space"></div>

</body>

</html>