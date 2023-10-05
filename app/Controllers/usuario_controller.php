<?php
namespace App\Controllers;
use App\Models\usuario_Model; //desde alli vamos a sacar los datos de tablas
use CodeIgniter\Controller; 

class usuario_controller extends BaseController{
    public function __construct(){
        helper(['form','url']);
    }

    public function create(){
        $dato['titulo']= 'registro';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('Back/usuario/registro');
        echo view('front/footer_view');
    }

    public function formValidation(){
        $input = $this->validate([
            'nombre'=> 'required|min_length[3]',
            'apellido'=> 'required|min_length[3]|max_length[50]',
            'usuario'=> 'required|min_length[3]',
            'email'=> 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'password'=> 'required|min_length[3]|max_length[100]'
        ],
        
    );
    $formModel = new usuario_Model(); //generamos la estancia
    if (!$input){
        $data['titulo']= 'registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/registro',['validation' => $this->validator]);
        echo view('front/footer_view');
    } else {
        $formModel->save([
            //del lado iquierdo va el nombre del campo en la tabla y del lado derecho va como esta en el formulario
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT), //PASSWORD_hash() creoa un nuevo hash de contraseña usando un algoritmo de hash de unico sentido.
            ]);

        //Flashdata funciona solo en redirigir la funcion en el controlador en la vista de carga

        session()->setFlashdata('success', 'Usuario registrado con exito');
        //return $this->response->redirect('/login');
        return redirect()->to(base_url().'/login')->withInput();//con esto redireccionamos a login y enviamos
        
        
    }
}
}
