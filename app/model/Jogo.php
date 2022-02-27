<?php
namespace App\model;

    class Jogo{
        public int $id;
        public string $nome;
        public string $preco;
        public string $categoria;

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function setCategoria(string $categoria){
            $this->categoria = $categoria;
        }

        public function setPreco(string $preco){
            $this->preco = $preco;
        }

        public function read(int $id){
            $this->nome='Call of Duty';
            $this->categoria='FPS';
            $this->preco=32.98;

            return $this;
        }

    }
?>