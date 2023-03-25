<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LibrosModel;
class LibrosController extends BaseController
{
    public function index()
    {
        $libros = new LibrosModel();
        $builder = $libros->select('*');
        $builder->join('categoria', 'libros.id_categoria = categoria.id_categoria');
        $builder->join('autores', 'libros.id_autor = autores.id_autor');
        $query = $builder->get();
        $data['libros'] = $query->getResult();
        return view('carpeta/libros', $data);
    }

    public function addLibro(){
        $libros = new LibrosModel();
        $data = [
            'nombre_libro' => 'Lo que el viento NO se llevo',
            'imagen_libro' => 'HURACAN.jpg',
            'id_categoria' => '4',
            'id_autor' => '4',
        ];

        $libros->insert($data);
        return $this->response->redirect(site_url('/libros'));

        // return $this->index();
        // return view('addLibro');

    }
}
