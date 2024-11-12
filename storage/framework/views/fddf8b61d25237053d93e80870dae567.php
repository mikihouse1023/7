<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
    <h1>Todoリスト</h1>
    <ul>
        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php if($todo['completed']): ?>
                    <strike><?php echo e($todo['task']); ?></strike>
                <?php else: ?>
                    <?php echo e($todo['task']); ?>

                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH C:\7_PHP応用\educure-WorldCup\curriculum\laravel\curriculum-app\resources\views/index.blade.php ENDPATH**/ ?>