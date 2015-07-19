<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Presenters;

use Nette,
 Nette\Application\UI\Form;

class ActivityPresenter extends BasePresenter {
    
    private $database;
    
    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }


    public function renderShow() {
        $activities = $this->database->table('activities')->order('name')->order('time_start')->fetchAll();
        return $this->template->activities = $activities;
    }
}