<?php
	namespace App\Http\Controllers\Site;

	use App\Http\Controllers\Controller;
	use Carbon\Carbon;
	use Request;

	class ControllerSite extends Controller{
		public function __construct(){}

		public function index(){
			$data['title'] = 'Teste';
			$data['description'] = 'Teste para desenvolvedor';

			return view('Site/index', $data);
		}

		public function timezone(){
			//Recebendo os dados do servidor e os atribuindo a variaveis
			$estado = Request::route('estado');
			$data['id'] = Request::route('id');
			//Criando o array contendo as timezones
			$timezones = array(
				'AC' => 'America/Rio_branco',   'AL' => 'America/Maceio',
				'AP' => 'America/Belem',        'AM' => 'America/Manaus',
				'BA' => 'America/Bahia',        'CE' => 'America/Fortaleza',
				'DF' => 'America/Sao_Paulo',    'ES' => 'America/Sao_Paulo',
				'GO' => 'America/Sao_Paulo',    'MA' => 'America/Fortaleza',
				'MT' => 'America/Cuiaba',       'MS' => 'America/Campo_Grande',
				'MG' => 'America/Sao_Paulo',    'PR' => 'America/Sao_Paulo',
				'PB' => 'America/Fortaleza',    'PA' => 'America/Belem',
				'PE' => 'America/Recife',       'PI' => 'America/Fortaleza',
				'RJ' => 'America/Sao_Paulo',    'RN' => 'America/Fortaleza',
				'RS' => 'America/Sao_Paulo',    'RO' => 'America/Porto_Velho',
				'RR' => 'America/Boa_Vista',    'SC' => 'America/Sao_Paulo',
				'SE' => 'America/Maceio',       'SP' => 'America/Sao_Paulo',
				'TO' => 'America/Araguaia',     
				);

			$time = $timezones[$estado];
			//Utilizando o Carbon para pegar a data e hora
			$now = Carbon::now($time);
			//Pegando o horário atual sem o fuso
			$fuso = Carbon::now();
			//Indicando os valores do json
			$data['hora'] = $now->formatLocalized('%H');
			$data['minutos'] = $now->formatLocalized('%M');
			$data['segundos'] = $now->formatLocalized('%S');
			//Subtração para gerar o fuso
			$data['fuso'] = $now->formatLocalized('%H') - $fuso->formatLocalized('%H');
			$data['estado'] = $estado;
			
			//Retorna a data convertida em json
			return response()->json($data, 200);
		}
	} 