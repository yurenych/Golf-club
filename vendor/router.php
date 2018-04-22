<?php

Class Route
{
    static $languages;

    // Start routing from application.
    static function start()
    {
        // Get url and convert to array.
        $url = array_filter(explode('/', $_GET['route']));

        // Get request method from request.
        $request_method = $_SERVER['REQUEST_METHOD'];

        // Search languages from url.
        if($request_method === 'GET' && boolval(in_array(current($url), $GLOBALS['LANGUAGES']))) {
            self::$languages = self::setLanguages(array_shift($url));
        } else {
            self::$languages = self::setLanguages();
        }

        // Route to controllers.
        switch([$request_method, current($url)]) {
            // Admin space GET request-method.
            case ['GET', 'admin']:
                switch([$request_method, next($url)]) {
                    case ['GET', 'galeria']:
                        $to_view = self::controllers('AdminController')->galeria();
                        return self::views(key($to_view), array_shift($to_view));

                    case ['GET', 'gg-zdrowie']:
                        return self::views('gg-zdrowie');

                    case ['GET', 'ground-golf']:
                        return self::views('ground-golf');

                    case ['GET', 'jak-zaczac']:
                        return self::views('jak-zaczac');

                    case ['GET', 'klub']:
                        return self::views('klub');

                    case ['GET', 'kontakt']:
                        return self::views('kontakt');

                    case ['GET', 'turnieje']:
                        $to_view = self::controllers('AdminController')->middleWare()->turnieje();
                        return self::views(key($to_view), array_shift($to_view));
                    default:
                        $to_view = self::controllers('AdminController')->middleWare()->aktualnosci();
                        return self::views(key($to_view), array_shift($to_view));
                }
                break;

            // User space.
            case ['GET', 'login']:
                $to_view = self::controllers('AdminController')->showLoginForm();
                return self::views(key($to_view), array_shift($to_view));

            case ['GET', 'logout']:
                return self::controllers('AdminController')->logout();

            case ['POST', 'login']:
                return self::controllers('AdminController')->loginUser($_POST);

            case ['GET', 'galeria']:
                $to_view = self::controllers('IndexController')->galeria();
                return self::views(key($to_view), array_shift($to_view));

            case ['GET', 'gg-zdrowie']:
                return self::views('gg-zdrowie');

            case ['GET', 'ground-golf']:
                return self::views('ground-golf');

            case ['GET', 'jak-zaczac']:
                return self::views('jak-zaczac');

            case ['GET', 'klub']:
                return self::views('klub');

            case ['GET', 'kontakt']:
                return self::views('kontakt');

            case ['GET', 'turnieje']:
                $to_view = self::controllers('IndexController')->turnieje();
                return self::views(key($to_view), array_shift($to_view));

            case ['GET', 'post']:
                $to_view = self::controllers('IndexController')->aktualnosci();
                if(isset($_GET['id']) && isset($to_view['aktualnosci']['aktualnosci_post'][(int)$_GET['id']])){
                    return self::views('post', $to_view['aktualnosci']['aktualnosci_post'][(int)$_GET['id']]);
                } else {
                    return self::redirect('/');
                }

            default:
                $to_view = self::controllers('IndexController')->aktualnosci();
                return self::views(key($to_view), array_shift($to_view));

            // Admin space POST request-method.
            case ['POST', 'admin']:
                switch([$request_method, next($url)]) {
                    case ['POST', 'turnieje']:
                        switch([$request_method, next($url)]) {
                            case ['POST', 'actions']:
                                echo json_encode(self::controllers('AdminController')->turniejeActions($_POST));
                                break;

                            case ['POST', 'save']:
                                $to_view = self::controllers('AdminController')->turniejeSave($_POST);
                                return self::views(key($to_view), array_shift($to_view));

                            default:
                                $to_view = self::controllers('AdminController')->middleWare()->aktualnosci();
                                return self::views(key($to_view), array_shift($to_view));
                        }
                        break;

                    case ['POST', 'galeria']:
                        switch([$request_method, next($url)]) {
                            case ['POST', 'save']:
                                return self::controllers('AdminController')->galeriaSave($_POST, $_FILES);
                        }
                        break;

                    case ['POST', 'aktualnosci']:
                        switch([$request_method, next($url)]) {
                            case ['POST', 'actions']:
                                echo json_encode(self::controllers('AdminController')->aktualnosciActions($_POST));
                                break;

                            case ['POST', 'save']:
                                $to_view = self::controllers('AdminController')->aktualnosciSave($_POST, $_FILES);
                                return self::views(key($to_view), array_shift($to_view));

                            case ['POST', 'save_photo']:
                                return self::controllers('AdminController')->aktualnosciSavePhoto($_POST, $_FILES);

                            case ['POST', 'save_wideo']:
                                $to_view = self::controllers('AdminController')->aktualnosciSaveWideo($_POST);
                                return self::views(key($to_view), array_shift($to_view));

                            default:
                                $to_view = self::controllers('AdminController')->middleWare()->aktualnosci();
                                return self::views(key($to_view), array_shift($to_view));
                        }
                        break;

                    default:
                        $to_view = self::controllers('AdminController')->middleWare()->aktualnosci();
                        return self::views(key($to_view), array_shift($to_view));
                }
                break;
        }
    }

    // Include models.
    public function models($filename)
    {
        require_once (__DIR__ . DS . '..' . DS . "models" . DS . $filename . '.php');
        return new $filename();
    }

    // Include controllers.
    public function controllers($filename)
    {
        require_once (__DIR__ . DS . '..' . DS . "controllers" . DS . $filename . '.php');
        return new $filename();
    }

    // Include views.
    public function views($filename, $data = null)
    {
        // Send to view languages.
        $trans = self::$languages['trans'];
        $lang_id = self::$languages['lang_id'];

        require_once (__DIR__ . DS . '..' . DS . "views" . DS . $filename . '.php');
    }

    // Redirect user to path.
    public function redirect($path)
    {
        die(header("Location:{$path}"));
    }

    // Set languages.
    public function setLanguages($lang_id = null)
    {
        // If not isset language set default value.
        if(!$lang_id){
            $lang_id = $GLOBALS['LANGUAGES'][0];
        }

        // Get languages from DB.
        $trans = self::models('DB')
            ->table('languages')
            ->select("name, {$lang_id}")
            ->get('name');

        // Build languages array.
        foreach ($trans as $key => $value){
            $trans[$key] = $value[$lang_id];
        }

        return [
            'lang_id' => $lang_id,
            'trans' => $trans,
        ];
    }
}