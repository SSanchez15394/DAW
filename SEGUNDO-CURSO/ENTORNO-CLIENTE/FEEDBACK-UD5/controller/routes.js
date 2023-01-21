const express = require('express')
const router = express.Router();
const conex = require('../database/mysql_connection');


// Para saber todas las plazas de nuestro parking
router.get('/', (req, res) => {
  ocupadas = req.body.ocupadas;
  marca = req.body.marca;
  modelo = req.body.modelo;
  matricula = req.body.matricula;
  const vehiculo = {ocupadas, marca, modelo, matricula } ;
  conex.query('SELECT * FROM parking ', vehiculo, (err, vehiculo) => {
    if (err) {
      throw err
    } else {

      res.render('index', { vehiculo: vehiculo })
    }
  })

})
router.get('/index', (req, res) => {
  ocupadas = req.body.ocupadas;
  marca = req.body.marca;
  modelo = req.body.modelo;
  matricula = req.body.matricula;
  const vehiculo =  [ocupadas, marca, modelo, matricula ];
  
  conex.query('SELECT * FROM parking ', vehiculo, (err, vehiculo) => {
    if (err) {
      throw err
    } else {
      
         vehiculo.forEach(result => { 
          if(result.ocupadas==1||result.ocupadas==2){
          } 
        });
      res.render('index', { vehiculo: vehiculo })
    }
  })

})

// Para introducir un nuevo coche de nuestro parking
router.post('/checkIn', (req, res,) => {

  ocupadas = req.body.ocupadas;
  marca = req.body.marca;
  modelo = req.body.modelo;
  matricula = req.body.matricula;
  const vehiculo = { ocupadas, marca, modelo, matricula };

  conex.query('INSERT INTO parking SET ?', vehiculo, (err, field) => {
    if (err) {
     
      if (err.errno == 1062) {
        res.send('PLAZA OCUPADA')
      }
    } else { res.redirect('index') }

  })
})

// Para retirar un coche de nuestro parking
router.post('/checkOut', (req, res,) => {
  ocupadas = req.body.ocupadas;
  marca = req.body.marca;
  modelo = req.body.modelo;
  matricula = req.body.matricula;
  const vehiculo = { ocupadas, marca, modelo, matricula };
  conex.query('DELETE FROM parking WHERE matricula = ?', matricula, (err, field) => {
    if (err) {
      console.log(err)
    } else { res.redirect('index') }

  })
})

module.exports = router;