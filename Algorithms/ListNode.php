<?php
//Given the head of a singly linked list, return the middle node of the linked list. If there are two middle nodes, return the second middle node.
//The number of nodes in the list is in the range [1, 100].
class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val) {
        $this->val = $val;
    }
}

//function to find the middle node and return node stat from that one
function findMiddleNodes($head)
{
    $slow = $head;
    $fast = $head;
    $nodes = [];

    while ($fast !== null && $fast->next !== null) {
        $nodes[] = $slow;
        $slow = $slow->next;
        $fast = $fast->next->next;
    }

    // If the number of nodes in the list is odd, move slow pointer one more step
    if ($fast !== null) {
        $slow = $slow->next;
    }

    // to Add them after the middle node to the result array
    while ($slow !== null) {
        $nodes[] = $slow;
        $slow = $slow->next;
    }

    return $nodes;

}

  /* =>time complexity : the algoritm using the both slow and fast pointer  for moving in the list the slow pointer ($slow)
    *                  move one step and the fast move two steps that why the algorithm will only move the half of the list
  */

