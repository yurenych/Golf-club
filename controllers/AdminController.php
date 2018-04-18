<?php

class AdminController extends Route
{
    public $redirect_to_admin = 'admin'; // Where redirecting user if here login.
    public $path_to_show_login = 'login'; // Route to show login form.
    public $redirect_after_logout = '/'; // Route to show login form.


    // This method validate data before call method.
    // If condition redirect to another page.
    public function middleWare()
    {
        if($_SESSION['_token'] !== CSRF_TOKEN){
            $this->redirect($this->path_to_show_login);
        }

        return $this;
    }

    // Show login form if user not auth.
    public function showLoginForm()
    {
        return [
            'auth/login-form' => []
        ];
    }

    // Show login form if user not auth.
    public function logout()
    {
        unset($_SESSION['_token']);

        $this->redirect($this->redirect_after_logout);
    }

    // Get user data, validate and gives permission.
    public function loginUser($post)
    {
        // Validate user.
        if($this->validateLogin($post)){
            $_SESSION['_token'] = $post['_token'];
            $this->redirect($this->redirect_to_admin);
        }

        // If bad validate redirect back.
        $this->redirect($this->path_to_show_login);
    }

    // Validate login data.
    public function validateLogin($data)
    {
        $csrf_token = htmlspecialchars(trim($data['_token']));
        $login = htmlspecialchars(trim($data['login']));
        $password = htmlspecialchars(trim($data['password']));

        if(isset($login) && isset($password) && isset($csrf_token)){
            return $login === USER_LOGIN &&
                   $password === USER_PASSWORD &&
                   $csrf_token === CSRF_TOKEN;
        }
    }

    public function galeria()
    {
        // Open dir and scan files.
        $images = scandir(IMAGES_GALERIA);

        // Remove . and .. from dir.
        unset($images[array_search('.', $images)], $images[array_search('..', $images)]);

        return [
            'admin/galeria' => [
                'images' => $images,
            ]
        ];
    }

    public function galeriaSave($post, $files)
    {
        switch (true) {
            case isset($post['delete']):
                if(file_exists(getcwd() . key($post['delete']))){
                    unlink(getcwd() . key($post['delete']));
                }
                break;

            case isset($post['save']):
                foreach ($files['obraz']['tmp_name'] as $key => $tmp_name) {
                    // Get the extension of the file and build path for save him.

                    $image_name =  base_convert(uniqid(), 16, 36) . '.' . pathinfo($files['obraz']['name'][$key], PATHINFO_EXTENSION);
                    $target = UPLOAD_IMAGES . 'galeria/' . $image_name;

                    // Uploaded images.
                    move_uploaded_file($tmp_name, $target);
                }
                break;
            }

        return $this->redirect('/admin/galeria');
    }

    // Show aktualnosci.
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
            'admin/aktualnosci' => [
                'aktualnosci_post' => $aktualnosci_post ?: [['id' => '']],
                'aktualnosci_photo' => $aktualnosci_photo,
                'aktualnosci_video' => $aktualnosci_video
            ]
        ];
    }

    // Show turnieje.
    public function turnieje()
    {
        $turnieje = parent::models('DB')
            ->table('turnieje')
            ->select()
            ->get('id');

        // Sorting desc array.
        $turnieje = array_reverse($turnieje);

        return [
            'admin/turnieje' => [
                'turnieje' => $turnieje
            ]
        ];
    }

    // Save form from turnieje.
    public function turniejeSave($post)
    {
        // Delete all record from table.
        if($post['turnieje']) {
            $delete = parent::models('DB')
                ->table('turnieje')
                ->delete()
                ->query();
        }

        // Save all record from table.
        if($delete) {
            // Sort desc request.
            $post['turnieje'] = array_reverse($post['turnieje']);
            $i = 0;
            foreach ($post['turnieje'] as $value) {
                // Push time from operation.
                $value = array_merge($value, [
                    'czas_stworzenia' => time(),
                    'nr' => ++$i
                ]);

                // Save data.
                parent::models('DB')
                    ->table('turnieje')
                    ->insert('sssssi', $value);
            }
        }

        return $this->redirect('/admin/turnieje');
    }

    // Save actions turnieje from Ajax request.
    public function turniejeActions($post)
    {
        // If request send to this site.
        if($post['_token'] === CSRF_TOKEN) {
            switch ($post['action']) {
                case 'add_row':
                    return parent::models('DB')
                        ->table('turnieje')
                        ->insert('sssssi', [
                            'nr' => '',
                            'data' => '',
                            'czas' => '',
                            'nazva' => '',
                            'miejsce' => '',
                            'czas_stworzenia' => time(),
                        ]);

                case 'remove_row':
                    return parent::models('DB')
                        ->table('turnieje')
                        ->delete()
                        ->where("id = {$post['id']}")
                        ->query();
            }
        }

        return false;
    }

    // Save form from aktualnosci.
    public function aktualnosciSave($post, $files)
    {
        // Get isset images from DB.
        $active_images = parent::models('DB')
            ->table('aktualnosci_post')
            ->select('id, obraz')
            ->get('id');

        // Delete all record from table.
        if($post['aktualnosci']) {
            $delete = parent::models('DB')
                ->table('aktualnosci_post')
                ->delete()
                ->query();
        }

        // Save all record from table.
        if($delete) {
            foreach ($post['aktualnosci'] as $id => $value) {

                if($files['aktualnosci']['name'][$id]['obraz']) {
                    // Get images.
                    $images = pathinfo($files['aktualnosci']['name'][$id]['obraz']);

                    // Get the extension of the file and build path for save him.
                    $image_name =  base_convert(uniqid(), 16, 36) . '.' . $images['extension'];
                    $target = UPLOAD_IMAGES . 'aktualnosci/post/' . $image_name;

                    // Uploaded images.
                    move_uploaded_file($files['aktualnosci']['tmp_name'][$id]['obraz'], $target);
                } else {
                    $image_name = $active_images[$id]['obraz'];
                }

                // Push time from operation.
                $value = array_merge($value, [
                    'obraz' => $image_name ? $image_name : '',
                    'czas_stworzenia' => time()
                ]);

                // Save data.
                parent::models('DB')
                    ->table('aktualnosci_post')
                    ->insert('sssi', $value);
            }
        }

        return $this->redirect('/admin/aktualnosci');
    }

    // Action photo form from aktualnosci.
    public function aktualnosciSavePhoto($post, $files)
    {
        if($post['_token'] === CSRF_TOKEN) {
            switch (true) {
                case isset($post['add']):
                    parent::models('DB')
                        ->table('aktualnosci_photo')
                        ->insert('ssi', [
                            'obraz' => '',
                            'opis' => '',
                            'czas_stworzenia' => time(),
                        ]);
                    break;

                case isset($post['remove']):
                    parent::models('DB')
                        ->table('aktualnosci_photo')
                        ->delete()
                        ->where('id = ' . key($post['remove']) . '')
                        ->query();
                    break;

                case isset($post['save']):
                    // Get isset images from DB.
                    $active_images = parent::models('DB')
                        ->table('aktualnosci_photo')
                        ->select('id, obraz')
                        ->get('id');

                    // Delete all record from table.
                    if($post['aktualnosci']) {
                        $delete = parent::models('DB')
                            ->table('aktualnosci_photo')
                            ->delete()
                            ->query();
                    }

                    // Save all record from table.
                    if($delete) {
                        // Sort desc request.
                        foreach ($post['aktualnosci'] as $id => $value) {

                            if($files['aktualnosci']['name'][$id]['obraz']) {
                                // Get images.
                                $images = pathinfo($files['aktualnosci']['name'][$id]['obraz']);

                                // Get the extension of the file and build path for save him.
                                $image_name =  base_convert(uniqid(), 16, 36) . '.' . $images['extension'];
                                $target = UPLOAD_IMAGES . 'aktualnosci/photo/' . $image_name;

                                // Uploaded images.
                                move_uploaded_file($files['aktualnosci']['tmp_name'][$id]['obraz'], $target);
                            } else {
                                $image_name = $active_images[$id]['obraz'];
                            }

                            // Push time from operation.
                            $value = array_merge($value, [
                                'obraz' => $image_name ?: '',
                                'czas_stworzenia' => time()
                            ]);

                            // Save data.
                            parent::models('DB')
                                ->table('aktualnosci_photo')
                                ->insert('ssi', $value);
                        }
                    }
                    break;
            }
        }

        return $this->redirect('/admin/aktualnosci');
    }

    // Action wideo form from aktualnosci.
    public function aktualnosciSaveWideo($post)
    {
        if($post['_token'] === CSRF_TOKEN) {
            switch (true) {
                case isset($post['add']):
                    parent::models('DB')
                        ->table('aktualnosci_video')
                        ->insert('ssi', [
                            'wideo' => '',
                            'opis' => '',
                            'czas_stworzenia' => time(),
                        ]);
                    break;

                case isset($post['remove']):
                    parent::models('DB')
                        ->table('aktualnosci_video')
                        ->delete()
                        ->where('id = ' . key($post['remove']) . '')
                        ->query();
                    break;

                case isset($post['save']):
                    // Delete all record from table.
                    if($post['aktualnosci']) {
                        $delete = parent::models('DB')
                            ->table('aktualnosci_video')
                            ->delete()
                            ->query();
                    }

                    // Save all record from table.
                    if($delete) {
                        foreach ($post['aktualnosci'] as $id => $value) {
                            // Save data.
                            parent::models('DB')
                                ->table('aktualnosci_video')
                                ->insert('ssi', array_merge($value, [
                                    'czas_stworzenia' => time()
                                ]));
                        }
                    }
                    break;
            }
        }

        return $this->redirect('/admin/aktualnosci');
    }

    // Save actions aktualnosci from Ajax request.
    public function aktualnosciActions($post)
    {
        // If request send to this site.
        if($post['_token'] === CSRF_TOKEN) {
            switch ($post['action']) {
                case 'add_row':
                    return parent::models('DB')
                        ->table('aktualnosci_post')
                        ->insert('sssi', [
                            'temat' => '',
                            'opis' => '',
                            'obraz' => '',
                            'czas_stworzenia' => time(),
                        ]);

                case 'remove_row':
                    var_dump($post);
                    return parent::models('DB')
                        ->table('aktualnosci_post')
                        ->delete()
                        ->where("id = {$post['id']}")
                        ->query();
            }
        }

        return false;
    }
}