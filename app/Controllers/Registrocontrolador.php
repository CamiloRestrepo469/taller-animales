<?php namespace App\Controllers;

use App\Models\Modelopersonas;
use App\Controllers\BaseController;

class Registrocontrolador extends BaseController
{
	public function index()
	{
		return view('vistasregistro');
	}


	public function registrar(){
		
		
				//1. recibir los datos desde la vista
				
					$nombre=$this->request->getPost("nombre");
					$edad=$this->request->getPost("edad");
					$tipo=$this->request->getPost("tipo");
					$descripcion=$this->request->getPost("descripcion");
					$comida=$this->request->getPost("comida");
					$raza=$this->request->getPost("raza");
					$foto=$this->request->getPost("foto");

					//2. organizar los datos que llegen de la vista
					//en un arreglo asociativo 
					// las claves deben ser iguales a los campos o atributos de la tabla en bd

					$datosEnvio=array(
						"nombre"=>$nombre,
						"edad"=>$edad,
						"tipo"=>$tipo,
						"descripcion"=>$descripcion,
						"comida"=>$comida,
						"raza"=>$raza,
						"foto"=>$foto
					);

					//3.crear un objeto del modelo para poder 
					//realizar 
					$modeloPersonas= new Modelopersonas();
					
					//4. utilizar el modelo

					try{
						$modeloPersonas->insert($datosEnvio);
						echo("registro agregado");


					}catch(
					\Exception $error ){
						echo ($error->getMessage()); 
					 }
	
	}

	public function buscar(){
		//1.crear un objeto del modelo
		$modeloPersonas= new Modelopersonas();
		//2.ejecutar la busqueda 
		try{
			//2.1 ejecutar findAll()
			$datosConsultados=$modeloPersonas->findAll();
			//2.2 preparar los datos para la vista 
			$datosparalavista=array("usuarios"=>$datosConsultados);
			//2.3 llamar a la vista que va a mostrar los datos 
			return view('vistalistado',$datosparalavista);


		}catch(
					\Exception $error ){
						echo ($error->getMessage()); 
					 }

	}

	public function eliminar($id){
		//1 crear un objeto del modelo 
		$modeloPersonas= new Modelopersonas();

		//2. Ejecutar la funcion delete del modelo identificando el registro a eliminar 
		try{

			$modeloPersonas->where('id',$id)->delete();
			echo("usuario eliminado con exito");

		}catch(
					\Exception $error ){
						echo ($error->getMessage()); 
					 }

		
	}
	public function editar($id){
		//1. Recibir los datos desde la vista

		$nombre=$this->request->getPost("nombreEditar");
		$edad=$this->request->getPost("edadEditar");
		$tipo=$this->request->getPost("tipoEditar");
		$descripcion=$this->request->getPost("descripcionEditar");
		$comida=$this->request->getPost("comidaEditar");
		$raza=$this->request->getPost("razaEditar");
		$foto=$this->request->getPost("fotoEditar");

		        //    $nombre=$this->request->getPost("nombreEditar");
				// 	$descripcion=$this->request->getPost("descripcionEditar");
				//2. Organizar los datos que llegan de las vistas
		// en un arreglo asociativo 
		//(las claves deben ser iguales a los campos o atributos de la tabla en BD)

					$datosEnvio=array(
						"nombre"=>$nombre,
						"edad"=>$edad,
						"tipo"=>$tipo,
						"descripcion"=>$descripcion,
						"comida"=>$comida,
						"raza"=>$raza,
						"foto"=>$foto
					);
					//3. Crear un objeto del MODELO para porder 
		//realizar la transacción en BD

					$modeloPersonas= new Modelopersonas();

					//4. Ejecutar el metodo update del modelo

					try{
						$modeloPersonas->update($id,$datosEnvio);
			               echo("Registro editado con exito");


					}catch(
					\Exception $error ){
						echo ($error->getMessage()); 
					 }
					
					
	}
	
			
}
		

		


	

