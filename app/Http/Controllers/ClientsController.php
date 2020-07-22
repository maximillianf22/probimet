<?php     
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Clients;
use Redirect;
use Session;
use Illuminate\Support\Facades\Mail;


 class ClientsController extends Controller
{
    public function store(Request $request){

    	$validatedData = $request->validate([
			'name' => 'required|max:255',
			'last_name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:clients',
			'phone' => 'required|numeric|unique:clients'
		], [
			'name.max' => ' ¡El nombre es demasiado largo! ',
			'last_name.max' => ' ¡El apellido es demasiado largo! ',
			'email.unique' => ' ¡Este correo electronico ya existe en nuestro sistema! ',
			'phone.unique' => ' ¡Este numero telefonico ya existe en nuestro sistema! ',
			'name.required' => ' ¡El  nombre es requerido! ',
			'email.required' => ' ¡El correo es requerido! ',
		]);

			$client = new Clients();
			$client->name = $request->name;
			$client->last_name = $request->name;
			$client->email = $request->email;
			$client->phone = intval(preg_replace('/[^0-9]+/','', $request->phone), 10);

			$data['name'] =  $client->name;
	        $data['last_name'] = $client->last_name;
	        $data['email'] = $client->email;
	        $data['phone'] = $client->phone;

			Mail::send('email.notificacion', ['data' => $data], function($mail) use($data){
                $mail->subject('Registro en ventual');
                $mail->to( $data['email'], 'Probimep Ofertas');
            });

		$client->save();

    	return view('gracias')->with('Mensaje','Tu solicitud se ha registrado con exito');
    }

    public function index(){

        $data['clients']=Clients::paginate(7);
        return view('clients.index',$data);

    }
}