<?php

namespace App\Controllers;

class SistemaController extends BaseController
{
    public function index()
    {
        $info["titulo_pagina"] = "Sistema Integrado SIGA3";
        $info["encabezado1"] = "Mi Sistema Integrado de la web";
        return view('principal', $info);
    }

    public function recursosHumanos()
    {
        $info["titulo_pagina"] = "Recursos Humanos";
        $info["encabezado1"] = "Gestion de Recursos Humanos";
        //echo "Hola pongame 10 .... y le ofresco gaseosas!!!";
        return view('rrhh', $info);
    }

    public function contabilidad()
    {
        return view('conta');
    }

    public function bodega()
    {
        return view('bodega');
    }
}
