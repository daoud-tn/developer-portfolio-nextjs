<?php
require_once __DIR__ . '/../models/Client.php';

class ClientController {
    public static function index(): void {
        $clients = Client::all();
        include __DIR__ . '/../../views/clients/list.php';
    }

    public static function createForm(): void {
        include __DIR__ . '/../../views/clients/new.php';
    }

    public static function store(): void {
        Client::create($_POST);
        header('Location: /');
    }
}
