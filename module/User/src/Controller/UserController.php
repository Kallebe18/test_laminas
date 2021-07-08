<?php

namespace User\Controller;

use Laminas\Mvc\Controller\AbstractRestfulController;
use Laminas\View\Model\JsonModel;

class UserController extends AbstractRestfulController {
  public function indexAction() {
    return new JsonModel([]);
  }

  public function loginAction($user) {
    return new JsonModel([$user]);
  }

  public function registerAction($user) {
    return new JsonModel([]);
  }

  public function logoutAction($token) {
    return new JsonModel([]);
  }

  public function listAction($id) {
    return new JsonModel([]);
  }

  public function removeAction($id) {
    return new JsonModel([]);
  }

  public function editAction($id, $newData) {
    return new JsonModel([]);
  }
}