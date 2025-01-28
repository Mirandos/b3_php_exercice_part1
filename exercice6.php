<?php
require "exercice1.php";
/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */
class ShoppingCart {
    private array $items = []; 
    private float $total = 0;  

    public function addProduct(Product $product) {
        $this->items[] = $product;
        $this->calculTotal(); 
    }

    public function afficheProducts() {
        foreach ($this->items as $product) {
            echo "Nom : {$product->getName()}, Prix TTC : {$product->getPriceWithVat()}€<br>";
        }
    }

    private function calculTotal() {
        $this->total = 0; 
        foreach ($this->items as $product) {
            $this->total += $product->getPriceWithVat();
        }
    }

    public function afficheTotal() {
        echo "Coût total TTC : {$this->total}€<br>";
    }
}
echo "<br>";
$product1 = new Product("PC", 1000, 20); 
$product2 = new Product("Souris", 50, 20); 


$cart = new ShoppingCart();

$cart->addProduct($product1);
$cart->addProduct($product2);

$cart->afficheProducts();

$cart->afficheTotal();