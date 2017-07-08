var express = require('express');

var app = express();

xml2js = require('xml2js');

fs = require('fs');

var parser = new xml2js.Parser();

var parsed_data;

app.get("/getFeedData/:xmlFile", function(req, res){	

	xml_file = req.params.xmlFile;

	console.log(xml_file);
	
	fs.readFile( './xml/'+xml_file, function(err, data) {
	    	
		parser.parseString(data, function (err, result) {

			res.send({
				success: "success",
				json:result
		    });
    	});
	});
});

app.listen(4000, '127.0.0.1');

console.log("listening on 3000");