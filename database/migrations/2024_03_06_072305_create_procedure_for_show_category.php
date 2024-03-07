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
        // Create stored procedure for getting categories
        DB::unprepared('
            CREATE PROCEDURE sp_get_categories()
            BEGIN
                SELECT * FROM categories;
            END
        ');
        // Create stored procedure for getting a single category by ID
        DB::unprepared('
            CREATE PROCEDURE sp_get_category(IN cat_id INT)
            BEGIN
                SELECT * FROM categories WHERE id = cat_id;
            END
        ');
        DB::unprepared('
            CREATE PROCEDURE sp_insert_category(IN cat_name VARCHAR(50), IN slug_url VARCHAR(100), 
                                                IN cat_meta_title VARCHAR(200), IN cat_meta_desc VARCHAR(200), 
                                                IN cat_meta_key VARCHAR(200), IN display VARCHAR(5))
            BEGIN
                INSERT INTO categories (name, slug_url, cat_meta_title, cat_meta_desc, cat_meta_key, display_status, created_at, updated_at) 
                VALUES (cat_name, slug_url, cat_meta_title, cat_meta_desc, cat_meta_key, display, NOW(), NOW());
            END
        ');

        // Create stored procedure for updating a category
        DB::unprepared('
            CREATE PROCEDURE sp_update_category(IN cat_id INT, IN cat_name VARCHAR(50), IN slug_url VARCHAR(100), 
                                                IN cat_meta_title VARCHAR(200), IN cat_meta_desc VARCHAR(200), 
                                                IN cat_meta_key VARCHAR(200), IN display VARCHAR(5))
            BEGIN
                UPDATE categories 
                SET name = cat_name, slug_url = slug_url, cat_meta_title = cat_meta_title, 
                    cat_meta_desc = cat_meta_desc, cat_meta_key = cat_meta_key, display_status = display, updated_at = NOW() 
                WHERE id = cat_id;
            END
        ');
        DB::unprepared('
            CREATE PROCEDURE sp_delete_category(IN cat_id INT)
            BEGIN
                DELETE FROM categories WHERE id = cat_id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_categories;');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_category;');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_insert_category;');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_update_category;');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_delete_category;');
    }
};
