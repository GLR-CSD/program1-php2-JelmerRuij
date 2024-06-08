<?php
// Start de sessie
session_start();

// Controleer of het verzoek via POST is gedaan
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Valideer de ingediende gegevens
    $errors = [];
    $formValues = [
        'naam' => $_POST['naam'] ?? '',
        'artiesten' => $_POST['artiesten'] ?? '',
        'release_datum' => $_POST['release_datum'] ?? '',
        'url' => $_POST['url'] ?? '',
        'afbeelding' => $_POST['afbeelding'] ?? '',
        'prijs' => $_POST['prijs'] ?? '',
    ];

    // Valideer naam
    if (empty($_POST['naam'])) {
        $errors['naam'] = "Naam is verplicht.";
    }

    // Valideer artiesten
    if (empty($_POST['artiesten'])) {
        $errors['artiesten'] = "Artiesten is verplicht.";
    }

    // Valideer release datum
    if (empty($_POST['release_datum'])) {
        $errors['release_datum'] = "Release datum is verplicht.";
    }

    // Valideer url
    if (empty($_POST['url'])) {
        $errors['url'] = "URL is verplicht.";
    }

    // Valideer afbeelding
    if (empty($_POST['afbeelding'])) {
        $errors['afbeelding'] = "Afbeelding is verplicht.";
    }

    // Valideer prijs
    if (empty($_POST['prijs'])) {
        $errors['prijs'] = "Prijs is verplicht.";
    }

    // Als er geen validatiefouten zijn, voeg het album toe aan de database
    if (empty($errors)) {
        require_once 'db.php';
        require_once 'classes/Album.php';

        // Maak een nieuw Album object met de ingediende gegevens
        $album = new Album(
            null,
            $_POST['naam'],
            $_POST['artiesten'],
            $_POST['release_datum'],
            $_POST['url'],
            $_POST['afbeelding'],
            $_POST['prijs']
        );

        // Voeg het album toe aan de database
        $album->save($db);

    } else {
        // Sla de fouten en formulier waarden op in sessievariabelen
        $_SESSION['errors'] = $errors;
        $_SESSION['formValues'] = $formValues;
    }

    // Stuur de gebruiker terug naar de album.php
    header("Location: album.php");
    exit;

} else {
    header("Location: album.php");
}