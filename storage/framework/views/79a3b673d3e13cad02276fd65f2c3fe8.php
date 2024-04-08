<?php
use App\Models\miniPauta;
use App\Models\anoLetivo;
use App\Models\turma;
use App\Models\aluno_turma;
use App\Models\trimestre;
use Illuminate\Support\Facades\DB;
$token = auth()->guard('aluno')->user()->id_aluno;
?>

<?php $__env->startSection('title','mini'); ?>
<?php $__env->startSection('conteudo'); ?>

<main>
        <main>
            <section>
                <div class="container">
                    <form action="boletim" method="post">
                    <?php echo csrf_field(); ?>
                        <div class="menu">
                            <input type="hidden" value="<?php echo e($token); ?>" name="aluno">
                            <?php $__currentLoopData = anoLetivo::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <select name="ano"  id="" <?php if(!empty($_POST['ano'])){ echo "disabled";} ?>>
                                    <option value="">Ano lectivo</option>
                                    <option value="<?php echo e($value->id); ?>" <?php if(!empty($_POST['ano']) && ($_POST['ano'] == $value->id)){ echo "selected";} ?>><?php echo e($value->nome); ?></option>
                                </select>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!empty($_POST['ano'])): ?>
                            <?php 
                                $t = DB::select("SELECT a.id_turma, t.nome  from aluno_turmas a, turmas t WHERE id_aluno = 1 AND id_turma in (SELECT id from turmas WHERE id_letivo= {$_POST['ano']})");
                            ?>
                                <select name="turma" id="">
                            <?php $__currentLoopData = $t; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="">Turma</option>
                                    <option value="<?php echo e($value->id_turma); ?>"><?php echo e($value->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <select name="trimestre" id="">
                            <?php $__currentLoopData = trimestre::select('*')->where('id_letivo',$_POST['ano'])->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="">Trimestre</option>
                                    <option value="<?php echo e($value->id); ?>"><?php echo e($value->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            <?php endif; ?>
                            
                            <button type="submit">Buscar</button>
                        </div>
                    </form>
            
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Diciplina</th>
                                    <th>MAC</th>
                                    <th>PROVA 1</th>
                                    <th>PROVA 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($dados)): ?>
                                <?php $__currentLoopData = $dados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $mini = miniPauta::select('id_disc')->where('id',$value[$key]->id_mini)->get();
                                ?>
                                
                                <tr>
                                    <td><?php echo e($value[$key]->id); ?></td>
                                    <td><?php echo e($mini[0]->id_disc); ?></td>
                                    <td><?php echo e($value[$key]->mac); ?></td>
                                    <td><?php echo e($value[$key]->p1); ?></td>
                                    <td>
                                    <?php echo e($value[$key]->p2); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                
                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Diciplina</th>
                                    <th>MAC</th>
                                    <th>PROVA 1</th>
                                    <th>PROVA 2</th>
                                </tr>
                            </tfoot>
                           
                        </table>
                    </div>
                    <div class="menu-2">
                        <button >PDF</button>
                    </div>
                </div>

                
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('aluno.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/monarca/Desktop/Laravel/PortalDoAluno/resources/views/aluno/boletim.blade.php ENDPATH**/ ?>