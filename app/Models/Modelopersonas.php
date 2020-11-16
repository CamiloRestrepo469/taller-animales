<?php namespace App\Models;

use CodeIgniter\Model;

class Modelopersonas extends Model{

    protected $table='usarios';
    protected $primaryKey='id';
    protected $allowedFields = ['nombre', 'edad', 'tipo', 'descripcion', 'comida', 'raza','foto'];

}