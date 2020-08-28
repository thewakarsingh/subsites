var http=require("http");
HTMLOutputElement.createServer(function(req, res){
    res.write("Server Started");
    res.end();


}).listen(8080);
