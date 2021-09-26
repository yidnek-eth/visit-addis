var http = require('http');

var app = http.createServer(function(request, response){
  response.writeHead(200, {
    "Content.Type": "text/plain"
  });
  response.end('Hello WOrld\n');
});

app.listen(3558, "localhost");
console.log('Server started on 3558');
