<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('trans_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->trans_id), array('view', 'id'=>$data->trans_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trans_created')); ?>:</b>
	<?php echo CHtml::encode($data->trans_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trans_type')); ?>:</b>
	<?php echo CHtml::encode($data->trans_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trans_amount')); ?>:</b>
	<?php echo CHtml::encode($data->trans_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trans_comment')); ?>:</b>
	<?php echo CHtml::encode($data->trans_comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->account_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_user_id); ?>
	<br />


</div>