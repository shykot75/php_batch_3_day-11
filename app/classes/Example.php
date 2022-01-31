<?php


namespace App\classes;


class Example
{
    public $student = [];


    public function index(){
/*       $this->student = [10, 20, 'BITM', 10.20, true, false];
        //echo $this->student[4];

        foreach($this->student as $index => $item){
        //  echo $item.' ';
            echo "index no - ". $index. " value - ". $item. "<br />";
        }
*/
        $this->student = [
             0 => [
                'name'  => 'Shykot',
                'email' => 'shykot@gmail.com',
                'mobile'=> [
                    'mob-1' => '12345',
                    'mob-2' => '34748',
                ]
            ],

             1 => [
                'name'  => 'Shourav',
                'email' => 'shourav@gmail.com',
                 'mobile'=> [
                     'mob-1' => '12345',
                     'mob-2' => '34748',
                 ]
            ],
            2 => 'BITM',
            3 => [
                'name'  => 'Shakib',
                'email' => 'shakib@gmail.com',
                'mobile'=> [
                    'mob-1' => '4512345',
                    'mob-2' => '4534748',
                ]
            ]
        ];

//        //Single User Info for 0 index
//        echo $this->student[0]['name']. ' <br />';
//        echo $this->student[0]['email']. ' <br />';
//        echo $this->student[0]['mobile']. ' <br />';
//
//        echo "<hr />";
//
//        // All User Info
//        foreach($this->student as  $item){
//           echo $item['name'].' - ';
//           echo $item['email'].' - ';
//           echo $item['mobile'].' <br />';
//            //echo "index no - ". $index. " value - ". $item. "<br />";
//        }
//        echo "<hr />";
//
//        // For each er maddhome single user show
//        foreach($this->student as  $key => $item){
//            if($key == 0)
//            {
//                echo $item['name'].' - ';
//                echo $item['email'].' - ';
//                echo $item['mobile'].' <br />';
//                break;
//            }
//        }
//        echo "<hr />";

        //Multi dimentional array printing dynamic way --
//        foreach($this->student as  $item){
//            foreach ($item as $value) {
//                echo $value. ' ';
//            }
//            echo "<br />";
//
//        }


        // Array er vitor abar array
//        foreach($this->student as  $item){
//            if( is_array($item) ){
//                foreach ($item as $value) {
//                    if( is_array($value) ){
//
//                       foreach($value as $v_value){
//                           echo $v_value. ' ';
//                       }
//
//                    }
//                    else {
//                        echo $value. ' ';
//                    }
//
//                }
//            }
//
//            else{
//                echo $item;
//            }
//            echo "<br />";
//        }
        echo "<pre>";
        print_r($this->student);
        echo "</pre>";

        echo "<pre>";
        var_dump($this->student);
        echo "</pre>";





    }
}