<?php
/* SVN FILE: $Id$ */
/**
 * [管理画面] メール設定 フォーム
 *
 * PHP versions 4 and 5
 *
 * BaserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2010, Catchup, Inc.
 *								9-5 nagao 3-chome, fukuoka-shi 
 *								fukuoka, Japan 814-0123
 *
 * @copyright		Copyright 2008 - 2010, Catchup, Inc.
 * @link			http://basercms.net BaserCMS Project
 * @package			baser.plugins.mail.views
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>

<h2>
	<?php $baser->contentsTitle() ?>
	&nbsp;<?php echo $html->image('img_icon_help_admin.gif',array('id'=>'helpAdmin','class'=>'slide-trigger','alt'=>'ヘルプ')) ?></h2>
<div class="help-box corner10 display-none" id="helpAdminBody">
	<h4>ユーザーヘルプ</h4>
	<p>メールフォームプラグインの基本設定を登録します。<br />
		各項目のヘルプメッセージを確認し登録を完了させてください。<br />
	<ul>
		<li>文字コードは基本的に変更する必要はありません。</li>
		<li>SMTPの設定は、サーバーがsendmailをサポートしていない場合等に入力します。</li>
	</ul>
</div>
<h3>基本項目</h3>
<p><small><span class="required">*</span> 印の項目は必須です。</small></p>
<?php echo $form->create('MailConfig',array('action'=>'form')) ?> <?php echo $form->hidden('MailConfig.id') ?>
<table cellpadding="0" cellspacing="0" class="admin-row-table-01">
	<tr>
		<th><?php echo $form->label('MailConfig.site_name', '署名：WEBサイト名') ?></th>
		<td class="col-input"><?php echo $form->text('MailConfig.site_name', array('size'=>35,'maxlength'=>255)) ?> <?php echo $html->image('img_icon_help_admin.gif',array('id'=>'helpSiteName','class'=>'help','alt'=>'ヘルプ')) ?>
			<div id="helptextSiteName" class="helptext">自動送信メールの署名に挿入されます。</div>
			<?php echo $form->error('MailConfig.site_name') ?></td>
	</tr>
	<tr>
		<th><?php echo $form->label('MailConfig.site_url', '署名：WEBサイトURL') ?></th>
		<td class="col-input"><?php echo $form->text('MailConfig.site_url', array('size'=>35,'maxlength'=>255)) ?> <?php echo $html->image('img_icon_help_admin.gif',array('id'=>'helpSiteUrl','class'=>'help','alt'=>'ヘルプ')) ?>
			<div id="helptextSiteUrl" class="helptext">自動送信メールの署名に挿入されます。</div>
			<?php echo $form->error('MailConfig.site_url') ?></td>
	</tr>
	<tr>
		<th><?php echo $form->label('MailConfig.site_email', '署名：Eメール') ?></th>
		<td class="col-input"><?php echo $form->text('MailConfig.site_email', array('size'=>35,'maxlength'=>255)) ?> <?php echo $html->image('img_icon_help_admin.gif',array('id'=>'helpSiteEmail','class'=>'help','alt'=>'ヘルプ')) ?>
			<div id="helptextSiteEmail" class="helptext">
				<ul>
					<li>自動送信メールの署名に挿入されます。</li>
					<li>メールの送信先ではありません。</li>
				</ul>
			</div>
			<?php echo $form->error('MailConfig.site_email') ?></td>
	</tr>
	<tr>
		<th><?php echo $form->label('MailConfig.site_tel', '署名：電話番号') ?></th>
		<td class="col-input"><?php echo $form->text('MailConfig.site_tel', array('size'=>35,'maxlength'=>255)) ?> <?php echo $html->image('img_icon_help_admin.gif',array('id'=>'helpSiteTel','class'=>'help','alt'=>'ヘルプ')) ?>
			<div id="helptextSiteTel" class="helptext">自動送信メールの署名に挿入されます。</div>
			<?php echo $form->error('MailConfig.site_tel') ?></td>
	</tr>
	<tr>
		<th><?php echo $form->label('MailConfig.site_fax', '署名：FAX番号') ?></th>
		<td class="col-input"><?php echo $form->text('MailConfig.site_fax', array('size'=>35,'maxlength'=>255)) ?> <?php echo $html->image('img_icon_help_admin.gif',array('id'=>'helpSiteFax','class'=>'help','alt'=>'ヘルプ')) ?>
			<div id="helptextSiteFax" class="helptext">自動送信メールの署名に挿入されます。</div>
			<?php echo $form->error('MailConfig.site_fax') ?></td>
	</tr>
</table>
<h3><a href="javascript:void(0)" id="formOption" class="slide-trigger">オプション</a></h3>
<table cellpadding="0" cellspacing="0" class="admin-row-table-01 slide-body" id="formOptionBody">
	<tr>
		<th><span class="required">*</span>&nbsp;<?php echo $form->label('MailConfig.encode', '文字コード') ?></th>
		<td class="col-input"><?php echo $form->text('MailConfig.encode', array('size'=>35,'maxlength'=>255)) ?> <?php echo $html->image('img_icon_help_admin.gif',array('id'=>'helpEncode','class'=>'help','alt'=>'ヘルプ')) ?>
			<div id="helptextEncode" class="helptext">送信メールの文字コード</div>
			<?php echo $form->error('MailConfig.encode') ?></td>
	</tr>
	<tr>
		<th><?php echo $form->label('MailConfig.smtp_host', 'SMTPホスト') ?></th>
		<td class="col-input"><?php echo $form->text('MailConfig.smtp_host', array('size'=>35,'maxlength'=>255)) ?> <?php echo $form->error('MailConfig.smtp_host') ?> <?php echo $html->image('img_icon_help_admin.gif',array('id'=>'helpSmtpHost','class'=>'help','alt'=>'ヘルプ')) ?>
			<div id="helptextSmtpHost" class="helptext">メールの送信にSMTPサーバーを利用する場合指定します。</div>
			&nbsp; </td>
	</tr>
	<tr>
		<th><?php echo $form->label('MailConfig.smtp_username', 'SMTPユーザー') ?></th>
		<td class="col-input"><?php echo $form->text('MailConfig.smtp_username', array('size'=>35,'maxlength'=>255)) ?> <?php echo $form->error('MailConfig.smtp_username') ?> <?php echo $html->image('img_icon_help_admin.gif',array('id'=>'helpSmtpUsername','class'=>'help','alt'=>'ヘルプ')) ?>
			<div id="helptextSmtpUsername" class="helptext">メールの送信にSMTPサーバーを利用する場合指定します。</div>
			&nbsp; </td>
	</tr>
	<tr>
		<th><?php echo $form->label('MailConfig.smtp_password', 'SMTPパスワード') ?></th>
		<td class="col-input"><?php echo $form->text('MailConfig.smtp_password', array('size'=>35,'maxlength'=>255)) ?> <?php echo $form->error('MailConfig.smtp_password') ?> <?php echo $html->image('img_icon_help_admin.gif',array('id'=>'helpSmtpPassword','class'=>'help','alt'=>'ヘルプ')) ?>
			<div id="helptextSmtpPassword" class="helptext">メールの送信にSMTPサーバーを利用する場合指定します。</div>
			&nbsp; </td>
	</tr>
</table>
<div class="align-center"> <?php echo $form->end(array('label'=>'更　新','div'=>false,'class'=>'btn-orange button')) ?> </div>
