<?php

namespace App\Http\Controllers;
namespace App\Models;

use Illuminate\Http\Request;
use App\Models\cliente;
use Illuminate\Support\Facades\Validator; 

class ControladorCliente extends Controller
{
    public function lista() {
    
        $clientes = Cliente::all();


                if ($clientes->isEmpty()){
                    $data = [
                        'mensaje' => 'No se encontraron clientes',
                        'estado' => 200
                    ];
                    return response() ->json($data,204);
                };
                return response() -> json($clientes,200);

   }

   public function cliente($id) {
    
    return 'este es el id';
    
   }

   public function crear(Request $request) { //post//
    
    return 'se creo =)';
    
   }

   public function actualizar($id) { //put//
    
    return 'se actualizo =)';
    
   }

   public function eliminar($id) {
    
    return 'se elimino :)';
    
   }


}



