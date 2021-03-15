<?php

namespace Neandertal;

// The database record
class NFC
{
   public $id;
   public $type;
   public $ourId;
   public $decoded;
   public $encoded;
   public $url;
   public $quality;
   public $ownerName;
   public $ownerEmail;
   public $ownerAddress;
   public $salesTerm;
   public $tagged;
   public $taggedDate;
   public $soldDate;
   public $soldAt;
   public $registeredDate;
   public $lastRefillDate;
   public $removedDate;

   function __construct(
      int $id,
      ?string $type,
      ?int $ourId,
      int $decoded,
      ?string $encoded,
      ?string $url,
      ?string $quality,
      ?string $ownerName,
      ?string $ownerEmail,
      ?string $ownerAddress,
      ?string $salesTerm,
      ?int $tagged,
      ?string $taggedDate,
      ?string $soldDate,
      ?string $soldAt,
      ?string $registeredDate,
      ?string $lastRefillDate,
      ?string $removedDate
   ) {
      $this->id = $id;
      $this->type = $type;
      $this->ourId = $ourId;
      $this->decoded = $decoded;
      $this->encoded = $encoded;
      $this->url = $url;
      $this->quality = $quality;
      $this->ownerName = $ownerName;
      $this->ownerEmail = $ownerEmail;
      $this->ownerAddress = $ownerAddress;
      $this->salesTerm = $salesTerm;
      $this->tagged = $tagged;
      $this->taggedDate = $taggedDate;
      $this->soldDate = $soldDate;
      $this->soldAt = $soldAt;
      $this->registeredDate = $registeredDate;
      $this->lastRefillDate = $lastRefillDate;
      $this->removedDate = $removedDate;
   }
}
