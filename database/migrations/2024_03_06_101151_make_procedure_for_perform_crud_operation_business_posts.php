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
        // Insert Business Post Procedure
        DB::unprepared('
            CREATE PROCEDURE sp_insert_business_post(
                IN p_heading VARCHAR(255),
                IN p_category_id INT,
                IN p_short_content VARCHAR(255),
                IN p_long_content TEXT,
                IN p_author_name VARCHAR(255),
                IN p_image VARCHAR(255),
                IN p_image1 VARCHAR(255),
                IN p_date TIMESTAMP,
                IN p_status BOOLEAN,
                IN p_slug_url VARCHAR(255),
                IN p_title VARCHAR(255),
                IN p_meta_title VARCHAR(255),
                IN p_meta_desc VARCHAR(255),
                IN p_meta_key VARCHAR(255)
            )
            BEGIN
                INSERT INTO business_posts (heading, category_id, short_content, long_content, author_name, image, image1, date, status, slug_url, title, meta_title, meta_desc, meta_key, created_at, updated_at)
                VALUES (p_heading, p_category_id, p_short_content, p_long_content, p_author_name, p_image, p_image1, p_date, p_status, p_slug_url, p_title, p_meta_title, p_meta_desc, p_meta_key, NOW(), NOW());
            END
        ');
         
        // Update Business Post Procedure
        DB::unprepared('
            CREATE PROCEDURE sp_update_business_post(
                IN p_id INT,
                IN p_heading VARCHAR(255),
                IN p_category_id INT,
                IN p_short_content VARCHAR(255),
                IN p_long_content TEXT,
                IN p_author_name VARCHAR(255),
                IN p_image VARCHAR(255),
                IN p_image1 VARCHAR(255),
                IN p_date TIMESTAMP,
                IN p_status BOOLEAN,
                IN p_slug_url VARCHAR(255),
                IN p_title VARCHAR(255),
                IN p_meta_title VARCHAR(255),
                IN p_meta_desc VARCHAR(255),
                IN p_meta_key VARCHAR(255)
            )
            BEGIN
                UPDATE business_posts 
                SET heading = p_heading, 
                    category_id = p_category_id, 
                    short_content = p_short_content, 
                    long_content = p_long_content, 
                    author_name = p_author_name, 
                    image = p_image, 
                    image1 = p_image1, 
                    date = p_date, 
                    status = p_status, 
                    slug_url = p_slug_url,
                    title = p_title, 
                    meta_title = p_meta_title, 
                    meta_desc = p_meta_desc, 
                    meta_key = p_meta_key,
                    updated_at = NOW()
                WHERE id = p_id;
            END
        ');

        // Delete Business Post Procedure
        DB::unprepared('
        CREATE PROCEDURE sp_delete_business_post(IN p_id INT)
            BEGIN
                DELETE FROM business_posts WHERE id = p_id;
            END
        ');

        // Retrive all Business Posts Procedure 
        DB::unprepared('
            CREATE PROCEDURE sp_get_all_business_post()
                BEGIN
                    SELECT * FROM business_posts;
                END
        ');

        // Retrive specific Posts from Business Posts Procedure 
        DB::unprepared('
            CREATE PROCEDURE sp_get_specific_business_posts(IN post_id INT)
                BEGIN
                    SELECT * FROM business_posts WHERE id = post_id;
                END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_insert_business_post');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_update_business_post');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_delete_business_post');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_all_business_post');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_specific_business_posts');
    }
};
