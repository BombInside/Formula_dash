<h4 class="page-header">
Заводы
                    </h4>

                    <div class="row"> 
                        <?php if($data->num_rows() > 0): ?>
             <?php foreach($data->result() as $i): ?>
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->

                            <div class="small-box bg-green">
                                <div class="inner">
                                    <p>
                                        <?=$i->name;?>
                                    </p>

                                    <p>
                                        <?=$i->city;?>
                                    </p>

                                </div>
                            <!-- <div class="icon">
                                    <i class="fa fa-barcode"></i>
                                </div> -->
                                <a href="/main/muka/<?=$i->id;?>" class="small-box-footer">
                                    Подробнее <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            
                        </div><!-- ./col -->
        <?php endforeach; ?>

    <?php endif; ?>
                    </div>