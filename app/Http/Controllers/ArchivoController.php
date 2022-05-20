<?php

namespace App\Http\Controllers;
use App\Models\Archivo;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function store (Request $request){
        foreach($request->archivos as $archivo){
            if($archivo->isValid()){
                $nombre_hash= $archivo->store('posts');

                $registroArchivo= new Archivo();
                $registroArchivo->post_id= $request->post_id;
                $registroArchivo->nombre=$archivo->getClientOriginalName();
                $registroArchivo->nombre_hash= $nombre_hash;
                $registroArchivo->mime=$archivo->getClientMimeType();
                $registroArchivo->save();
            }
        }
        return redirect()->route('post-page', $request->post_id)->with('message', 'Archivo cargado existosamente!');
    }
    public function descargar (Archivo $archivo){
        $header= ['Content-Type'=> $archivo->mime];
        return Storage::download($archivo->nombre_hash, $archivo->nombre,$header);
    }
    public function eliminar(Archivo $archivo){
        $postId= $archivo->post_id; 
        Storage::delete($archivo->nombre_hash);
        $archivo->forceDelete();
        return redirect()->route('post-page',$postId)->with('message', 'Archivo eliminado existosamente!');
    }
}
