<?php

// Crie uma classe Livro com atributos tipados: titulo (string), autor (string),
// anoPublicacao (int) e preco (float).
// Implemente um construtor que receba os 4 valores e os atribua aos atributos.
// Implemente um método resumo(): string que retorne uma frase formatada com todos
// os dados do livro.
// Crie um array com 5 objetos Livro diferentes (instanciados com o construtor).
// Percorra o array com foreach e exiba o resumo de cada livro em uma lista HTML.

class Livro {
    public string $titulo;
    public string $autor;
    public int $anoPublicacao;
    public float $preco;

    public function __construct(string $titulo, string $autor, int $anoPublicacao, float $preco) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->preco = $preco;
    }

    public function resumo(): string {
        return "Título: {$this->titulo}, Autor: {$this->autor}, Ano de Publicação: {$this->anoPublicacao}, Preço: R$ " . number_format($this->preco, 2, ',', '.');
    }
}'