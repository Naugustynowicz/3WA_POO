<!DOCTYPE html>
<html>
<body>

<?php

class BaseArray
{
    private array $items = [];

    // creer une méthode pour ajouter des éléments à $this->items
    public function add(string|int $index, mixed $element): self {
        $this->items[$index] = $element;

        return $this;
    }

    // creer une méthode pour supprimer des éléments à $this->items
    public function remove(string|int $index): void {
        if ($this->items[$index]) {
            unset($this->items[$index]);
        }
    }

    // creer une méthode pour récupérer tous les éléments de $this->items
    public function all(): array {
        return $this->items;
    }
    
    //change la casse de toutes les clés du tableau
    public function change_keys_case(string $case): void 
    {
        foreach($this->items as $index => $element)
        {
            if(gettype($index) === "string")
            {
                switch($case)
                {
                    case "Maj" :
                        $this->add(strtoupper($index), $element);
                        $this->remove($index);
                        break;
                    case "Min" :
                        $this->add(strtolower($index), $element);
                        $this->remove($index);
                        break ;
                }
            }
        }
    }
}

$items = new BaseArray();

$items->add('item_1', 1)
    ->add('item_2', 2)
    ->add(3,3);
var_dump($items->all());

$items->change_keys_case("Maj");
var_dump($items->all());

$items->change_keys_case("Min");
var_dump($items->all());



?>

</body>
</html>