<?php

// requires
require_once 'DBManager.php';


class ProductManager
{
  protected $db;      //use as object of database (DBManager)

  //1. Open connection.
  //2. Run query & logic.
  //3. Close connection


  public function viewProducts($sortType = 'productName', $sortOrder = 'ASC', $limit = null)
  {

    $this->db = DBManager::getInstance();

    if ($this->db) {
      // Validate the sortType to prevent SQL injection
      $allowedSortTypes = ['productName', 'price', 'numSales']; // Add more as needed
      $sortType = in_array($sortType, $allowedSortTypes) ? $sortType : 'productName';

      // Validate the sortOrder to prevent SQL injection
      $sortOrder = strtoupper($sortOrder) === 'DESC' ? 'DESC' : 'ASC';

      // Construct the SQL query with LIMIT if $limit is provided
      $limitClause = $limit ? "LIMIT $limit" : '';
      $stmt = "SELECT * FROM Products ORDER BY $sortType $sortOrder $limitClause";

      $result = $this->db->select($stmt);

      if ($result) {
        return $result;
      } else {
        return false;
      }
    }
  }
}
