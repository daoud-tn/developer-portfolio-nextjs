<?php
require_once __DIR__ . '/../../config/database.php';

class Credit {
    public static function create(array $data): bool {
        $db = Database::getInstance();
        try {
            $db->beginTransaction();
            $stmt = $db->prepare('INSERT INTO credits (client_id, amount, start_date, interest_rate, installments_count) VALUES (:client_id, :amount, :start_date, :interest_rate, :count)');
            $stmt->execute([
                ':client_id' => $data['client_id'],
                ':amount' => $data['amount'],
                ':start_date' => $data['start_date'],
                ':interest_rate' => $data['interest_rate'],
                ':count' => $data['installments_count'],
            ]);
            $creditId = $db->lastInsertId();
            // calculate installment amount with simple interest
            $total = $data['amount'] * (1 + $data['interest_rate'] / 100);
            $perInstallment = round($total / $data['installments_count'], 2);
            $dueDate = new DateTime($data['start_date']);
            for ($i = 0; $i < $data['installments_count']; $i++) {
                $stmtInst = $db->prepare('INSERT INTO installments (credit_id, due_date, amount) VALUES (:credit_id, :due_date, :amount)');
                $stmtInst->execute([
                    ':credit_id' => $creditId,
                    ':due_date' => $dueDate->format('Y-m-d'),
                    ':amount' => $perInstallment,
                ]);
                $dueDate->modify('+1 month');
            }
            $db->commit();
            return true;
        } catch (Exception $e) {
            $db->rollBack();
            return false;
        }
    }
}
