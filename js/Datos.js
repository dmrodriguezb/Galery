const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const CompraSchema = Schema({
  NoControl:Number ,
  Nombre:String,
  Apellidos:String,
  FechaNacim:String,
  Edad:Number,
  CuiNacimiento:String,
  
});

module.exports = mongoose.model('Compra', CompraSchema);
