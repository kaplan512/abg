<?php if(get_field('объекты_на_карте', 'options')){
    $array = array_chunk(get_field('объекты_на_карте', 'options'), ceil(count(get_field('объекты_на_карте', 'options'))/2));
    ?>
    <section class="page__maps maps maps_black">
        <div class="container">
            <div class="maps__title main-title main-title_white">
                <span><?php _e("Где мы строим", "theme"); ?></span>
            </div>
            <div class="maps__body">
                <div class="maps__column-left">
                    <?php $col_i = 1; foreach($array[0] as $item){ ?>
                        <div class="maps__item-left maps__item-left_<?=$col_i;?>">
                        <div class="maps__name maps__name_<?=$col_i;?>">
                            <?php echo $item['название']; ?>
                        </div>
                        <div class="maps__address">
                            <?php echo $item['адрес']; ?>
                        </div>
                    </div>
                    <?php $col_i++;} ?>
                </div>
                <div class="maps__image" data-test="yaroslav-git">
                    <img src="<?=layout();?>/img/black-pages/02.png" alt="">
                    <?php

                    // for ($i = 1; $i <= count(get_field('объекты_на_карте', 'options')); $i++) {
                    //     echo '<span  class="maps__line maps__span-'.$i.'-'.$i.'"></span><span  class="maps__line maps__span-'.$i.'"></span>';
                    // }

                    ?>
                </div>
                <div class="maps__column-right">
                    <?php foreach($array[1] as $item){ ?>
                        <div class="maps__item-right maps__item-right_<?=$col_i;?>">
                            <div class="maps__name maps__name_<?=$col_i;?>">
                                <?php echo $item['название']; ?>
                            </div>
                            <div class="maps__address">
                                <?php echo $item['адрес']; ?>
                            </div>
                        </div>
                        <?php $col_i++;} ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<script>
    let count_map = <?=count(get_field('объекты_на_карте', 'options'));?>;
</script>
