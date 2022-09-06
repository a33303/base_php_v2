<?php

// создать поключение
// выполнить запрос
// завершить действие

$dsn = 'sqlite:my/database/path/database.db';

// $pdo = new PDO('sqlite:database.db');
$pdo = new PDO('sqlite:database.db', null, null, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

class Student
{
    private int $id;
    private string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}


// Cоздание таблицы

//$query = 'CREATE TABLE `students` (
//            id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
//
//            name VARCHAR(100) NOT NULL
//         )';

//$statement = $pdo->query($query);


//$studentName = "Иванов Иван";
//$affectedCount = $pdo->exec("INSERT INTO `students` (`name`) VALUES ('$studentName')");
// exec небезопасный способ!!!
//var_dump($affectedCount); // int(1)


// prepare безопасный способ
//$studentName = "Иванов Иван'";
//$statement = $pdo->prepare("INSERT INTO `students` (`name`) VALUES (?)");
//$result = $statement->execute([$studentName]);
//var_dump($result); // bool(true)


//// извлекаем данные
//$statement = $pdo->query('SELECT * FROM `students`');
//print_r($statement->fetchAll(PDO::FETCH_ASSOC));

//// извлекаем через цикл
/// while
//$statement = $pdo->query('SELECT * FROM `students` WHERE `name` LIKE "%Иванов%"');
//while ($statement && $studentData = $statement->fetch()) {
//    echo $studentData['name']."\n";
//}

/// if else
//$statement = $pdo->query('SELECT * FROM `students` WHERE `name` LIKE "%Иванов%"');
//if ($statement !== false) {
//   foreach ($statement as $studentData) {
//       echo $studentData['name'] . "\n";
//   }
//}

// неименнованый подход
//$statement = $pdo->prepare('SELECT * FROM `students` WHERE `name` LIKE ?');
//$statement->execute(['%Иванов%']);
//
//while ($statement && $studentData = $statement->fetch()) {
//    echo $studentData['name'] . "\n";
//}


//// именованный подход
//$statement = $pdo->prepare('SELECT * FROM `students`');
//$statement->execute();
////$student = $statement->fetch(PDO::FETCH_ASSOC, 'Students');
//$student = $statement->fetchObject('Student');
//print_r($student);
////var_dump($student['name']); // string(21) "Иванов Петр"


$statement = $pdo->prepare('SELECT * FROM `students`');

$statement->execute();

$statement->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Student");
$student = $statement->fetchAll();


print_r($student);