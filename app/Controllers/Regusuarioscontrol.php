<?php namespace App\Controllers;

class Regusuarioscontrol extends BaseController
{
	public function index()
	{
		return view('vistareusuario');
    }
    
    public function registrarse()
    {


                    $correo=$this->request->getPost("correo");
                    $contrasena=$this->request->getPost("contrasena");
                    
                  // echo($contrasena);echo("<br>");
                  // echo($correo);echo("<br>");

                  $datosEnvioUsuarios=array(
                    "correo"=>$correo,"contrasena"=>$contrasena
                  );
					


    }

	//--------------------------------------------------------------------

}