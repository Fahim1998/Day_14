<?php
namespace App\classes;
class student
{
    protected $text;
    protected $student;
    protected $result =[];

    public function __construct($post= null)

    {
        if(isset($post['search']))
        {
            $this->text=$post['search'];
        }


    }


    public function getAllStudent()
    {
        return[
            0=>[
                'name'=>'Hasibul kabir',
                'mobile'=>'126788',
                'email'=>'rafa@gamil.com',
                'address'=>'Rampur'
            ],
            1=>[
                'name'=>'Rayhan kabir',
                'mobile'=>'126588',
                'email'=>'rayhan@gamil.com',
                'address'=>'kanarampur'
            ],
            2=>[
                'name'=>'Mosiul kabir',
                'mobile'=>'2978688',
                'email'=>'mosiul@gamil.com',
                'address'=>'Hossenpur'
            ],
            3=>[
                'name'=>'Shakib All Hasan',
                'mobile'=>'978788',
                'email'=>'shakib@gamil.com',
                'address'=>'vhola'
            ],
            4=>[
                'name'=>'kabir',
                'mobile'=>'126788',
                'email'=>'rafa@gamil.com',
                'address'=>'Ridoypur'
            ],
        ];
    }
    public function getStudentBySearchText()
    {
      $this->students =$this->getAllStudent();
      foreach ($this->students as $student)
      {
          if ($this->text == $student['name'])
          {
              $this->result = $student;
              break;
          }
        return $this->result;
      }
}
}