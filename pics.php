<?php
if (isset($_REQUEST["picStart"]))
{
	$picStart = $_REQUEST["picStart"];
}

if (isset($_REQUEST["picEnd"]))
{
	$picEnd = $_REQUEST["picEnd"];
}

$TheInfo = array();
$htmlCode = "<html>";
$htmlCode .= "<body>";
$htmlCode .= "<table>";
$htmlCode .= "<tr>";
$htmlCode .= "<td class=\"aligncenter\" colspan=\"3\">Click on the pictures below to see a larger version.</td>".Chr(13);
for ($i=$picStart;$i<$picEnd;$i++){
	$TheInfo = PicInfo($i);
	$htmlCode .= "</tr><tr>".Chr(13);
	$htmlCode .= "<td class=\"centervertical\"><input type=\"image\" src=\"/inventions/images/".$TheInfo[0]."\" alt=\"".$TheInfo[1]."\" ";
	$htmlCode .= "class=\"productImages\" onclick=\"updateImageDisplay('/inventions/images/".$TheInfo[0]."')\"/></td>".Chr(13);
		$htmlCode .= "<td class=\"alignleft\">".$TheInfo[2]."</td>".Chr(13);
	if ((count($TheInfo) > 3) && ($TheInfo[3] != ""))
	{
		$htmlCode .= "<td class=\"topcenter\"><input type=\"image\" src=\"/inventions/images/".$TheInfo[3]."\" ";
		$htmlCode .= "\" class=\"productImages\" alt=\"".$TheInfo[4]."\"";
		$htmlCode .= "onclick=\"updateImageDisplay('/inventions/images/".$TheInfo[3]."')\"/></td>".Chr(13);
	}
}
$htmlCode .= "</tr>";
$htmlCode .= "</table";
$htmlCode .= "</body>";
$htmlCode .= "</html>";

echo $htmlCode;
		
function PicInfo($Pic){
  $TheInfo = array();
  if ($Pic == 1){
    $TheInfo[0] = "CloseTurned.jpg";
    $TheInfo[1] = "Close Up of Turned Wheel";
    $TheInfo[2] = "As you can see here, the Mini Snow Plow steers with the tires, to continue plowing only the path the tires are going to follow.  This view shows a left hand turn.";
  } elseif ($Pic == 2){
    $TheInfo[0] = "FrontTurned.jpg";
    $TheInfo[1] = "Front of Vehicle with Wheels Turned";
    $TheInfo[2] = "You can see the same turn as above on the whole vehicle, and how minimally these plows affect the overall look.";
  } elseif ($Pic == 3){
    $TheInfo[0] = "CloseFront.jpg";
    $TheInfo[1] = "Close Up of Straight Wheels";
    $TheInfo[2] = "This is the view of the snow plow as it would be during regular driving, pointed forward.  You can see the width of the plow, which is just a little wider than the tire.  This compensates for any debris possibly falling back into the path of the tire, yet impacts gas mileage minimally.";
  } elseif ($Pic == 4){
    $TheInfo[0] = "Front.jpg";
    $TheInfo[1] = "Front of Vehicle with Wheels Straigh";
    $TheInfo[2] = "Again, this is the car with the wheels and Mini Snow Plow pointed straight ahead.";
  } elseif ($Pic == 5){
    $TheInfo[0] = "CloseTurned2.jpg";
    $TheInfo[1] = "Close Up of Turned Wheel";
    $TheInfo[2] = "This view shows a right hand turn.";
  } elseif ($Pic == 6){
    $TheInfo[0] = "FrontTurned2.jpg";
    $TheInfo[1] = "Front of Vehicle with Wheels Turned";
    $TheInfo[2] = "This view shows a right hand turn with the whole car.";
  } elseif ($Pic == 7){
    $TheInfo[0] = "CloseMount.jpg";
    $TheInfo[1] = "Close Up of Mount on Vehicle";
    $TheInfo[2] = "This view, where the vehicle is elevated, shows how much space there is between the tire and the arms of the Mini Snow Plow.  You can see there is plenty of clearance for safety.";
  } elseif ($Pic == 8){
    $TheInfo[0] = "CloseSideMount.JPG";
    $TheInfo[1] = "Close Up of Mount on Vehicle, Side View";
    $TheInfo[2] = "You can see here that it attaches to the shock tower mount, which is what allows the plows to turn as you turn the steering wheel.  There was very little modification to the vehicle to make this work.";
  } elseif ($Pic == 9){
    $TheInfo[0] = "CloseSideMount2.JPG";
    $TheInfo[1] = "Wide View of Mount on Vehicle, Side View Without Tire";
    $TheInfo[2] = "Here is a wider view, showing the full Mini Snow Plow arm, and how it relates to the brake and frame.";
  } elseif ($Pic == 10){
    $TheInfo[0] = "SideMount.jpg";
    $TheInfo[1] = "Wide View of Mount on Vehicle, Side View Without Tire While Turned";
    $TheInfo[2] = "To show the mechanics of a turn better, I left the wheel off while showing a right hand turn.";
  } elseif ($Pic == 11){
    $TheInfo[0] = "Plow1.JPG";
    $TheInfo[1] = "Live News Cast Display, Close Up";
    $TheInfo[2] = "This was my display during the live broadcast, and later interview, when KGAN <a href=\"http://kgan.com/shared/newsroom/top_stories/videos/kgan_vid_10308.shtml\" rel=\"external\">put together a story about us</a>.  The \"us\" being the <a href=\"http://iowainventorsgroup.org/\" rel=\"external\">Iowa Inventors Group</a>, which I am a 3 year member of, which also mentioned that we had a meeting that night.";
  } elseif ($Pic == 12){
    $TheInfo[0] = "Plow2.JPG";
    $TheInfo[1] = "Maker Faire Display";
    $TheInfo[2] = "Here is my setup for the first annual Maker Faire, held by the <a href=\"http://epicenter.rivermedia.tv/\" rel=\"external\">Epicenter</a> and <a href=\"http://www.sciencestation.org/\" rel=\"external\">Science Station</a>.  I had a few other products there, but those aren't relevant to this page.  In the background, you can see pictures that I printed to show the technical side of things easier.";
  } elseif ($Pic == 13){
    $TheInfo[0] = "Ani1.JPG";
    $TheInfo[1] = "Live News Cast Display";
    $TheInfo[2] = "Ani: The Android Chassis displayed for an interview I had with a local TV news program.  The <a href=\"http://iowainventorsgroup.org\" rel=\"external\">Iowa Inventors Group</a> invited members to be interviewed live for a <a href=\"http://kgan.com/shared/newsroom/top_stories/videos/kgan_vid_10308.shtml\" rel=\"external\">local interest piece</a> for <a href=\"http://kgan.com/\" rel=\"external\">KGAN</a> and <a href=\"http://www.kfxa.tv/\" rel=\"external\">Fox 28</a>.  I wasn't able to talk about Ani during the live broadcast, but they used part of the interview and \"action\" shots for the story.  This also shows the second generation display stand I built.";
    $TheInfo[3] = "Ani2.JPG";
    $TheInfo[4] = "Live News Cast Display";
  } elseif ($Pic == 14){
    $TheInfo[0] = "AniClose.JPG";
    $TheInfo[1] = "Maker Faire Display";
    $TheInfo[2] = "Ani: The Android Chassis on display for the first annual Maker Faire, held by the Epicenter and Science Station.  This was the first time I displayed Ani to the public, and had finished building him only 3 weeks prior to his debut.  He is built to my size and shape, so I stood next to him to prove it.  You can also see the pair of my old glasses I had him wearing.  Truthfully, he doesn't need them, since he doesn't have any eyes!";
    $TheInfo[3] = "AniAndMe.JPG";
    $TheInfo[4] = "Maker Faire Display and Myself";
  } elseif ($Pic == 15){
    $TheInfo[0] = "Ani3.JPG";
    $TheInfo[1] = "Maker Faire Display, Full Height";
    $TheInfo[2] = "Here you can see the full Ani: The Android Chassis as well as that I am not standing on anything and that Ani is standing on the balls of his feet.  Ani looks like he is about a foot taller than me, but it's only about 4-6 inches.  You can also see the barely adequate first attempt at a hanging display.";
    $TheInfo[3] = "AniAndMe2.JPG";
    $TheInfo[4] = "Maker Faire Display and Myself, Full Height";
  } elseif ($Pic == 16){
    $TheInfo[0] = "AniWave.JPG";
    $TheInfo[1] = "Maker Faire Display, Waving";
    $TheInfo[2] = "I put Ani's hand on top of the divider to attempt to have him wave at people, intending to get them more interested and come visit.  Unfortunately, his hand fell as soon as I began showing that all his joints are articulated, including the wrists, hips, and neck rotating.  Since it's metal, not exactly light when falling, has pinch points, and still has some sharp corners, I decided to leave his hand at his side after that.";
    $TheInfo[3] = "";
    $TheInfo[4] = "";
  } elseif ($Pic == 17){
    $TheInfo[0] = "Hand.jpg";
    $TheInfo[1] = "Concept Idea for New Hand";
    $TheInfo[2] = "I used some CAD to design a new hand, when I only had a hand to work from.  My intention was to build a new version, and then build a whole android from that plan.  These are two pictures of the new design, along with a different style of motor than is normally used.  Unfortunately, someone else has designed and is building the motors, so I can't patent them.";
    $TheInfo[3] = "Hand_New.jpg";
    $TheInfo[4] = "Concept Idea for New Hand, Straight Fingers";
  } elseif ($Pic == 18){
    $TheInfo[0] = "Arm.jpg";
    $TheInfo[1] = "Concept Idea for New Hand and Arm";
    $TheInfo[2] = "Once I designed the above hand, I designed a wrist and arm.";
    $TheInfo[3] = "Arm_New.jpg";
    $TheInfo[4] = "Concept Idea for New Hand and Arm, Straight Fingers";
  } elseif ($Pic == 19){
    $TheInfo[0] = "Toothpaste.jpg";
    $TheInfo[1] = "Toothpaste Version";
    $TheInfo[2] = "As you can see in this concept drawing, the smaller tube has a small area in the nozzel area to allow toothpaste to be dispensed from.  The air between this envelope and the rest of the tube allow the toothpaste to be dispensed by normal pressure on the walls of the tube.  You can also see the adult sized tube that has the applicator tip attaches, which can be inserted into the child sized tube to dispense the correct amount into the smaller tube.";
  } elseif ($Pic == 20){
    $TheInfo[0] = "Condiments.jpg";
    $TheInfo[1] = "Condiments Version";
    $TheInfo[2] = "This concept drawing is of the condiment style Short Shot Dispenser.  You can see the same type of cavity around the opening in the bottle, and the same idea of the air in the bottle allowing the user to simply squeeze the bottle to dispense the contents.";
  } elseif ($Pic == 21){
    $TheInfo[0] = "Condiments2.jpg";
    $TheInfo[1] = "Condiments Version, Colored and Labeled";
    $TheInfo[2] = "I've colored and labeled these two examples, showing where the contents would be kept.  In the real versions, the whole bottle would be colored to prevent the user from seeing that the bottle isn't full.  There could also be weights in the bottom of the bottle to prevent it from being top heavy and to help with the idea that the bottle is full.";
  } elseif ($Pic == 22){
    $TheInfo[0] = "Shampoo.jpg";
    $TheInfo[1] = "Shampoo Version, Colored and Labeled";
    $TheInfo[2] = "Again, this concept drawing shows the limited space for the product, this time in a shampoo bottle.";
  } elseif ($Pic == 23){
    $TheInfo[0] = "";
    $TheInfo[1] = "";
    $TheInfo[2] = "I used drawings for these products, since pictures of my prototypes wouldn't show the dispensers in a clear way.  In fact, my prototypes look like regular bottles, so they wouldn't show much of anything except for what the user would be seeing.";
  } elseif ($Pic == 24){
    $TheInfo[0] = "RotToyV1.JPG";
    $TheInfo[1] = "Side View";
    $TheInfo[2] = "This is my original version of the Rotating Toy.  It's just a bare body with a battery box on the top, with a couple of switches to turn it on.";
  } elseif ($Pic == 25){
    $TheInfo[0] = "V1Side.JPG";
    $TheInfo[1] = "Side View, Close Up";
    $TheInfo[2] = "You can see here the arms and some gears that make this work.  The arms have levers on them that go to a second weapon, so that if the arm is hit just right, the other thing can be knocked off by the robot it's fighting.  Well, that was the original purpose anyway.";
  } elseif ($Pic == 26){
    $TheInfo[0] = "V1Top2.JPG";
    $TheInfo[1] = "Battery Box";
    $TheInfo[2] = "This shows the 4 AA batteries it requires, as well as the shield that I wasn't able to replace with another arm.  The bottom corners of the battery box were a much wider curve to them, so I chopped them off, in anticipation of putting markers on the ends of the arms.";
  } elseif ($Pic == 27){
    $TheInfo[0] = "V1SideGears.JPG";
    $TheInfo[1] = "Very Close Up";
    $TheInfo[2] = "This closeup allows you to see what makes the outer ring with the arms rotate.  Inside the black section is a motor and some other gears.  The key that makes it work is the large gear that surrounds the motor, and is directly below the black part.  This is also the part that starts slipping gears, and sounding angry when it falls over.";
  } elseif ($Pic == 28){
    $TheInfo[0] = "V1Bottom.JPG";
    $TheInfo[1] = "Bottom View";
    $TheInfo[2] = "You can see here the drive tires on the right side.  The center tire on the left makes it go in a circle when the tire drags.";
  } elseif ($Pic == 29){
    $TheInfo[0] = "RotToyV2.JPG";
    $TheInfo[1] = "Second Generation Prototype";
    $TheInfo[2] = "This is what the new version looks like.  It's not as technically interesting, but it's a nice gloss black with high visibility orange arms.";
  } elseif ($Pic == 30){
    $TheInfo[0] = "V2Bottom3.JPG";
    $TheInfo[1] = "Bottom View of Second Prototype";
    $TheInfo[2] = "The bottom has the power switch, which is hard to see in this picture, as well as a switch that allows it to go between Autonomous and Remote control.  There is a second switch on the side that you also have to switch to go between Autonomous and Remote control.  In later versions, it will be only one three position switch that controls it all.";
  } elseif ($Pic == 31){
    $TheInfo[0] = "JSMB_Side.JPG";
    $TheInfo[1] = "Side View";
    $TheInfo[2] = "This side shot of the Jigsaw Miter Box shows most of the basic features put into this version.  You can see the very obvious yellow miter box, the black jigsaw, and the unpainted steel base with hinge.  The only thing you can't see here is the foot pedal and the cable going from the foot pedal to the trigger.  You can see the basic, \"M\" shaped feet used in this model to support and stabilize the system.";
  } elseif ($Pic == 32){
    $TheInfo[0] = "JSMB_Side2.JPG";
    $TheInfo[1] = "Side View";
    $TheInfo[2] = "Here you see where the cable comes from the trigger to the foot pedal, and that it is seperate from the power cable, in this prototype.";
  } elseif ($Pic == 33){
    $TheInfo[0] = "JSMB_CloseSide.JPG";
    $TheInfo[1] = "Side View, Close Up";
    $TheInfo[2] = "This close up shows better the system I rigged to not only pull the trigger, but for it to be released automatically.  The cable goes to a small piece of rigit sheet metal and wraps around the handle, so that the cable clamps the sheet metal into the trigger when the foot pedal is pressed.  There is a scrap piece of aluminum stripping used for <a href=\"index.php?NewBox=ATAC&amp;Num=0\">Ani: The Android Chassis</a>, which goes between one of the hose clamps and the trigger, and acts as a spring to let it release the trigger when the foot pedal is released.";
  } elseif ($Pic == 34){
    $TheInfo[0] = "JSMB_Close.JPG";
    $TheInfo[1] = "Top View, Close Up";
    $TheInfo[2] = "As an example piece, I put in a scrap piece of metal to show how the blade engages the material to be cut, as well as how it is held in by the miter box.";
  } elseif ($Pic == 35){
    $TheInfo[0] = "JSMB_Side3.JPG";
    $TheInfo[1] = "Whole Side View";
    $TheInfo[2] = "Here you can see the foot pedal as well as the Jigsaw Miter Box in a raised position.";
  } elseif ($Pic == 36){
    $TheInfo[0] = "JSMB_FootPedal.JPG";
    $TheInfo[1] = "Foot Pedal, Close Up";
    $TheInfo[2] = "You can see the basic foot pedal I welded together to pull a cable, which in turns pulls the trigger, and allows you to keep your hands on the material, or safe away from the blade.";
  } elseif ($Pic == 37){
    $TheInfo[0] = "Jigsaw1.JPG";
    $TheInfo[1] = "Maker Fair Display";
    $TheInfo[2] = "This picture shows the Jigsaw Miter Box when I had it on display for the first annual Maker Faire, held by the Epicenter and Science Station.";
  } elseif ($Pic == 38){
    $TheInfo[0] = "BikeDeskOriginal.jpg";
    $TheInfo[1] = "Original Exercise Bike";
    $TheInfo[2] = "This is the kind of stationary bike I started with.  I found it next to the dumpster at my apartment complex.  Yes, I admit that I'm a dumpster diver.  It's the cheap way to sometimes get nice stuff.  Anyway...  This was in near perfect condition, except for the speedometer and the nasty aged-yellow plastic wheel housing.";
  } elseif ($Pic == 39){
    $TheInfo[0] = "BikeDeskTable.jpg";
    $TheInfo[1] = "Original Laptop Table";
    $TheInfo[2] = "I don't know where I picked this up, but the two arms that hold out the tables were busted at the welds and of no use to anyone without a welder.  After that statement, I'm pretty sure I picked it up at the local dumpster, too.  Luckily for me, I've got a small 90w flux core welder.  (I bought that new.)";
  } elseif ($Pic == 40){
    $TheInfo[0] = "BikeDeskSide.JPG";
    $TheInfo[1] = "Side View";
    $TheInfo[2] = "After having the parts in my garage for over a year, I spent 3 afternoons cutting, welding, grinding, painting, disassembling, and reassembling.  I also spent maybe 5 to 15 minutes soldering the wires of the speedometer back together.  Since you can see the results, I'm not going to bother explaining the details of how I did it.  Suffice it to say that I added old mower wheels on the front of it so I could switch it out with my desk chair easily.  Ok, so one more thing.  I wanted to make it look \"stock,\" so I cut and welded the supporting table leg to match the frame of the bike, which isn't so easy to see in this picture.";
  } elseif ($Pic == 41){
    $TheInfo[0] = "BikeDeskSideInPosition.JPG";
    $TheInfo[1] = "Bike Desk in Position for Use";
    $TheInfo[2] = "Yep, I'm actually telling you that I made it so I could sit on it while programming, playing games, doing e-mail, and the various other things on my computer.  This picture shows it in position at my computer desk, don't mind the mess.  It fits below the actual desk, the keyboard and mouse are in good position for typing and \"mousing,\", and I can still see the monitors.";
  } elseif ($Pic == 42){
    $TheInfo[0] = "BikeDeskInPosition.JPG";
    $TheInfo[1] = "Rear View in Respect to Desk and Monitors";
    $TheInfo[2] = "This angle shows a little better how it looks compared to the monitors.";
  } elseif ($Pic == 43){
    $TheInfo[0] = "BikeDeskFit.JPG";
    $TheInfo[1] = "Wheels Fit Between Computer Towers";
    $TheInfo[2] = "I have two computer towers under my desk so I had to make sure it fit between them.";
  } elseif ($Pic == 44){
    $TheInfo[0] = "BikeDeskFan.JPG";
    $TheInfo[1] = "Resistance Fan";
    $TheInfo[2] = "There really is a fan in there, and I'm hoping it will help keep my computers cool.  This also shows you that I laid down a nice coat of gloss black so we aren't offended by the nasty aged-yellow plastic.  And yes, I took off all the stickers before I painted it.";
  } elseif ($Pic == 45){
    $TheInfo[0] = "BikeDeskView.JPG";
    $TheInfo[1] = "View of Monitors Over Table";
    $TheInfo[2] = "I have a 19\" wide screen flat panel monitor with two 15\" wide screen flat panel monitors surrounding it, which I want to be able to see.  Otherwise this was done in futility.  As you can see, the table tops are a little big for my keyboard and trackball, so I'm going to chop the one side of the tables off so I can see the monitors better.  I'm not going to put pictures of the new, shortened tables, since it's not a major design change.";
  } elseif ($Pic == 46){
    $TheInfo[0] = "BikeDeskUnderside.JPG";
    $TheInfo[1] = "Under Side of Table";
    $TheInfo[2] = "I forgot to paint the table supports, but this shows how the tables are attached and that they are kept in place by a single screw knob.  It doesn't work very well, so I'm thinking of adding another set of knobs to each side, or maybe just attaching the two sides to each other, since they are no longer vertically adjustable.";
  } elseif ($Pic == 47){
    $TheInfo[0] = "";
    $TheInfo[1] = "";
    $TheInfo[2] = "";
  } elseif ($Pic == 48){
    $TheInfo[0] = "";
    $TheInfo[1] = "";
    $TheInfo[2] = "";
  } elseif ($Pic == 49){
    $TheInfo[0] = "";
    $TheInfo[1] = "";
    $TheInfo[2] = "";
  }
  return $TheInfo;
}

?>