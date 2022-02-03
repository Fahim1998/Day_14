<?php require_once '../vendor/autoload.php';
use App\classes\StringWordCount;
use App\classes\student;
if (isset($_POST['btn']))

{
    $stringWordCount = new StringWordCount($_POST);
    $result          =$stringWordCount->getWordString();
    include 'index.php';
}
elseif (isset($_POST['search_btn']))
{
    $student = new student();
    $result  =  $student->getStudentBySearchText();
    include 'search_result.php';
}
elseif (isset($_GET['status']))
{
    if ($_GET['status'] == 'search')
    {
        $student = new student();
        $students = $student->getAllStudent();
        include 'search.php';
    }
}

else
{
    header('Location:index.php');
}