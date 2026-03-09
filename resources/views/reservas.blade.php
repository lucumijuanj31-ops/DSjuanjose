<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Reserva de Salas</title>

<style>

body{
    margin:0;
    font-family:Segoe UI, sans-serif;
    background:#f4f6fb;
}

header{
    background:#34495e;
    color:white;
    padding:20px;
    text-align:center;
    font-size:26px;
}

.container{
    width:90%;
    max-width:900px;
    margin:40px auto;
}

.card{
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0px 5px 15px rgba(0,0,0,0.1);
    margin-bottom:30px;
}

input, select{
    width:100%;
    padding:10px;
    margin-top:8px;
    margin-bottom:15px;
    border-radius:6px;
    border:1px solid #ccc;
}

button{
    background:#27ae60;
    color:white;
    border:none;
    padding:10px 20px;
    border-radius:6px;
    cursor:pointer;
}

button:hover{
    background:#1e8449;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    padding:10px;
    border-bottom:1px solid #ddd;
}

th{
    background:#2c3e50;
    color:white;
}

</style>

</head>

<body>

<header>
Sistema de Reserva de Salas de Estudio
</header>

<div class="container">

<div class="card">

<h2>Reservar Sala</h2>

<label>Nombre del estudiante</label>
<input type="text" placeholder="Ingresa tu nombre">

<label>Número de sala</label>
<select>
<option>Sala 101</option>
<option>Sala 102</option>
<option>Sala 201</option>
<option>Sala 202</option>
</select>

<label>Fecha</label>
<input type="date">

<label>Hora</label>
<input type="time">

<button>Reservar</button>

</div>

<div class="card">

<h2>Reservas registradas</h2>

<table>

<tr>
<th>Estudiante</th>
<th>Sala</th>
<th>Fecha</th>
<th>Hora</th>
</tr>

<tr>
<td>Juan Pérez</td>
<td>101</td>
<td>2026-03-10</td>
<td>10:00</td>
</tr>

</table>

</div>

</div>

</body>
</html>