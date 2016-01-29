<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Last extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$record = $this->quotes->last();
                $this->data = array_merge($this->data, $record);
                
                $this->data['pagebody'] = 'justone';
                
                $this->render();
	}

}