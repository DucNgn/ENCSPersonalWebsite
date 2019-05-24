function swapSheet() {
		var sheet = "./style/style.css";
		if(document.getElementById('pagestyle').getAttribute('href') === sheet) {
			sheet = "./style/darkmode.css";
		} 
		document.getElementById('pagestyle').setAttribute('href', sheet);
	}