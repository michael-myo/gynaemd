<?php 
	if(get_lang() == 'ind') {
		$current_lang = 'Bahasa Indonesia';

	} elseif(get_lang() == 'chi') {
		$current_lang = '中文';
		
	} else {
		$current_lang = 'English';
	}
?>
<ul class="list-inline">
	<li><a hreflang="en" lang="en" class="<?php echo ($current_lang == 'English') ? 'active' : '' ?>" title="English" href="<?php echo lang_homepage_url('') ?>">English</a></li>
	<li><a hreflang="zh" lang="zh" class="<?php echo ($current_lang == '中文') ? 'active' : '' ?>" title="Chinese" href="<?php echo lang_homepage_url('chi') ?>">中文</a></li>
	<li><a hreflang="id" lang="id" class="<?php echo ($current_lang == 'Bahasa Indonesia') ? 'active' : '' ?>" title="Bahasa Indonesia" href="<?php echo lang_homepage_url('ind') ?>">Bahasa Indonesia</a></li>
</ul>