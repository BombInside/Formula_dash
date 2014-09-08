<h4 class="page-header">
Учет техники по кабинетам
                    </h4>

                    <div class="row"> 
                        <?php if($data->num_rows() > 0): ?>
             <?php foreach($data->result() as $i): ?>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->

                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?=$i->number;?>
                                    </h3>
                                    <p>
                                        Кабинет
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-building-o"></i>
                                </div>
                                <a href="/main/technics/<?=$i->id;?>" class="small-box-footer">
                                    Подробнее <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            
                        </div><!-- ./col -->
        <?php endforeach; ?>

    <?php endif; ?>
                    </div>