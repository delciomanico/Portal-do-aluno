


<?php $__env->startSection('title','Notas'); ?>
<?php $__env->startSection('conteudo'); ?>
<main>
        <section>
            <div class="container">
                <div class="menu">
                    <input type="search" name="" id="" placeholder="pesquisar">
                    <button >Buscar</button>
                </div>
        
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Aluno</th>
                                <th>Mac</th>
                                <th>Prova 1</th>
                                <th>Prova 2</th>
                                <th>----</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($dado)): ?>
                            
                            <?php $__currentLoopData = $dado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            <tr>
                                <td><?php echo e($value->id); ?></td>  
                                <td><?php echo e($value->id_aluno); ?></td>
                                <td><?php echo e($value->mac); ?></td>
                                <td><?php echo e($value->p1); ?></td>
                                <td><?php echo e($value->p2); ?></td>
                                <td>
                                <form action="edit_nota" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($value->id); ?>">
                                        <button type="submit" class="btn btn-1" >E</button>
                                    </form>
                                    <form action="notass" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($value->id); ?>">
                                        <button type="submit" class="btn btn-2" >D</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Aluno</th>
                            <th>Mac</th>
                            <th>Prova 1</th>
                            <th>Prova 2</th>
                            <th>----</th>
                        </tr>
                        </tfoot>
                       
                    </table>
                </div>
            </div>
            <aside class="container">
                <?php if(!empty($nota)): ?>
                <h2>Editar Nota</h2>
                <form action="updatenota" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="form-item">
                        <input type="hidden" name="id" value="<?php echo e($nota->id); ?>">
                        <input type="hidden" name="id_mini" value="<?php echo e($nota->id_mini); ?>"> 
                    </div>
                    <div class="form-item">
                        <label for="">MAC</label>
                        <input type="number" name="mac" value="<?php echo e($nota->mac); ?>">
                    </div>
                    <div class="form-item" >
                        <label for="">Prova 1</label>
                        <input type="number" name="p1" value="<?php echo e($nota->p1); ?>">
                    </div>
                    <div class="form-item">
                        <label for="">Prova 2</label>
                        <input type="number" name="p2" value="<?php echo e($nota->p2); ?>">
                    </div>
                    <div class="form-item">
                        <button type="submit" class="btn">Salvar</button>
                    </div>
                </form>
                <?php endif; ?>
            </aside>
        </section>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('professor.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/monarca/Desktop/Laravel/PortalDoAluno/resources/views/professor/Nota.blade.php ENDPATH**/ ?>