<?php
class TagLibLists extends TagLib{
    protected $tags = array(
         'list' => array('attr' => 'limit,order','close' =>0)// attr 属性列表close 是否闭合（0 或者1 默认为1，表示闭合）
 );
 public function _list ($attr,$content){
       

 }