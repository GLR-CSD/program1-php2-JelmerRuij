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

    /** @var float De prijs van het album */
    private float $prijs;
}
