<?php

namespace Neandertal;

use PDO;

// Data access object for db interactions
class NFCDao
{
    private $pdo;

    function __construct(array $env)
    {
        $dbHost = $env['NFC_DB_HOST'];
        $dbName = $env['NFC_DB_NAME'];
        $dbUser = $env['NFC_DB_USER'];
        $dbPass = $env['NFC_DB_PASS'];

        $this->pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function getByDecoded(?int $decoded): ?NFC
    {
        $sql = $this->pdo->prepare("
         select * from NFC 
         where decoded = :decoded
         order by tagged_date desc
         limit 1
      ");
        $sql->execute(['decoded' => $decoded]);
        $row = $sql->fetch();
        return empty($row) ? null : $this->box($row);
    }

    public function updateRegistration(
        int $decoded,
        string $ownerName,
        string $ownerEmail,
        string $ownerAddress,
        string $soldAt
    ) {
        $sql = $this->pdo->prepare("
            update NFC
            set owner_name = :ownerName,
                owner_email = :ownerEmail,
                owner_address = :ownerAddress,
                sold_at = :soldAt,
                registered_date = if(registered_date is null, now(), registered_date)
            where decoded = :decoded
        ");
        $sql->execute([
            'decoded' => $decoded,
            'ownerName' => $ownerName,
            'ownerEmail' => $ownerEmail,
            'ownerAddress' => $ownerAddress,
            'soldAt' => $soldAt
        ]);
    }

    private function box(array $row): NFC
    {
        return new NFC(
            (int)$row['id'],
            $row['type'],
            (int)$row['our_id'],
            (int)$row['decoded'],
            $row['encoded'],
            $row['url'],
            $row['quality'],
            $row['owner_name'],
            $row['owner_email'],
            $row['owner_address'],
            $row['sales_term'],
            (int)$row['tagged'],
            $row['tagged_date'],
            $row['sold_date'],
            $row['sold_at'],
            $row['registered_date'],
            $row['last_refill_date'],
            $row['removed_date']
        );
    }
}
