<?
class Pilha
{
    private array $pilha;
    private int $tamanho;

    public function __construct()
    {
        $this->pilha = [];
        $this->tamanho = 0;
    }

    public function adicionarNoInicio($arg)
    {
        array_push($this->pilha, $arg);
        $this->tamanho++;
    }


}

?>