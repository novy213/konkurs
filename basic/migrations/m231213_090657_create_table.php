<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%}}`.
 */
class m231213_090657_create_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey()->notNull()->unique(),
            'question'=>$this->string(),
            'set_id'=>$this->integer(),
        ]);
        $this -> alterColumn('user','id', $this->integer().' AUTO_INCREMENT');
        $this->createTable('set', [
            'id' => $this->primaryKey()->notNull()->unique(),
            'correct_id'=>$this->integer(),
        ]);
        $this -> alterColumn('set','id', $this->integer().' AUTO_INCREMENT');
        $this->createTable('game', [
            'id' => $this->primaryKey()->notNull()->unique(),
            'game_name'=>$this->string(),
            'code'=>$this->integer(),
            'set_id'=>$this->integer(),
            'nickname_first'=>$this->string(),
            'nickname_second'=>$this->string(),
        ]);
        $this -> alterColumn('game','id', $this->integer().' AUTO_INCREMENT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%}}');
    }
}
