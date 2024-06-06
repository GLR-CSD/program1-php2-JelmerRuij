<?php
// Set strict types
declare(strict_types=1);

class Album {
    /** @var int|null Het ID van het album */
    private ?int $ID;

    /** @var string De naam van het album */
    private string $naam;

    /** @var string De artiest(en) van het album */
    private string $artiesten;

    /** @var string De releasedatum van het album */
    private string $releaseDatum;

    /** @var string De URL van het album */
    private string $URL;

    /** @var string De afbeeldingslocatie van het album */
    private string $afbeelding;

    public function getID(): ?int
    {
        return $this->ID;
    }

    public function setID(?int $ID): void
    {
        $this->ID = $ID;
    }

    public function getNaam(): string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): void
    {
        $this->naam = $naam;
    }

    public function getArtiesten(): string
    {
        return $this->artiesten;
    }

    public function setArtiesten(string $artiesten): void
    {
        $this->artiesten = $artiesten;
    }

    public function getReleaseDatum(): string
    {
        return $this->releaseDatum;
    }

    public function setReleaseDatum(string $releaseDatum): void
    {
        $this->releaseDatum = $releaseDatum;
    }

    public function getURL(): string
    {
        return $this->URL;
    }

    public function setURL(string $URL): void
    {
        $this->URL = $URL;
    }

    public function getAfbeelding(): string
    {
        return $this->afbeelding;
    }

    public function setAfbeelding(string $afbeelding): void
    {
        $this->afbeelding = $afbeelding;
    }

    public function getPrijs(): float
    {
        return $this->prijs;
    }

    public function setPrijs(float $prijs): void
    {
        $this->prijs = $prijs;
    }

    /** @var float De prijs van het album */
    private float $prijs;

    /**
     * @param int|null $ID
     * @param string $naam
     * @param string $artiesten
     * @param string $releaseDatum
     * @param string $URL
     * @param string $afbeelding
     * @param float $prijs
     */
    public function __construct(?int $ID, string $naam, string $artiesten, string $releaseDatum, string $URL, string $afbeelding, float $prijs)
    {
        $this->ID = $ID;
        $this->naam = $naam;
        $this->artiesten = $artiesten;
        $this->releaseDatum = $releaseDatum;
        $this->URL = $URL;
        $this->afbeelding = $afbeelding;
        $this->prijs = $prijs;
    }
}
