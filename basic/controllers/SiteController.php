<?php

namespace app\controllers;

use app\models\Game;
use app\models\Set;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends \app\components\Controller
{
    /**
     * {@inheritdoc}
     */
    /*public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }*/

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    public function actionGetquestions(){
        $post = $this->getJsonInput();
        $set = null;
        if(isset($post->about)){
            $set = Set::find()->andWhere(['about'=>$post->about])->one();
        }
        else {
            $set = Set::find()->all();
        }
        $rand = rand(0, count($set)-1);
        $questions = $set[$rand]->questions;
        return [
            'error'=>false,
            'message'=>null,
            'questions'=>$questions
        ];
    }
    public function actionStartgame(){
        $post = $this->getJsonInput();
        $game = new Game();
        $game->nickname_first = $post->nickname_first;
        $game->game_name = $post->game_name;
        $game->first_id = $post->first_id;
        $game->code = rand(1000,9999);
        $set = null;
        if(isset($post->about)){
            $set = Set::find()->andWhere(['about'=>$post->about])->one();
        }
        else {
            $set = Set::find()->all();
        }
        $rand = rand(0, count($set)-1);
        $questions = $set[$rand]->questions;
        $game->set_id = $set->id;
        $game->save();
        return [
            'error'=>false,
            'message'=>null,
            'questions'=>$questions
        ];
    }
    public function actionJoingame(){
        $post = $this->getJsonInput();
        $game = Game::find()->andWhere(['id'=>$post->game_id])->one();
        $game->nickname_second = $post->nickname_second;
        $game->second_id = $post->second_id;
        $game->save();
        return [
            'error'=>false,
            'message'=>null,
        ];
    }
    public function actionSetgame(){
        $post = $this->getJsonInput();
        $game = Game::find()->andWhere(['id'=>$post->game_id])->one();
        if($game->first_id == $post->user_id){
            $game->score_first = $post->score_first;
            $game->first_finish = 1;
        }
        else if($game->second_id == $post->user_id){
            $game->score_second = $post->score_second;
            $game->second_finish = 1;
        }
        $game->save();
        return [
            'error'=>false,
            'message'=>null,
        ];
    }
    public function actionGetgameinfo(){
        $post = $this->getJsonInput();
        $game = Game::find()->andWhere(['id'=>$post->game_id])->one();
        $finished = false;
        if($game->first_finish && $game->second_finish){
            $finished = true;
        }
        return [
            'error'=>false,
            'message'=>null,
            'finished'=>$finished,
            'game' => $game
        ];
    }
}
