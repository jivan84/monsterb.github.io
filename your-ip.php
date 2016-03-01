<!DOCTYPE html>
<html>
<!-- 
	Maintainer: monsterb
	Contact: unix.s3c (at) gmail (dot) com
	URL: https://www.monsterb.org -->
<head>
  	<link href="monsterborg.css" media="screen" rel="stylesheet" type="text/css" />
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="favicon.png" />
   <title>monsterb.org | daemons, gnus, and penguins. Oh my! | What's your IP?</title>
  </head>
   <body>
    <div id="container">
      <div id="header"> <img src="monsterb-logo.png" alt="monsterb.org logo" />
      </div>
       <div id="topbar">
	     <a href="index.html">Home</a>
	     <a href="about.html">About</a>
	     <a href="contact.html">Contact</a>
	     <a href="/notes/index.html">Textfiles</a>
	     <a href="your-ip.php">What's your IP?</a>
	     </div>
	      <div id="main">
          <h3>What's your IP?</h3>
          <br />
          <?php echo "Your IP Address: ";
		echo $_SERVER['REMOTE_ADDR'];
		echo "<br /><br />Reported User Agent is: " ;
		echo $_SERVER["HTTP_USER_AGENT"];
	  ?>
        <br />	  

	     </div>
	       <div id="favorites">
	       <h3>Favorites:</h3>
				<ul>
					<li><a href="http://www.2600.com/" class="tooltip">2600<span>Hacker Magazine, News, and Radio</span></a></li>
					<li><a href="http://www.bsdmag.org/" class="tooltip">BSD Magazine<span>BSD Magazine is a project devoted to BSD and open source solutions, targeting both beginners and experienced users. It is a free, online monthly publication available as a download from our website. </span></a></li>
					<li><a href="http://www.codeuniversity.com/" class="tooltip">Code University<span>Blog, Cheatsheets, Tutorials</span></a></li>
					<li><a href="http://www.debuntu.org/" class="tooltip">Debuntu.org<span>Debian/Ubuntu .deb packages, Unix/Linux Tutorials, Tips and Tricks.</span></a></li>
					<li><a href="http://distrowatch.com/" class="tooltip">DistroWatch<span>Put the fun back into computing. Use Linux, BSD.</span></a></li>
					<li><a href="http://www.eff.org/" class="tooltip">EFF<span>The Electronic Frontier Foundation is the leading civil liberties group defending your rights in the digital world.</span></a></li>
					<li><a href="http://www.fsf.org" class="tooltip">FSF<span>The Free Software Foundation is a nonprofit with a worldwide mission to promote computer user freedom and to defend the rights of all free software users.</span></a></li>
					<li><a href="http://www.gnu.org" class="tooltip">GNU OS<span>The GNU Project was launched in 1984 to develop a complete Unix-like operating system which is free software: the GNU operating system.</span></a></li>
					<li><a href="http://gnuworldorder.info/" class="tooltip">GNU World Order<span>GNU World Order is an internet audio show about GNU, Linux, UNIX, and other technical and geeky topics.</span></a></li>
					<li><a href="http://hackerpublicradio.org" class="tooltip">Hacker Public Radio<span>By the community, for the community.</span></a></li>
					<li><a href="http://kernel.org/" class="tooltip">kernel.org<span>The primary site for the Linux kernel source.</span></a></li>
					<li><a href="http://kernelpanicoggcast.net/" class="tooltip">Kernelpanic Oggcast<span>They discuss all the latest linux news, linux gadgets and whatever else pops up. Basket Weaving, fishing, woodworking, recipes, you name it.</span></a></li>
					<li><a href="https://letsencrypt.org/" class="tooltip">Let's Encrypt<span>Let’s Encrypt is a new Certificate Authority: It’s free, automated, and open.</span></a></li>					
					<li><a href="http://lhspodcast.info/" class="tooltip">Linux in the Ham Shack<span>A podcast designed to help amateur radio enthusiasts to migrate to Linux and Open Source from Microsoft or other closed-source software.</span></a></li>
					<li><a href="http://www.linuxconfig.org/" class="tooltip">Linuxconfig.org<span>Blog, Commands, News, and Tutorials</span></a></li>
					<li><a href="http://www.nuxified.org/" class="tooltip">Nuxified<span>If you use or have a particular interest in FOSS you might find Nuxified.org to be a valuable resource.</span></a></li>
					<li><a href="https://oggcastplanet.org" class="tooltip">Oggcast Planet<span>Here you will find links and information on high quality shows that are 100% Oggcasts.</span></a></li>
                                        <li><a href="https://www.eff.org/privacybadger" class="tooltip">Privacy Badger<span>Privacy Badger blocks spying ads and invisible trackers.</span></a></li>	
					<li><a href="https://www.reddit.com/r/linux" class="tooltip">reddit/linux<span>Online community where users vote on content.</span></a></li>
					<li><a href="http://slackermedia.info" class="tooltip">Slackermedia<span>Slackermedia is documentation providing the information a user needs to create a full multimedia studio running on Slackware Linux.</span></a></li>
					<li><a href="http://bsd.slashdot.org/" class="tooltip">Slashdot BSD<span>Don't fear the deamons!</span></a></li>
					<li><a href="http://linux.slashdot.org/" class="tooltip">Slashdot Linux<span>Don't fear the penguins!</span></a></li>
					<li><a href="http://linux.softpedia.com/" class="tooltip">Softpedia Linux<span>Linux Software and Reviews</span></a></li>
					<li><a href="http://stallman.org" class="tooltip">Stallman, Richard<span>This is the personal web site of Richard M. Stallman. a.k.a. RMS</span></a></li>
					<li><a href="http://www.tllts.org/" class="tooltip">TLLTS<span>Weekly live webcasted radio style show about GNU/Linux and Technology. </span></a></li>
					<li><a href="http://www.tuxmachines.org/" class="tooltip">tuxmachines.org<span>Do you waddle the waddle?</span></a></li>
				</ul>

		  </div>
	       
	       
	         <div id="footer"> 
	           <p>Copyleft &copy; 2006-2016 monsterb.org | daemons, gnus, and penguins. Oh my! | CSS3 &#10003; HTML5 &#10003;</p>   
	         </div>
	  </div>
  </body>
</html>
