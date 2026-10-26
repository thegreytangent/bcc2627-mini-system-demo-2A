<?php

class StudentRepository extends DBRepository implements IStudentRepository
{

    public static function all(): array
    { 
         $query= self::query("SELECT * FROM student");
       
        $result = [];
         foreach($query as $s ) {
           $result[] = new Student( 
            $s['student_number'], 
            $s['firstname'], 
            $s['lastname'], 
           $s['dob'], 
           );

        }

        return  $result;
        }

     public static function create(array $data): void   {
        $sql  = "INSERT INTO student (student_number, firstname, lastname, dob)";
        $sql .=" VALUES ('".$data['student_number']."', '".$data['firstname']."', '".$data['lastname']."', '".$data['dob']."');";
        self::connection()->query($sql);
     }

    public static function find(string $id): array
    {
        return [];
    }

    public static function update(array $data): array
    {
        return [];
    }

    public static function delete(string $id): void {}
}
