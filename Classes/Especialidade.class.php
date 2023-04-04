<?php
class Especialidade extends Crud
{
    protected $tabela = 'Especialidade';
    private $idEsp;
    private $NomeEsp;
   
    /**
     * @return mixed
     */
    public function getidEsp()
    {
        return $this->idEsp;
    }

    /**
     * @param mixed $idEsp 
     * @return self
     */
    public function setidEsp($idEsp): self
    {
        $this->idEsp = $idEsp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeEsp()
    {
        return $this->NomeEsp;
    }

    /**
     * @param mixed $NomeEsp 
     * @return self
     */
    public function setNomeEsp($NomeEsp): self
    {
        $this->NomeEsp = $NomeEsp;
        return $this;
    }

 
    public function inserir()
    {
        $nome = $this->getNomeEsp();
        

        $sqlInserir= "INSERT INTO clinica.especialidade
        (NomeEsp)
        VALUES
        ('$nome')";
        
        if(Conexao::query($sqlInserir)){
            header('location: especialidades.php');
        }
    }

    /**
     * @param mixed $campo
     * @param mixed $id
     * @return mixed
     */
    public function atualizar($campo, $id)
    {
        $nome = $this->getNomePac();
        $endereco = $this->getEnderecoPac();
        $bairro = $this->getBairroPac();
        $cidade = $this->getCidadePac();
        $estado = $this->getEstadoPac();
        $cep = $this->getCepPac();
        $nascimento = $this->getNascimentoPac();
        $email = $this->getEmailPac();
        $celular = $this->getCelularPac();
        $foto = $this->getFotoPac();

        $sqlAtualizar= "UPDATE $this -> tabela SET
        nomePac ='$nome',
        enderecoPac ='$endereco',
        bairroPac= '$bairro',
        cidadePac='$cidade',
        estadoPac='$estado',
        cepPac='$cep',
        nascimentoPac='$nascimento',
        emailPac= '$email',
        celularPac= '$celular',
        fotoPac= '$foto'";

        if(Conexao::query($sqlAtualizar)){
            header('location: pacientes.php');
        }


    }
}