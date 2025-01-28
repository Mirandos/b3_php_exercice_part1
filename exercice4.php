<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */
class Article {
    public function __construct(
        private string $title,
        private string $content
    ){}

    public function getSummary($maxLength){
        $summary = substr($this->content, 0, $maxLength) . "…";

        return "Titre: {$this->title} <br> Contenu: {$summary}";
    }
}
$article = new Article("Une journée en tant que dev", "Teeeeeeeeeeeeeeeeeeeeeeeeeeest");
echo $article->getSummary(3);
