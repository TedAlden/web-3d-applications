// JavaScript Document
function getXMLHttp() {
	var xmlHttp
	try {
		xmlHttp = new XMLHttpRequest ();
	} catch (e) {
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				return false;
			}
		}
	}
	return xmlHttp;
}

//Make AJAX request to the server
var xmlHttp = getXMLHttp();
//stores newly generated gallery HTML code
var htmlCode = "";
//temporarily stores server response while code is generated
var response;

$(document).ready(function() {
	// Set up the path to the PHP function that reads the image directory to find the thumbnail file names
	var send = "../application/view/hook.php";
	console.log(send);
	// Open the connection to the web server
	xmlHttp.open("GET", send, true);
	// Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
	xmlHttp.send(null);
	// Check we get a valid server response
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
			// Response handler code
			// alert(xmlHttp.responseText);
			response = xmlHttp.responseText.split("~");
			// Loop round the response array
			for (var i=0;i<response.length;i++) {
				let isActive = i === 0 ? "active" : "";
				htmlCode += `<div class="carousel-item ${isActive}">
								<div class="col-md-3">
									<div class="card">
										<div class="card-img">
											<a href="${response[i]}" data-fancybox="" data-caption="My X3D model render">
												<img class="img-fluid" src="${response[i]}">
											</a>
										</div>
									</div>
								</div>
							</div>`;
				console.log(response[i]);
			}
			
			// Initialise the carousel gallery using the htmlCode just generated
			document.getElementById('carousel-gallery').innerHTML = htmlCode;
			initCarousel();
		}
	}
});
