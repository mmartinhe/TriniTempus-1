<?php

namespace App\ Http\ Controllers;

use Illuminate\ Http\ Request;
use App\Servicio;
use App\MiServicio;

class ServicioController extends Controller {
    
    
    public function form(){
      return view("formulario_servicio");
    }

    /*esta funcion crea un evento en el calendario*/
    
    public function create(Request $request){

      $this->validate($request, [         
        'id_usuario'  =>  'required',  // prueba aqui para guardar el id del usuario que esta logado 
        'titulo' => 'required',
        'ciudad'  =>  'required',
        'categoria'  =>  'required',
        'sub_categoria'  =>  'required',
        'fecha'  =>  'required',
        'hora'  =>  'required',
     ]);

      Servicio::insert([
        'id_usuario'       => $request->input("id_usuario"), // prueba aqui para guardar el id del usuario que esta logado 
        'titulo' => $request->input("titulo"),
        'ciudad'  => $request->input("ciudad"),
        'categoria'        => $request->input("categoria"),
        'sub_categoria'        => $request->input("sub_categoria"),
        'fecha'        => $request->input("fecha"),
        'hora'        => $request->input("hora"),
      ]);

      return back()->with('success', 'Enviado exitosamente!');

    }
    
    public function createServicio(Request $request){
        $this->validate($request, [         
        'id_usuario'  =>  'required',  
        'ciudad'  =>  'required',
        'categoria'  =>  'required',
        'sub_categoria'  =>  'required',
     ]);

      MiServicio::insert([
        'id_usuario'       => $request->input("id_usuario"),
        'ciudad'  => $request->input("ciudad"),
        'categoria'        => $request->input("categoria"),
        'sub_categoria'        => $request->input("sub_categoria"),
      ]);

      return back()->with('success', 'Enviado exitosamente!');
    }
    
    /* esta funcion muestra todos los servicios en mi cuenta*/
    
    function mostrarTodos() {
        
        $misServicios = MiServicio::all();
        return view('mi_cuenta')->with('misServicios',$misServicios);

	}
    
    /* esta funcion muestra todos los servicios en welcome*/
    public function mostrarTodosEnWelcome(){
        $misServicios = MiServicio::all();
        return view('/welcome')->with('misServicios',$misServicios);
    }
    
    /* esta funcion muestra todos los servicios en crear_servicio*/    
    public function mostrarTodosEnCearServicio(){
        $misServicios = MiServicio::all();
        return view('/crear_servicio')->with('misServicios',$misServicios);
    }
    
    /*esta funcion es para mostrar los detalles de un evento del calendario*/
    public function details($id){
        
        //echo "llegooooo" . $id_servicio;

      $servicio = Servicio::find($id);

      return view("vista_servicio",[
        "servicio" => $servicio
      ]);

    }


    // =================== CALENDARIO =====================

    public function index(){

       $month = date("Y-m");
       //
       $data = $this->calendar_month($month);
       $mes = $data['month'];
       // obtener mes en espanol
       $mespanish = $this->spanish_month($mes);
       $mes = $data['month'];

       return view("calendario",[
         'data' => $data,
         'mes' => $mes,
         'mespanish' => $mespanish
       ]);

   }

   public function index_month($month){

      $data = $this->calendar_month($month);
      $mes = $data['month'];
      // obtener mes en espanol
      $mespanish = $this->spanish_month($mes);
      $mes = $data['month'];

      return view("calendario",[
        'data' => $data,
        'mes' => $mes,
        'mespanish' => $mespanish
      ]);

    }

    public static function calendar_month($month){
      //$mes = date("Y-m");
      $mes = $month;
      //sacar el ultimo de dia del mes
      $daylast =  date("Y-m-d", strtotime("last day of ".$mes));
      //sacar el dia de dia del mes
      $fecha      =  date("Y-m-d", strtotime("first day of ".$mes));
      $daysmonth  =  date("d", strtotime($fecha));
      $montmonth  =  date("m", strtotime($fecha));
      $yearmonth  =  date("Y", strtotime($fecha));
      // sacar el lunes de la primera semana
      $nuevaFecha = mktime(0,0,0,$montmonth,$daysmonth,$yearmonth);
      $diaDeLaSemana = date("w", $nuevaFecha);
      $nuevaFecha = $nuevaFecha - ($diaDeLaSemana*24*3600); //Restar los segundos totales de los dias transcurridos de la semana
      $dateini = date ("Y-m-d",$nuevaFecha);
      //$dateini = date("Y-m-d",strtotime($dateini."+ 1 day"));
      // numero de primer semana del mes
      $semana1 = date("W",strtotime($fecha));
      // numero de ultima semana del mes
      $semana2 = date("W",strtotime($daylast));
      // semana todal del mes
      // en caso si es diciembre
      if (date("m", strtotime($mes))==12) {
          $semana = 5;
      }
      else {
        $semana = ($semana2-$semana1)+1;
      }
      // semana todal del mes
      $datafecha = $dateini;
      $calendario = array();
      $iweek = 0;
      while ($iweek < $semana):
          $iweek++;
          //echo "Semana $iweek <br>";
          //
          $weekdata = [];
          for ($iday=0; $iday < 7 ; $iday++){
            // code...
            $datafecha = date("Y-m-d",strtotime($datafecha."+ 1 day"));
            $datanew['mes'] = date("M", strtotime($datafecha));
            $datanew['dia'] = date("d", strtotime($datafecha));
            $datanew['fecha'] = $datafecha;
            //AGREGAR CONSULTAS EVENTO
            $datanew['evento'] = Servicio::where("fecha",$datafecha)->get();

            array_push($weekdata,$datanew);
          }
          $dataweek['semana'] = $iweek;
          $dataweek['datos'] = $weekdata;
          //$datafecha['horario'] = $datahorario;
          array_push($calendario,$dataweek);
      endwhile;
      $nextmonth = date("Y-M",strtotime($mes."+ 1 month"));
      $lastmonth = date("Y-M",strtotime($mes."- 1 month"));
      $month = date("M",strtotime($mes));
      $yearmonth = date("Y",strtotime($mes));
      //$month = date("M",strtotime("2019-03"));
      $data = array(
        'next' => $nextmonth,
        'month'=> $month,
        'year' => $yearmonth,
        'last' => $lastmonth,
        'calendar' => $calendario,
      );
      return $data;
    }

    public static function spanish_month($month)
    {

        $mes = $month;
        if ($month=="Jan") {
          $mes = "Enero";
        }
        elseif ($month=="Feb")  {
          $mes = "Febrero";
        }
        elseif ($month=="Mar")  {
          $mes = "Marzo";
        }
        elseif ($month=="Apr") {
          $mes = "Abril";
        }
        elseif ($month=="May") {
          $mes = "Mayo";
        }
        elseif ($month=="Jun") {
          $mes = "Junio";
        }
        elseif ($month=="Jul") {
          $mes = "Julio";
        }
        elseif ($month=="Aug") {
          $mes = "Agosto";
        }
        elseif ($month=="Sep") {
          $mes = "Septiembre";
        }
        elseif ($month=="Oct") {
          $mes = "Octubre";
        }
        elseif ($month=="Oct") {
          $mes = "December";
        }
        elseif ($month=="Dec") {
          $mes = "Diciembre";
        }
        else {
          $mes = $month;
        }
        return $mes;
    }
	
	
	    public function newImageService( Request $request ) {
        $rules = [ 'image' => 'required|image|max:1024*1024*1', ];
        $messages = [
            'image.required' => 'La imagen es requerida',
            'image.image' => 'Formato no permitido',
            'image.max' => 'El máximo permitido es 1 MB',
        ];

        $validator = Validator::make( $request->all(), $rules, $messages );

        if ( $validator->fails() ) {
            return redirect( '/subir_img_multimedida' )->withErrors( $validator );
        } else {
            $name = str::random( 30 ) . '-' . $request->file( 'image' )->getClientOriginalName();
            $request->file( 'image' )->move( 'perfiles', $name );
			
			$servicio=new Servicio;
			
            return redirect( 'multimedia' )->with( 'status' );
        }
    }

}
    