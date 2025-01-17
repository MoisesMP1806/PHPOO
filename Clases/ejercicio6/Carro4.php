<?php  
include_once('transporte.php');
include_once('Barco.php');
include_once('Avion.php');
include_once('Moto.php');

	//declaracion de la clase hijo o subclase Carro
	class carro extends transporte{

		private $numero_puertas;

		//declaracion de constructor
		public function __construct($nom,$vel,$com,$pue){
			//sobreescritura de constructor de la clase padre
			parent::__construct($nom,$vel,$com);
			$this->numero_puertas=$pue;
				
		}

		// declaracion de metodo
		public function resumenCarro(){
			// sobreescribitura de metodo crear_ficha en la clse padre
			$mensaje=parent::crear_ficha();
			$mensaje.='<tr>
						<td>Numero de puertas:</td>
						<td>'. $this->numero_puertas.'</td>				
					</tr>';
			return $mensaje;
		}
	} 

$mensaje='';


if (!empty($_POST)){
	//declaracion de un operador switch
	switch ($_POST['tipo_transporte']) {
		case 'aereo':
			//creacion del objeto con sus respectivos parametros para el constructor
			$jet1= new Avion('jet','400','gasoleo','2');
			$mensaje=$jet1->resumenAvion();
			break;
		case 'terrestre':
			$carro1= new Carro('carro','200','gasolina','4');
			$mensaje=$carro1->resumenCarro();
			break;
		case 'maritimo':
			$bergantin1= new Barco('bergantin','40','na','15');
			$mensaje=$bergantin1->resumenBarco();
			break;		
		case 'terrestrePersonal':
			$moto1 = new Moto('italika', '180','gasolina', 'na');
			$mensaje=$moto1->resumenMoto();
			break;
	}

}

?>
