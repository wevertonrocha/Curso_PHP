<?php 

declare(strict_types=1);
// Habilita a exibição de todos os erros (útil para desenvolvimento).

$pdo = null;

try {
    // Tenta criar uma nova conexão PDO com o banco de dados MySQL.
    $pdo = new PDO("mysql:host=localhost;dbname=curso_php", "root", "");
    
    echo "Conexão com o banco de dados estabelecida com sucesso.";
} catch (Exception $e) {
    // Captura qualquer exceção lançada durante a tentativa de conexão.
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
    die(); // Encerra o script em caso de erro.
}

return $pdo;
// Retorna o objeto PDO para uso em outras partes do aplicativo.