<?php
/**
 * Created by PhpStorm.
 * User: Tanvir
 * Date: 01-Oct-17
 * Time: 9:12 AM
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//get all customers

$app->get('/api/customers',
    function (Request $request, Response $response) {

        $sql = "SELECT * FROM users";
        try {
            $db = new db();

            $db = $db->connect();
            $stmnt = $db->query($sql);
            $customers = $stmnt->fetchAll(PDO::FETCH_OBJ);
            $db = null;

            echo json_encode($customers);
        } catch (PDOException $exception) {
            echo '||'.$exception->getMessage();
        }
    });