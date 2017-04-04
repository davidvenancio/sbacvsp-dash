<?php
/**
 * Slim - a micro PHP 5 framework
 *
 * @author      Juliana Mayumi Suzuki <fazedoradesite@gmail.com>
 * @version     0.0.1
 * @package     Fazedora De Site
 *
 */


class Respostas{

	protected $db;

	public function __construct($db){
		$this->db = $db;
	}


	public function ListaPessoas(){
		$query=$this->db->prepare("SELECT * 
									FROM tb_pessoas ORDER BY pessoa_id Desc");
		$query->execute();

		$lista = $query->fetchAll();

		return $lista;
	}


	public function ExportaPessoas($dados){

		$ids = '';
		foreach ($dados['pessoa_id'] as $key1 => $pessoa_id) {
			$sql = "SELECT * 
					FROM tb_respostas 
					WHERE pessoa_id in (".$pessoa_id.")";

			$query=$this->db->prepare($sql);
			$query->execute();

			$lista[$pessoa_id] = $query->fetchAll();
		}

		$csv = '';

		$csv .= '
		<table>
			<tr>
				<td>NOME</td>
				<td>CRM</td>
				<td>DIA DE NASCIMENTO</td>
				<td>MES DE NASCIMENTO</td>
				<td>ANO DE NASCIMENTO</td>
				<td>Sexo</td>
				<td>CIDADE QUE TRABALHA</td>
				<td>REALIZA PROCEDIMENTO ENDOVASCULAR</td>
				<td>HÁ QUANTO TEMPO</td>
				<td>QUANTOS POR MÊS</td>
				<td>COMENTÁRIO / OBSERVAÇÃO 1</td>
				<td>ANGIOPLASTIA E STENT PERIFÉRICO</td>
				<td>ANGIOPLASTIA E STENT CAROTÍDEO</td>
				<td>EMBOLIZAÇÃO DE MAV</td>
				<td>ANEURISMA TORÁCICO</td>
				<td>DISSECÇÃO DE AORTA</td>
				<td>ANEURISMA TORACO-ABOMINAL</td>
				<td>ANEURISMA TORACO-ABOMINAL</td>
				<td>ANEURISMA TORACO-ABOMINAL</td>
				<td>ANEURISMA TORACO-ABOMINAL</td>
				<td>ANEURISMA TORACO-ABOMINAL</td>
				<td>ANEURISMA TORACO-ABOMINAL</td>
				<td>Comentario / Observação 2</td>
				<td>NÚMERO DE HOSPITAIS QUE FAZ PROCEDIMENTOS ENDOVASCULARES</td>
				<td>HOSPITAL 1</td>
				<td>HOSPITAL 1</td>
				<td>HOSP 1 TEMPO DE USO</td>
				<td>HOSPITAL 1</td>
				<td>HOSPITAL 1 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 1 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 1 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 1 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 1 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 1 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 1 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 2</td>
				<td>HOSPITAL 2</td>
				<td>HOSP 2 TEMPO DE USO</td>
				<td>HOSPITAL 2</td>
				<td>HOSPITAL 2 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 2 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 2 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 2 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 2 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 2 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 2 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 3</td>
				<td>HOSPITAL 3</td>
				<td>HOSP 3 TEMPO DE USO</td>
				<td>HOSPITAL 3</td>
				<td>HOSPITAL 3 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 3 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 3 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 3 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 3 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 3 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>HOSPITAL 3 SISTEMA DE PROTEÇÃO DISPONÍVEL</td>
				<td>ATUA COMO PROCTOR EM OUTRAS CIDADES / SERVIÇOS</td>
				<td>COMENTÁRIO / OBSERVAÇÃO 3</td>
				<td>USA CONSTANTEMENTE DURANTE OS PROCEDIMENTOS</td>
				<td>USA CONSTANTEMENTE DURANTE OS PROCEDIMENTOS</td>
				<td>USA CONSTANTEMENTE DURANTE OS PROCEDIMENTOS</td>
				<td>USA CONSTANTEMENTE DURANTE OS PROCEDIMENTOS</td>
				<td>USA CONSTANTEMENTE DURANTE OS PROCEDIMENTOS</td>
				<td>USA CONSTANTEMENTE DURANTE OS PROCEDIMENTOS</td>
				<td>QUANTO AO AVENTAL</td>
				<td>QUANTO AO AVENTAL</td>
				<td>QUANTO AO AVENTAL</td>
				<td>QUANTO AO AVENTAL</td>
				<td>QUANTO AO AVENTAL</td>
				<td>QUANTO AO AVENTAL</td>
				<td>QUANTO AO AVENTAL</td>
				<td>PROTEÇÃO COLETIVA - ESCUDO</td>
				<td>PROTEÇÃO COLETIVA - SAIOTE</td>
				<td>COMENTÁRIO / OBSERVAÇÃO 4</td>
				<td>USO DO DOSÍMETRO</td>
				<td>USO DO DOSÍMETRO</td>
				<td>USO DO DOSÍMETRO</td>
				<td>USO DO DOSÍMETRO</td>
				<td>USO DO DOSÍMETRO</td>
				<td>USO DO DOSÍMETRO</td>
				<td>USO DO DOSÍMETRO</td>
				<td>DOSAGEM DO DOSÍMETRO NO ÚLTIMO RELATÓRIO</td>
				<td>SOMATÓRIA DA DOSAGEM DO DOSÍMETRO DOS DIVERSOS SERVIÇOS</td>
				<td>LEITURA DO DOSÍMETRO</td>
				<td>LEITURA DO DOSÍMETRO</td>
				<td>LEITURA DO DOSÍMETRO</td>
				<td>LEITURA DO DOSÍMETRO</td>
				<td>LEITURA DO DOSÍMETRO</td>
				<td>LEITURA DO DOSÍMETRO</td>
				<td>COMENTÁRIO / OBSERVAÇÃO 4</td>
				<td>TEM CONHECIMENTO BÁSICO DE FÍSICA DAS RADIAÇÕES PARA O USO APROPRIADO DO EQUIPAMENTO / PROCEDIMENTO?</td>
				<td>TEM CONHECIMENTO BÁSICO DE FÍSICA DAS RADIAÇÕES PARA O USO APROPRIADO DO EQUIPAMENTO PARA POSICIONAMENTO NA SALA EM USO DE PERFIL / OBLIQUA</td>
				<td>UTILIZA DE COLIMAÇÃO E FILTROS PRÓPRIA DO FEIXE PRIMÁRIO?</td>
				<td>AFASTA DO PACIENTE NA HORA DE SUBTRAÇÃO / CINE ANGIOGRAFIA</td>
				<td>MANTÊM O CORPO E MÃOS DISTANTE DO FEIXE PRIMÁRIO DURANTE O PROCEDIMENTO?</td>
				<td>MANTÊM A FONTE DISTANTE DO PACIENTE (> 50 CM)</td>
				<td>PARTICIPARIA DE CURSO SOBRE FÍSICA E SEGURANÇA ?</td>
				<td>COMENTÁRIO / OBSERVAÇÃO 5</td>
				<td>PREDISPOSIÇÃO GENÉTICA A DOENÇA NEOPLÁSICA ?</td>
				<td>PREDISPOSIÇÃO GENÉTICA A DOENÇA NEOPLÁSICA ?</td>
				<td>PREDISPOSIÇÃO GENÉTICA A DOENÇA NEOPLÁSICA ?</td>
				<td>CHECK UP</td>
				<td>CHECK UP</td>
				<td>CHECK UP</td>
				<td>APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>QUAL</td>
				<td>ALGUÉM DA EQUIPE / COLEGA DO SERVIÇO APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>ALGUÉM DA EQUIPE / COLEGA DO SERVIÇO APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>ALGUÉM DA EQUIPE / COLEGA DO SERVIÇO APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>ALGUÉM DA EQUIPE / COLEGA DO SERVIÇO APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>ALGUÉM DA EQUIPE / COLEGA DO SERVIÇO APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>ALGUÉM DA EQUIPE / COLEGA DO SERVIÇO APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>ALGUÉM DA EQUIPE / COLEGA DO SERVIÇO APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO?</td>
				<td>COMENTÁRIO / OBSERVAÇÃO 6</td>
				<td>COMENTÁRIO FINAL E SUGESTÕES</td>
			</tr>';

		foreach($lista as $key => $values){
			$csv .= "<tr>";
			foreach($values as $key2 => $values2){

				if($values2['resposta'] == 'SIM' || $values2['resposta'] == 'Sim')
					$values2['resposta'] = 1;
				if($values2['resposta'] == 'NÃO' || $values2['resposta'] == 'Não')
					$values2['resposta'] = 2;

				$csv .= '<td>'.$values2['resposta'].'</td>';

				if($values2['questao_id'] == 122)
					$csv .= "\r\n";

			}
			$csv .= "</tr>";

		}

		$csv .= "</table>";

		//echo $csv;die;

		return utf8_decode($csv);
	}


};

