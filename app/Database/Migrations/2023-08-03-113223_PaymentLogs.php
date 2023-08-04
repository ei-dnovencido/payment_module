<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PaymentLogs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'transaction_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned'=> true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'date_posted' => [
                'type' => 'DATE'
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ]
        ]);

        $this->forge->addKey('transaction_id', true);
        $this->forge->createTable('payment_transactions');
    }

    public function down()
    {
        $this->forge->dropTable('payment_transactions');
    }
}
