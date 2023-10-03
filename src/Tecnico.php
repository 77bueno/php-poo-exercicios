<?php 
namespace Livraria;

class Tecnico extends Livro {
    private array $formato = ["Digital", "Fisico"];

    public function getFormato(): string {
        return implode($this->formato);
    }

    public function setFormato(array $formato): self {
        $this->formato = $formato;
        return $this;
    }
}