<?php

declare(strict_types=1);

class produto
{
    /**
     * Summary of $conexao
     * @var 
     */
    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=curso_php", "root", "");
        } catch (PDOException $e) {
            echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
            exit;
        }
    }

    
    public function list(): array
    {
        $sql = "SELECT * FROM produtos";

        $produtos = [];

        foreach ($this->conexao->query($sql) as $key => $value){

            array_push($produtos, $value);
            
        }
        return $produtos;
    }

    public function insert(string $descricao): int
    {
        $sql = "INSERT INTO produtos (descricao) VALUES (?)";

        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1, $descricao);

        $prepare->execute();

        return $prepare->rowCount(); 
    }

    public function update(string $descricao, int $id): int
    {
        $sql = "UPDATE produtos SET descricao = ? WHERE id = ?";

        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete(int $id): int
       {
        $sql = "DELETE FROM produtos WHERE id = ?";

        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }
}