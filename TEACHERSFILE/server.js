const http = require("http")
const express = require("express")

const app = express()

app.use(express.static("public"))

app.get("/", (req, res) => {
    res.sendFile("index.html", {root: "."})
})

app.get("/menu", (req, res) => {
    res.sendFile("/views/menu.html", {root: "."})
})

app.get("/contact", (req, res) => {
    res.sendFile("/views/contact.html", {root: "."})
})

app.get("/history", (req, res) => {
    res.sendFile("/views/history.html", {root: "."})
})

http.createServer( app).listen(3000)

//app.get()
//app.use()
//app.post()