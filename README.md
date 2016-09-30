# TPFTV

30/09/2016

## Purpose: 
Create a simple Rest API without Front
Only 1 Ressource called "Article" must be:

* Get 1 by Id
* Get All the Collection
* Create 1
* Delete by Id

## Technos:
* Symfony 2.7
* MySQL DB

## Bundles:
* STOFDoctrine extention: Helping generating Slug from Propertie "title", (wihtout it => we have to listen the preprersist event en sluggify the title)
* JMS Serializer : helping convertion of Symfony entity to JSON 
* FOSRestBundle : Helping generating Routes and view according to REST rules.

## Install
Classic Symfony install, with Fixtures aviaibles

