window.onload = init;

function init(){
	var height = window.innerHeight
		|| document.documentElement.clientHeight
		|| document.body.clientHeight;

	var newHeight = (height * 0.85) + "px";
	
	showProductPage.style.minHeight = newHeight;
	showProductPage.style.maxHeight = newHeight;
	showProductPage.style.height = newHeight;
	
	showProductPage.innerHTML = "<object type=\"text/html\" data=\"./pages/index.htm\" class=\"productPage\" ></object>";
}

function updateImageDisplay(imagePath)
{
	imageDisplay.innerHTML = "Click to close.<br /><image src=\"" + imagePath +
		"\" onclick=\"hideImageDisplay()\" class=\"imageForDisplay\">";
	imageDisplay.style.display = "block";
}

function hideImageDisplay()
{
	imageDisplay.style.display = "none";
}

function nonProductNavigation(pageName)
{
	showProductPage.innerHTML = "<object type=\"text/html\" data=\"./pages/" + 
		pageName + ".htm\" class=\"productPage\" ></object>";
		
	updateNavigationOptions("");
}

function navigation(productName, navOption)
{
	if (productName == "other")
	{
		showProductPage.innerHTML = "<object type=\"text/html\" data=\"./pages/" + 
			navOption + ".htm\" class=\"productPage\" ></object>";
	}
	else if (navOption == "pictures")
	{
		var pictures = getPictureIndicies(productName);
			
		var returnMethod = function(xhr){
			if (xhr.readyState === 4) {
				if (xhr.status === 200) {
				  showProductPage.innerHTML = "<div class=\"productPage\" >" + xhr.responseText + "</div>";
				}
			}
		};
		
		var url = "pics.php?picStart=" + pictures[0] + "&picEnd=" + pictures[1];
		
		asyncAjax(url, returnMethod);
	}
	else
	{
		showProductPage.innerHTML = "<object type=\"text/html\" data=\"./pages/" + 
			productName + "_" + navOption + ".htm\" class=\"productPage\" ></object>";
	}
	updateNavigationOptions(productName);
	
	document.getElementById(navOption).className = "alignleft menu5";
}

function getPictureIndicies(pictures)
{
	switch (pictures)
	{
		case "minisnowplow": return [1, 13];
		case "ani":  return [13, 19];
		case "shortshot": return [19, 24];
		case "jigsaw": return [31, 38];
		case "rotatingtoy": return [31, 38];
	}
}

function updateNavigationOptions(productName)
{
	var menuOptions = ["minisnowplow", "ani", "shortshot", "jigsaw", "rotatingtoy"];

	otherOptions.innerHTML = "";

	for (var i = 0; i < menuOptions.length; i++)
	{
		if (menuOptions[i] == productName)
		{
			document.getElementById(menuOptions[i] + "Options").innerHTML = navigationOptions(productName);
		}
		else 
		{
			document.getElementById(menuOptions[i] + "Options").innerHTML = "";
		}
	}

	if (productName == "other")
	{
		otherOptions.innerHTML = otherNavigationOptions();
	}
}

function otherNavigationOptions(productName)
{
	return "<table class=\"aligncenter\">" +
		"<tr>" +
		"<td class=\"alignleft menu4\" id=\"otherintro\" " +
		"onclick=\"navigation('other', 'otherintro') \">" +
		"Intro</td>" +
		"</tr>" +
		"<tr>" +
		"<td class=\"alignleft menu4\" id=\"bikedesk\" " +
		"onclick=\"navigation('other', 'bikedesk') \">" +
		"Bike Desk</td>" +
		"</tr>" +
		"</table>";	
}

function navigationOptions(productName)
{
	return "<table class=\"aligncenter\">" +
		"<tr>" +
		"<td class=\"alignleft menu4\" id=\"overview\" " +
		"onclick=\"navigation('" + productName + "', 'overview') \">" +
		"Overview</td>" +
		"</tr>" +
		"<tr>" +
		"<td class=\"alignleft menu4\" id=\"pictures\" " +
		"onclick=\"navigation('" + productName + "', 'pictures') \">" +
		"Pictures</td>" +
		"</tr>" +
		"<tr>" +
		"<td class=\"alignleft menu4\" id=\"details\" " +
		"onclick=\"navigation('" + productName + "', 'details') \">" +
		"Details</td>" +
		"</tr>" +
		"<tr>" +
		"<td class=\"alignleft menu4\" id=\"uses\" " +
		"onclick=\"navigation('" + productName + "', 'uses') \">" +
		"Uses</td>" +
		"</tr>" +
		"</table>";
}

function asyncAjax(url, returnMethod)
{
	var xhr = new XMLHttpRequest();
	
	xhr.open("GET", url, true);

	xhr.onload = function (e) {
	  returnMethod(xhr);
	};

	xhr.onerror = function (e) {
		console.error(xhr.statusText);
	};
	
	xhr.send(null);
}
