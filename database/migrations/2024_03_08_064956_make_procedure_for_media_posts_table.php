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
        DB::unprepared('
            CREATE PROCEDURE sp_create_media_image(
                IN p_name VARCHAR(255),
                IN p_image VARCHAR(255),
                IN p_status BOOLEAN
            )
            BEGIN
                INSERT INTO media_images (name, image, status, created_at, updated_at)
                VALUES (p_name, p_image, p_status, NOW(), NOW());
            END
        ');
         
        // Update Business Post Procedure
        DB::unprepared('
            CREATE PROCEDURE sp_update_media_image(
                IN p_id INT,
                IN p_name VARCHAR(255),
                IN p_image VARCHAR(255),
                IN p_status BOOLEAN
            )
            BEGIN
                UPDATE media_images 
                SET name = p_name,
                    image = p_image,
                    status = p_status,
                    updated_at = NOW()
                WHERE id = p_id;
            END
        ');

        // Delete Business Post Procedure
        DB::unprepared('
        CREATE PROCEDURE sp_delete_media_image(IN p_id INT)
            BEGIN
                DELETE FROM media_images WHERE id = p_id;
            END
        ');

        // Retrive all Business Posts Procedure 
        DB::unprepared('
            CREATE PROCEDURE sp_read_media_image()
                BEGIN
                    SELECT * FROM media_images;
                END
        ');

        // Retrive specific Posts from Business Posts Procedure 
        DB::unprepared('
            CREATE PROCEDURE sp_get_specific_media_image(IN p_id INT)
                BEGIN
                    SELECT * FROM media_images WHERE id = p_id;
                END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_create_media_image');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_update_media_image');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_delete_media_image');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_read_media_image');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_specific_media_image');
    }
};
