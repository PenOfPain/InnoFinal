<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'ReviewBundle\Repository\Entity\ReviewRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'Comment',
   'fieldName' => 'comment',
   'type' => 'text',
   'nullable' => true,
   'unique' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'Note',
   'fieldName' => 'note',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'UserId',
   'fieldName' => 'userId',
   'type' => 'integer',
   'unique' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);