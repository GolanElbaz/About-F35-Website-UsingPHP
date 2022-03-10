<?php include 'header.php';?>

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
html {
	background-color: rgb(76, 119, 153);
}

.h {
	color: white;
}

.h1 {
	color: white;	
}

.responsive {
	width: 100%;
	height: auto;
}

form {
	background-color: rgb(145, 149, 152);
}

div.bodyimg {
	background-image: url("f35_2.jpg");
	background-repeat: no-repeat;
	height: auto;
	max-width:100%;
	margin-left: 230px;
}

.container {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;

</style>
</head>


<html>
<body>




<div class="responsive">



	<img src="f355.jpg" style="float: right; height: 500px; max-width:100%;">

	<h2 class="h">The Lockheed Martin F-35 Lightning II is an American
		family of single-seat, single-engine, all-weather stealth multirole
		combat aircraft that is intended to perform both air superiority and
		strike missions. It is also able to provide electronic warfare and
		intelligence, surveillance, and reconnaissance capabilities. Lockheed
		Martin is the prime F-35 contractor, with principal partners Northrop
		Grumman and BAE Systems. The aircraft has three main variants: the
		conventional takeoff and landing (CTOL) F-35A, the short take-off and
		vertical-landing (STOVL) F-35B, and the carrier-based (CV/CATOBAR)
		F-35C.</h2>





	<h2 class="h">The aircraft descends from the Lockheed Martin X-35,
		which in 2001 beat the Boeing X-32 to win the Joint Strike Fighter
		(JSF) program. Its development is principally funded by the United
		States, with additional funding from program partner countries from
		NATO and close U.S. allies, including the United Kingdom, Australia,
		Canada, Italy, Norway, Denmark, the Netherlands, and formerly Turkey.
		Several other countries have ordered, or are considering ordering, the
		aircraft. The program has drawn much scrutiny and criticism for its
		unprecedented size, complexity, ballooning costs, and much-delayed
		deliveries, with numerous technical flaws still being corrected.[N 1]
		The acquisition strategy of concurrent production of the aircraft
		while it was still in development and testing led to expensive design
		changes and retrofits. The F-35B entered service with the U.S. Marine
		Corps in July 2015, followed by the U.S. Air Force F-35A in August
		2016 and the U.S. Navy F-35C in February 2019. The F-35 was first used
		in combat in 2018 by the Israeli Air Force. The U.S. plans to buy
		2,456 F-35s through 2044, which will represent the bulk of the crewed
		tactical airpower of the U.S. Air Force, Navy, and Marine Corps for
		several decades. The aircraft is projected to operate until 2070.</h2>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	


	<img src="f35_6.jpg" style="float: left; height: 500px; max-width:100%;">

		<h2 style="font-size: 22px" class="h1" >Design and production An F-35
			wind tunnel testing model in 16-foot (5 m) transonic wind tunnel at
			the Arnold Engineering Development Center As the JSF program moved
			into the System Development and Demonstration phase, the X-35
			demonstrator design was modified to create the F-35 combat aircraft.
			The forward fuselage was lengthened by 5 inches (13 cm) to make room
			for mission avionics, while the horizontal stabilizers were moved 2
			inches (5.1 cm) aft to retain balance and control. The diverterless
			supersonic inlet changed from a four-sided to a three-sided cowl
			shape and was moved 30 inches (76 cm) aft. The fuselage section was
			fuller, the top surface raised by 1 inch (2.5 cm) along the
			centerline to accommodate weapons bays. Following the designation of
			the X-35 prototypes, the three variants were designated F-35A (CTOL),
			F-35B (STOVL), and F-35C (CV).Prime contractor Lockheed Martin
			performs overall systems integration and final assembly and checkout
			(FACO), while Northrop Grumman and BAE Systems supply components for
			mission systems and airframe. Adding the systems of a fighter
			aircraft added weight. The F-35B gained the most, largely due to a
			2003 decision to enlarge the weapons bays for commonality between
			variants; the total weight growth was reportedly up to 2,200 pounds
			(1,000 kg), over 8%, causing all STOVL key performance parameter
			(KPP) thresholds to be missed. In December 2003, the STOVL Weight
			Attack Team (SWAT) was formed to reduce the weight increase; changes
			included more engine thrust, thinned airframe members, smaller
			weapons bays and vertical stabilizers, less thrust fed to the
			roll-post outlets, and redesigning the wing-mate joint, electrical
			elements, and the airframe immediately aft of the cockpit. Many
			changes from the SWAT effort were applied to all three variants for
			commonality. By September 2004, these efforts had reduced the F-35B's
			weight by over 3,000 pounds (1,400 kg), while the F-35A and F-35C
			were reduced in weight by 2,400 pounds (1,100 kg) and 1,900 pounds
			(860 kg) respectively. The weight reduction work cost $6.2 billion
			and caused an 18-month delay.</h3>
		<br>
		<br>
		<br>
		
		
		
	

	<h1>Videos Of Lockheed Martin F-35 Lightning II</h1>
<div class="container"> 	
	<iframe  
		src="https://www.youtube.com/embed/zW28Mb1YvwY"
		title="YouTube video player" frameborder="0"
		allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
		allowfullscreen class="responsive-iframe" ></iframe>
</div>
<br><br>
<div class="container"> 
	
	<iframe  
		src="https://www.youtube.com/embed/oGAepadiPBY"
		title="YouTube video player" frameborder="0"
		allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
		allowfullscreen " class="responsive-iframe" ></iframe>
	</div>
	<br>
	
	<h2 style="text-decoration:underline; color:white">I Hope That You Enjoyed From My Website Thank You</h2>
	
	<?php
// Set session variables
$_SESSION["favcolor"] = "grey";
$_SESSION["favJetFighter"] = "F35";
echo "Php Session variables are set :) ";
?>
	<div>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			select image to upload; <input type="file" name="fileToUpload"
				id="fileToUpload"> <input type="submit" value="Upload Image"
				name="submit">
		</form>
	</div>


	
	
	


<?php include 'footer.php';?>
</div>
</body>

</html>
