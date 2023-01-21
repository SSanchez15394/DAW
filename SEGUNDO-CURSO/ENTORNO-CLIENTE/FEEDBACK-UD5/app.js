// Express
const express = require('express');
const app = express();

// EJS
app.set('view engine','ejs');

// Body-Parser
const bodyParser = require('body-parser');

app.use(express.static('public'));
app.use('css',express.static(__dirname + 'public/css'))
app.use(bodyParser.json())
app.use(bodyParser.urlencoded({extended:false }));

// MySQL
const conex = require('./database/mysql_connection');

// Rutas con nuestras querys
app.use(require('./controller/routes'))


// Puerto que utilizaremos
PORT = 5001;
app.listen(5001,(req,res)=>{
    console.log(`Estamos corriendo en puerto: ${5001}`)
})
