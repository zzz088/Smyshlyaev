<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>lw2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb" style="display: flex; align-items: center;">
                <div class="pull-left">
                    <h1>Жильцы дома №1</h1>
                </div>
                <div class="pull-right mb-2" style="margin-left: 20px;">
                    <a class="btn btn-success" href="<?php echo e(route('companies.create')); ?>">Добавить</a>
                </div>
            </div>
        </div>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Номер</th>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Квартира</th>
                    <th width="280px"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($company->id); ?></td>
                        <td><?php echo e($company->name); ?></td>
                        <td><?php echo e($company->email); ?></td>
                        <td><?php echo e($company->address); ?></td>
                        <td>
                            <form action="<?php echo e(route('companies.destroy',$company->id)); ?>" method="Post">
                                <a class="btn btn-primary" href="<?php echo e(route('companies.edit',$company->id)); ?>">Редактировать</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo $companies->links(); ?>

    </div>
</body>
</html><?php /**PATH C:\OSPanel\laravel-9-crud\resources\views/companies/index.blade.php ENDPATH**/ ?>