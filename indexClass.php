<?php

require 'functions.php';

class Task {

    public $descricao;
    public $status = false;

    public function __construct($descricao)
    {
        $this->descricao = $descricao;

    }

    public function isCompleted()
    {
        return $this->status;
    }

    public function complete()
    {
        $this->status = true;
        
    }

    // public function descricao()
    // {
    //     return $this->descricao;
    // }

        
}


$tasks = [
    new Task('Teste de classe 01.'),
    new Task('Teste de classe 02.'),
    new Task('Teste de classe 03.')

  ];

  $tasks[2]->complete();
  
// dd($tasks);

require 'indexClass.view.php';


//dados do index.view.php  
// $names = [
//     'Joc',
//     'Sillas',
//     'Patareli'
// ];

// // foreach ($names as $name){
// //     echo $name.', ';
// // }

// $persons = [
//     'idade' => 50,
//     'cabelo' => 'preto',
//     'profissao' => 'analista'

// ];
// $persons['nome'] = 'Jocemar';

// unset($persons['idade']);

// $tasks = [
//     'titulo' => 'Estudar laracast', 
//     'data' => 'hoje', 
//     'designado_a' => 'Jocemar', 
//     'completada' => false //

// ]; 

// $idade = 15;
// echo "idade : $idade\n";
// if (verificaIdade($idade)){
//     echo 'Voce nao tem idade maior que 15.';
// } else {
//     echo "Voce tem idade maior que 15.";
    
// }

// dd($tasks);

// require 'index.view.php';
