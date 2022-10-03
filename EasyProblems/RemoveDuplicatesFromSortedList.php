<?php

class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($node, $head = null, &$lastNode = null) {
        
        if(!$head) $head = $node;

        if(!$node->next) {
            if($lastNode && $lastNode->val != $node->val) $lastNode->next = $node;
            if($lastNode && $lastNode->val == $node->val) $lastNode->next = null;

            return $head;
        }

        if(!$lastNode) return $this->deleteDuplicates($node->next, $head, $node);

        if($lastNode->val == $node->val) return $this->deleteDuplicates($node->next, $head, $lastNode);

        if($lastNode->val != $node->val){
            $lastNode->next = $node;
            return $this->deleteDuplicates($node->next, $head, $node);
        }
    }
}