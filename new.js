```javascript
window.addEventListener("load", function() {
	document.getElementById("gomb").addEventListener("click",
	function() {
		var cb = document.querySelectorAll(
		  "input[type='text']");
		  var copyer =document.getElementById("mertkor");
		  copyer.select();
 document.execCommand("copy");
		var tr = document.createElement("tr");
		var td = document.createElement("td");
		tr.appendChild(td);
		// dátumok
		
		for(var i=0; i<5; i++) {
		  var td = document.createElement("td");
		  if(cb[i]!=null) {
			td.textContent = copyer.value;
			
		  }
		  tr.appendChild(td);
		}
		var ttest = document.getElementById("ttest");
ttest.insertBefore(tr,document.getElementById("last"));



return false;
	
}, false);
})

```

 
/*function write(Output.txt,copyer.value){
	var txtfile = new File(Output.txt);
	txtfile.writeln(copyer.value);
	txtfile.close();
	var f = "sometextfile.txt";

writeTextFile(f, "Spoon")
writeTextFile(f, "Cheese monkey")
writeTextFile(f, "Onion")

function writeTextFile(afilename, output)
{
  var txtFile =new File(afilename);
  txtFile.writeln(output);
  txtFile.close();
}
	
	
}*/