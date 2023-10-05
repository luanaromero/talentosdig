<?php
namespace App\Controllers;
use App\Models\usuario_Model; //usamos los datos de la tabla usuario. email-pass
use CodeIgniter\Controller; 

class Login_controller extends BaseController{
    public function index(){
        helper(['form','url']);


        $dato['titulo']= 'login';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('Back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth(){
        $session = session(); //carga la sesion
        $model= new usuario_Model();
        //traemos los datos del formulario
        $email= $this->request->getVar('email');  //recibimos los datos del formulario por post
        $password= $this->request->getVar('password');

        $data = $model->where('email',$email)->first();

            if($data){
                $pass= $data['password'];
                $ba=$data['baja'];
                if($ba=='SI'){
                    $session->setFlashdata('msg','Usuario dado de baja');
                    //return redirect()->to('/Login_controller');//->with('mensaje', 'Usuario dado de baja, comuniquese')
                    return redirect()->to(base_url().'/login')->with('msg', 'Usuario dado de baja, comuniquese');
                }
                //se verifican los datos ingresados para iniciar sesion, si cumple las condiciones para iniciar la sesion

                $verify_pass = password_verify($password, $pass);
                //password_verify determina los requisitos de configuacion de la contraseña. Que coincidan.
                

                    if($verify_pass){
                        $ses_data =[
                            'id_usuario' => $data['id_usuario'],
                            'nombre' =>  $data['nombre'],
                            'apellido' =>  $data['apellido'],
                            'usuario' =>  $data['usuario'],
                            'email' =>  $data['email'],
                            'perfil_id' =>  $data['perfil_id'],
                            'logged_in' =>  TRUE,
                        ];
                        //SI SE CUMPLE LA VERIFIACION INICIA SESION
                        $session->set($ses_data);
                        session()->setFlashdata('msg', '      ¡Bienvenido!   ');
                        return redirect()->to('/panel');
                        //return redirect()->to(base_url().'/Home/');
                    
                    }else {
                        //no paso la validacion de la password
                        $session->setFlashdata('msg', 'Contraseña incorrecta.');
                        return redirect()->to('/login');
                        }
                        } else{
                            $session->setFlashdata('msg', 'No existe el email o es Incorrecto. Intente nuevamente.');
                            return redirect()->to('/login');

                    }
            }


            public function logout() {
                $session = session();
                $session->destroy();
                return redirect()->to('/');
            }
}
