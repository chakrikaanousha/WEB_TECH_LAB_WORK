function multiplyByTwo (num) { return num * 2}

const sumTwo = (num) => { num + 2}

const http = require('http')

http.createServer(sumTwo).listen(3000)
console.log("Listening on port 3000")
