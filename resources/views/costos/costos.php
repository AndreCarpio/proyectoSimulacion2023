<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costos Directos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<h2>MANUFACTURA Y SERVICIOS</h2>
<h6> <b> Ventas Totales por Mes</b></h6>
<form action="/controlador" method="POST">
    <b>Rango de ventas por Mes:</b><br>
    <label for="alto">Alto</label>
    <input type="number" id="alto" min="0" onchange="calcularTotal()" onkeyup="calcularTotal()"><br>
    <label for="medio">Medio</label>
    <input type="number" id="medio" min="0" onchange="calcularTotal()" onkeyup="calcularTotal()"><br>
    <label for="bajo">Bajo</label>
    <input type="number" id="bajo" min="0" onchange="calcularTotal()" onkeyup="calcularTotal()"><br>
    <br>

    <label>Enero:</label>
    <select id="mes1" name="mes1" onchange="calcularTotal()">
      <option value="alta">Alta</option>
      <option value="media">Media</option>
      <option value="baja">Baja</option>
    </select>

    <label>Febrero:</label>
    <select id="mes2" name="mes2" onchange="calcularTotal()">
      <option value="alta">Alta</option>
      <option value="media">Media</option>
      <option value="baja">Baja</option>
    </select>

    <label>Marzo:</label>
    <select id="mes3" name="mes3" onchange="calcularTotal()">
      <option value="alta">Alta</option>
      <option value="media">Media</option>
      <option value="baja">Baja</option>
    </select>

    <label>Abril:</label>
    <select id="mes4" name="mes4" onchange="calcularTotal()">
      <option value="alta">Alta</option>
      <option value="media">Media</option>
      <option value="baja">Baja</option>
    </select>

    <label>Mayo:</label>
    <select id="mes5" name="mes5" onchange="calcularTotal()">
      <option value="alta">Alta</option>
      <option value="media">Media</option>
      <option value="baja">Baja</option>
    </select>

    <label>Junio:</label>
    <select id="mes6" name="mes6" onchange="calcularTotal()">
      <option value="alta">Alta</option>
      <option value="media">Media</option>
      <option value="baja">Baja</option>
    </select>
    
    <label>Julio:</label>
    <select id="mes7" name="mes7" onchange="calcularTotal()">
      <option value="alta">Alta</option>
      <option value="media">Media</option>
      <option value="baja">Baja</option>
    </select>

    <label>Agosto:</label>
    <select id="mes8" name="mes8" onchange="calcularTotal()">
      <option value="alta">Alta</option>
      <option value="media">Media</option>
      <option value="baja">Baja</option>
    </select>

    <label>Septiembre:</label>
    <select id="mes9" name="mes9" onchange="calcularTotal()">
      <option value="alta">Alta</option>
      <option value="media">Media</option>
      <option value="baja">Baja</option>
    </select>

    <label>Octubre:</label>
    <select id="mes10" name="mes10" onchange="calcularTotal()">
      <option value="alta">Alta</option>
      <option value="media">Media</option>
      <option value="baja">Baja</option>
    </select>

    <label>Noviembre:</label>
    <select id="mes11" name="mes11" onchange="calcularTotal()">
      <option value="alta">Alta</option>
      <option value="media">Media</option>
      <option value="baja">Baja</option>
    </select>

    <label>Diciembre:</label>
    <select id="mes12" name="mes12" onchange="calcularTotal()">
      <option value="alta">Alta</option>
      <option value="media">Media</option>
      <option value="baja">Baja</option>
    </select><br>

    <table >
        <thead>
            <tr>
                <th>Producto/Servicio</th>
                <th>Tipo</th>
                <th>Cantidad</th>
                <th>Unidad de Venta</th>
                <th>Frecuencia</th>
                <th>Precio Compra</th>
                <th>Precio Venta</th>
                <th>Total Compra Mensual</th>
                <th>Total Venta Mensual</th>
                <th>MUB %</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" id="pro1"></td>
                <td><input type="text" id="tipo1"></td>
                <td><input type="text" id="can1" value="0" onkeyup="calcularManufactura()"></td>
                <td><input type="text" id="unidad1"></td>
                <td>
                <select id="frecuencia1" name="frecuencia1" onchange="calcularManufactura()">
                    <option value="25">Diario</option>
                    <option value="4">Semanal</option>
                    <option value="2">Quincenal</option>
                    <option value="1">Mensual</option>
                    <option value="0.5">Bimestral</option>
                    <option value="3">Trimestral</option>
                    <option value="6">Semestral</option>
                </select><br>
                </td>
                <td><input type="text" id="preCom1" value="0" onkeyup="calcularManufactura()"></td>
                <td><input type="text" id="preVen1" value="0" onkeyup="calcularManufactura()"></td>
                <td><input type="text" id="totCom1"></td>
                <td><input type="text" id="totVen1"></td>
                <td><input type="text" id="mub1"></td>
                
            </tr>
            <tr>
                <td><input type="text" id="pro2"></td>
                <td><input type="text" id="tipo2"></td>
                <td><input type="text" id="can2" value="0" onkeyup="calcularManufactura()"></td>
                <td><input type="text" id="unidad2"></td>
                <td>
                <select id="frecuencia2" name="frecuencia2" onchange="calcularManufactura()">
                    <option value="25">Diario</option>
                    <option value="4">Semanal</option>
                    <option value="2">Quincenal</option>
                    <option value="1">Mensual</option>
                    <option value="0.5">Bimestral</option>
                    <option value="3">Trimestral</option>
                    <option value="6">Semestral</option>
                </select><br>
                </td>
                <td><input type="text" id="preCom2" value="0" onkeyup="calcularManufactura()"></td>
                <td><input type="text" id="preVen2" value="0" onkeyup="calcularManufactura()"></td>
                <td><input type="text" id="totCom2"></td>
                <td><input type="text" id="totVen2"></td>
                <td><input type="text" id="mub2"></td>
            </tr>
            <tr>
                <td><input type="text" id="pro3"></td>
                <td><input type="text" id="tipo3"></td>
                <td><input type="text" id="can3" value="0" onkeyup="calcularManufactura()"></td>
                <td><input type="text" id="unidad3"></td>
                <td>
                <select id="frecuencia3" name="frecuencia3" onchange="calcularManufactura()">
                    <option value="25">Diario</option>
                    <option value="4">Semanal</option>
                    <option value="2">Quincenal</option>
                    <option value="1">Mensual</option>
                    <option value="0.5">Bimestral</option>
                    <option value="3">Trimestral</option>
                    <option value="6">Semestral</option>
                </select><br>
                </td>
                <td><input type="text" id="preCom3" value="0" onkeyup="calcularManufactura()"></td>
                <td><input type="text" id="preVen3" value="0" onkeyup="calcularManufactura()"></td>
                <td><input type="text" id="totCom3"></td>
                <td><input type="text" id="totVen3"></td>
                <td><input type="text" id="mub3"></td>
            </tr>
            <tr>
                <td><input type="text" id="pro4"></td>
                <td><input type="text" id="tipo4"></td>
                <td><input type="text" id="can4" value="0" onkeyup="calcularManufactura()"></td>
                <td><input type="text" id="unidad4"></td>
                <td>
                <select id="frecuencia4" name="frecuencia4" onchange="calcularManufactura()">
                    <option value="25">Diario</option>
                    <option value="4">Semanal</option>
                    <option value="2">Quincenal</option>
                    <option value="1">Mensual</option>
                    <option value="0.5">Bimestral</option>
                    <option value="3">Trimestral</option>
                    <option value="6">Semestral</option>
                </select><br>
                </td>
                <td><input type="text" id="preCom4" value="0" onkeyup="calcularManufactura()"></td>
                <td><input type="text" id="preVen4" value="0" onkeyup="calcularManufactura()"></td>
                <td><input type="text" id="totCom4"></td>
                <td><input type="text" id="totVen4"></td>
                <td><input type="text" id="mub4"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><b>Totales:</b></td>
                <td><input type="text" readonly id="totCom"></td>
                <td><input type="text" readonly id="totVen"></td>
                <td><input type="text" readonly id="mubTotal"></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table>
        <thead>
            <tr>
                <th>Mes</th>
                <th>Ventas Mensuales</th>
                <th>Costos de Producción Mensuales</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Enero:</td>
                <td><input type="text" readonly id="venMen1"></td>
                <td><input type="text" readonly id="comMen1"></td>
            </tr>
            <tr>
                <td>Febrero:</td>
                <td><input type="text" readonly id="venMen2"></td>
                <td><input type="text" readonly id="comMen2"></td>
            </tr>
            <tr>
                <td>Marzo:</td>
                <td><input type="text" readonly id="venMen3"></td>
                <td><input type="text" readonly id="comMen3"></td>
            </tr>
            <tr>
                <td>Abril:</td>
                <td><input type="text" readonly id="venMen4"></td>
                <td><input type="text" readonly id="comMen4"></td>
            </tr>
            <tr>
                <td>Mayo:</td>
                <td><input type="text" readonly id="venMen5"></td>
                <td><input type="text" readonly id="comMen5"></td>
            </tr>
            <tr>
                <td>Junio:</td>
                <td><input type="text" readonly id="venMen6"></td>
                <td><input type="text" readonly id="comMen6"></td>
            </tr>
            <tr>
                <td>Julio:</td>
                <td><input type="text" readonly id="venMen7"></td>
                <td><input type="text" readonly id="comMen7"></td>
            </tr>
            <tr>
                <td>Agosto:</td>
                <td><input type="text" readonly id="venMen8"></td>
                <td><input type="text" readonly id="comMen8"></td>
            </tr>
            <tr>
                <td>Septiembre:</td>
                <td><input type="text" readonly id="venMen9"></td>
                <td><input type="text" readonly id="comMen9"></td>
            </tr>
            <tr>
                <td>Octubre:</td>
                <td><input type="text" readonly id="venMen10"></td>
                <td><input type="text" readonly id="comMen10"></td>
            </tr>
            <tr>
                <td>Novimebre:</td>
                <td><input type="text" readonly id="venMen11"></td>
                <td><input type="text" readonly id="comMen11"></td>
            </tr>
            <tr>
                <td>Diciembre:</td>
                <td><input type="text" readonly id="venMen12"></td>
                <td><input type="text" readonly id="comMen12"></td>
            </tr>
            <tr>
                <td> <b> Anual: </b> </td>
                <td><input type="text" readonly id="venAnu"></td>
                <td><input type="text" readonly id="comAnu"></td>
            </tr>
        </tbody>
    </table>
</form>
</body>
<script>
    var mubTotal;
    function calcularManufactura(){
        let defaultValue = 0.00;
        let com1 = parseFloat(document.getElementById('can1').value) * parseFloat(document.getElementById('preCom1').value) * parseFloat(document.getElementById('frecuencia1').value);
        let com2 = parseFloat(document.getElementById('can2').value) * parseFloat(document.getElementById('preCom2').value) * parseFloat(document.getElementById('frecuencia2').value);
        let com3 = parseFloat(document.getElementById('can3').value) * parseFloat(document.getElementById('preCom3').value) * parseFloat(document.getElementById('frecuencia3').value);
        let com4 = parseFloat(document.getElementById('can4').value) * parseFloat(document.getElementById('preCom4').value) * parseFloat(document.getElementById('frecuencia4').value);
        let ven1 = parseFloat(document.getElementById('can1').value) * parseFloat(document.getElementById('preVen1').value) * parseFloat(document.getElementById('frecuencia1').value);
        let ven2 = parseFloat(document.getElementById('can2').value) * parseFloat(document.getElementById('preVen2').value) * parseFloat(document.getElementById('frecuencia2').value);
        let ven3 = parseFloat(document.getElementById('can3').value) * parseFloat(document.getElementById('preVen3').value) * parseFloat(document.getElementById('frecuencia3').value);
        let ven4 = parseFloat(document.getElementById('can4').value) * parseFloat(document.getElementById('preVen4').value) * parseFloat(document.getElementById('frecuencia4').value);
        let mub1 = isNaN((ven1 - com1) / ven1) ? defaultValue : ((ven1 - com1) / ven1);
        let mub2 = isNaN((ven2 - com2) / ven2) ? defaultValue : ((ven2 - com2) / ven2)
        let mub3 = isNaN((ven3 - com3) / ven3) ? defaultValue : ((ven3 - com3) / ven3)
        let mub4 = isNaN((ven4 - com4) / ven4) ? defaultValue : ((ven4 - com4) / ven4)
        document.getElementById('totCom1').value = isNaN(com1.toFixed(2)) ? defaultValue : com1.toFixed(2);
        document.getElementById('totCom2').value = isNaN(com2.toFixed(2)) ? defaultValue : com2.toFixed(2);
        document.getElementById('totCom3').value = isNaN(com3.toFixed(2)) ? defaultValue : com3.toFixed(2);
        document.getElementById('totCom4').value = isNaN(com4.toFixed(2)) ? defaultValue : com4.toFixed(2);
        document.getElementById('totVen1').value = isNaN(ven1.toFixed(2)) ? defaultValue : ven1.toFixed(2);
        document.getElementById('totVen2').value = isNaN(ven2.toFixed(2)) ? defaultValue : ven2.toFixed(2);
        document.getElementById('totVen3').value = isNaN(ven3.toFixed(2)) ? defaultValue : ven3.toFixed(2);
        document.getElementById('totVen4').value = isNaN(ven4.toFixed(2)) ? defaultValue : ven4.toFixed(2);
        document.getElementById('mub1').value = isNaN((mub1 * 100).toFixed(2)) ? defaultValue : ((mub1 * 100).toFixed(2));
        document.getElementById('mub2').value = isNaN((mub2 * 100).toFixed(2)) ? defaultValue : ((mub2 * 100).toFixed(2));
        document.getElementById('mub3').value = isNaN((mub3 * 100).toFixed(2)) ? defaultValue : ((mub3 * 100).toFixed(2));
        document.getElementById('mub4').value = isNaN((mub4 * 100).toFixed(2)) ? defaultValue : ((mub4 * 100).toFixed(2));
        let sumaCom = com1+com2+com3+com4;
        let sumaVen = ven1+ven2+ven3+ven4;
        let sumaMUB = (sumaVen-sumaCom)/sumaVen;
        document.getElementById('totCom').value = sumaCom.toFixed(2);
        document.getElementById('totVen').value = sumaVen.toFixed(2);
        document.getElementById('mubTotal').value = (sumaMUB * 100).toFixed(2);
        mubTotal= sumaMUB;
        calcularTotal();
    }

    function calcularTotal(){
        let aux = 0.00;
        let sumaAnuVen = 0;
        let sumaAnuCom = 0;
        for (let i = 1; i <= 12; i++) {
            if(document.getElementById('mes'+i).value == 'alta'){
                document.getElementById('venMen'+i).value = document.getElementById('alto').value;
            }else if(document.getElementById('mes'+i).value == 'media'){
                document.getElementById('venMen'+i).value = document.getElementById('medio').value;
            }else if(document.getElementById('mes'+i).value == 'baja'){
                document.getElementById('venMen'+i).value = document.getElementById('bajo').value;    
            }
        }
        for (let i = 1; i <= 12; i++) {
            aux = (1-mubTotal);
            document.getElementById('comMen'+i).value = (document.getElementById('venMen'+i).value*aux).toFixed(0);
            
        }
        for(let i = 1; i <= 12; i++){
            sumaAnuVen = sumaAnuVen + Number(document.getElementById('venMen'+i).value);
            sumaAnuCom = sumaAnuCom + Number(document.getElementById('comMen'+i).value);
        }
        document.getElementById('venAnu').value = sumaAnuVen;
        document.getElementById('comAnu').value = sumaAnuCom;
    }
</script>
<script>
function calcularVAN(flujosEfectivo, tasaDescuento) {
    let van = 0;
    for (let i = 0; i < flujosEfectivo.length; i++) {
        van += flujosEfectivo[i] / Math.pow(1 + tasaDescuento, i + 1);
    }
    return van;
}

function calcularTIR(flujosEfectivo, precision) {
    let tir = 0;
    let maxIteraciones = 10000;
    let iteracion = 0;
    let error = 1;
  
    while (error > precision && iteracion < maxIteraciones) {
        let van = calcularVAN(flujosEfectivo, tir);
        let derivada = 0;
        for (let i = 0; i < flujosEfectivo.length; i++) {
            derivada += (i + 1) * flujosEfectivo[i] / Math.pow(1 + tir, i + 2);
        }
        let incremento = van / derivada;
        tir -= incremento;
        error = Math.abs(incremento / tir);
        iteracion++;
    }
  
  return tir * 100;
}

// Ejemplo de uso:
let flujosEfectivo = [-100, 50, 40, 30, 20, 10];
let tasaDescuento = 0.1;
let precision = 0.0001;

let van = calcularVAN(flujosEfectivo, tasaDescuento);
let tir = calcularTIR(flujosEfectivo, precision);

console.log("VAN: " + van);
console.log("TIR: " + tir + "%");

console.log(Math.pow(1/3,8));
</script>
</html>