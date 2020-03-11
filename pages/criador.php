<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/basic.css">
	<link rel="stylesheet" type="text/css" href="../css/criador.css">
	<link rel="icon" href="../img/favicon.png">
	<script type="text/javascript" src="../js/criador.js"></script>
	<title>RPG calc</title>
</head>

<body>

	<header><h1 id="titulo">Criador de ficha</h1></header>

	<form id="dados" method="post">

		<div class="flex-container">


			<div class="column" id="one">

			<!--INÍCIO DA TABELA DE DADOS PRINCIPAIS-->

				<table class="cabec">

					<tr>
						<td>Nome:</td>
						<td id="nome"><input type="text" name="nome"></td>
					</tr>

					<tr>
						<td>Classes:</td>
						<td id="classes">
							<input type="text" name="classe1" id="classe1">
							<button type="button" id="addclass">+</button>
							<button type="button" id="rmclass">-</button>
						</td>
					</tr>

					<tr>
						<td>Raça:</td>
						<td id="raca"><input type="text" name="raca"></td>
					</tr>

					<tr>
						<td>Tendência:</td>
						<td id="tend">
							<select form="dados" name="tend">
								<option value="leal e bom">Leal e bom</option>
								<option value="neutro e bom">Neutro e bom</option>
								<option value="caotico e bom">Caótico e bom</option>
								<option value="leal e neutro">Leal e neutro</option>
								<option value="neutro e neutro">Neutro e neutro</option>
								<option value="caotico e neutro">Caótico e neutro</option>
								<option value="leal e mau">Leal e mau</option>
								<option value="neutro e mau">Neutro e mau</option>
								<option value="caotico e mau">Caótico e mau</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Tamanho:</td>
						<td id="tamanho"><input type="text" name="tamanho"></td>
					</tr>

					<tr>
						<td>Idade:</td>
						<td id="age"><input type="number" name="age"></td>
					</tr>

					<tr>
						<td>Altura:</td>
						<td id="altu"><input type="number" name="altu"><label for="altu"> m</label></td>
					</tr>

					<tr>
						<td>Sexo:</td>
						<td id="sexo">
							<div class="rowsex"><input type="radio" name="sexo" id="macho">
							<label for="macho">Macho</label></div>
							<div class="rowsex"><input type="radio" name="sexo" id="femea">
							<label for="femea">Fêmea</label></div>
							<div class="rowsex"><input type="radio" name="sexo" id="outros">
							<label for="outros">Outros</label></div>
						</td>
					</tr>

					<tr>
						<td>Peso:</td>
						<td id="peso"><input type="number" name="peso"><label for="peso"> Kg</label></td>
					</tr>

					<tr>
						<td>Divindade:</td>
						<td id="divin"><input type="text" name="divin"></td>
					</tr>

				</table>

			<!--FIM DA TABELA DE DADOS PRINCIPAIS-->

			</div>


			<div class="column" id="two">

			<!--INÍCIO DAS TABELAS DA COLUNA 2-->

				<table class="total">

					<tr>
						<td>PV:</td>
						<td id="pv">
							<input type="number" name="pv">
						</td>
					</tr>

					<tr>
						<td>CA:</td>
						<td id="ca">
							<input type="number" name="ca">
						</td>
					</tr>

					<tr>
						<td>Deslocamento:</td>
						<td id="desloc">
							<input type="number" name="desloc">
						</td>
					</tr>

				</table>

				<table class="atributos">

					<tr>
						<td>Força:</td>
						<td id="forca"><input type="number" name="forca"></td>
						<td id="mod-forca"></td>
					</tr>

					<tr>
						<td>Destreza:</td>
						<td id="dest"><input type="number" name="dest"></td>
						<td id="mod-dest"></td>
					</tr>

					<tr>
						<td>Constituição:</td>
						<td id="const"><input type="number" name="const"></td>
						<td id="mod-const"></td>
					</tr>

					<tr>
						<td>Inteligência:</td>
						<td id="intel"><input type="number" name="intel"></td>
						<td id="mod-intel"></td>
					</tr>

					<tr>
						<td>Sabedoria:</td>
						<td id="sab"><input type="number" name="sab"></td>
						<td id="mod-sab"></td>
					</tr>

					<tr>
						<td>Carisma:</td>
						<td id="caris"><input type="number" name="caris"></td>
						<td id="mod-caris"></td>
					</tr>

				</table>

				<table class="testes">

					<tr>
						<td>Fortitude:</td>
						<td id="fortt">
							<input type="number" name="fortt">
						</td>
					</tr>

					<tr>
						<td>Reflexo:</td>
						<td id="reflex">
							<input type="number" name="reflex">
						</td>
					</tr>

					<tr>
						<td>Vontade:</td>
						<td id="vont">
							<input type="number" name="vont">
						</td>
					</tr>

				</table>

			<!--INÍCIO DAS TABELAS DA COLUNA 2-->				

			</div>

		</div>

	</form>

</body>
</html>