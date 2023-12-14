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
        $this->createTable('question', [
            'id' => $this->primaryKey()->notNull()->unique(),
            'question'=>$this->string(),
            'correct'=>$this->boolean(),
            'set_id'=>$this->integer(),
        ]);
        $this -> alterColumn('question','id', $this->integer().' AUTO_INCREMENT');
        $this->createTable('set', [
            'id' => $this->primaryKey()->notNull()->unique(),
        ]);
        $this -> alterColumn('set','id', $this->integer().' AUTO_INCREMENT');
        $this->createTable('game', [
            'id' => $this->primaryKey()->notNull()->unique(),
            'game_name'=>$this->string(),
            'code'=>$this->integer(),
            'set_id'=>$this->integer(),
            'nickname_first'=>$this->string(),
            'nickname_second'=>$this->string(),
            'score_first'=>$this->string(),
            'score_second'=>$this->string(),
            'first_finish'=>$this->boolean(),
            'second_finish'=>$this->boolean(),
        ]);
        $this -> alterColumn('game','id', $this->integer().' AUTO_INCREMENT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('question');
        $this->dropTable('set');
        $this->dropTable('game');
    }
}
