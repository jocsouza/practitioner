<?php
class Tarefa {

    public $id;
    public $incidente;
    public $data_ini;
    public $grupo;
    public $cliente;
    public $demanda;
    public $evento;
    public $encaminhamento;
    public $status = false;

    public function __construct($id, $incidente, $data_ini, $grupo, $cliente, $demanda, $evento, $encaminhamento)
    {
        $this->id = $id;
        $this->incidente = $incidente;
        $this->data_ini = $data_ini;
        $this->grupo = $grupo;
        $this->cliente = $cliente;
        $this->demanda = $demanda;
        $this->evento = $evento;
        $this->encaminhamento = $encaminhamento;

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