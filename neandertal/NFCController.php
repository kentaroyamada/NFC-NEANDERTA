<?php

namespace Neandertal;

use Exception;
use Hashids\Hashids;

class NFCController
{
    private $nfcDao;
    private $hashIds;
    private $encoded;
    private $decoded;
    public $viewModel;
    public $message;

    function __construct(
        NFCDao $nfcDao,
        array $env,
        array $get,
        array $post
    ) {
        $hashSecret = $env['NFC_HASH_SECRET'];
        $encoded = $get['id'] ?? '1';

        $this->nfcDao = $nfcDao;
        $this->hashIds = new Hashids($hashSecret, 8);
        $this->encoded = $encoded;
        $this->decoded = $this->hashIds->decode($encoded)[0];

        // if posting a user registration update, save it and refresh
        if (!empty($post) && !empty($this->encoded) && !empty($this->decoded)) {
            try {
                $this->updateRegistration(
                    $post['ownerName'],
                    $post['ownerEmail'],
                    $post['ownerAddress'],
                    $post['soldAt']
                );
                $_SESSION['message'] = 'Your details were updated';
                header("Location: ?id=$this->encoded");
            } catch (Exception $error) {
                $_SESSION['message'] = 'Failed to save details';
            }
            return;
        }

        if ($_SESSION['message']) {
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        }

        // otherwise get the nfc data to display
        $this->viewModel = $this->getViewModel();
    }

    private function getViewModel(): NFCViewModel
    {
        $nfc = $this->decoded == null ?
            null :
            $this->nfcDao->getByDecoded($this->decoded);

        return new NFCViewModel(
            $nfc,
            $this->encoded,
            $this->decoded
        );
    }

    public function updateRegistration(
        string $ownerName,
        string $ownerEmail,
        string $ownerAddress,
        string $soldAt
    ) {
        if ($this->decoded == null) {
            return;
        }

        $this->nfcDao->updateRegistration(
            $this->decoded,
            $ownerName,
            $ownerEmail,
            $ownerAddress,
            $soldAt
        );
    }
}
