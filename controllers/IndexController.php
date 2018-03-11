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
        $images_slider_for = scandir(IMAGES_GALERIA_SLIDER_FOR);
        $images_slider_nav = scandir(IMAGES_GALERIA_SLIDER_NAV);
        $images_content = scandir(IMAGES_GALERIA_CONTENT);

        // Remove . and .. from dir.
        unset($images_slider_for[array_search('.', $images_slider_for)], $images_slider_for[array_search('..', $images_slider_for)]);
        unset($images_slider_nav[array_search('.', $images_slider_nav)], $images_slider_nav[array_search('..', $images_slider_nav)]);
        unset($images_content[array_search('.', $images_content)], $images_content[array_search('..', $images_content)]);

        return [
            'galeria' => [
                'images_slider_for' => $images_slider_for,
                'images_slider_nav' => $images_slider_nav,
                'images_content'    => $images_content
            ]
        ];
    }

    public function aktualnosci()
    {
        $aktualnosci_post = parent::models('DB')
            ->table('aktualnosci_post')
            ->select()
            ->get('id');

        $aktualnosci_video = parent::models('DB')
            ->table('aktualnosci_video')
            ->select()
            ->get('id');


        return [
            'aktualnosci' => [
                'aktualnosci_post' => $aktualnosci_post ?: [['id' => '']],
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

        return [
            'turnieje' => [
                'turnieje' => $turnieje
            ]
        ];
    }
}