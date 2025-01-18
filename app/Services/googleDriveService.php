<?php

namespace App\Services;

use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;

class googleDriveService
{

    protected $client;
    protected $drive;


    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setApplicationName('Your Laravel App');
        $this->client->setAuthConfig(config('credentials.backup.credentials'));
        $this->client->setScopes(Google_Service_Drive::DRIVE);
        $this->drive = new Google_Service_Drive($this->client);
    }


    public function uploadFile($file, $fileName, $folderId)
    {

        $fileMetadata = new Google_Service_Drive_DriveFile([
            'name'    => $fileName,
            'parents' => [$folderId],
        ]);

        $fileContent = file_get_contents($file->getRealPath());

        $file = $this->drive->files->create($fileMetadata, [
            'data'       => $fileContent,
            'uploadType' => 'media',
        ]);

        return $file->id;

    }


}
