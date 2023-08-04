<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAmountField extends Migration
{
    public function up()
    {

        $fields = [
            'amount' => ['type' => 'INT'],
        ];

        $this->forge->addColumn('payment_transactions', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('payment_transactions', 'amount'); // to drop one single column
    }
}
