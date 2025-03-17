<?php
    class Produto {
        private $codigo;
        private $produto;
        private $dataValidade;
        private $preco;
        private $conexao;

        function __construct($codigo, $conexao, $produto, $dataValidade, $preco){
            $this->codigo = $codigo;
            $this->produto = $produto;
            $this->dataValidade = $dataValidade;
            $this->preco = $preco;
            $this->conexao = $conexao;

            if ($preco === "" ) {
                $this->preco = 0;
            }
        }

        function salvar() {
            $sql = "INSERT INTO produtos (codigo, produto, data_validade, preco) VALUES (?, ?, ?, ?)";
            $statement = $this->conexao->prepare($sql);
            $statement->bindParam(1, $this->codigo);
            $statement->bindParam(2, $this->produto);
            $statement->bindParam(3, $this->dataValidade);
            $statement->bindParam(4, $this->preco);
            $statement->execute();
        }

        static function consultaProdutos($conexao){
            $sql = "SELECT * FROM produtos";
            return $conexao->query($sql);
        }
    }
?> 