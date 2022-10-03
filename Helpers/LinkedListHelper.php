<?php

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class LinkedListHelper{
    public static function arrayToLinkedList(Array $array){
        $head = $lastNode = null;
        foreach($array as $value){
            $dummy = new ListNode($value);

            if($lastNode){
                $lastNode->next = $dummy;
                $lastNode = $dummy;
                continue;
            }

            $head = $lastNode = $dummy;
        }
        return $head;
    }

    public static function printLinkedList($head){
        $dummy = $head;
        while($dummy){
            echo "({$dummy->val})";
            $dummy = $dummy->next;
            if($dummy) echo"->";
        }
        echo "\n";
    }
}