<link href="<?=base_url();?>dash/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

 <div class="box">
                                <div class="box-header">
                                    <?php foreach($fabric as $i): ?>
                                    <h3 class="box-title">Выработка продукции (ежесуточно) по  <strong><?=$i['name'];?> на <?=date('Y-m-j',time());?></strong></h3> 
                                    <?php endforeach; ?>
                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" >

                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Выработка продукции</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="graph" style="height: 450px;"></div>
                                </div><!-- /.box-body -->
                            </div>


                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Таблица производительности</h3>
                                </div>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Дата</th>
                                                <th>Факт за <?=date('M',time());?> 2013</th>                                                
                                                <th>План, 2014</th>
                                                <th>Факт, 2014</th>
                                                <th>% выполнения плана</th>
                                                <th>В % к факту 2013</th>
                                            </tr>
                                        </thead>
                                        <tbody>

             <?php foreach($goods as $i): ?>

                                            <tr>
                                                <td><?=$i['date'];?></td>
                                                <td><?=$i['fact_last'];?></td>
                                                <td><?=$i['plan'];?></td>
                                                <td><?=$i['fact_now'];?></td>
                                                <td><?=round(($i['fact_now']/$i['plan']*100), 1)?></td>
                                                <td><?=round(($i['fact_now']/$i['fact_last']*100), 1)?></td>
                                            </tr>
        <?php endforeach; ?>


                                        </tbody>

                                    </table>
                            </div>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            