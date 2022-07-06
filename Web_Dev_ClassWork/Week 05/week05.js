function OpenWindow(){
	window.open("http://www.google.com","ABC");
}
var x=document.getElementById("button1");
for (var i = 0; i <= 10; i++) {
	//alert(i);
	/*if(i%2==0){
		console.log(i);
	}
	else{
		console.log(i+1);
	}*/
	console.log((i%2==0)?i:i+1);
	x.value="Ahmed_"+i;
}

document.getElementById("button2").value=(i%2==0)?i:i+1