<?php

namespace Leech\FirstPlugin;

trait CreatePosts {
	// can be called in any class
	public function create_content_type($options){
		return "You just created a new content type with traits called " . $options['type'];
	}
}

class RandomClass extends \Other\RandomClass {

	// add trait as class method
	use \Leech\FirstPlugin\CreatePosts;

	public function __construct($options){
		$this->content_type_message = $this->create_content_type($options)
	}

	public function print_message(){
		echo $this->content_type_message;
	}
}

$object = new RandomClass([ 'type' => 'Location' ]);

add_action('init', [$object, 'print_message']);