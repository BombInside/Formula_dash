<link href="<?=base_url();?>dash/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

 <div class="box">
                                <div class="box-header">
                                    <?php foreach($cab_num as $i): ?>
                                    <h3 class="box-title">Техника в кабинете <strong><?=$i['number']?></strong> </h3> 
                                    <?php endforeach; ?>
                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Инв.Номер</th>
                                                <th>Наименование</th>
                                                <th>Пользователь</th>
                                                <th>Организация</th>
                                            </tr>
                                        </thead>
                                        <tbody>

             <?php foreach($tech as $i): ?>

                                            <tr>
                                                <td><?=$i['inv_number'];?></td>
                                                <td><?=$i['name'];?></td>
                                                <td><?=$i['organisation'];?></td>
                                                <td><?=$i['user_id'];?></td>
                                            </tr>
        <?php endforeach; ?>



                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Инв.Номер</th>
                                                <th>Наименование</th>
                                                <th>Пользователь</th>
                                                <th>Организация</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->