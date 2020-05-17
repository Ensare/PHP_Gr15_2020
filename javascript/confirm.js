$(document).ready(function(){
	setTimeout(function(){
		Konfirmimi.render("We use cookies to ensure you get the best experience on our website. Do you want to get it?")
 
	},10000);
 });

function customConf(){
	this.render = function(dialog){
		var winW = window.innerWidth;
	    var winH = window.innerHeight;
		var dialogoverlay = document.getElementById('dialogoverlay');
	    var dialogbox = document.getElementById('dialogbox');
		dialogoverlay.style.display = "block";
	    dialogoverlay.style.height = winH+"px";
		dialogbox.style.left = (winW/2) - (550 * .5)+"px";
	    dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        
		document.getElementById('dialogboxhead').innerHTML='Our Cookie Policy';
	    document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = 
        '<button onclick="Konfirmimi.yes()">Accept</button> <button onclick="Konfirmimi.no()">No</button>';
    }
    this.no = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
	this.yes = function(){
		window.location.href="zbritjet.php"
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
}

var Konfirmimi= new customConf();
