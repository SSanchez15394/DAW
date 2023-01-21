// Establecemos conexión con nuestra database
const mysql = require('mysql');
const conex = mysql.createConnection({ 
    hostname:'localhost',
    user:'root',
    database:'plazasParking',
    password:'root',
            
    });

conex.connect((req,res,err)=>{
    if(err){
        console.log(err);
        return;
    }else{
        console.log("!!! CONEXIÓN ESTABLECIDA CON LA BBDD ¡¡¡")
    }
})   

module.exports = conex;