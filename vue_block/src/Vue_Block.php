<?php
	
namespace Drupal\vue_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
*
* Creating a testing block using React.JS
* @Block(
* 	id = "vue_block",
*	admin_label = @Translation("Vue Block"),
*	category = @Translation("SRC custom blocks"),
* )
*
*/

class Vue_Block extends BlockBase{
	/**
	*	{@inheritdoc}
	*/
	
	public function build(){
		return array(
			"#theme" => "block--vue-template",
		);
	}
	
}