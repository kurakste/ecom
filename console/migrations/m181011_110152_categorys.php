<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m181011_110152_categorys
 */
class m181011_110152_categorys extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
         $this->createTable('categorys', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'cpu' => Schema::TYPE_TEXT,
            'description' => Schema::TYPE_STRING,
            'image' => Schema::TYPE_STRING. ' NOT NULL',
        ],
        'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB'
    );

    }

    public function down()
    {
        $this->dropTable('categorys');
    }
    
}
