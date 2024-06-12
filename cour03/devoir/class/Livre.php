<?php 

class Livre {
    public string $isbn;
    public string $titre;
    public DateTime $datePublication;
    public string $genre;
    public float $prix;
    public string $description;
    private float $cout;
    private float $marge;

    public function __construct(string $isbn, string $titre,
    DateTime $datePublication, string $genre, float $prix, string $description,
    float $cout){
        $this->isbn = $isbn;
        $this->titre = $titre;
        $this->datePublication = $datePublication;
        $this->genre = $genre;
        $this->prix = $prix;
        $this->description = $description;
        $this->cout = $cout;
        $this->marge = $this->calculMarge($prix, $cout);
    }
    public function __destruct(){
        echo "ISBN : " . $this->isbn .
        "<br>Titre : " . $this->titre .
        "<br>Date de publication : " . $this->datePublication->format('Y-m-d') .
        "<br>Genre : " . $this->genre .
        "<br>Prix : " . $this->prix . " $" .
        "<br>Description : " . $this->description
        ;
    }

    public function afficheMarge(){
        return "Le cout du livre est de " . $this->cout . " $." .
                "<br>La marge est donc de " . $this->marge . " $.<br>";
    }
    
    private function calculMarge($prix, $cout):float{
        $marge = $this->prix - $this->cout;
        return $marge;
    }
}
?>