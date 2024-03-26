<?php

namespace App\Http\Controllers;

use App\Estudiantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ResgistrarEstudiante extends Controller
{
    public function frmRegistro(){
        return view('registrar');
    }

    public function registrarEstudiante(Request $request){
        try {
            $request->validate([
                'nombres' => 'required',
                'apellidos' => 'required',
                'telefonofijo' => 'required',
                'telefonopersonal' => 'required',
                'correoper' => 'required',
                'correoinsti' => 'required',
                'direccion' => 'required',
                'dni' => 'required',
            ]);

            $nombres = $request->input('nombres');
            $apellidos = $request->input('apellidos');
            $telfijo = $request->input('telefonofijo');
            $telpersonal = $request->input('telefonopersonal');
            $correopersonal = $request->input('correoper');
            $correoinsti = $request->input('correoinsti');
            $dir = $request->input('direccion');
            $dni = $request->input('dni');
            
            //sentencia sql insert
            $resultado = Estudiantes::insert([
                'NOMBRE' => $nombres,
                'APELLIDOS' =>  $apellidos,
                'TELEFONO_FIJO' => $telfijo,
                'TELEFONO_PERSONAL' => $telpersonal,
                'CORREO_PERSONAL' => $correopersonal ,
                'CORREO_INSTITUCIONAL' => $correoinsti,
                'DIRECCION' => $dir,
                'DNI' => $dni,
            ]);

            if($resultado != null){
                return response()->json(['success' => 'EXITO']);
            }else{
                return response()->json(['success' => 'INCORRECTO']);
            }
            
        } catch (\Exception $e) {
            // Log other exceptions
            Log::error('Excepción en registrodedatos: ' . $e->getMessage());
            // Return a generic error response
            return response()->json(['error' => 'Ha ocurrido un error.'], 500);
        }
    }

    public function leerDatos(Request $request){
        try {
            $request->validate([
                'dni' => 'required',
            ]);

            $dni = $request->input('dni');
            
            //sentencia sql insert
            $resultado = Estudiantes::distinct()
            ->select('EST.TELEFONO_FIJO', 'EST.TELEFONO_PERSONAL','EST.CORREO_PERSONAL', 'EST.CORREO_INSTITUCIONAL')
            ->from('estudiante as EST')
            ->where('DNI',$dni)
            ->get();

            if($resultado != null){
                return response()->json(['success' => [$resultado]]);
            }else{
                return response()->json(['success' => 'INCORRECTO']);
            }
            
        } catch (\Exception $e) {
            // Log other exceptions
            Log::error('Excepción en leerdatos: ' . $e->getMessage());
            // Return a generic error response
            return response()->json(['error' => 'Ha ocurrido un error.'], 500);
        }
    }

    public function actualizarDatos(Request $request){
        try {
            $request->validate([
                'dni' => 'required',
                'telfijo' => 'required',
                'telper' => 'required',
                'correoper' => 'required',
                'correoinsti' => 'required',
            ]);
        
            // Obtener los valores de entrada correctamente
            $dni = $request->input('dni');
            $telfijo = $request->input('telfijo');
            $telper = $request->input('telper');
            $correoper = $request->input('correoper');
            $correoinst = $request->input('correoinsti');
        

            // Sentencia SQL de actualización
            $resultado = Estudiantes::where('DNI', $dni)
            ->update([
                'TELEFONO_FIJO' => $telfijo,
                'TELEFONO_PERSONAL' => $telper,
                'CORREO_PERSONAL' => $correoper,
                'CORREO_INSTITUCIONAL' => $correoinst,
            ]);

            if ($resultado > 0) {
                return response()->json(['success' => 'La actualización se realizó correctamente.']);
            } else {
                return response()->json(['error' => 'No se pudo realizar la actualización.']);
            }
        } catch (\Exception $e) {
            // Log other exceptions
            Log::error('Excepción en leerdatos: ' . $e->getMessage());
            // Return a generic error response
            return response()->json(['error' => 'Ha ocurrido un error al procesar la solicitud.'], 500);
        }
        
    }
}
