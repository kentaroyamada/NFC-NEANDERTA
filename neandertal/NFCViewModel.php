<?php

namespace Neandertal;

// Data to show on the page
class NFCViewModel
{
    const DARK_LIGHT_ID_BOUND = 1000;

    public $nfc;
    public $isOwner = false;
    public $isTest = false;
    public $isDark = false;
    public $isLight = false;
    public $ownerTitle;
    public $ownerNumber;
    public $soldDisplayDate;
    public $imageSrc = 'images/ND-3.jpg';

    function __construct(?NFC $nfc, ?string $encoded, ?int $decoded)
    {
        $this->nfc = $nfc;

        if (substr($encoded, 0, 4) === "TEST") {

            $this->ownerTitle = "TESTER UNIT <BR> NOT FOR RESALE";
            $this->isTest = true;

            if (substr($this->encodedId, 7, 2) == "ND") {
                $this->isDark = true;
                $this->imageSrc = 'images/ND-3.jpg';
            } else if (substr($this->encodedId, 7, 2) == "NL") {
                $this->isLight = true;
                $this->imageSrc = 'images/NL.jpg';
            }
        } else if ($decoded == 0) {
            $this->ownerTitle = "TESTER UNIT - NON OWNER";
            $this->isTest = true;
        } else if ($decoded < self::DARK_LIGHT_ID_BOUND) {
            $this->ownerTitle = "Neandertal dark&trade; Owner ID ";
            $this->ownerNumber = $decoded;
            $this->isOwner = true;
            $this->isDark = true;
            $this->imageSrc = 'images/ND-3.jpg';
        } else if ($decoded > self::DARK_LIGHT_ID_BOUND) {
            $this->ownerTitle = "Neandertal light&trade; Owner ID ";
            $this->ownerNumber = $decoded - self::DARK_LIGHT_ID_BOUND;
            $this->isOwner = true;
            $this->isLight = true;
            $this->imageSrc = 'images/NL.jpg';
        } else {
            $this->ownerTitle = "You are not an owner ";
        }

        if (!empty($nfc->soldDate)) {
            $this->soldDisplayDate = explode(' ', $nfc->soldDate)[0];
        }

        return $this;
    }
}
