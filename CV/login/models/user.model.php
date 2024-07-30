<?php

function createAccount(string $name, string $email, string $password): bool{
    global $connection;
    $statement = $connection->prepare("INSERT INTO students (name, email, password, role)
    VALUES (:name, :email, :password, :role)");

    $statement->execute([
        ':name' => $name,
        ':email' => $email,
        ':password' => $password,
        ':role' => 'user'
    ]);

    return $statement->rowCount() > 0;
}



function deleteAccount(string $name, string $email, string $password): bool{
    global $connection;
    $statement = $connection->prepare('DELETE FROM  students WHERE id= :id');
    $statement->execute([
        ':id' => $id,
    ]);
    return $statement->rowCount();
}