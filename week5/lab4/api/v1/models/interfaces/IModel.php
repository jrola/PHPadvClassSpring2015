<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IModel
 *
 * @author 000847713
 */
namespace API\models\interfaces;

interface IModel {
    public function reset();
    public function map(array $values);
    public function getAllPropteries();
}