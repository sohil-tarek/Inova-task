<?php
 //Given that each element has a priority and we need to implement a Max Priority queue, outline the changes you’ll make to the above implementation and give expected time complexity.

 class PriorityQueue{
     //our main variable
     private $queueArray;
     private $front;
     private $rear;
     private $capacity;

     //initialize  our construct

     public function __construct($size) {
         $this->capacity = $size;
         $this->queueArray = array();
         $this->front = 0;
         $this->rear = -1;
     }
     // Function of  enqueue with priority
     public function enqueue($i,$priority)
     {
         if ($this->rear == $this->capacity - 1) {
             echo " not allow to add data capacity are full";
             return;
         }
         $r =  $this->rear++;
         $this->queueArray[$this->rear] = $r;

         while ($r > $this->front && $priority > $this->queueArray[$r - 1]['priority']) {
             $this->queueArray[$r] = $this->queueArray[$r - 1];
             $r--;
         }

         $this->queueArray[$r] = array('item' => $i, 'priority' => $priority);

     }

     // Function of  dequeue
     public function dequeue() {
         if ($this->front > $this->rear) {
             echo "no data in queue";
             return null;
         }

         $item = $this->queueArray[$this->front]['item'];
         $this->front++;

         return $item;
     }



 }