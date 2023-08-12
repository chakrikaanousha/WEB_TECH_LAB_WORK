//print in the terminal "Hello":
 console.log("hello")
//print in the terminal "World"
 console.log("world")
//the CPU executed first line 2 then line 4
//console.log is a sync function
setTimeout(()=> { console.log("Hello")}, 2000)
//setTimeout is an async function: it doesn't block the execution
//of the code:
console.log("world") 
 

