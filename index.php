<?php
include('pics.php');
include('articles.php');

$NewBox = "Index";
$Pic = 0;
$Num = -1;

if (isset($_REQUEST["Pic"])){
  $Pic = $_REQUEST["Pic"]*1;
}
if (isset($_REQUEST["NewBox"])){
  $NewBox = $_REQUEST["NewBox"];
  if (isset($_REQUEST["Num"])){
    $Num = $_REQUEST["Num"]*1;
    if ($Num < 0){
      $Num = 0;
    }
  } else {
    $Num = 0;
} }
echo Head();
echo Body();

function Head(){
//  $HTMLCode = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">".Chr(13);
  $HTMLCode = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">".Chr(13);
  $HTMLCode .= "<html xmlns=\"http://www.w3.org/1999/xhtml\">".Chr(13);
  $HTMLCode .= "<head>".Chr(13);
  $HTMLCode .= "<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />".Chr(13);
  $HTMLCode .= "<title>Inventions by Eric Ingamells</title>".Chr(13);
  $HTMLCode .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\" />".Chr(13);
  $HTMLCode .= "<script type=\"text/javascript\" src=\"functs.js\"></script>".Chr(13);
  $HTMLCode .= "</head>".Chr(13);
  $HTMLCode .= "<body style=\"background-color:#ffffff\">".Chr(13);
  return $HTMLCode;
}

function Body(){
  global $NewBox, $Num, $Pic;
  $temp = -1;
  $HTMLCode = "<table style=\"width:100%;margin-left:auto;margin-right:auto;\"><tr>".Chr(13);
  $HTMLCode .= "  <td style=\"text-align:left;vertical-align:top;width:1%\"><table style=\"width:100%\"><tr>".Chr(13);
  $HTMLCode .= "  <td style=\"width:100%;white-space:nowrap;\"><h1><a href=\"index.php\" style=\"color:#aaaaaa\">Inventions</a></h1></td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td style=\"white-space:nowrap;\"><h3><a href=\"http://www.intensecomputers.com/portfolio/\" rel=\"external\" style=\"color:#aaaaaa\">By Eric Ingamells</a></h3></td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td class=\"menu\" id=\"MSP\"><a class=\"menu\" href=\"index.php?NewBox=MSP&amp;Num=0\">Mini Snow Plow</a></td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  if ($NewBox == "MSP"){
    $temp = $Num;
  }
  $HTMLCode .= "  <td class=\"left\">".ShowOptions($temp)."</td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td class=\"menu\" id=\"ATAC\"><a class=\"menu\" href=\"index.php?NewBox=ATAC&amp;Num=0\">Ani: The Android Chassis</a></td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  if ($NewBox == "ATAC"){
    $temp = $Num;
  } else {
    $temp = -1;
  }
  $HTMLCode .= "  <td class=\"left\">".ShowOptions($temp)."</td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td class=\"menu\" id=\"SSD\"><a class=\"menu\" href=\"index.php?NewBox=SSD&amp;Num=0\">Short Shot Dispensers</a></td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  if ($NewBox == "SSD"){
    $temp = $Num;
  } else {
    $temp = -1;
  }
  $HTMLCode .= "  <td class=\"left\">".ShowOptions($temp)."</td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td class=\"menu\" id=\"JMB\"><a class=\"menu\" href=\"index.php?NewBox=JMB&amp;Num=0\">Jigsaw Miter Box</a></td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  if ($NewBox == "JMB"){
    $temp = $Num;
  } else {
    $temp = -1;
  }
  $HTMLCode .= "  <td class=\"left\">".ShowOptions($temp)."</td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td class=\"menu\" id=\"RT\"><a class=\"menu\" href=\"index.php?NewBox=RT&amp;Num=0\">Rotating Toy</a></td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  if ($NewBox == "RT"){
    $temp = $Num;
  } else {
    $temp = -1;
  }
  $HTMLCode .= "  <td class=\"left\">".ShowOptions($temp)."</td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td class=\"menu\" id=\"Other\"><a class=\"menu\" href=\"index.php?NewBox=Other&amp;Num=0\">Other Stuff</a></td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  if ($NewBox == "Other"){
    $temp = $Num;
  } else {
    $temp = -1;
  }
  $HTMLCode .= "  <td class=\"left\">".ShowOther($temp)."</td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "  <td class=\"menu\" id=\"Articles\"><a class=\"menu\" href=\"index.php?NewBox=Articles&amp;Num=0\">Articles</a></td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  if ($NewBox == "Articles"){
    $temp = $Num;
  } else {
    $temp = -1;
  }
  $HTMLCode .= "  <td class=\"left\">".ShowNames($temp)."</td>".Chr(13);
  $HTMLCode .= "  </tr></table></td>".Chr(13);
  $HTMLCode .= "  <td id=\"table2\" style=\"width:100px\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "  <td class=\"topcent\">".ShowPage($NewBox, $Num, $Pic)."</td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "    <td class=\"cent\" colspan=\"3\"><table style=\"width:100%\"><tr>".Chr(13);
  $HTMLCode .= "      <td class=\"cent33\">Eric Ingamells</td>".Chr(13);
  $HTMLCode .= "      <td class=\"cent34\">Inventor/Innovator/DIYer/Jack of all trades</td>".Chr(13);
  $HTMLCode .= "      <td class=\"cent33\"><a href=\"mailto:Inventions&#64;IntenseComputers.com\">Inventions&#64;IntenseComputers.com</a></td>".Chr(13);
  $HTMLCode .= "    </tr></table>".Chr(13);
  $HTMLCode .= "    </td>".Chr(13);
  $HTMLCode .= "  </tr><tr>".Chr(13);
  $HTMLCode .= "    <td colspan=\"3\" style=\"text-align:center;font-size:small\"><a href=\"index.php?NewBox=Legal\">Legal Notice</a></td>".Chr(13);
  $HTMLCode .= "</tr></table>".Chr(13);
  $HTMLCode .= "<p><span id=\"Errors\"></span>".Chr(13);
  $HTMLCode .= "<input type=\"hidden\" id=\"NewBox\" value=\"".$NewBox."\"/></p>".Chr(13);
  $HTMLCode .= "</body></html>".Chr(13);
  return $HTMLCode;
}

function ShowOther($Num2){
  global $NewBox;
  if ($Num2 < 0){
    return "&nbsp;";
  } elseif ($NewBox != "Index"){
    $HTMLCode = "<table class=\"cent\"><tr><td class=\"left\" id=\"Intro\"><a href=\"index.php?NewBox=".$NewBox."&amp;Num=0\" class='menu";
    if (($Num2 == 0) || ($Num2 > 2)){
      $HTMLCode .= "2";
    }
    $HTMLCode .= "'>Intro</a></td>".Chr(13);
    $HTMLCode .= "</tr><tr><td class=\"left\" id=\"BikeDesk\"><a href=\"index.php?NewBox=".$NewBox."&amp;Num=1\" class='menu";
    if ($Num2 == 1){
      $HTMLCode .= "2";
    }
    $HTMLCode .= "'>Bike Desk</a></td>".Chr(13);
//    $HTMLCode .= "</tr><tr><td onclick=\"javascript:window.location='index.php?NewBox=".$NewBox."&amp;Num=2'\"><a href=\"index.php?NewBox=".$NewBox."&amp;Num=2\" class='menu";
//    if ($Num2 == 2){
//      $HTMLCode .= "2";
//    }
//    $HTMLCode .= "'>More To Come</a></td>".Chr(13);
    $HTMLCode .= "</tr></table>".Chr(13);
    return $HTMLCode;
} }

function ShowOptions($Num2){
  global $NewBox;
  if ($Num2 < 0){
    return "&nbsp;";
  } elseif ($NewBox != "Index"){
    $HTMLCode = "<table class=\"cent\"><tr><td class=\"left\" id=\"Overview\"><a href=\"index.php?NewBox=".$NewBox."&amp;Num=0\" class='menu";
    if (($Num2 == 0) || ($Num2 >3)){
      $HTMLCode .= "2";
    }
    $HTMLCode .= "'>Overview</a></td>".Chr(13);
    $HTMLCode .= "</tr><tr><td class=\"left\" id=\"Pictures\"><a href=\"index.php?NewBox=".$NewBox."&amp;Num=1\" class='menu";
    if ($Num2 == 1){
      $HTMLCode .= "2";
    }
    $HTMLCode .= "'>Pictures</a></td>".Chr(13);
    $HTMLCode .= "</tr><tr><td class=\"left\" id=\"Details\"><a href=\"index.php?NewBox=".$NewBox."&amp;Num=2\" class='menu";
    if ($Num2 == 2){
      $HTMLCode .= "2";
    }
    $HTMLCode .= "'>Details</a></td>".Chr(13);
    $HTMLCode .= "</tr><tr><td class=\"left\" id=\"Uses\"><a href=\"index.php?NewBox=".$NewBox."&amp;Num=3\" class='menu";
    if ($Num2 == 3){
      $HTMLCode .= "2";
    }
    $HTMLCode .= "'>Uses</a></td></tr></table>".Chr(13);
    return $HTMLCode;
} }

function ShowPage($NewBox, $Num, $Pic){
  if ($Pic == 0){
    switch ($NewBox) {
      case "Index" : return Index($Num);break;
      case "MSP" : return MSP($Num);break;
      case "ATAC" : return ATAC($Num);break;
      case "SSD" : return SSD($Num);break;
      case "JMB" : return JMB($Num);break;
      case "RT" : return RT($Num);break;
      case "Other" : return Other($Num);break;
      case "Legal" : return Legal();break;
      case "Articles" : return ShowArticles($Num);break;
      default : return Index($Num);break;
    }
  } else {
    $temp = 0;
    if (intval($Pic) != $Pic){
      $temp = 2;
      $Pic = intval($Pic);
    }
    $TheInfo = PicInfo($Pic);
    $HTMLCode = "<table><tr>".Chr(13);
    $HTMLCode .= "<td class=\"cent\"><img src=\"images/".$TheInfo[$temp]."\" /></td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"cent\">".$TheInfo[1]."</td>".Chr(13);
    $HTMLCode .= "</tr></table>".Chr(13);
    return $HTMLCode;
} }

function MSP($Num){
  $HTMLCode = "<table><tr>".Chr(13);
  if (($Num == 0) || ($Num > 3)){  // Overview
    $HTMLCode .= "<td class=\"left\"><img src=\"images/Plow1.JPG\" alt=\"Mini-Snow Plows\" width=\"150\" /></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">Several years ago, I was going to work in the early morning while it was snowing hard and after it had been snowing hard all night.  I was on the highway going about 30 mph when I came upon a lot of even slower moving traffic.  Me being impatient and still needing to get across town, I started passing this long line of cars.  As I get near the beginning of the line, I realize they are following a <a href=\"http://www.google.com/search?tbm=isch&amp;hl=en&amp;source=hp&amp;biw=1280&amp;bih=923&amp;q=county+snow+plow&amp;gbv=2&amp;oq=county+snow+plow&amp;aq=f&amp;aqi=g-mS8&amp;aql=&amp;gs_l=img.3..0i5i24l8.2625l5725l0l6221l16l16l0l1l1l0l151l934l14j1l15l0.frgbld.&amp;safe=active\" rel=\"external\">county snow plow</a>.  It was throwing snow all over the place, including back on the road it was trying to clear.  I'm not trying to berate the driver, because the wind was causing much of this havoc.  Since I hadn't gotten very far passing cars and needed to go a long way yet, I decided to pass the plow.  There was enough room, but there was no visibility near the front of the plow.  I was already white knuckling it, so I figured it couldn't be that much worse.  I was wrong, but I made it through.  All this time I was slipping and sliding around, but I'd driven through worse and could handle the millisecond by millisecond course corrections needed to make it past the line of cars, past the truck, and the rest of the way to work.  However, I do remember thinking, \"There's Got to be a better way.\"</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">I don't remember how long afterwards that I decided to put a plow on the front of my car, but I started looking for something that would work.  I quickly realized there wasn't anything available for a car, and those designed for trucks were heavy, expensive, and would destroy my car as sure as landing in a ditch.  I also didn't want to plow the whole roadway, since that would also destroy my gas mileage.  Somewhere along the way, I decided to make plows smaller and lighter, and to put them just in front of my tires.  I realized that if the plow was only as wide as the tire, there would be the extreme likelihood that snow would fall back into the tire path, as well as that I would have to make the plow track with the tire.  I looked at how the front tire was mounted on my car and realized I could mount the plow, via an arm, onto the shock tower mount to make it turn into the path of the tire as I turned the steering wheel, and the plow could be made slightly wider than the tire without any serious drawbacks.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Once I decided to miniaturize plows, I started looking to see if there was anything I could work from, since it's usually easier to modify something already out there for the purpose I want.  Unfortunately there wasn't, so I started looking at how I was going to build it from scratch.  Once I had a design in mind, I realized I would have to learn how to weld.  I'd wanted to learn for years, and even though I've had my dad weld stuff for me at his workplace, I didn't want to do that this time.  There was no telling how long it would take to find a working design and one that would be simple as well.  As it turns out, I had the right idea the first time, but I ended up spending more money on welding gear than the parts for the plows.  I also spent a lot of time learning how to weld, and then learning how to weld so that after grinding, the pieces would still be attached to each other.  Talk about a learning curve, and since I didn't have anyone there to tell me what I was doing wrong, it took me a long time to get anywhere.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">After many mistakes, some unrealized design issues, and a couple of coats of paint, I have the first set of snow plows designed to fit on virtually any vehicle and plow only the path of the tires during driving, and not for plowing sidewalks, driveways, or the whole roadway.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">After thinking about this invention some more, I realized that there would be stuff that this wouldn't remove, such as ice and loose stuff around cracks the plow wouldn't be able to get to.  This meant that I had to put down some sand or salt for traction after the plow and before the tire.  So I did some more looking at my car, and the obvious open place for a container of sand to fit was the fenders.  I had to move some bracing, rearrange cables, find a new spot for the horn, and cut out some sheet metal that was in the way, but I was able to hollow out enough space for a several gallon container to fit in each of my fenders.  I used fencing wire to make a wire frame to work from and made two containers from sheet metal to fit those spaces.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">This starts the process of designing the Mini Sand Spreaders.  I noticed that these containers had lots of corners, curves, and anything but straight sides, so I decided to put an unbalanced motor on them, to clear clogs and loosen packed material.  I also put a deflector at the bottom and hooked it to the arm of the Mini Snow Plow so that it would always put the sand, salt, or whatever, down on only the cleared path and only the width of the cleared path.  Granted, I didn't put all of these items on the prototype, but those are some of the options I thought it would need.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">I never put the Mini Sand Spreader on my car, but I did put the Mini Snow Plow on it.  I didn't think it was safe to drive with the prototypes attached, otherwise I'd have video of those tests.  I do have pictures of how the Mini Snow Plow attaches, moves with the steering, and how they look on my car.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">By the way, the Mini Snow Plow and Mini Sand Spreader are in no way related to <a href=\"http://www.imdb.com/name/nm0000378/\" rel=\"external\">Minnie Driver</a>, although she would make an almost logical actress for commercials.</td>".Chr(13);
  } else if ($Num == 1){  // Pictures
    $TheInfo = array();
    $HTMLCode .= "<td class=\"cent\" colspan=\"3\">Click on the pictures below to see a larger version.</td>".Chr(13);
    for ($i=1;$i<13;$i++){
      $TheInfo = PicInfo($i);
      $HTMLCode .= "</tr><tr>".Chr(13);
      $HTMLCode .= "<td class=\"centv\"><a href=\"index.php?NewBox=MSP&amp;Num=1&amp;Pic=".$i."\"><img src=\"images/".$TheInfo[0]."\" alt=\"".$TheInfo[1]."\" height=\"260\" style=\"border:0px\"/></a></td>".Chr(13);
      $HTMLCode .= "<td class=\"left\">".$TheInfo[2]."</td>".Chr(13);
    }
  } else if ($Num == 2){  // Details
    $HTMLCode .= "<td rowspan=\"4\"><img src=\"images/Plow2.JPG\" alt=\"Maker Faire Display\" width=\"150\" /></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">The plow, or channel, on the Mini Snow Plow is set at an approximate 45 degree angle to the path of the tire to facilitate the removal of debris with more of a slicing, rather than pushing, motion.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">The upper arm is attached to the shock tower mount with two grade 8 bolts so that the plows can stay in front of the tires while turning corners, while at the same time being easily removable and not easily break off when encountering cracks in the road.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">There is a spring between the upper and lower arms that is normally partially compressed to keep the plow on the road, while allowing the plows to raise over cracks and bumps in the roadway. </td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">I have designs for maintaining full blade contact on the roadway for when the roadway isn't completely flat, for maintaining the contact between the edge of the blade and the roadway when there are inclines and dips in the road, for easily replacing the blade edge when it is worn, and raising the plows from the roadway during driving, when they are no longer needed.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">These are super light duty prototypes, so I have not tested them while driving, due to safety concerns.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Because of where the plows are connected to the vehicle, it may be necessary to do an alignment of the wheels periodically.  It is suggested to have your vehicle aligned after every winter anyway.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">I used an 18\" piece of 6\" steel pipe, cut lengthwise, to create the channels of the plow.  The arms are 1\" steel square tubing, and the springs are the rear shocks from a <a href=\"http://en.wikipedia.org/wiki/Suzuki_Jr50\" rel=\"external\">Suzuki Jr 50</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">All bolts are grade 8 because of the expected stresses and heat while driving.  This was before it was determined that it wasn't safe to drive with these prototypes, due to the lack of strength of the tubing used in the arms.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">The bottom edges of the channels are beveled, so that a sharp edge is created to give the best chance of removing the most material from the path of the tires.  This isn't a requirement, but simply convention and the most likely implementation of the edge of the plow.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">The Mini Sand Spreader could be controlled from inside the cab of the vehicle as to how much material is released, when the material is to be spread or not, and to run the unbalanced motors to try to break up clumps and release compacted materials.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">There could be different nozzles for the output for the spreader to accommodate different materials, such as course sand versus fine drying agent, in the case of use with mud removal.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">In the filling tube, there could be a screen to prevent clumps and to keep larger material from entering the chamber than can fit out the nozzle.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">The extra weight of the material in the spreader may help prevent tire slippage, in certain instances.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Both the Mini Sand Spreader and the Mini Snow Plow can be used on the back wheels as well as the front.</td>".Chr(13);
  } else if ($Num == 3){  // Uses
    $HTMLCode .= "<td class=\"left\"><img src=\"images/Front.jpg\" alt=\"Front of Vehicle With Mini-Snow Plows Attached\" width=\"150\" /></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">Even though I designed them to fit on my mid-sized sedan, the Mini Snow Plow and the Mini Sand Spreader can be resized to fit almost any vehicle.  I figure that the first way I'm going to market these inventions is for emergency vehicles.  There is a story that I remember hearing years ago about an ambulance that needed to get out to a rural house to bring someone to the hospital, but had to wait an hour before they could get a snow plow for them to follow, due to the massive amount of snow on the roads at that time.  I don't know if this is true or not, but why chance it?  It's better to be safe than sorry, right?</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Put these things on ambulances, squad cars, fire trucks, and even utility company vehicles so that they can get where they need to be.  These are the vehicles and people that often can't wait for a snow plow to give them access during an emergency.  When someone in the country is having a heart attack, they need to get to the hospital right away.  If a building has high tension electrical wires fall on it and start a fire, the fire trucks need to get there as well as the power company vehicles.  If a water main froze and burst, the water company needs to get there.  If some crazy idiot is playing pinball with their car, driving fast down the highway, the police need to be able to not only catch up to his maniac, but have the traction to get him off the road, without them losing control, too.  These can also be put on the personal vehicles of the large county, state, and city plow drivers, so they can get to work safely.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">This brings up other uses, besides those related to winter weather.  Even though they are called the Mini <b>Snow</b> Plow, and Mini <b>Sand</b> Spreader, they can be used for many reasons.  I have already mentioned that salt can be used in the Mini Sand spreader, but there are other uses for it.  It's true that much of the United States is affected by snow on a regular basis, and it's also true that every state of the Union has seen snow at some point, but why limit this to snow?  California, for example, has mud slides and forest fires.  My inventions can move mud and put down drying agent almost as easily as they can handle snow and ice.  Then the ash that falls like snow after a forest fire is even lighter than snow, so it'll move that much easier, even when there's enough to make a vehicle get otherwise stuck.  When it rains hard or floods, my plows can move a large amount of water from the tire path and help prevent <a href=\"http://en.wikipedia.org/wiki/Aquaplaning\" rel=\"external\">hydroplaning</a>.  </td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">I'm sure that there are other uses, such as preventing flat tires on rescue vehicles after a tornado due to the glass, nails, and screws that could be lying everywhere.  There are lots of uses I won't have realized until someone else puts my inventions to the task, and that's what I want.  Take my inventions and use them for whatever you want, as long as it's safe.  I do it with other people's inventions and products, so I would consider it a credit to my ideas that someone likes them enough to find different reasons to use them than I can think of.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Speaking of \"other uses,\" I have also considered alternate configurations for putting these on motorcycles, ATV's, and even bicycles.  I know I'm not the only one who has ridden their bicycle in the snow.</td>".Chr(13);
  }
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr></table>".Chr(13);
  return $HTMLCode;
}

function Index($Num){
  $HTMLCode = "<table style=\"width:100%\"><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">My name is Eric Ingamells, and I am an amateur inventor/innovator.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">I have been coming up with ideas for new products, procedures, software, and just \"stuff\" in general since I can remember.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">Not all of my ideas are good, feasible, or even logical, but there are lots of my ideas I have seen out on the market, even though I didn't put them there.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">For instance, about 25 years ago, as a young kid making noises slurping the last few drops of pop out of a cup, I would get reprimanded to not be so loud.   I decided to cut a small slit in one end of the straw, which cut the noise generated by about 50%.  I never did anything with it.  A few years ago, I noticed that many straws now have a slit in at least one end.  It's not like I would have made any money off the idea, but it's one of many ideas that I didn't take anywhere.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">That is until now.  I am now looking to get some of my ideas \"out there\" so that I might be able to make money while, hopefully, solving people's problems.  Just like in the movie <a href=\"http://www.imdb.com/title/tt0358082/\" rel=\"external\">Robots</a>, I tend to work off the motto \"See a need, fill a need.\"  Sometimes, when I see a problem, I end up coming up with a solution, even when others don't even notice that a problem exists, or they write it off as minimal or not fixable.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">I also try to live by the motto from <a href=\"http://www.imdb.com/title/tt0396555/\" rel=\"external\">Meet the Robinsons</a>, \"Keep moving forward.\"  It doesn't always work, but I try never to go back to an old way of thinking or doing when I find a new way.  This even goes to the point where I try never to buy a product that isn't as good or better quality than the one I'm replacing.  I also try never to repeat the same mistakes others make.  Like I said, this doesn't always work, but I try.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">When I'm at work, I usually try to find an easier, more efficient, and more effective way of accomplishing the same thing.  For instance, I was once doing batch scanning during a third shift job and to move the scans I just created, I would have to use a VBScript to move the files from my computer to a network location.  Unfortunately, this script wasn't designed to assist my specific job position, but was for another position that did a similar, but different, task.  I suggested to my manager that the IT staff make some minor changes to the script so that it would be geared towards not just my position, but to each individual job position.  When the idea was shot down and called impossible, I set out to do it myself, since I knew it was easily possible.  In about 30 minutes, I learned enough about VBScript to make the adjustment to the relevant 2 lines of code and I was able to boost the amount of work I did to exceed that of any other shift.  To put it simply, there were 4 people on each of first and second shift that did my same job and I was the only one on third shift.  I did twice as much as all of first shift, and one and a half times what second shift did, and I had an hour less to do it in.  My simple edit allowed me to speed up considerably while maintaining an average 100% accuracy, while everyone else was rarely over 90%.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">Two notes before you go any farther: I am not a professional photographer nor a professional digital photo manipulator, so don't judge what you see on this site by the poor quality of the photographs.  I am doing what I normally do, the best with what I have to work with and learning on the fly.  The second items is that the page will resize to fit your screen once it is completely loaded, so please wait for all images to load before trying to read anything, since it might not look very good until then.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">If you have read this far, and if you haven't already noticed it, then I'll let you know that off to the left are links to some of the different inventions I am working on to get brought to market.  So far, these are the ones I have publicly displayed, and am actively looking for someone to either license or outright buy the product.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr></table>".Chr(13);
  return $HTMLCode;
}

function ATAC($Num){
  $HTMLCode = "<table style=\"width:100%\"><tr>".Chr(13);
  if (($Num == 0) || ($Num > 3)){  // Overview
    $HTMLCode .= "<td class=\"left\">I built Ani: The Android Chassis over several years.  I started with the hands around 2006.  I then built the feet in 2010, and spent the better part of 2011 building the rest of the body.  I didn't finish the last parts until February 2012.</td>".Chr(13);
    $HTMLCode .= "<td rowspan=\"13\"><img src=\"images/Ani1.JPG\" alt=\"Live News Cast Display\"/></td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">Since I didn't have any ideas that I would build the whole body, I didn't keep track of the hours while I was building the hands and feet. This translates into me not keeping track of the hours I spent building the rest of the body, so I have no idea how long it actually took me to build it.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">If you want to make a guess, I could assemble a forearm, bicep, lower leg, or upper leg component in about an hour.  This is if the aluminum parts are already cut and shaped.  As for cutting the parts, I would generally spend around 2 hours cutting a bunch of pieces for several components at once, so I could basically assembly line things.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">Also, each joint took about an hour to build, except for the rotating joints.  The first wrist took me about 2 weeks of 1-2 hours a day and several hours during the weekend.  I ended up building 3 of those types of joints and a much larger, but not any less complicated, tedious, or easier version for the neck.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">The hips and shoulders didn't take more than 2 hours each, but the ribcage took quite a while.  I don't even have an estimate for that.  </td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">The picture to the right has a heavy duty stand that I built in a weekend, and in other pictures show the first generation stand that maybe took a day to build.  I also spent another 2-3 hours fixing a few issues with the 2nd stand one day after work.  Again, I didn't have the big shop tools.  I do, however, have a small <a href=\"http://www.google.com/search?q=dremel.rotary.tool&amp;hl=en&amp;tbm=isch&amp;source=lnms&amp;ei=YihiT7yfBdK70AGBlK2YCA&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;sqi=2&amp;ved=0CF0Q_AUoAQ&amp;biw=1280&amp;bih=923#hl=en&amp;tbm=isch&amp;sa=1&amp;q=90.amp.flux.core.mig.welder&amp;oq=90.amp.flux.core.mig.welder&amp;aq=f&amp;aqi=&amp;aql=&amp;gs_sm=3&amp;gs_upl=17845l19701l4l20181l10l10l0l0l0l1l177l1030l5.5l10l0&amp;gs_l=img.3...17845l19701l4l20181l10l10l0l0l0l1l177l1030l5j5l10l0.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=ee5620cf03cd1033&amp;biw=1280&amp;bih=923\" rel=\"external\">flux core MIG welder</a>, and a <a href=\"http://www.harborfreight.com/horizontal-vertical-metal-cutting-bandsaw-93762.html\" rel=\"external\">horizontal band saw</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">This picture was taken at Community Savings Bank in Robins, Iowa, where the <a href=\"http://iowainventorsgroup.org/\" rel=\"external\">Iowa Inventors Group</a> holds there monthly meeting.  I am starting my 3rd year as a member and several of us were being interviewed for a local community interest spot on the local news.  I had this and the <a href=\"index.php?NewBox=MSP&amp;Num=0\">Mini Snow Plow</a> on display, but didn't have time to talk about Ani for the live interview.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">After the live section, they did another interview for file footage and I was able to talk about Ani: The Android Chassis at that time.  I wasn't able to see the news, since I was at work all day after that, so I don't know what they did or didn't show, but I did see the <a href=\"http://kgan.com/shared/newsroom/top_stories/videos/kgan_vid_10308.shtml\" style=\"color:#ff0000\" title=\"Not available anymore.\" rel=\"external\">story they put together about us</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">What I would like to do with this invention is twofold.  First, I would deconstruct this and sell it as kits for school age kids.  Secondly, and concurrently, I would like to have full bodies made for colleges, universities, and companies to build full, or nearly full, androids.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">The kits for kids would be small components, like the hands, feet, etc., so they could build just what they want or possibly build the whole thing, one kit at a time.  They would learn how joints act, how complex the general human form is, and they would have the option to add their own motors, actuators, or cables to make their own robots.  This would make a very good science project and would probably win more than a few awards.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">A major part of robotics and android engineering and design is the frame.  According to <a href=\"androidworld.com/prod01.htm\" rel=\"external\">Android World's website</a>, there are just over 100 reasonably serious android research departments in the world, and only 10 of them are based here in the USA, and most of them are universities. Personally, I feel this needs to be increased dramatically if we are to remain a world leader.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">We teach our kids technology, how to build industrial robots, and then ship lots of jobs outside the country.  This is counter productive on many levels.  But since androids, and humanoid robots in general, is a new market, we can get back in the race for technology here, rather than try to play catch up with everything else.  Then again, many of the androids in development now by other countries are way ahead of us anyway.  From what I've seen on <a href=\"androidworld.com/prod01.htm\" rel=\"external\">Android World's website</a>, <a href=\"http://www.ai.mit.edu/projects/leglab/robots/robots.html\" rel=\"external\">MIT</a> has very advanced 2 half androids, but no full android.  <a href=\"http://robonaut.jsc.nasa.gov/default.asp\" rel=\"external\">NASA and GM</a> have a nice robot that is the upper half of an android, but it's not a full android.  I've heard rumors they are developing legs for it, but it's not on their site.  The only full android I see in the USA right now is <a href=\"futurebots.com/walk.htm\" rel=\"external\">ATOM-7xp</a>, from <a href=\"futurebots.com\" rel=\"external\">FutureBots</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">I am looking to get a license agreement with two companies, or one company that will work with me on both the industrial and the educational sides, so that I can get this out in the hands of the public.  I want to see what they are going to do with it.  I'm a reasonable guy, so I'm looking for a reasonable license deal.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">I have filed for a patent on Ani: The Android Chassis, so I have that protection during prospective business discussions about developing and manufacturing Ani: The Android Chassis.</td>".Chr(13);
  } elseif ($Num == 1){  // Pictures
    $HTMLCode .= "<td class=\"cent\" colspan=\"3\">Click on the pictures below to see a larger version.</td>".Chr(13);
    $TheInfo = array();
    for ($i=13;$i<19;$i++){
      $TheInfo = PicInfo($i);
      $HTMLCode .= "</tr><tr>".Chr(13);
      $HTMLCode .= "<td class=\"topcent\"><a href=\"index.php?NewBox=ATAC&amp;Num=1&amp;Pic=".$i."\"><img src=\"images/".$TheInfo[0]."\" ";
      if ($i<17){
        $HTMLCode .= "height=\"260";
      } elseif ($i==17){
        $HTMLCode .= "height=\"150";
      } elseif ($i==18){
        $HTMLCode .= "width=\"150";
      }
      $HTMLCode .= "\" style=\"border:0px\" alt=\"".$TheInfo[1]."\"/></a></td>".Chr(13);
      $HTMLCode .= "<td class=\"middleleft\"";
      if ($TheInfo[3] == ""){
        $HTMLCode .= " colspan=\"2\"";
      }
      $HTMLCode .= ">".$TheInfo[2]."</td>".Chr(13);
      if ($TheInfo[3] != ""){
        $HTMLCode .= "<td class=\"topcent\"><a href=\"index.php?NewBox=ATAC&amp;Num=1&amp;Pic=".$i.".2\"><img src=\"images/".$TheInfo[3]."\" ";
      if ($i<17){
        $HTMLCode .= "height=\"260";
      } elseif ($i==17){
        $HTMLCode .= "height=\"150";
      } elseif ($i==18){
        $HTMLCode .= "width=\"150";
      }
      $HTMLCode .= "\" style=\"border:0px\" alt=\"".$TheInfo[4]."\"/></a></td>".Chr(13);
    } }
  } elseif ($Num == 2){  // Details
    $HTMLCode .= "<td class=\"left\">Ani: The Android Chassis is a \"mechanical skeleton,\" which is designed to be the standardization for the building and design of androids and other humanoid robots.</td>".Chr(13);
    $HTMLCode .= "<td rowspan=\"19\"><img src=\"images/Ani2.JPG\" alt=\"Live News Cast Display\"/></td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">This prototype was hand made using <a href=\"http://menards.com/main/tools-hardware/builders-hardware/stock-steel/aluminum-flat-1-8-x-1-2-x-8ft/p-1466196-c-9215.htm\" rel=\"external\">aluminum stripping</a>, aluminum pop rivets, and steel all thread.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">All the stripping was cut using a hack saw or the <a href=\"index.php?NewBox=JMB&amp;Num=0\">Jigsaw Miter Box</a>, and all the rivets were set using a hand rivet gun.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">The steel all thread, used where rivets wouldn't work and to join the moving parts of the joints, were cut with a <a href=\"http://www.google.com/search?q=dremel.rotary.tool&amp;hl=en&amp;tbm=isch&amp;source=lnms&amp;ei=YihiT7yfBdK70AGBlK2YCA&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;sqi=2&amp;ved=0CF0Q_AUoAQ&amp;biw=1280&amp;bih=923\" rel=\"external\">Dremel rotary tool</a> with a cutting blade and notched on one end for use with a precision flat screw driver.  The pieces are held in place with <a href=\"https://www.google.com/search?q=thread+locker&amp;hl=en&amp;prmd=imvnsfd&amp;source=lnms&amp;tbm=isch&amp;ei=uup8T4_dBZSK8QSJj_n_DA&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;ved=0CFYQ_AUoAQ&amp;biw=1280&amp;bih=923#hl=en&amp;tbm=isch&amp;sa=X&amp;ei=vOp8T-rFJ4Wm8gSt48XjDA&amp;ved=0CEYQBSgA&amp;q=threadlocker&amp;spell=1&amp;bav=on.2,or.r_gc.r_pw.r_cp.r_qf.,cf.osb&amp;fp=7d9387b7c2a82a98&amp;biw=1280&amp;bih=923\" rel=\"external\">threadlocker</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">All the bends were made using a combination of two pairs of <a href=\"https://www.google.com/search?q=tongue.and.groove.pliers&amp;hl=en&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=XiNiT-6gL4Lr0gHV1YS-CA&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;sqi=2&amp;ved=0CFgQ_AUoAQ&amp;biw=1280&amp;bih=923\" rel=\"external\">tongue and groove pliers</a> and bare hands.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">The holes were drilled with an <a href=\"https://www.google.com/search?hl=en&amp;tbm=isch&amp;sa=1&amp;q=hand.drill&amp;oq=hand.drill&amp;aq=f&amp;aqi=g10&amp;aql=&amp;gs_sm=3&amp;gs_upl=1581939l1737991l20l1738119l11l11l0l2l2l0l125l872l4.5l9l0&amp;gs_l=img.3..0l10.1581939l1737991l20l1738119l11l11l0l2l2l0l125l872l4j5l9l0.&amp;pbx=1&amp;biw=1280&amp;bih=923&amp;cad=cbv&amp;sei=kFJiT5TkBsP10gHSsL28CA#hl=en&amp;tbm=isch&amp;sa=1&amp;q=hand.electric.drill&amp;oq=hand.electric.drill&amp;aq=f&amp;aqi=g1&amp;aql=&amp;gs_sm=3&amp;gs_upl=3093l4484l0l5156l9l9l0l0l0l0l102l591l8.1l9l0&amp;gs_l=img.3..0.3093l4484l0l5156l9l9l0l0l0l0l102l591l8j1l9l0.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_cp.r_qf.,cf.osb&amp;fp=30c41a4901839ab0&amp;biw=1280&amp;bih=923\" rel=\"external\">hand electric drill</a> or a bench top drill press, and all tapping was done with a <a href=\"http://www.google.com/search?q=locking.pliers&amp;hl=en&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=rCRiT6i3O4nw0gHh1uGMCA&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;sqi=2&amp;ved=0CE4Q_AUoAQ&amp;biw=1280&amp;bih=923#hl=en&amp;tbm=isch&amp;sa=1&amp;q=hand.tapping.tool&amp;oq=hand.tapping.tool&amp;aq=f&amp;aqi=g-S1g-mS1&amp;aql=&amp;gs_sm=3&amp;gs_upl=5516l5868l18l6587l5l5l0l0l0l2l109l475l4.1l5l0&amp;gs_l=img.3..0i24j0i5i24.5516l5868l18l6588l5l5l0l0l0l2l109l475l4j1l5l0.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=ee5620cf03cd1033&amp;biw=1280&amp;bih=923\" rel=\"external\">hand tap set</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">To hold pieces together easier while drilling holes, I used 6 pairs of small <a href=\"http://www.google.com/search?q=locking.pliers&amp;hl=en&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=rCRiT6i3O4nw0gHh1uGMCA&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;sqi=2&amp;ved=0CE4Q_AUoAQ&amp;biw=1280&amp;bih=923\" rel=\"external\">locking pliers</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">No heavy machine shop tools or other precision tools were used in this construction, except for a <a href=\"http://www.google.com/search?q=dremel.rotary.tool&amp;hl=en&amp;tbm=isch&amp;source=lnms&amp;ei=YihiT7yfBdK70AGBlK2YCA&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;sqi=2&amp;ved=0CF0Q_AUoAQ&amp;biw=1280&amp;bih=923#hl=en&amp;tbm=isch&amp;sa=1&amp;q=6.digital.caliper&amp;oq=6%22.digital&amp;aq=0S&amp;aqi=g-S4g-mS6&amp;aql=&amp;gs_sm=3&amp;gs_upl=131513l139894l0l141429l18l18l2l5l0l0l132l805l6.3l9l0&amp;gs_l=img.3.0.0i24l4j0i5i24l6.131513l139894l0l141429l18l18l2l5l0l0l132l805l6j3l9l0.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=ee5620cf03cd1033&amp;biw=1280&amp;bih=923\" rel=\"external\">6\" digital caliper</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">All the major components were drawn out on paper, to the dimensions of Eric Ingamells' own body, and the individual pieces made to fit the drawings.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">Due to the lack of precision machining and other design considerations, Ani is a few inches taller than his 5' 10\" creator.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">All joints in the human body are represented in some way in this design, except for the jaw.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">The wrists, the spine above the pelvis, and the neck all rotate and bend in a way similar to the human body.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">There are no mechanical stops to prevent over rotating or bending of the joints, except for those unavoidable in the inherent design of the joints.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">There are over 350 aluminum pieces, over 350 rivets, and around 150 tiny pieces of all thread in this model of the human body.  I didn't count them as I was building it, so I don't know the exact count.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">I have already designed upgrades to some of the joints, to give each upgraded joint a greater range of movement.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">This prototype is aluminum, so it can be modified fairly easily, but other models could be made of mild steel, stainless steel, hardened steel, plastics, titanium, spring steel, or just about anything that is sufficiently rigid.  Also, a company ordering Android Chassis' from us could specify specific modifications for their specific purpose, if I can get the right license deal.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">I picked the name Ani because I wanted something that wasn't in common use in the USA and I had an odd idea I wanted to follow.  The odd idea was to use the Japanese word for \"brother\" and have people call him their brother, even if they didn't know they were.  I'm extremely interested in anything Oriental, as well Asian people themselves, so it's not a stretch for me to want the name from that part of the world.  As it turns out, the word for \"<a href=\"http://japanese.about.com/bl_family.htm\" rel=\"external\">older brother</a>,\" when referring to your own family is \"ani.\"  This perfectly fits my idea of what I want the educational side of this android chassis to be.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Once I made the easy choice of using Ani for the name, I double checked the name in other languages using <a href=\"http://translate.google.com/\" rel=\"external\">Google Translate</a> to make sure it wasn't something offensive in other languages.  Here are the results of my searches: </td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\"><table style=\"width:100%\"><tr>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Azerbaijani:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">instant</td>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Irish:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">ANI (acronym?)</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Basque:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">multi</td>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Latin:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">the soul</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Czech:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">or</td>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Polish:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">or</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Filipino:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">yield</td>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Romanian:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">year</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Finnish:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">very</td>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Slovak:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">or</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Haitian Creole:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">pay</td>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Turkish:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">sudden</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Icelandic:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">Ani (name?)</td>".Chr(13);
    $HTMLCode .= "<td class=\"right\">Welsh:</td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">Ani (name?)</td>".Chr(13);
    $HTMLCode .= "</tr></table></td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Ani is a ruined and uninhabited medieval Armenian city-site situated in the Turkish province of Kars, according to <a href=\"http://en.wikipedia.org/wiki/Ani\" rel=\"external\">Wikipedia</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\"><a href=\"http://en.wikipedia.org/wiki/Ani_DiFranco\" rel=\"external\">Ani DiFranco</a> is no relation, but would be a great star for advertisements.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">In the <a href=\"http://www.starwars.com/explore/the-movies/\" rel=\"external\">Star Wars movie series</a>, Episodes 1 through 3 refer to <a href=\"http://starwars.wikia.com/wiki/Anakin_Skywalker#WikiaArticle\" rel=\"external\">Anakin Skywalker</a> by the nickname Ani.  This is the character who becomes <a href=\"http://en.wikipedia.org/wiki/Darth_Vader\" rel=\"external\">Darth Vader</a> in Episode 3, and becomes a <a href=\"http://en.wikipedia.org/wiki/Cyborg\" rel=\"external\">cyborg</a> after a <a href=\"http://starwars.wikia.com/wiki/Duel_on_Mustafar#WikiaArticle\" rel=\"external\">duel on Mustafar</a> with <a href=\"http://en.wikipedia.org/wiki/Obi-Wan_Kenobi\" rel=\"external\">Obi-Wan Kenobi</a> and loses.</td>".Chr(13);
  } elseif ($Num == 3){  // Uses
    $HTMLCode .= "<td rowspan=\"6\" class=\"top\"><img src=\"images/AniClose.JPG\" height=\"250\" alt=\"Maker Faire Display\"/></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">As I have mentioned before, I intend to sell Ani: The Android Chassis in two different ways.  The first is as kits, for kids and schools to purchase with the intention of learning about robotics, the human body, or any reason.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">The second, and simultaneous, direction is for commercial use in mass producing standardized humanoid robots or full androids.  There currently isn't anything on the market that fits this role, and since the American research into these types of devices is lacking, I'm hoping to give it a boost.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">Right now, if someone wants to develop an android, or otherwise humanoid robot, they have to design the shell, body, or frame before they even think about how they are going to attach the motors, servos, actuators, cables, or whatever, then as they are building it, they have to redesign the frame to make adjustments to fit the parts they chose.  With Ani: The Robot Chassis, designers will have much less work to do, since they will have the basic chassis to work with, and since it's an open framework, there's plenty of room for tools and fingers.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Even though it's an open frame, it can still be covered with any number of materials, to include thin plastic, sheet metal, or synthetic skin.  With an aluminum version, the designer can easily drill, tap, bend, or otherwise manipulate the frame.  Once the design is perfected, they can put the specified changes into a more rigid, custom version and mass produce the robot for less money and with less development time involved.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Ani: The Android Chassis already has all the joints in the human body represented, except for the jaw, so all the details are there to be used.  All of the joints are articulated, including the wrists, hips, and neck being able to rotate.  There is also plenty of room in the rib cage for full size computer components, so the developer can use any type and speed of computer to run the movements of all the joints.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Once these robots and androids are used in business, colleges and universities are going to need to train the next generation how to repair and build them.  They will also want them for their own robotics classes, since they will no longer need to spend so much time on building every part.  They can cover the most interesting and useful aspects of robotics: the electronics, pneumatics, and hydraulics as well as programming.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Also, when the general public sees these robots in actual use in businesses, they will want one.  Anyone with a technical, mechanical, or imaginative mind will be interested in building something on their own.  With kits available, they can do more than just cobble something together at home to approximate the design.  Instead, they can build the actual frame.  What's cooler than building the exact thing you originally thought was cool?</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">It's not just about being a copycat, either.  These same people are the type that might even go so far as to animate the piece(s) they buy.  In fact, a really motivated individual might even go so far as to build their own humanoid robot or android.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">The average garage inventor is mostly limited by their finances, but this leads to not having the tools to \"build stuff\" as well as not being able to afford the materials to build the \"stuff\" from.  If I can provide these kits at a reasonable cost, then it means these garage inventors need fewer tools as well as have the materials provided in the right size and shape already.  This lets the financial outlay to be reduced greatly.  Then there's the factor that they don't have to buy everything all at once, not to mention the lack of being stymied by the age old question, \"How do I build _____ with the materials I can get my hands on?\"  Well, at least when building androids and humanoid robots.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">In the end, it really comes down to one age old question: \"Why reinvent the wheel?\" In this case it's a humanoid robot frame, but the question is the same.  Why does each inventor, business, college, university, and basically everyone have to take the time to design their own version of the human body during the initial design and testing phase?  Sure, some companies may want to differentiate themselves by using their own body, or they might need a different size for a specific purpose, but it doesn't have to be a requirement.  </td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">My design, Ani: The Android Chassis, is here to fill a need that will only grow as more uses for humanoid robots and androids are found.  Here's the thing, just like all technologies that are generally useful, there will be uses found.  With it being the beginning of advanced humanoid robots and androids, there is a massive potential for this market.  Also, any technology or support structure for the rising market is going to rise with it.  This means that the more people who want an android, there will be more companies to meet that need, and they will need to get their frames from somewhere.  I'm taking steps to make me that supplier. What are you doing?</td>".Chr(13);
  }
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr></table>".Chr(13);
  return $HTMLCode;
}

function SSD($Num){
  $HTMLCode = "<table><tr>".Chr(13);
  if (($Num == 0) || ($Num > 3)){  // Overview
    $HTMLCode .= "<td rowspan=\"2\" class=\"top\"><img src=\"images/Toothpaste.jpg\" alt=\"Toothpaste Version\" width=\"250\" /></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">One day when I was over at his place playing <a href=\"http://en.wikipedia.org/wiki/Guitar_Hero\" rel=\"external\">Guitar Hero</a>, my best friend from high school told me about his kids painting the bathroom wall with toothpaste.  About an hour went by and I had this thought that there needs to be a way to limit the amount of toothpaste kids have access to, but still provide them enough to put on their toothbrush and do it themselves.  Later that night, in between sets, I figured out that if you took an empty toothpaste tube and put just enough toothpaste in it for the kid to use, then not only do you save yourself a mess to clean, but they don't realize they are being handed a basically empty tube.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Minutes later, I figured out that if you take a full size tube of toothpaste and put a nozzle on it so that you can squeeze toothpaste from that tube into a smaller one, then you're good to go.  Then I came up with making the kid sized tube not just empty, but have a smaller chamber for the adult to fill.  This chamber not only tells the adult how much to put in, but also allows the kid to actually squeeze the small amount out normally.  So now you have a nozzle for a regular sized tube of toothpaste and a kid sized tube that is basically empty, except for a small pocket ready to accept and push out the toothpaste.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">It was a short jump from toothpaste over to ketchup, mustard, and shampoo bottles, since these are also items that kids need to learn how to use and usually end up making messes, either by accident or intentionally.  The same idea of a chamber inside the full sized bottle, but these other bottles are large enough to not need a nozzle.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">So then I needed a name.  Since it was sort of \"short changing\" the kid with less toothpaste, ketchup, etc., and it was a \"one shot\" deal, I thought \"Short Shot\" was a very apt name.  It not only describes a little bit about the product, but it's obscure enough that kids wouldn't really understand it without it being explained, or maybe even after it's been explained, and I hadn't heard of a product with that name before.  After some internet searching for a product with that name, trademark searching, and weighing the lack of options, I decided to stick with it, calling the whole series \"Short Shot Dispensers.\"</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">While I have had good response to these products, I have had some negative remarks about having to constantly refill the dispensers or buying \"empty\" bottles.  It's true that after each use, the bottles would need to be refilled, but I've considered having a completely full bottle or tube and having a mechanical or electro-mechanical means of limiting the usage.  I haven't come up with a totally acceptable alternate yet, but that's what a R&amp;D department can ponder.</td>".Chr(13);
  } elseif ($Num == 1){  // Pictures
    $HTMLCode .= "<td class=\"cent\" colspan=\"3\">Click on the pictures below to see a larger version.</td>".Chr(13);
    for ($i=19;$i<24;$i++){
      $TheInfo = PicInfo($i);
      $HTMLCode .= "</tr><tr>".Chr(13);
      $HTMLCode .= "<td>&nbsp;</td>".Chr(13);
      $HTMLCode .= "</tr><tr>".Chr(13);
      if ($TheInfo[0] != ""){
        $HTMLCode .= "<td class=\"top\"><a href=\"index.php?NewBox=SSD&amp;Num=1&amp;Pic=".$i."\"><img src=\"images/".$TheInfo[0]."\" width=\"250\" style=\"border:0px\" alt=\"".$TheInfo[1]."\"/></a></td>".Chr(13);
      }
      $HTMLCode .= "<td class=\"left";
      if ($TheInfo[0] != ""){
        $HTMLCode .= "middle\"";
      } else {
        $HTMLCode .= "top\" colspan=\"2\"";
      }
      $HTMLCode .= ">".$TheInfo[2]."</td>".Chr(13);
    }
  } elseif ($Num == 2){  // Details
    $HTMLCode .= "<td rowspan=\"8\" class=\"top\"><img src=\"images/Condiments.jpg\" width=\"250\" alt=\"Condiments Version, Colored and Labeled\" /></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">The current product is basically a tube or bottle that is to be squeezed to dispense a liquid, paste, or gel product, only instead of a full bottle or tube, there is only a small volume of the dispenser that contains the product, but the user doesn't notice the difference.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">The cavity in the current prototypes is a thin plastic membrane that is permanently bonded to the dispenser and is activate by the air pressure in the bottle when a user squeezes the bottle.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">The membrane can be a washable permanent part of the bottle, an inner liner than can be removed, or a one-time use insert.  The removable liner can be reusable or it can be disposable after a few uses.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">These dispensers can be sold individually or as sets, such as a picnic set which includes ketchup and mustard bottles as well as mayonnaise and relish bottle, or a bathroom set which would include shampoo and toothpaste dispensers with multiple screw-on adapters for each brand of toothpaste, since they all use a different thread on their toothpaste tube.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Some of the mechanical or electro-mechanical alternates I've considered use a ratcheting action, activated by the squeezing of the dispenser, or compressed gasses.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Some of the options not mentioned before include hand sanitizer, body moisturizers, sun screen, hair products, milk, juice, and cereal.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">The Short Shot Dispensers geared towards portion control for food uses would need to have a seal for freshness.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Some dispensers may need to have specialized labels for accuracy of contents, such as the difference between <a href=\"http://en.wikipedia.org/wiki/Mayonnaise\" rel=\"external\">mayonnaise</a> and <a href=\"http://en.wikipedia.org/wiki/Miracle_Whip\" rel=\"external\">Miracle Whip</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Some research and development would need to go into producing versions for dry, or otherwise solid, products.</td>".Chr(13);
  } elseif ($Num == 3){  // Uses
    $HTMLCode .= "<td rowspan=\"4\" class=\"top\"><img src=\"images/Shampoo.jpg\" alt=\"Shampoo Version, Colored and Labeled\" height=\"250\" /></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">Even though I started with toothpaste, it can be used for many other products, just like the ketchup, mustard, and shampoo that I mentioned before.  It can basically be used for anything that kids need to learn about portion control.  Right now it's for liquids, but with a little refinement can probably be used for solids, such as salt, pepper, sugar, and whatever else comes to mind.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">These dispensers have more widespread use than just for kids, even though parents around the world would be interested in these products.  People who have muscular control issues, such as those who have multiple sclerosis, have had a stroke, or were seriously injured can use these products during rehabilitation.  Their caretakers can worry less about cleaning up messes, and the person being rehabilitated can be less frustrated about making those messes.  The caretaker doesn't have to hover as much or simply do it for their patient, and can allow their patient to have the freedom that is the ultimate goal of the rehab.  On the flip side, the patient doesn't suffer the humiliation of being \"babied\" and can feel more confident in their recovery, which in turn allows recovery to happen faster.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">There are also applications for use in nursing homes and in other care homes, such as those who service those who are mentally deficient.  This last definition could encompass those in mental institutes or those who were born with mental deficiency, such as Down's Syndrome.  Sometimes people in any of these instances can have tantrums or be mischievous.  Of course, everyone can have these moments, but regardless the reason, the Short Shot Dispensers will reduce the mess created when the havoc starts.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Can you think of what it would be to try starting a food fight, and not have ketchup and mustard for ammo?  Why even have food fights at that point?  This is my train of thought when I came up with these products.  Even if they do still use the Short Shot Dispensers in the food fight, there's going to be considerably less mess to clean, and simply by reducing the amount of mustard available, you're saving yourself a lot of staining potential.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">The version where it is a full bottle that dispenses only a certain amount each time has restaurant and cafeteria uses.  It could reduce the amount of condiments that are over used or wasted by customers, thereby reducing the cost of running the restaurant and cafeteria.  This means that the food can be produced at lesser cost, and can mean greater earning potential for the owner or reduced cost of the food.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">While doing the write-up for this site, I realize that there many types of food that can use this type of dispenser.  These dispensers can be used for a huge variety of food, just to mention one category.  These dispensers can be carefully measured portions for home or restaurant use.  Right now, people who have to worry about portions have to use measuring cups or a scale, sometimes a reference book to calculate calories for general measurements.  This is often distracting from the meal, or even too clumsy to be practical and the user may give up.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">The Short Shot Dispensers being used by people trying to limit their food intake would act as a buffer so that they would not only see the correct amount of food to eat, but it would also act as an easy way to measure the food.  These people could have these prefilled and then they can have the correct portions available whenever they need it, such as when they are rushing in the morning to get to work.  Many dieticians will agree that a large part of over eating is the mental aspect of seeing the correct portions versus just putting what a person thinks is the correct portion on their plate.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Then again, portion control isn't always about losing weight.  Having an eating disorder can go the other way, so that someone trying to recover from eating too little would see the correct amount to eat and not be overwhelmed by a full box of cereal, for instance.  In this case, their goal would be not to eat that little of a portion, but to eat that much of a portion, which would be the correct portion regardless of needing to lose or gain weight.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">This would also be a way to not advertise to everyone that they are on a diet, since the dispensers wouldn't look significantly different from the standard container.  Co-workers and visitors wouldn't notice the difference, unless they were using the same system.  Another part of being on any sort of diet is the peer pressure that can sometimes be against it, so if you prevent people from knowing about something, they can't talk you out of it or simply make unkind comments about it.  Also, since it's in plain sight, it's not a secret.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Portion control isn't just about eating food, but about making food, too.  Foods in restaurants and in the home can be made easier and faster by using containers that dispense a premeasured amount, which also helps reduce the amount of cleanup afterward.</td>".Chr(13);
  }
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr></table>".Chr(13);
  return $HTMLCode;
}

function JMB($Num){
  $HTMLCode = "<table><tr>".Chr(13);
  if (($Num == 0) || ($Num > 3)){  // Overview
    $HTMLCode .= "<td rowspan=\"6\" class=\"top\"><img src=\"images/Jigsaw1.JPG\" alt=\"Maker Fair Display\" height=\"250\" /></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">The Jigsaw Miter Box is a merging, as well as a twist, of current technology.  We have <a href=\"http://www.google.com/search?q=compound+miter+saw&amp;hl=en&amp;safe=active&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=eUtzT7GlOcH-ggfl79BV&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;sqi=2&amp;ved=0CF8Q_AUoAQ&amp;biw=1280&amp;bih=923#hl=en&amp;safe=active&amp;tbm=isch&amp;sa=1&amp;q=jig+saw&amp;oq=jig+saw&amp;aq=f&amp;aqi=g-s3g1g-s1g1g-s4&amp;aql=&amp;gs_l=img.3..0i10l3j0j0i10j0j0i10l4.16129l18111l0l19904l7l7l0l0l0l0l151l640l5j2l7l0.frgbld.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=44eba782c413e5e2&amp;biw=1280&amp;bih=923\" rel=\"external\">jigsaws</a>, <a href=\"http://www.google.com/search?q=compound+miter+saw&amp;hl=en&amp;safe=active&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=eUtzT7GlOcH-ggfl79BV&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;sqi=2&amp;ved=0CF8Q_AUoAQ&amp;biw=1280&amp;bih=923#hl=en&amp;safe=active&amp;tbm=isch&amp;sa=1&amp;q=miter+box&amp;oq=miter+box&amp;aq=f&amp;aqi=g3g-m7&amp;aql=&amp;gs_l=img.3..0l3j0i5l7.30962l32399l2l32816l9l9l0l0l0l0l164l978l5j4l9l0.frgbld.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=44eba782c413e5e2&amp;biw=1280&amp;bih=923\" rel=\"external\">miter boxes</a>, and <a href=\"http://www.google.com/search?q=compound+miter+saw&amp;hl=en&amp;safe=active&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=eUtzT7GlOcH-ggfl79BV&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;sqi=2&amp;ved=0CF8Q_AUoAQ&amp;biw=1280&amp;bih=923\" rel=\"external\">compound miter saws</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">I needed something to cut aluminum strips for <a href=\"index.php?NewBox=ATAC&amp;Num=0\">Ani: The Android Chassis</a>, so I first tried using what I had, which was a hack saw and miter box.  After about 2 minutes, I had the first piece cut and was breathing hard.  Another 10 minutes and I knew I needed something better.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">I considered lots of options, including <a href=\"http://www.google.com/search?tbm=isch&amp;hl=en&amp;source=hp&amp;biw=1280&amp;bih=923&amp;q=chop+saw&amp;gbv=2&amp;oq=chop+saw&amp;aq=f&amp;aqi=g10&amp;aql=&amp;gs_l=img.3..0l10.1094l2451l0l2851l8l8l0l0l0l0l89l447l8l8l0.frgbld.\" rel=\"external\">chop saws</a>, <a href=\"http://www.google.com/search?tbm=isch&amp;hl=en&amp;source=hp&amp;biw=1280&amp;bih=923&amp;q=chop+saw&amp;gbv=2&amp;oq=chop+saw&amp;aq=f&amp;aqi=g10&amp;aql=&amp;gs_l=img.3..0l10.1094l2451l0l2851l8l8l0l0l0l0l89l447l8l8l0.frgbld.#hl=en&amp;gbv=2&amp;tbm=isch&amp;sa=1&amp;q=table+saw&amp;oq=table+saw&amp;aq=f&amp;aqi=g10&amp;aql=&amp;gs_l=img.3..0l10.30973l31788l0l32444l6l6l0l0l0l1l117l475l5j1l6l0.frgbld.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=44eba782c413e5e2&amp;biw=1280&amp;bih=923\" rel=\"external\">table saws</a>, and <a href=\"http://www.google.com/search?tbm=isch&amp;hl=en&amp;source=hp&amp;biw=1280&amp;bih=923&amp;q=chop+saw&amp;gbv=2&amp;oq=chop+saw&amp;aq=f&amp;aqi=g10&amp;aql=&amp;gs_l=img.3..0l10.1094l2451l0l2851l8l8l0l0l0l0l89l447l8l8l0.frgbld.#hl=en&amp;gbv=2&amp;tbm=isch&amp;sa=1&amp;q=Throatless+Shear&amp;oq=Throatless+Shear&amp;aq=f&amp;aqi=g1g-S4g-mS5&amp;aql=&amp;gs_l=img.3..0j0i24l4j0i5i24l5.195533l195533l2l196908l1l1l0l0l0l0l57l57l1l1l0.frgbld.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=44eba782c413e5e2&amp;biw=1280&amp;bih=923\" rel=\"external\">throatless shears</a>, to name the front runners.  First off: I live in an apartment, secondly: I don't have a lot of money to spend, and thirdly: even though I have a garage, it doesn't have power and I'm not going to drag everything from my garage to outside my apartment and run an extension cord each time I want to work on things.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">So, I needed something that wouldn't throw a bunch of dust everywhere, wouldn't make a lot of noise, and wouldn't cost much of anything.  At $140 the local <a href=\"http://www.harborfreight.com\" rel=\"external\">Harbor Freight</a> had the throatless shears, but that was still more than I wanted to spend.  Yep, I'm cheap.  I started looking around my garage for things I could use instead, and thought of the jigsaw.  It's small, would cut the pieces I wanted, but holding it steady to get a straight cut would be a nightmare.  After a bit of thinking, I thought about my miter box and came up with a way to attach the jigsaw to it.  Then came making it stable and keeping the bolts from damaging things.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">I ended up cutting and bending some sheet metal into the piece that holds the jigsaw, bolting it to a large hinge, bolting that to a thick steel plate, adding steel pieces that were bent into a \"W\" for feet, and adding the miter box to it all.  I attached the jigsaw to this contraption with large <a href=\"http://www.google.com/search?tbm=isch&amp;hl=en&amp;source=hp&amp;biw=1280&amp;bih=923&amp;q=chop+saw&amp;gbv=2&amp;oq=chop+saw&amp;aq=f&amp;aqi=g10&amp;aql=&amp;gs_l=img.3..0l10.1094l2451l0l2851l8l8l0l0l0l0l89l447l8l8l0.frgbld.#hl=en&amp;gbv=2&amp;tbm=isch&amp;sa=1&amp;q=hose+clamps&amp;oq=hose+clamps&amp;aq=f&amp;aqi=g2g-m8&amp;aql=&amp;gs_l=img.3..0l2j0i5l8.153053l156829l6l156956l17l17l3l1l0l0l306l1276l8j4j0j1l13l0.frgbld.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=44eba782c413e5e2&amp;biw=1280&amp;bih=923\" rel=\"external\">hose clamps</a>.  Because of the way it's attached and the thickness of the wall of the miter box used, I had to remove all the safety equipment from the blade area.  I then added a <a href=\"http://www.google.com/search?tbm=isch&amp;hl=en&amp;source=hp&amp;biw=1280&amp;bih=923&amp;q=chop+saw&amp;gbv=2&amp;oq=chop+saw&amp;aq=f&amp;aqi=g10&amp;aql=&amp;gs_l=img.3..0l10.1094l2451l0l2851l8l8l0l0l0l0l89l447l8l8l0.frgbld.#hl=en&amp;gbv=2&amp;tbm=isch&amp;sa=1&amp;q=clutch+cable&amp;oq=clutch+cable&amp;aq=f&amp;aqi=g4g-m6&amp;aql=&amp;gs_l=img.3..0l4j0i5l6.24572l26172l24l27371l6l6l0l0l0l0l120l388l5j1l6l0.frgbld.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=44eba782c413e5e2&amp;biw=1280&amp;bih=923\" rel=\"external\">clutch cable</a> going to a foot pedal I made out of some more sheet metal and another hinge.  The cable goes around the handle and pulls the trigger so you can keep both hands on the piece you are cutting, or out of the way and safe.  I also added a scrap piece of aluminum stripping to act as an automatic shutoff, since the cable didn't like to let the trigger release on it's own.  Of all the stuff I used, I had to buy only the 2 hose clamps and the cable.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">I used this setup to cut over 200 pieces for <a href=\"index.php?NewBox=ATAC&amp;Num=0\">Ani: The Android Chassis</a>.  The jigsaw eventually broke so that the motor would run, but it wouldn't engage the cutting blade.  Since this is a generic setup, I could easily put in another jigsaw, <a href=\"http://www.google.com/search?tbm=isch&amp;hl=en&amp;source=hp&amp;biw=1280&amp;bih=923&amp;q=chop+saw&amp;gbv=2&amp;oq=chop+saw&amp;aq=f&amp;aqi=g10&amp;aql=&amp;gs_l=img.3..0l10.1094l2451l0l2851l8l8l0l0l0l0l89l447l8l8l0.frgbld.#hl=en&amp;gbv=2&amp;tbm=isch&amp;sa=1&amp;q=saws+all&amp;oq=saws+all&amp;aq=f&amp;aqi=g-s10&amp;aql=&amp;gs_l=img.3..0i10l10.219538l219650l12l220113l3l3l2l0l0l0l71l71l1l1l0.frgbld.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=44eba782c413e5e2&amp;biw=1280&amp;bih=923\" rel=\"external\">saws all</a>, or anything similar.  <a href=\"http://www.google.com/search?tbm=isch&amp;hl=en&amp;source=hp&amp;biw=1280&amp;bih=923&amp;q=chop+saw&amp;gbv=2&amp;oq=chop+saw&amp;aq=f&amp;aqi=g10&amp;aql=&amp;gs_l=img.3..0l10.1094l2451l0l2851l8l8l0l0l0l0l89l447l8l8l0.frgbld.#hl=en&amp;gbv=2&amp;tbm=isch&amp;sa=1&amp;q=oscillating+tool&amp;oq=oscillating+tool&amp;aq=f&amp;aqi=&amp;aql=&amp;gs_l=img.3...47863l51510l18l51590l4l4l0l0l0l0l130l251l2j1l3l0.frgbld.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=44eba782c413e5e2&amp;biw=1280&amp;bih=923\" rel=\"external\">Oscillating tools</a> would work here, too, just not as well with the thick sided miter box I am currently using.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Because of the metal blade and speed setting, I could cut a piece of aluminum strip in about 30 seconds, and not be exhausted after only 5 pieces.  It's not the quietest thing in the world, and in fact is quite noisy, but after bringing in my small <a href=\"http://www.google.com/search?q=shop+vac&amp;hl=en&amp;gbv=2&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=mqN8T5y4O9Gn0AHio9DiCw&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;ved=0CF8Q_AUoAQ&amp;biw=1280&amp;bih=923\" rel=\"external\">shop vac</a> to suck up dust as I cut, it satisfied most of my requirements, which were cheap, quiet, no mess, and not exhausting to use.  I figured 3 out of 4 wasn't bad and hoped that my neighbors wouldn't be too unhappy about my decision.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">To mitigate the noise, I placed the Jigsaw Miter Box on a foam pad, which helped keep the table from rattling and sending noise directly into the ceiling of the lady who lives below me.  By the way, did I mention that I was doing this on my kitchen table?  I had my drill press setup there, too.  As old as it was and being made of <a href=\"http://www.google.com/search?q=particle+board&amp;hl=en&amp;gbv=2&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=e6N8T5mRHurh0QG5tfTgCw&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;ved=0CCgQ_AUoAQ&amp;biw=1280&amp;bih=923\" rel=\"external\">particle board</a>, I'm surprised the table didn't break in the year it took me to finish <a href=\"index.php?NewBox=ATAC&amp;Num=0\">Ani: The Android Chassis</a>.</td>".Chr(13);
  } else if ($Num == 1){  // Pictures
    $TheInfo = array();
    $HTMLCode .= "<td class=\"cent\" colspan=\"3\">Click on the pictures below to see a larger version.</td>".Chr(13);
    for ($i=31;$i<38;$i++){
      $TheInfo = PicInfo($i);
      $HTMLCode .= "</tr><tr>".Chr(13);
      $HTMLCode .= "<td class=\"topcent\"><a href=\"index.php?NewBox=JMB&amp;Num=1&amp;Pic=".$i."\"><img src=\"images/".$TheInfo[0]."\" alt=\"".$TheInfo[1]."\" height=\"260\" style=\"border:0px\"/></a></td>".Chr(13);
      $HTMLCode .= "<td class=\"left\">".$TheInfo[2]."</td>".Chr(13);
    }
  } else if ($Num == 2){  // Details
    $HTMLCode .= "<td rowspan=\"10\" class=\"top\"><img src=\"images/JSMB_CloseSide.JPG\" alt=\"Side View, Close Up\" height=\"250\" /></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">With little to no modifications, the base of the Jigsaw Miter Box can hold any reciprocating or oscillating tools.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">To minimize noise, a shock absorber could be built into the tool cradle or legs.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">In order to cut large pieces, a tool with a longer blade could be used.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">A miter box with thin walls should be used to maximize the blade stroke.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">I used a shop vac to reduce the mess of cutting, so an attachment for the hose of shop vacs can be attached to either the miter box, where the blade enters the box, or to the end of the tool, so that it swings out of the way when the tool is raised.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">A different type of stand can be used to allow angled cuts, just like a regular <a href=\"http://www.google.com/search?q=compound+miter+saw&amp;hl=en&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=OIl0T_hBovXSAZDkxP8C&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;sqi=2&amp;ved=0CHMQ_AUoAQ&amp;biw=1280&amp;bih=923\" rel=\"external\">compound miter saw</a>, leaving off the miter box entirely.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">Currently a foot pedal is hooked up to pull the trigger via a cable, which could be replaced with a pedal that interrupts the electricity instead.</td>".Chr(13);
  } else if ($Num == 3){  // Uses
    $HTMLCode .= "<td rowspan=\"8\" class=\"top\"><img src=\"images/JSMB_Close.JPG\" alt=\"Top View, Close Up\" height=\"250\" /></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">I used this prototype to cut small pieces of primarily 1/2\" wide, 1/8\" thick aluminum strips, but it can be used for other materials, if a longer blade is used.  Regardless, this would probably be a \"detail\" tool, such as a <a href=\"http://www.google.com/search?q=compound+miter+saw&amp;hl=en&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=OIl0T_hBovXSAZDkxP8C&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;sqi=2&amp;ved=0CHMQ_AUoAQ&amp;biw=1280&amp;bih=923#hl=en&amp;tbm=isch&amp;sa=1&amp;q=scroll+saw&amp;oq=scroll+saw&amp;aq=f&amp;aqi=g10&amp;aql=&amp;gs_l=img.3..0l10.12368562l12369377l0l12369520l6l6l0l0l0l0l106l434l5j1l6l0.frgbld.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=44eba782c413e5e2&amp;biw=1280&amp;bih=923\" rel=\"external\">scroll saw</a>, rather than a \"quantity\" tool, such as a <a href=\"http://www.google.com/search?q=compound+miter+saw&amp;hl=en&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=OIl0T_hBovXSAZDkxP8C&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;sqi=2&amp;ved=0CHMQ_AUoAQ&amp;biw=1280&amp;bih=923#hl=en&amp;tbm=isch&amp;sa=1&amp;q=circular+saw&amp;oq=circular+saw&amp;aq=f&amp;aqi=g10&amp;aql=&amp;gs_l=img.3..0l10.44029l46525l2l46684l9l9l0l0l0l1l739l1215l8j6-1l9l0.frgbld.&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=44eba782c413e5e2&amp;biw=1280&amp;bih=923\" rel=\"external\">circular saw</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">This could be used to cut small square or round stock of various materials.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">Small PVC, copper, or other pipe could easily be precision cut with the Jigsaw Miter Box.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">While I'm sure there are many uses for this product, I can't think of any others at this point in time.  </td>".Chr(13);
  }
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr></table>".Chr(13);
  return $HTMLCode;
}

function RT($Num){
  $HTMLCode = "<table><tr>".Chr(13);
  if (($Num == 0) || ($Num > 3)){  // Overview
    $HTMLCode .= "<td rowspan=\"4\"><img src=\"images/RotToyV1.JPG\" alt=\"Side View\" height=\"250\" /></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">I was at the <a href=\"http://www.traveliowa.com/attractiondetails.aspx?cat=1&amp;id=9&amp;destid=1524885\" rel=\"external\">Eco-Arts Festival</a>, volunteering at their <a href=\"http://www.scrapyardchallenge.com/\" rel=\"external\">ScrapYard Challenge</a> with the <a href=\"http://iowainventorsgroup.org\" rel=\"external\">Iowa Inventors Group</a>, and I decided to make something while I was supervising the area.  The main contact there was Jonah Brucker-Cohen from <a href=\"http://www.coin-operated.com/\" rel=\"external\">Coin-Operated.com</a> and he had a <a href=\"http://www.coin-operated.com/coinop29/2010/05/02/drawbot-2001/\" rel=\"external\">DrawBot</a> that I thought was the idea of the workshop: build other drawing robots.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">I found a toy battle bot that had a wired remote and arms that rotated around the main body.  There were places for armor or weapons to be attached and fall off as it did battle with the matching toy next to it, as well as the permanent tapered cylinder arms.  I took one of the robots I found, stripped off the carapace and decided to make it autonomous.  I was going to take markers to the ends of the arms of the Rotating Toy, after I made the toy autonomous.  This was a real simple toy to drive, so that as you backed up, it turned.  I had the toy go in \"reverse\" so it would always turn, so I thought it would make a nice circle path while the markers rotated around, making a weaved pattern.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">As it turns out, the large piece of paper wasn't nearly big enough for the huge circle this drove in nor did it go in a perfect circle, which I found out when doing a test run before adding the markers.  That test run ended up being the only run, too, since I didn't end up adding the markers.  I didn't want to mess up the floor or have to clean up afterwards.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">The real purpose of this <a href=\"http://www.scrapyardchallenge.com/\" rel=\"external\">ScrapYard Challenge</a> was to make an <a href=\"http://en.wikipedia.org/wiki/Electronic_musical_instrument\" rel=\"external\">electronic musical instrument</a>.  As I was trying to build a second project, a 3 year old little girl and her mother came in.  The mother told me later that her daughter followed the Rotating Toy for about 3 hours.  The little girl would just follow it around the floor, pick it up and right it when it fell over, or get it out of tight spaces when it got stuck.  As a by-product of it being a battle bot and me not adding markers, it turns out it was very adept at getting out of corners and going around obstacles, due to the rotating arms.  As a drawbot, it was a moderate failure, unless there was a room with paper covering the whole floor, but as an obstacle avoidance robot, it was a moderate success.  Also, as a babysitter, it was a total success.  The mother wanted to buy it from me right then and there.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">I didn't know that the projects that each person completed at the <a href=\"http://www.scrapyardchallenge.com/\" rel=\"external\">ScrapYard Challenge</a> were free to take home, so I declined the offer.  I now am working on building two new versions, so that I can be talking about the one I have in my hand while there are two others driving around, being working demonstration examples.  Unfortunately, I don't know what the original toy was called, so I have to make the new versions differently.</td>".Chr(13);
  } else if ($Num == 1){  // Pictures
    $TheInfo = array();
    $HTMLCode .= "<td class=\"cent\" colspan=\"3\">Click on the pictures below to see a larger version.</td>".Chr(13);
    for ($i=24;$i<31;$i++){
      $TheInfo = PicInfo($i);
      $HTMLCode .= "</tr><tr>".Chr(13);
      $HTMLCode .= "<td class=\"topcent\"><a href=\"index.php?NewBox=RT&amp;Num=1&amp;Pic=".$i."\"><img src=\"images/".$TheInfo[0]."\" alt=\"".$TheInfo[1]."\" height=\"260\" style=\"border:0px\"/></a></td>".Chr(13);
      $HTMLCode .= "<td class=\"left\">".$TheInfo[2]."</td>".Chr(13);
    }
  } else if ($Num == 2){  // Details
    $HTMLCode .= "<td class=\"left\" rowspan=\"8\"><img src=\"images/V1SideGears.JPG\" alt=\"Very Close Up\" height=\"250\" /></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">I'm a mechanically minded guy, but I refuse to take this thing apart.  I'm afraid I won't be able to put it back together, so I don't really know 100% how it all works.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">There are two parts to this toy, one that drives it around and one that spins the arms around, and they each have their own motors.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">The battery box has room for 4 AA batteries, and I am using some for the drive motor and some for the spinner motor.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">Because of the way the gears work for the spinning section, it has lots of power to move itself to go around obstacles, but if it turns over, it starts slipping gears.  It's kind of funny to hear, since it sounds like it's mad it fell over.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">The original model is only autonomous, but the new models have the option to be autonomous or controlled by a wireless remote.  Since the vehicles I made them from were radio controlled, I left those circuits in and added switches so they could be used either way. </td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">The newer models have black shells that were made from <a href=\"http://www.google.com/search?q=Country+Crock&amp;hl=en&amp;safe=active&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=qDB7T8-5C6T30gHq682bBg&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;ved=0CC8Q_AUoAQ&amp;biw=1280&amp;bih=923\" rel=\"external\">Country Crock</a> tubs and the <a href=\"http://www.google.com/search?q=traffic+cones&amp;hl=en&amp;safe=active&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=0qV8T-bLJuH30gGJrZyFDA&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;ved=0CF0Q_AUoAQ&amp;biw=1280&amp;bih=923\" rel=\"external\">traffic cones</a> that came with the forklifts.  I cut out holes for the cones, placed them, then put a second tub inside to prevent the cones from coming out.  I glued everything together with <a href=\"http://www.google.com/search?q=JB+Weld&amp;hl=en&amp;safe=active&amp;prmd=imvnso&amp;source=lnms&amp;tbm=isch&amp;ei=vlB7T7-IM4nZ0QHO_K2jBg&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;ved=0CDsQ_AUoAQ&amp;biw=1280&amp;bih=923\" rel=\"external\">JB Weld</a>.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">In the newer models, a <a href=\"http://www.google.com/search?q=radio+controlled+forklift&amp;hl=en&amp;safe=active&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=v057T9HRKcLs0gGjwP38BQ&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;ved=0CGYQ_AUoAQ&amp;biw=1280&amp;bih=923\" rel=\"external\">radio controlled forklift</a> forms the driving base and half of a <a href=\"http://www.google.com/search?q=trek+bot&amp;hl=en&amp;safe=active&amp;biw=1280&amp;bih=923&amp;prmd=ivns&amp;source=lnms&amp;tbm=isch&amp;ei=YWi5T-7JIo7UgAfLu_W5Cg&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;ved=0CAcQ_AUoAQ\" rel=\"external\">Trek bot</a> is used for the top half, spinning portion.</td>".Chr(13);
  } else if ($Num == 3){  // Uses
    $HTMLCode .= "<td class=\"left\" rowspan=\"4\"><img src=\"images/RotToyV2.JPG\" alt=\"Second Generation Prototype\" height=\"250\" /></td>".Chr(13);
    $HTMLCode .= "<td class=\"left\">As you might have guessed, this is a toy for kids.  However, it could be used for pets as well.  Consider putting a laser pointer on this thing, and you can just imagine pets going nuts for it.  With the wireless remote control, it wouldn't have to just roam, you could have it dodge or chase the pet or child for some extra fun.  I'm not trying to be mean, I'm just reminding you that even for kids and pets, repetition can be a very tiring and boring thing.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">A friend I used to hang out with used to be afraid of robots, and it was fun watching him run away from this little guy (version 1).  He would jump on a chair and then this would come by and get stuck trying to get around the chair legs.  My friend would freak out saying it was trying to kill him.  Later, this friend got over his fear and started building <a href=\"http://www.google.com/search?q=Gundam+figurines&amp;hl=en&amp;safe=active&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;ei=eSd7T52uGOG80AGIiISdBg&amp;sa=X&amp;oi=mode_link&amp;ct=mode&amp;cd=2&amp;ved=0CD8Q_AUoAQ&amp;biw=1280&amp;bih=923\" rel=\"external\">Gundam figurines</a>.</td>".Chr(13);
  }
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr></table>".Chr(13);
  return $HTMLCode;
}

function Other($Num){
  $HTMLCode = "<table class=\"left\"><tr>".Chr(13);
  if ($Num != 1){  // Intro
    $HTMLCode .= "<td class=\"left\">Here are some examples of projects that I have built, but aren't able to be patented, since they aren't exactly inventions, the enhancement is so minor that a patent would be a waste, or I've had it too long and it is unpatentable.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">For instance, my <a href=\"index.php?NewBox=Other&amp;Num=1\">Bike Desk</a> is a stationary bike that has a place for your keyboard and mouse instead of handles.  This is not a novel concept.  I simply wanted one without having to spend money on it.  It's not like <a href=\"http://www.google.com/search?q=bike+desk&amp;hl=en&amp;prmd=imvns&amp;tbm=isch&amp;tbo=u&amp;source=univ&amp;sa=X&amp;ei=I_WvT7FuiPSCB47x6IwJ&amp;sqi=2&amp;ved=0CK4BELAE&amp;biw=1440&amp;bih=787#hl=en&amp;tbm=isch&amp;sa=1&amp;q=stationary+bike+desk&amp;oq=stationary+bike+desk&amp;aq=f&amp;aqi=g1g-S1&amp;aql=&amp;gs_l=img.3..0j0i24.22841.25197.0.25550.11.11.0.0.0.2.155.1305.0j11.11.0...0.0.0u4kPuHhBcI&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&amp;fp=46a19235ed3ff20a&amp;biw=1440&amp;bih=787\" rel=\"external\">stationary bike desks</a> are sold around my city anyway.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">I will be adding more stuff to this list as I can, since I don't currently have pictures or drawings of most things.  I could always give a long winded explination of the things I have built and designs, but that would be boring (for both of us) and a picture is worth 1000 words anyway.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  } else if ($Num == 1){  // Bike Desk
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">To make it perectly clear why I built this, I'm going to let you know that I'm fat, out of shape, and frugal.  That said, I wanted to lose weight, get into better condition, not spend much money, and do it while still getting work done.  I've gone on bike trails, and they are boring.  Also, I have lots of muscle and need to tone it down instead of make more muscle.  Going up hills, accelerating, and going fast all make muscle, and I want to get lean(er) muscles so that clothes fit right.  Even when I was 155 lbs, straight out of 5 months of Army Basic and AIT training, I had to wear large clothes.  I had a 40\" chest, 16.5\" neck, and massive legs.  I now weigh... let's just call it \"a lot more\" and I have much larger dimensions because of it, of course.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">So, what I wanted was a way to lean up my muscles, burn calories, keep from being bored, distract myself from the discomfort and sometimes pain of exercising, and still get work done.  I decided a stationary bike that had a desk instead of handles would work perfect.  Now all I had to do was build it.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $TheInfo = array();
    for ($i=38;$i<47;$i++){
      $TheInfo = PicInfo($i);
      $HTMLCode .= "</tr><tr>".Chr(13);
      $HTMLCode .= "<td class=\"topcent\"><a href=\"index.php?NewBox=Other&amp;Num=1&amp;Pic=".$i."\"><img src=\"images/".$TheInfo[0]."\" alt=\"".$TheInfo[1]."\" width=\"220\" style=\"border:0px\"/></a></td>".Chr(13);
      $HTMLCode .= "<td class=\"left\">".$TheInfo[2]."</td>".Chr(13);
    }
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\" colspan=\"2\">You would think that after all that work, I would be using it right now as I write this.  Unfortunately, no I'm not.  I had an exhausting week at work, and another one is probably coming up, so I'm not bothering.  I honestly don't know when I'm going to be using it next, but it'll be there when I have the opportunity.  The day after I finished this project, I did use it, so it's not a total waste.  Also, I burned a lot of calories while I was making it.</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    $HTMLCode .= "<td class=\"cent\" colspan=\"2\">Click on the pictures above to see a larger version.</td>".Chr(13);

//  } else if ($Num == 2){  // More To Come

  }
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr></table>".Chr(13);
  return $HTMLCode;
}

function Legal(){
  $HTMLCode = "<table class=\"left\"><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">All trademarks, trade names, service marks, and logos referenced within this website belong to their respective companies.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">Eric Ingamells retains any and all legal rights on any product, invention, or device mentioned on this website as built or designed by Eric Ingamells. This site is to be considered <a href=\"http://en.wikipedia.org/wiki/Prior_art\" rel=\"external\">prior art</a> by way of <a href=\"http://www.galvanilegal.com/public-disclosure-and-filing-a-patent-application\" rel=\"external\">public disclosure</a>, unless otherwise stated, and as such cannot be patented by anyone other than Eric Ingamells.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">Eric Ingamells retains any and all legal rights on any picture, image, drawing, article, note, idea, or other typed information on this site by way of U.S. <a href=\"http://en.wikipedia.org/wiki/Copyright\" rel=\"external\">copyright</a> protection.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">All other rights reserved, as provided by the <a href=\"http://www.uspto.gov/\" rel=\"external\">United Stated Patent and Trademark Office</a>.</td>".Chr(13);
  $HTMLCode .= "</tr><tr>".Chr(13);
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr></table>".Chr(13);
  return $HTMLCode;
}

function ShowArticles($Num){
  $TheInfo = Articles($Num);
  $HTMLCode = "<table class=\"left\"><tr>".Chr(13);
  for ($i=0;$i<count($TheInfo);$i++){
    $HTMLCode .= "<td class=\"left\">".$TheInfo[$i]."</td>".Chr(13);
    $HTMLCode .= "</tr><tr>".Chr(13);
    if ($i<count($TheInfo)-1){
      $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
      $HTMLCode .= "</tr><tr>".Chr(13);
  } }
  $HTMLCode .= "<td class=\"left\">&nbsp;</td>".Chr(13);
  $HTMLCode .= "</tr></table>".Chr(13);
  return $HTMLCode;
}

function ShowNames($Num2){
  global $NewBox;
  if ($Num2 < 0){
    return "&nbsp;";
  } elseif ($NewBox != "Index"){
    $HTMLCode = "<table class=\"cent\"><tr><td class=\"left\" id=\"Information\"><a href=\"index.php?NewBox=Articles&amp;Num=0\" class='menu";
    if (($Num2 == 0) || ($Num2 > 1)){
      $HTMLCode .= "2";
    }
    $HTMLCode .= "'>Information</a></td>".Chr(13);
    $HTMLCode .= "</tr><tr><td class=\"left\" id=\"PopSci\"><a href=\"index.php?NewBox=Articles&amp;Num=1\" class='menu";
    if ($Num2 == 1){
      $HTMLCode .= "2";
    }
    $HTMLCode .= "'>Popular Science</a></td>".Chr(13);
//    $HTMLCode .= "</tr><tr><td onclick=\"javascript:window.location='index.php?NewBox=Articles&amp;Num=2'\"><a href=\"index.php?NewBox=Articles&amp;Num=2\" class='menu";
//    if ($Num2 == 2){
//      $HTMLCode .= "2";
//    }
//    $HTMLCode .= "'>More To Come</a></td>".Chr(13);
    $HTMLCode .= "</tr></table>".Chr(13);
    return $HTMLCode;
} }

?>