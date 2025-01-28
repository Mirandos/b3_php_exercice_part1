<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos prix hors + prix hors taxe /100
*/
class Product {
    public function __construct(private string $name,
    private float $price_without_tax,
    private float $vat_rate){
    }

    public function getPriceWithVat(): float{
        return $this->getPriceWithoutTax() + $this->getPriceWithoutTax() * $this->getVatRate();
    }

    
    

    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */
    public function setName( $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price_without_tax
     *
     * @return  float
     */
    public function getPriceWithoutTax()
    {
        return $this->price_without_tax;
    }

    /**
     * Set the value of price_without_tax
     *
     * @param  float  $price_without_tax
     *
     * @return  self
     */
    public function setPriceWithoutTax( $price_without_tax)
    {
        $this->price_without_tax = $price_without_tax;

        return $this;
    }

    /**
     * Get the value of vat_rate
     *
     * @return  float
     */
    public function getVatRate()
    {
        return $this->vat_rate/100;
    }

    /**
     * Set the value of vat_rate
     *
     * @param  float  $vat_rate
     *
     * @return  self
     */
    public function setVatRate( $vat_rate)
    {
        $this->vat_rate = $vat_rate;

        return $this;
    }
}
$produit = new Product("PC", 1000,10);
echo $produit->getPriceWithVat();
