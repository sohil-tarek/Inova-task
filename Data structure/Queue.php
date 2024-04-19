<?php
  //Give time complexity for Enqueue and Dequeue operations.
class Queue{

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

        // Function of  enqueue

        public function enqueue($i)
        {
            if ($this->rear == $this->capacity - 1) {
                echo " not allow to add data capacity are full";
                return;
            }
             $this->rear++; //to add index to our variable ($i)
             $this->queueArray[$this->rear] = $i; //adding our variable
        }


        // Function of  dequeue

        public function dequeue() {
            if ($this->front > $this->rear) {
                echo "no data in queue";
                return null;
            }

            $item = $this->queueArray[$this->front]; //in the first it will be equal 0
            $this->front++;
            return $item;
        }


}

