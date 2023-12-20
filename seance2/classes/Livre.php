<?php
class Livre
{
    public string $isbn;
    public string $titre;
    public string $datePublication;
    public string $genre;
    public float $prix;
    public string $description;
    public float $cout;
    public float $marge;

    public function __construct($isbn, $titre, $datePublication, $genre, $prix, $description, $cout)
    {
        $this->isbn = $isbn;
        $this->titre = $titre;
        $this->datePublication = $datePublication;
        $this->genre = $genre;
        $this->prix = $prix;
        $this->description = $description;
        $this->cout = $cout;
        $this->calculMarge();
    }

    public function calculMarge(): void
    {
        $this->marge = $this->prix - $this->cout;
    }
}
