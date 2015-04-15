<?php
#   Copyright 2015 Khaos Farbauti Ibn Oblivion
#
#   Licensed under the Apache License, Version 2.0 (the "License");
#   you may not use this file except in compliance with the License.
#   You may obtain a copy of the License at
#
#       http://www.apache.org/licenses/LICENSE-2.0
#
#   Unless required by applicable law or agreed to in writing, software
#   distributed under the License is distributed on an "AS IS" BASIS,
#   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#   See the License for the specific language governing permissions and
#   limitations under the License.

if (!defined('DC_CONTEXT_ADMIN')) { return; }

$page_title = __('Spam Out');
$default_tab = 'settings';
 
if (isset($_REQUEST['tab'])) {
	$default_tab = $_REQUEST['tab'];
}

$core->blog->settings->addNameSpace('spamout');

$settings =& $core->blog->settings->spamout;
$spamout_rbl = $settings->spamout_rbl;

if (isset($_POST['spamout_rbl'])){ $spamout_rbl = $_POST['spamout_rbl']; }

if (!empty($_POST['saveconfig']))
{
	$settings->put('spamout_rbl', $spamout_rbl, 'string','DNSRBL');
 
	# redirect to the page, avoid conflicts with old settings
	http::redirect($p_url.'&tab=settings&saveconfig=1');
}

if (isset($_GET['saveconfig']))
{
	$msg = __('Configuration successfully updated.');
}

?>
<html>
<head>
	<title><?php echo $page_title; ?></title>
	<?php echo dcPage::jsPageTabs($default_tab); ?>
</head>
<body>
<?php
	echo dcPage::breadcrumb(
		array(
			html::escapeHTML($core->blog->name) => '',
			'<span class="page-title">'.$page_title.'</span>' => ''
		));
if (!empty($msg)) {
  dcPage::success($msg);
}
?>

<form method="post" action="<?php echo($p_url); ?>">
 <div class="fieldset">
		<h3><?php echo(__('IP Lookup servers')); ?></h3>

		<p><label class="classic" for="spamout_rbl"><?php echo(__('Add here a coma separated list of servers.')); ?>
		<?php echo(form::textarea('spamout_rbl',40,3, html::escapeHTML($spamout_rbl),'maximal')); ?>
		</label></p>

		<p><?php echo $core->formNonce(); ?></p>
		<p><input type="submit" name="saveconfig"
		value="<?php echo __('Save'); ?>" /></p>
	</div>
	</form>
<?php dcPage::helpBlock('spamout'); ?>
</body>
</html>
