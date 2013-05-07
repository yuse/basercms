<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] ブログタグ一覧　テーブル
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2012, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2012, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>


<!-- pagination -->
<?php $this->bcBaser->element('pagination') ?>

<!-- list -->
<table cellpadding="0" cellspacing="0" class="list-table" id="ListTable">
	<thead>
		<tr>
			<th style="width:160px" class="list-tool">
				<div>
<?php if($newCatAddable): ?>
					<?php $this->bcBaser->link($this->bcBaser->getImg('admin/btn_add.png', array('width' => 69, 'height' => 18, 'alt' => '新規追加', 'class' => 'btn')), array('action' => 'add')) ?>
<?php endif ?>
				</div>
<?php if($this->bcBaser->isAdminUser()): ?>
				<div>
					<?php echo $this->BcForm->checkbox('ListTool.checkall', array('title' => '一括選択')) ?>
					<?php echo $this->BcForm->input('ListTool.batch', array('type' => 'select', 'options' => array('del' => '削除'), 'empty' => '一括処理')) ?>
					<?php echo $this->BcForm->button('適用', array('id' => 'BtnApplyBatch', 'disabled' => 'disabled')) ?>
				</div>
<?php endif ?>
			</th>
			<th><?php echo $this->Paginator->sort(array('asc' => $this->bcBaser->getImg('admin/blt_list_down.png', array('alt' => '昇順', 'title' => '昇順')).' NO', 'desc' => $this->BcBaser->getImg('admin/blt_list_up.png', array('alt' => '降順', 'title' => '降順')).' NO'), 'id', array('escape' => false, 'class' => 'btn-direction')) ?></th>
			<th><?php echo $this->Paginator->sort(array('asc' => $this->bcBaser->getImg('admin/blt_list_down.png', array('alt' => '昇順', 'title' => '昇順')).' ブログタグ名', 'desc' => $this->BcBaser->getImg('admin/blt_list_up.png', array('alt' => '降順', 'title' => '降順')).' ブログタグ名'), 'name', array('escape' => false, 'class' => 'btn-direction')) ?></th>
			<th><?php echo $this->Paginator->sort(array('asc' => $this->bcBaser->getImg('admin/blt_list_down.png', array('alt' => '昇順', 'title' => '昇順')).' 登録日', 'desc' => $this->BcBaser->getImg('admin/blt_list_up.png', array('alt' => '降順', 'title' => '降順')).' 登録日'), 'created', array('escape' => false, 'class' => 'btn-direction')) ?><br />
				<?php echo $this->Paginator->sort(array('asc' => $this->bcBaser->getImg('admin/blt_list_down.png', array('alt' => '昇順', 'title' => '昇順')).' 更新日', 'desc' => $this->BcBaser->getImg('admin/blt_list_up.png', array('alt' => '降順', 'title' => '降順')).' 更新日'), 'modified', array('escape' => false, 'class' => 'btn-direction')) ?></th>
		</tr>
	</thead>
	<tbody>
	<?php if(!empty($datas)): ?>
		<?php foreach($datas as $data): ?>
			<?php $this->bcBaser->element('blog_tags/index_row', array('data' => $data)) ?>
		<?php endforeach; ?>
	<?php else: ?>
		<tr>
			<td colspan="4"><p class="no-data">データが見つかりませんでした。</p></td>
		</tr>
	<?php endif; ?>
	</tbody>
</table>

<!-- list-num -->
<?php $this->bcBaser->element('list_num') ?>
