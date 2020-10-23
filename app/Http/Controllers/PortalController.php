<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public $sites = [
        'https://www.abola.pt/',
        'https://www.record.pt/',
        'https://www.ojogo.pt/',
        'https://maisfutebol.iol.pt',
        'https://www.theguardian.com/uk/sport',
        'https://www.thesun.co.uk/sport',
        'https://www.lequipe.fr/',

    ];
    public function index() {
        return view('index');
    }

    public function noticias() {
        return view('noticias', ['noticias' => $this ->sites]);
    }

    public function empresa() {
        return view('empresa');
    }

    public function ondeEstamos() {
        return view('onde-estamos');
    }

    public function contactos() {
        return view('contactos');
    }

    public function formulario() {
        return view('formulario');
    }

    public function enviado(Request $req) {
        $nome = $req -> nome;
        $morada = $req -> morada;
        $automovel = $req -> automovel;

        return view('form-enviado' , [
        'nome' =>$nome,
        'morada' =>$morada,
        'automovel' =>$automovel
        ]);
    }
}
