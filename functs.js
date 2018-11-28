window.onload = Init;

function Init(){
  var Page = document.getElementById("NewBox").value;
  var Categories = new Array("MSP","ATAC","SSD","JMB","RT","Other","Articles");
  var Options = new Array("Overview","Pictures","Details","Uses");
  var Other = new Array("Intro","BikeDesk");
  var Articles = new Array("Information","PopSci");
  
  for (var i=0;i<Categories.length;i++){
    if (document.getElementById(Categories[i])){
      document.getElementById(Categories[i]).className = "menu3";
      document.getElementById(Categories[i]).MyIndex = Categories[i];
      document.getElementById(Categories[i]).onclick = function(){GoToPage(this.MyIndex,0);};
  } }
  
  if (Page == "Articles"){
    for (var i=0;i<Articles.length;i++){
      if (document.getElementById(Articles[i])){
        document.getElementById(Articles[i]).className = "leftmenu";
        document.getElementById(Articles[i]).MyIndex = i;
        document.getElementById(Articles[i]).onclick = function(){GoToPage("Articles",this.MyIndex);};
    } }
  } else if (Page == "Other"){
    for (var i=0;i<Other.length;i++){
      if (document.getElementById(Other[i])){
        document.getElementById(Other[i]).className = "leftmenu";
        document.getElementById(Other[i]).MyIndex = i;
        document.getElementById(Other[i]).onclick = function(){GoToPage("Other",this.MyIndex);};
    } }
  } else {
    for (var i=0;i<Options.length;i++){
      if (document.getElementById(Options[i])){
        document.getElementById(Options[i]).className = "leftmenu";
        document.getElementById(Options[i]).MyIndex = i;
        document.getElementById(Options[i]).onclick = function(){GoToPage(Page,this.MyIndex);};
  } } }

  var anchors = document.getElementsByTagName("a");
  for (var i=0;i<anchors.length;i++) {
    if ((anchors[i].getAttribute("href") && anchors[i].getAttribute("rel") == "external")){
      anchors[i].target = "_blank";
} } }

function GoToPage(ThePage,Num){
  window.location = "index.php?NewBox=" + ThePage + "&Num=" + Num;
}
