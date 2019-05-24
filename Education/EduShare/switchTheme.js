function swapSheet() {
			var sheet = "education.css";
			if(document.getElementById('pagestyle').getAttribute('href') === sheet) {
				sheet = "./style/educationDarkMode.css";
			} 
			document.getElementById('pagestyle').setAttribute('href', sheet);
		}