<?php 
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome = $_POST['nome_medico'];
			$crm = $_POST['crm_medico'];
			$especialidade = $_POST['especialidade_medico'];
			$sexo = $_POST["sexo_medico"];

			$sql = "INSERT INTO medico (
						nome_medico,
						crm_medico,
						especialidade_medico,
						sexo_medico)
					VALUES (
						'{$nome}',
						'{$crm}',
						'{$especialidade}',
						'{$sexo}')";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-medico';</script>";
			}else{
				print "<script>alert('Deu errado!');</script>";
				print "<script>location.href='?page=listar-medico';</script>";
			}
			break;
		
		case 'editar':
			// code...
			break;

		case 'excluir':
			// code...
			break;
	}
?>