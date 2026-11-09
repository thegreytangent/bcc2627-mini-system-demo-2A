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
           $s['id']
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
        $query= self::query("SELECT * FROM student WHERE id = $id");
        return !$query ? null : array_shift($query);
    }

    public static function update(array $data, int $id) : void
    {
        $sql = "UPDATE student SET student_number = '".$data['student_number']."', ";
        $sql .="firstname = '".$data['firstname']."', lastname = '".$data['lastname']."', ";
        $sql .=" dob = '".$data['dob']."' WHERE id = $id";
        self::connection()->query($sql);
    }

    public static function delete(string $id): void {
        $sql = "DELETE FROM student WHERE id = $id";
         self::connection()->query($sql);
    }
}
