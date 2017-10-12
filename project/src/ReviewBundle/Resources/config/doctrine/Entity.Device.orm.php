<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'ReviewBundle\Repository\Entity\DeviceRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'ReviewId',
   'fieldName' => 'reviewId',
   'type' => 'integer',
   'unique' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'Mark',
   'fieldName' => 'mark',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'Price',
   'fieldName' => 'price',
   'type' => 'float',
  ));
$metadata->mapField(array(
   'columnName' => 'Category',
   'fieldName' => 'category',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);