<?php
class Task
{
  public  $description;

  public $completed;

  public function __construct($description, $completed)
  {
    $this->description = $description;
    $this->completed = $completed;
  }
}

$tasks = [
  new Task('Do homework', true),
  new Task('Find a job', false),
  new Task('Practice PHP', true),
  new Task('Buy a car', false)
];

$tasksCompletion = array_column($tasks, 'completed', 'description');
$completedTasks = array_filter($tasks, function($task)
{
  return $task->completed;
});
var_dump($tasksCompletion);
var_dump($completedTasks);

$changeUncompleted = array_map(function($task)
{
  if($task->completed === false)
  {
    $task->completed = true;
  }
  return $task;
}, $tasks);
echo '<pre>';
var_dump($changeUncompleted);
echo '</pre>';

class Post
{
  public $title;

  public $published;

  public function __construct($title, $published)
  {
      $this->title = $title;
      $this->published = $published;
  }
}

$posts = [
  new Post('My first post', true),
  new Post('My second post', true),
  new Post('My third post', true),
  new Post('My fourth post', false),
];
echo '<pre>';
var_dump($posts);
echo '</pre>';

/* FILTERING TROUGH ARRAYS */

$unpublishedPosts = array_filter($posts, function ($post){
  return !$post->published;
});

$publishedPosts = array_filter($posts, function ($post){
  return $post->published;
});

echo '<pre>';
var_dump($unpublishedPosts);
echo '</pre>';

/* FILTERING TROUGH ARRAYS */


/*MODIFY ARRAYS ELEMENTS*/
/*
foreach($posts as $post)
{
  $post->published = true;
}
*/
$modified = array_map(function ($post){
  $post->published = true;
  return $post;
}, $posts);

echo '<pre>';
var_dump($modified);
echo '</pre>';

/*MODIFY ARRAYS ELEMENTS*/

$titles = array_column($posts, 'title');
var_dump($titles);
 ?>
