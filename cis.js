var casper = require('casper').create();
var fs = require('fs');

casper.start('https://cis.nordakademie.de', function() {
	phantom.injectJs('pass.js');
    this.fill('form', {
        'user':    user,
        'pass':    password
    }, true);
});



casper.thenOpen('https://cis.nordakademie.de/pruefungsamt/pruefungsergebnisse/?no_cache=1', function step1() {
	//count marks
	var temp = this.getHTML();
	var count = temp.match(/noten_noten/g).length/3; 
	var path = 'count.txt';
	
	if (fs.exists(path) && fs.read(path) < count){
		//new mark
		this.echo('New Mark');
		casper.open(url + "?empfaenger=" + email + "&api_key=" + api_key).then(function() {
			this.echo('Sent Mail.');
		});
		//write new count	
		var content = count;
		fs.write(path, content, 'w');
	}else{
		//write new count	
		var content = count;
		fs.write(path, content, 'w');
	}
});

casper.then(function step2(){
	//this.capture('result.png');
    this.exit();
});

casper.run();