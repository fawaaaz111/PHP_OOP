<?php

require_once 'Application.php';
require_once 'MysqlDb.php';
require_once 'SqlitDb.php';
require_once 'RESTDB.php';

$app = new Application(
    // new MysqlDb(),
    // new RESTDB(),
    new SqliteDb()
);

$app->db->getOrders();
$app->db->getOrderById(1);
$app->db->createOrder([]);
$app->db->updateOrder(1, []);
$app->db->deleteOrder(1);