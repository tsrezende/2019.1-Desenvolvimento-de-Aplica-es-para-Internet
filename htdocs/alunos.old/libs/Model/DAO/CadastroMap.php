<?php
/** @package    Alunos::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * CadastroMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the CadastroDAO to the cadastro datastore.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * You can override the default fetching strategies for KeyMaps in _config.php.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Alunos::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class CadastroMap implements IDaoMap, IDaoMap2
{

	private static $KM;
	private static $FM;
	
	/**
	 * {@inheritdoc}
	 */
	public static function AddMap($property,FieldMap $map)
	{
		self::GetFieldMaps();
		self::$FM[$property] = $map;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public static function SetFetchingStrategy($property,$loadType)
	{
		self::GetKeyMaps();
		self::$KM[$property]->LoadType = $loadType;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetFieldMaps()
	{
		if (self::$FM == null)
		{
			self::$FM = Array();
			self::$FM["Nome"] = new FieldMap("Nome","cadastro","Nome",true,FM_TYPE_VARCHAR,30,null,false);
			self::$FM["E-mail"] = new FieldMap("E-mail","cadastro","E-mail",false,FM_TYPE_VARCHAR,40,null,false);
			self::$FM["Curso"] = new FieldMap("Curso","cadastro","Curso",false,FM_TYPE_VARCHAR,15,null,false);
			self::$FM["Sexo"] = new FieldMap("Sexo","cadastro","Sexo",false,FM_TYPE_VARCHAR,15,null,false);
		}
		return self::$FM;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetKeyMaps()
	{
		if (self::$KM == null)
		{
			self::$KM = Array();
		}
		return self::$KM;
	}

}

?>