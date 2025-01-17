<?php
    class Moto extends transporte{

		private $cilindrada;

		//declaracion de constructor
		public function __construct($nom,$vel,$com,$cilin){
			//sobreescritura de constructor de la clase padre
			parent::__construct($nom,$vel,$com);
			$this->cilindrada = $cilin;
				
		}

		// declaracion de metodo
		public function resumenMoto(){
			// sobreescribitura de metodo crear_ficha en la clse padre
			$mensaje=parent::crear_ficha();
			$mensaje.='<tr>
						<td>Cilindrada:</td>
						<td>'. $this->cilindrada.'</td>				
					</tr>';
			return $mensaje;
		}
	}



?>