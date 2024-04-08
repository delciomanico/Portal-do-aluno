<?php $__env->startSection('title','Editar Nota'); ?>
<?php $__env->startSection('conteudo'); ?>
<main>
        <section>
            <div class="container" style="width: 300px;">
                <div class="menu">
                    <button >Voltar</button>
                </div>
                
                
                    <form action="/updatenota/<?php echo e($dado->id); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-item">
                            <input type="hidden" name="id" value="<?php echo e($dado->id); ?>">
                            <label for="">MAC</label>
                            <input type="number" name="mac" value="<?php echo e($dado->mac); ?>">
                        </div>
                        <div class="form-item">
                            <label for="">PROVA 1</label>
                            <input type="number" name="p1" value="<?php echo e($dado->p1); ?>"> 
                        </div>
                        <div class="form-item">
                            <label for="">PROVA 2</label>
                            <input type="number" name="p2" value="<?php echo e($dado->p2); ?>">
                        </div>
                        <div class="form-item form-item-btn">
                            <button type="submit" class="btn">Salvar</button>
                        </div>
                    </form>
                    
            </div>
            
        </section>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('professor.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/monarca/Desktop/Laravel/PortalDoAluno/resources/views/professor/EditMini.blade.php ENDPATH**/ ?>