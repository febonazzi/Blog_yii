<?php $this->beginContent('/layouts/main'); ?>
<div class="container">
    <div class="span-18">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="span-6 last">
        <div id="sidebar">
            <?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>

            <?php if($this->beginCache('tagCloud', array('duration'=>3600))) { ?>
 
                <?php $this->widget('TagCloud', array(
                    'maxTags'=>Yii::app()->params['tagCloudCount'],
                )); ?>
             
            <?php $this->endCache(); } ?>

            <?php $this->widget('RecentComments', array(
                'maxComments'=>Yii::app()->params['recentCommentCount'],
            )); ?>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>