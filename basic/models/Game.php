<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game".
 *
 * @property int $id
 * @property string|null $game_name
 * @property int|null $code
 * @property int|null $set_id
 * @property string|null $nickname_first
 * @property string|null $nickname_second
 * @property string|null $score_first
 * @property string|null $score_second
 * @property int|null $first_finish
 * @property int|null $second_finish
 * @property string|null $first_id
 * @property string|null $second_id
 */
class Game extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'game';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'set_id', 'first_finish', 'second_finish'], 'integer'],
            [['game_name', 'nickname_first', 'nickname_second', 'score_first', 'score_second', 'first_id', 'second_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'game_name' => 'Game Name',
            'code' => 'Code',
            'set_id' => 'Set ID',
            'nickname_first' => 'Nickname First',
            'nickname_second' => 'Nickname Second',
            'score_first' => 'Score First',
            'score_second' => 'Score Second',
            'first_finish' => 'First Finish',
            'second_finish' => 'Second Finish',
            'first_id' => 'First ID',
            'second_id' => 'Second ID',
        ];
    }
}
