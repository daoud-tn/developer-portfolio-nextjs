<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/ClientController.php';
require_once __DIR__ . '/../app/controllers/CreditController.php';

// Initialise database schema
$db = Database::getInstance();
$db->exec(file_get_contents(__DIR__ . '/../migrations/schema.sql'));

$action = $_GET['action'] ?? 'list-clients';

switch ($action) {
    case 'new-client':
        ClientController::createForm();
        break;
    case 'save-client':
        ClientController::store();
        break;
    case 'new-credit':
        CreditController::createForm();
        break;
    case 'save-credit':
        CreditController::store();
        break;
    default:
        ClientController::index();
}
