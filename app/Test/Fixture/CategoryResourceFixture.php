<?php

class CategoryResourceFixture extends CakeTestFixture {
	public $useDbConfig = 'test';
	public $import = 'CategoryResource';
	 
	public function init() {
		parent::init();
		$this->records = array(
				array('category_id'=>'4ff6111b-efb8-4a26-aab4-2184cbdd56cb', 'resource_id'=>'50210bfb-84b4-4136-a8a9-270cb4e000c3'),
				array('category_id'=>'4ff6111b-efb8-4a26-aab4-2184cbdd56cb', 'resource_id'=>'50210bfb-cec8-417f-87fe-270cb4e000c3'),
				array('category_id'=>'4ff6111c-8534-4d17-869c-2184cbdd56cb', 'resource_id'=>'50210bfb-1554-433e-b5f2-270cb4e000c3'),
				array('category_id'=>'4ff6111d-9e6c-4d71-80ee-2184cbdd56cb', 'resource_id'=>'50210bfb-ab90-4181-81e0-270cb4e000c3')
		);
	}	
}