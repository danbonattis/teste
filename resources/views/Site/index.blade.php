@include('site/_includes/header')

<main ng-controller="estadosController">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<select name="estado" id="estado" ng-model="estado.nome">
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espírito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
				</select>
				<button type="button" class="btn btn-success" ng-click="envia()">Enviar</button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
				  <input type="text" class="form-control" placeholder="Pesquisar" aria-describedby="basic-addon1" ng-model="pesquisaEstado">
				</div>
			</div>
			<div class="col-lg-6 col-lg-offset-3">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Estado</th>
							<th>Horário Atual</th>
							<th>Fuso</th>
						</tr>
					</thead>

					<tbody ng-repeat="estado in estados | filter:pesquisaEstado">
						<tr>
							<td>@{{estado.id}}</td>
							<td>@{{estado.estado}}</td>
							<td>@{{estado.hora}}h @{{estado.minutos}}min @{{estado.segundos}}s</td>
							<td>@{{estado.fuso}} Horas</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>

@include('site/_includes/footer')