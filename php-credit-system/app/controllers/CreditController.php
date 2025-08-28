<?php
require_once __DIR__ . '/../models/Credit.php';
require_once __DIR__ . '/../models/Client.php';

class CreditController {
    public static function createForm(): void {
        $clients = Client::all();
        include __DIR__ . '/../../views/credits/new.php';
    }

    public static function store(): void {
        Credit::create($_POST);
        header('Location: /');
    }
}
