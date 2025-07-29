<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS UpdateExpiredDiscounts');

        DB::unprepared('
            CREATE PROCEDURE UpdateExpiredDiscounts()
            BEGIN
                UPDATE discounts
                SET status = 0
                WHERE end_date < NOW() AND status = 1;
            END
        ');
    }

    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS UpdateExpiredDiscounts');
    }
};
