<?php
class Page
{
    public static function display(string $page)
    {
        switch ($page) {
            case 'students':
                include 'modules/student_display.php';
                break;
            case 'grades':
                include 'modules/grades_display.php';
                break;
             case 'student-add':
                include 'modules/student_add.php';
                break;
            default:
                include 'modules/dashboard.php';
        }
    }
}
