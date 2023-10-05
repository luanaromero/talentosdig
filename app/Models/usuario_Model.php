<?php
namespace App\Models;
use CodeIgniter\Model;
Class usuario_Model extends Model
{
 protected $table = 'usuarios'; //nombre de la tabla
 protected $primaryKey = 'id_usuario'; //identificador de la tabla
 protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email',
 'password','perfil_id','baja']; //todos los campos de la tabla
}