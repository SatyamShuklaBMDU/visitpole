<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Insert the Data
        DB::unprepared('
            CREATE PROCEDURE sp_create_subscription(
                IN p_name VARCHAR(255),
                IN p_email VARCHAR(255)
            )
            BEGIN
                INSERT INTO subscriptions (name, email, created_at, updated_at)
                VALUES (p_name, p_email, NOW(), NOW());
            END
        ');

        // Retrive Specific User 
        DB::unprepared('
            CREATE PROCEDURE sp_read_subscription(
                IN p_id INT
            )
            BEGIN
                SELECT * FROM subscriptions WHERE id = p_id;
            END
        ');

        // Update Code
        DB::unprepared('
            CREATE PROCEDURE sp_update_subscription(
                IN p_id INT,
                IN p_name VARCHAR(255),
                IN p_email VARCHAR(255)
            )
            BEGIN
                UPDATE subscriptions
                SET name = p_name,
                    email = p_email,
                    updated_at = NOW()
                WHERE id = p_id;
            END
        ');

        // Delete the Data
        DB::unprepared('
            CREATE PROCEDURE sp_delete_subscription(
                IN p_id INT
            )
            BEGIN
                DELETE FROM subscriptions WHERE id = p_id;
            END  
        ');

        // Get all Data Code
        DB::unprepared('
            CREATE PROCEDURE sp_get_all_subscription()
            BEGIN
                SELECT * from subscriptions;
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_all_subscription');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_delete_subscription');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_update_subscription');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_read_subscription');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_create_subscription');
    }
};
