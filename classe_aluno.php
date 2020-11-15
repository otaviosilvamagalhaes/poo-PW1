<?php
    
    class Aluno{

        private $matricula;
        private $nome;
        private $prova1;
        private $prova2;
        private $trabalho;

        public function ver_matricula(){
            return $this->matricula;
            
        }
        public function matricula($matricula){
            $this->matricula = $matricula;
            
        }
        public function ver_nome(){
            return $this->nome;
            
        }
        public function nome($nome){
            $this->nome = $nome;
            
        }
        public function ver_nota1(){
            return $this->prova1;
            
        }

        public function nota1($nota1){
            $this->prova1 = $nota1;
            
        }
        public function ver_nota2(){
            return $this->prova2;
            
        }

        public function nota2($nota2){
            $this->prova2 = $nota2;
            
        }

        public function ver_trabalho(){
            return $this->trabalho;
            
        }
        public function trabalho($trabalho){
            $this->trabalho = $trabalho;
            
        }

        public function media(){
            $prova_1 = $this->prova1;
            $prova_2 = $this->prova2;
            $assignment = $this->trabalho;

            $nota_total = ($prova_1 * 3.5) + ($prova_2 * 3.5) + ($assignment * 3.0);
            if($nota_total >= 70){
                echo "Aprovado, parabéns!";
            } else {
                echo "Reprovado, estude mais na próxima!";
            }
        }
    }

?>