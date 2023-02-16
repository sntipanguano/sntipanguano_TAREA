<?php
	abstract class figura{
		private $tipo;
		private $area; //area
		private $perimetro; //perimetro		
		
		public static function get_form(){			
			$html = '
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<style>
			body {
				background: rgb(2,0,36);
				background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(222,11,11,1) 0%, rgba(0,212,255,1) 100%);
				}
				
				.container {
				  background-color:white;
				  padding: 20px;
				  border-radius: 10px;
				}
			</style>
			
			<div class="container">
				<h2>Trabajo Autónomo - Tipanguano Samantha - NRC 8443</h2><br>
				<h4>Ingrese Datos en la Figura</h4><br>

				<form action="#" name="figuras" method="POST" align="center">
					<div class="input-group mb-3">
						<label class="input-group-text" for="inputGroupSelect01">Tipo</label>
						<select class="form-select" id="inputGroupSelect01" name="tipo" OnChange="habilitarCaja();">
							<option selected value="sel">Escoja una figura </option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-2 col-form-label">Lado 1</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="lado_1" size="4" disable>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Lado 2</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="lado_2" size="4" disabled>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Lado 3</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="lado_3" size="4" disabled >
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-8 offset-sm-2">
						<button type="submit" class="btn btn-outline-success" name="calcular" value="Calcular">Calcular</button>
						</div>
					</div>
				</form>
		
			</div>';
			return $html;
		}
		

	}
?>
