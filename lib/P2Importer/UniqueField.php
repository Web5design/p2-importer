<?php

namespace P2Importer;

class UniqueField {
  // Either property or field as used by EntityFieldQuery
  public $field_type;
  // The name of the field or property
  public $field_name;
  // The field in the table as used in EntityFieldQuery::fieldCondition
  public $table_field;
  // The field in the import
  public $import_field_name;

  public function __construct($field_name, $import_field_name, $field_type, $table_field = NULL) {
    $this->field_name = $field_name;
    $this->field_type = $field_type;
    $this->table_field = $table_field;
    $this->import_field_name = $import_field_name;
  }
}
