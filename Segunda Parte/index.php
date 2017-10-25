<?php
use Slim\Views\PhpRenderer;
require 'vendor/autoload.php';

$app = new Slim\App();
$container = $app->getContainer();
$container['renderer'] = new PhpRenderer("./templates");


$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hello, " . $args['name']);
});


$app->map(['GET', 'POST'], '/', function ($request, $response, $args) {
    $data = file_get_contents('./employees.json');
    $employees = json_decode($data);

	if($request->isGet()){
        return $this->renderer->render($response, "/home.php", array( 'employees' => $employees));
    }else if($request->isPost()){
        $email = $request->getParam('email');
       
        $resultado = array_search($email, array_column($employees, 'email'));
        echo $resultado;
        if(is_numeric($resultado)){
            $employee = $employees[$resultado];
             return $this->renderer->render($response, "/email.php",array( 'employee' => $employee));
        }else{
            echo "No Se encuentres este Email";
            return $this->renderer->render($response, "/home.php", array( 'employees' => $employees));
        }
        
    }
});

$app->run();