<?php
require_once __DIR__ . '/../../config/database.php';

class Client {
    public int $id;
    public string $name;
    public ?string $email;
    public ?string $phone;
    public ?string $address;

    public static function all(): array {
        $db = Database::getInstance();
        $stmt = $db->query('SELECT * FROM clients ORDER BY name');
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function create(array $data): bool {
        $db = Database::getInstance();
        $stmt = $db->prepare('INSERT INTO clients (name, email, phone, address) VALUES (:name, :email, :phone, :address)');
        return $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'] ?? null,
            ':phone' => $data['phone'] ?? null,
            ':address' => $data['address'] ?? null,
        ]);
    }
}
