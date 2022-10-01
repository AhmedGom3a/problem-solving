<?php

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {

    public $lastNode, $head;
    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1 = null, $list2 = null) {
        $this->lastNode = $this->lastNode && $this->lastNode->next? $this->lastNode->next : $this->lastNode;

        if(!$list1 && !$list2){
            return $this->head;
        }
        
        if(!$list1 || $list2->val <= $list1->val){

            $newNode = new ListNode($list2->val);
            $this->movePointers($newNode);
            
            return $this->mergeTwoLists($list1, $list2->next);
        }

        $newNode = new ListNode($list1->val);
        $this->movePointers($newNode);

        return $this->mergeTwoLists($list1->next, $list2);
    }

    private function movePointers($node){
        if(!$this->head) {
            $this->head = $node;
            $this->lastNode = $this->head;
            return;
        }
        
        $this->lastNode->next = $node;
    }
}