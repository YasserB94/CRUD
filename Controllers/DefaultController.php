<?php

declare(strict_types=1);

class DefaultController
{
    private array $postData, $getData;
    public function __construct()
    {
        //WHAT INITIALISES WHEN I AM MAD
        $this->init();
    }
    private function init()
    {
        //WHAT LOGIC DO YOU WANT ME TO DO ON CREATION
    }
    public function render()
    {
        //WHAT DO I SHOW ? 
    }
}
//OBSOLETE CODE -----
// private function filterPostData(array $post){
//     $requiredFields = ['username','usergroup','userimage'];
//     foreach($post as $key => $value){
//         foreach($requiredFields as $requiredKey){
//             if($key===$requiredKey){
//                 $this->postData[$key] = $value;
//             }
//         }
//     }
// }
// private function filterGetData(){

// }