<?php

namespace App\Http\Controllers;

use App\Telefone;
use Illuminate\Http\Request;


class TelefonesController extends Controller
{

    public function store(Telefone $telefone)
    {
        //var_dump($telefone->ddd, $telefone->telefone);
        try {
            $telefone->save();
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }

    }
}
