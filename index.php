<?php
require_once "vendor/autoload.php";

//require_once "messages.php";

$pdo = \Core\DB\Connection::make('mysql:host=localhost;dbname=todo', 'root', 'root');
//$pdo=Connection::make('mysql:host=localhost;dbname=todo','root','root');


$task = new \Core\DB\QueryBuilder($pdo);
//echo $tasks[0]->user();
//echo "<br>";
//echo $tasks[1]->user();
$users = $task->Task($task->sqlSelect('task','Where complete=1'));
//dd($users[2]->name);
?>
<style>
    .my-talbe {
        background: gainsboro;
        border: 3px solid red;
        border-radius: 10px;
    }
    .my-tr{
        border-bottom: 4px solid crimson;
    }
</style>
<table class="my-talbe">
    <tr>
        <th class="my-tr">ID</th>
        <th class="my-tr">Name</th>
        <th class="my-tr">Complete</th>
    </tr>
    <? foreach ($users as $user): ?>
        <tr>
            <td><?= $user->id; ?></td>
            <td><?= $user->name; ?></td>
            <td><?= $user->complete; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

