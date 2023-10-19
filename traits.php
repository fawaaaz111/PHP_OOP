<?php

trait SharableTrait {
    public function share(){
        echo self::class. ' shared with ID '. $this->id.PHP_EOL;
    }
}

class Post {
    public $id = 1;
    use SharableTrait;
}

class Photo {
    public $id = 1;
    use SharableTrait;
}

class Comment {
    public $id = 1;
    use SharableTrait;
}

$post = new Post();
$post->share();
$photo = new Photo();
$photo->share();
$comment = new Comment();
$comment->share();