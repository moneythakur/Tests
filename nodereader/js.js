

var interval = 1000 * 60 * 1;

setInterval(function(){

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var data = this.responseText;
			
			console.log(data);
		}
	};
	xmlhttp.open("GET", "../server/getData.asp", true);
	xmlhttp.send(); 

},interval);

