<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IDAO
 *
 * @author 000847713
 */
namespace API\models\interfaces;

interface IDAO {
    public function create(IModel $model);
    public function update(IModel $model);
    public function read($id);
    public function delete($id);
    
}