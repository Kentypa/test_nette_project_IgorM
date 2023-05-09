<?php

use Latte\Runtime as LR;

/** source: C:\Users\12ora\Downloads\test_nette_project_IgorM\App\Presenters/templates/@layout.latte */
final class Templatee0689e8c4a extends Latte\Runtime\Template
{
	public const Blocks = [
		['scripts' => 'blockScripts'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html lang="EN">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="style.css">
	<title>';
		if (isset($title)) /* line 8 */ {
			echo LR\Filters::escapeHtmlText($title) /* line 8 */;
		}
		echo '</title>
</head>

<body>
';
		foreach ($flashes as $flash) /* line 12 */ {
			echo '	<div';
			echo ($ʟ_tmp = array_filter(['flash', $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 12 */;
			echo '>';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 12 */;
			echo '</div>
';

		}

		echo "\n";
		$this->createTemplate('elements/header.latte', $this->params, 'include')->renderToContentType('html') /* line 14 */;
		echo "\n";
		$this->renderBlock('content', [], 'html') /* line 16 */;
		echo "\n";
		$this->createTemplate('elements/footer.latte', $this->params, 'include')->renderToContentType('html') /* line 18 */;
		echo "\n";
		$this->renderBlock('scripts', get_defined_vars()) /* line 20 */;
		echo '</body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '12'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block scripts} on line 20 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '	<script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>
';
	}
}
