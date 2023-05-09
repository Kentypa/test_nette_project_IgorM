<?php

use Latte\Runtime as LR;

/** source: C:\Users\12ora\Downloads\test_nette_project_IgorM\App\Presenters\templates\elements\footer.latte */
final class Templateb799541620 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<footer>
    <ul>
        <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Pages:passport')) /* line 3 */;
		echo '">Passport</a></li>
    </ul>
</footer>
';
	}
}
