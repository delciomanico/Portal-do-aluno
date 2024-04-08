
<?php 
use App\Models\disciplina;
use App\Models\trimestre;
use App\Models\turma;
use App\Models\miniPauta;
?>


<?php $__env->startSection('title','mini'); ?>
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
                                <th>Diciplina</th>
                                <th>Turma</th>
                                <th>Trimestre</th>
                                <th>----</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $mini = miniPauta::all();
                            ?>
                            <?php $__currentLoopData = $mini; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            <tr>
                                <td><?php echo e($value->id); ?></td>
                                <td><?php echo e($value->id_disc); ?></td>
                                <td><?php echo e($value->id_turma); ?></td>
                                <td><?php echo e($value->id_trim); ?></td>
                                <td>
                                    <form action="notas" method="post">
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
                            
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Diciplina</th>
                                <th>Turma</th>
                                <th>Trimestre</th>
                                <th>----</th>
                            </tr>
                        </tfoot>
                       
                    </table>
                </div>
            </div>
            <aside class="container">
                <h2>Nova MiniPauta</h2>
                <form action="/nova_mini" method="get">
                    <div class="form-item">
                        <input type="hidden" name="prof" value="1">
                    </div>
                    <div class="form-item">
                        <label for="">turma</label>
                        <select name="turma" id="">
                            <?php $__currentLoopData = turma::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

                            <option value="<?php echo e($value->id); ?>"><?php echo e($value->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-item" >
                        <label for="">trimestre</label>
                        <select name="trimestre" id="">
                            <?php $__currentLoopData = trimestre::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

                            <option value="<?php echo e($value->id); ?>"><?php echo e($value->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="">disciplina</label>
                        <select name="disciplina" id="">
                            <?php $__currentLoopData = disciplina::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

                            <option value="<?php echo e($value->id); ?>"><?php echo e($value->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-item">
                        <button type="submit" class="btn">Criar</button>
                    </div>
                </form>
            </aside>
        </section>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('professor.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/monarca/Desktop/Laravel/PortalDoAluno/resources/views/professor/MiniPauta.blade.php ENDPATH**/ ?>