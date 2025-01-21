<?php

namespace App\Services;

use App\Models\GoogleFile;
use Exception;
use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;
use Google_Service_Exception;

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

        //this needed for uploadby form
//        $fileContent = file_get_contents($file->getRealPath());

        $uploadedFile = $this->drive->files->create($fileMetadata, [
            'data'       => $file,
            'uploadType' => 'media',
        ]);

        return $uploadedFile->id;

    }

    public function deleteFile($fileId){

        try {
            $this->drive->files->delete($fileId);

            return true;
        } catch (Google_Service_Exception $e) {
            return false;
        }
    }


}
