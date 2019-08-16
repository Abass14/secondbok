function dropdown(){
	// alert("Hello");
	var d = document.getElementById("hidden");
	if (d.style.display == "none") {
		d.style.display = "block";
	}else{
		d.style.display = "none";
	}
}


function dropout(){
	document.getElementById("hidden").style.display = "none";
}

// dropdown();



// function openSlideMenu(){
// 	document.getElementById('sd-menu').style.width = '250px';
// 	document.getElementById('main').style.marginLeft = '250px';
// }

// function closeSlideMenu(){
// 	document.getElementById('sd-menu').style.width = '0px';
// 	document.getElementById('main').style.marginLeft = '0px';
// }

// openSlideMenu();
// closeSlideMenu();