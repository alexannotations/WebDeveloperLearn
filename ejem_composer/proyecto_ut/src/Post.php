<?php

namespace App;

class Post
{
    protected $comments = [];

    /** al pertenecer al mismo namespace, se entiende que
     * la clase Comment es un hermano de Post
     */
    public function addComment(Comment $comment)
    {
        // 
        $this->comments[] = $comment;
    }

    public function countComments() : int
    {
        // propiedad comments
        return count($this->comments);
    }

    public function getComments()
    {
        return $this->comments;
    }
}