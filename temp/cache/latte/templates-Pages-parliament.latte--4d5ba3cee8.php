<?php

use Latte\Runtime as LR;

/** source: C:\Users\12ora\Downloads\test_nette_project_IgorM\App\Presenters/templates/Pages/parliament.latte */
final class Template4d5ba3cee8 extends Latte\Runtime\Template
{
	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '    <div>
        <h1>';
		echo LR\Filters::escapeHtmlText($message) /* line 3 */;
		echo '</h1>
    </div>
';
	}
}
