<?php
    require_once("User.php");
    require_once("Student.php");
    
    $user = new User("John", "Smith");
    $student = new Student("Marty", "McFly", "A2022");

    $list = [];
    $list[] = $user;
    $list[] = $student;

    foreach ($list as $item) {
        ?>
        <div>
            <?= $item->getFullName() ?>
        </div>
        <?php
    }