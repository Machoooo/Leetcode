<?php
/*
给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
你可以假设每种输入只会对应一个答案。但是，你不能重复利用这个数组中同样的元素。
示例:
给定 nums = [2, 7, 11, 15], target = 9
因为 nums[0] + nums[1] = 2 + 7 = 9
所以返回 [0, 1]
*/
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $result = [];
        $nums_match = [];
        foreach ($nums as $k => $v) {
            if (!isset($nums_match[$target - $v])) {
                $nums_match[$target - $v] = $k;
            }

            if (isset($nums_match[$v]) && $nums_match[$v] != $k) {
            $result = [
                $nums_match[$v],
                $k,
            ];
            break;
        }
    }

    return $result;
    }
}

$obj = new Solution();
$nums = [2,7,9,15];
$target = 9;
$ret = $obj->twoSum($nums,$target);
var_dump($ret);