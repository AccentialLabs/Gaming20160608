<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsEntity
 *
 * @author Raphael Pizzo
 */
class NewsEntity {
    private $id;
    private $title;
    private $slug;
    private $text;
    
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getSlug() {
        return $this->slug;
    }

    function getText() {
        return $this->text;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setSlug($slug) {
        $this->slug = $slug;
    }

    function setText($text) {
        $this->text = $text;
    }

}
