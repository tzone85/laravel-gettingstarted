<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getPosts($session){

        if(!$session->has('posts')){
            $this->createDummyData($session);
        }

        return $session->get('posts');
    }

    private function createDummyData($session){
        $posts = [
            'title' => 'Learning uLaravel is fun',
            'content' => 'This is the first Laravel app that I am completing right now'
        ];
        /*[
            'title' => 'Some other cool title',
            'content' => 'Why havn\'t I don this before? Because I\'m learning so much at such a cool pace'
        ];
*/
        $session->put('posts', $posts);
    }

    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


    public function getPost($session, $id){
        if(!$session->has('post')){
            $this->createDummyData();
        }
        return $session->get('posts')[$id];
    }

    public function addPost($session, $title, $content){
        if (!$session->has('posts')){
            $this->createDummyData();
        }
        $posts = $session->get('posts');
        array_push($posts, ['title'=> $title, 'content'=> $content]);
        $session->put('posts', $posts);
    }

    public function editPost($session, $id, $title, $content){
        $posts = $session->get('posts');
        $posts[$id] = ['title' => $title, 'content' => $content];
        $session->put('posts', $posts);
    }

}
