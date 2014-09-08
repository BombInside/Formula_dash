<link href="<?=base_url();?>dash/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

 <div class="box">
                                <div class="box-header">
                                    <?php foreach($fabric as $i): ?>
                                    <h3 class="box-title">Движение муки (ежесуточно) по  <strong><?=$i['name'];?> на <?=date('Y-j-m',time());?></strong></h3> 
                                    <?php endforeach; ?>
                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Наименование</th>
                                                <th>Остаток на начало месяца, тонн</th>
                                                <th>Поставка с нначала месяца, тонн</th>
                                                <th>В т.ч. за последние сутки, тонн</th>
                                                <th>Переработка с начала месяца, тонн</th>
                                                <th>В т.ч. за последние сутки, тонн</th>
                                                <th>Среденесуточная переработка, тонн/сутки</th>
                                                <th>Остаток на отчетную дату</th>
                                                <th>Производительный запас, дней</th>
                                            </tr>
                                        </thead>
                                        <tbody>

             <?php
                foreach($muka as $i): ?>

                                            <tr>
                                                <td><?=$i['name'];?></td>
                                                <td><?=$i['balance_month'];?></td>
                                                <td><?=$i['add_2_month_balance'];?></td>
                                                <td><?=$i['add_day'];?></td>
                                                <td><?=$i['conversion_month'];?></td>
                                                <td><?=$i['conversion_day'];?></td>
                                                <td><?php $sredn_day = $i['conversion_month']/$i['work_days']; 
                                                       echo (round($sredn_day, 1));?></td>
                                                <td><?=round(($i['balance_month']+$i['add_2_month_balance']-$i['conversion_month']), 1)?></td>
                                                <td><?=round(($i['balance_month']+$i['add_2_month_balance']-$i['conversion_month'])/($i['conversion_month']/$i['work_days']), 1)?></td>
                                            </tr>
        <?php endforeach; ?>



                                        </tbody>

                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->