<?php
class Router
{
    
    private $routes;
   
    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * Returns request string
     */
    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
 
        
    }

    public function run()
    {
        // Получить строку запроса
        $uri = $this->getURI();

        // Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {
            //echo $uri."&&".$uriPattern.'<br>' ;
            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {
               
                // Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                           
                // Определить контроллер, action, параметры

                $segments = explode('/', $internalRoute);
                
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                
                $actionName = 'action' . ucfirst(array_shift($segments));
                
                $parameters = $segments;
                //print_r($parameters);
                // Подключить файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' .
                        $controllerName . '.php';
                
                if (file_exists($controllerFile)) {
                    
                    include_once($controllerFile);
                }
                else {
                    
                    header("Location: 404.php");
                     break;
                }

                // Создать объект, вызвать метод (т.е. action)
                $controllerObject = new $controllerName($Shop);
                if (!method_exists($controllerObject, $actionName)) {
                    //include_once (ROOT .'/tempelates/views/site/404.php');
                     header("Location: 404.php");
                     break;
                    }
                else {
                      $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                       if ($result != null) {
                       break;
                       }
                } 
                break;
            }
        }
        
        
    }

}