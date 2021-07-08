<?php

namespace User\Model;

use Laminas\Db\TableGateway\TableGatewayInterface;
use RuntimeException;

class UsersTable {
  private $tableGateway;

  public function __construct(TableGatewayInterface $tableGateway) {
    $this->tableGateway = $tableGateway;
  }

  public function find() {
    return $this->tableGateway->select();
  }

  public function findOne($id) {
    $id = (int)$id;
    $rowset = $this->tableGateway->select(['id' => $id]);
    $row = $rowset->current();
    if (!$row) {
      throw new RuntimeException(
        sprintf('Não foi possível encontrar o usuário de id %id', $id)
      );
    }
    return $row;
  }

  public function save(User $user) {
    $data = [
      'nome' => $user->getNome(),
      'email' => $user->getEmail(),
      'senha' => $user->getSenha(),
    ];

    $id = (int)$user->getId();
    if ($id === 0) {
      $this->tableGateway->insert($data);
      return;
    }

    
  }
}