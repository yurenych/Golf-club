<?php

class IndexController extends Route
{
    public function index()
    {
        //
    }

    public function galeria()
    {
        // Open dir and scan files.
        $images = scandir(IMAGES_GALERIA);

        // Remove . and .. from dir.
        unset($images[array_search('.', $images)], $images[array_search('..', $images)]);

        return [
            'galeria' => [
                'images' => $images,
            ]
        ];
    }

    public function aktualnosci()
    {
        // Get all post from page.
        $aktualnosci_post = parent::models('DB')
            ->table('aktualnosci_post')
            ->select()
            ->get('id');

        // Get all video from page.
        $aktualnosci_video = parent::models('DB')
            ->table('aktualnosci_video')
            ->select()
            ->get('id');

        // Get all video from page.
        $aktualnosci_photo = parent::models('DB')
            ->table('aktualnosci_photo')
            ->select()
            ->get('id');

        // Sorting desc array.
        array_reverse($aktualnosci_post);

        // Sorting desc array.
        array_reverse($aktualnosci_photo);

        // Sorting desc array.
        array_reverse($aktualnosci_video);

        return [
            'aktualnosci' => [
                'aktualnosci_post' => $aktualnosci_post ?: [['id' => '']],
                'aktualnosci_photo' => $aktualnosci_photo,
                'aktualnosci_video' => $aktualnosci_video
            ]
        ];
    }

    public function turnieje()
    {
        $turnieje = parent::models('DB')
            ->table('turnieje')
            ->select()
            ->get('id');

        // Sorting desc array.
        array_reverse($turnieje);

        return [
            'turnieje' => [
                'turnieje' => $turnieje
            ]
        ];
    }
}