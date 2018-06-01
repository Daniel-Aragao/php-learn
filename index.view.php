<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>Document</title>
    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <h1>Task for the day</h1>

    <ul>
        <?php foreach($tasks as $task): ?>
            <li>
                <?php if($task->completed): ?>
                    <strike>
                        <?= $task->description?>
                    </strike>

                <?php else: ?>
                    <?= $task->description?>
                <?php endif;?>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>