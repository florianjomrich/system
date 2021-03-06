<?php
namespace SYSTEM\DOCU;

class code_docu {
    public static function generate(){
        \SYSTEM\autoload::autoload_all();
        
        $classes = \get_declared_classes();
        foreach($classes as $class){
            $cr = new \ReflectionClass($class);
            self::reflect_class($cr);            
        }
        
        $interfaces = \get_declared_interfaces();
        foreach($interfaces as $interface){
            
        }
        
        $functions = \get_defined_functions();
        foreach($functions as $function){
            
        }
        
        $constants = \get_defined_constants(true);
        //subarray
        
        $variables = \get_defined_vars();
        
        return \SYSTEM\LOG\JsonResult::ok();
    }
    
    private static function reflect_class(\ReflectionClass $class){
        $constants          = $class->getConstants();
        $line_end           = $class->getEndLine();            
        $extension_name     = $class->getExtensionName();
        $filename           = $class->getFileName();
        $interfaces         = $class->getInterfaceNames();
        $methods            = $class->getMethods();
        $modifiers          = $class->getModifiers();
        $name_long          = $class->getName();
        $namespace          = $class->getNamespaceName();
        $properties         = $class->getProperties();
        $name_short         = $class->getShortName();
        $line_start         = $class->getStartLine();
        $properties_static  = $class->getStaticProperties();
        $in_namespace       = $class->inNamespace();
        $is_abstract        = $class->isAbstract();        
        $is_final           = $class->isFinal();
        $is_instantiable    = $class->isInstantiable();
        $is_interace        = $class->isInterface();
        $is_internal        = $class->isInternal();
        $is_iterateable     = $class->isIterateable();
        $is_user_defined    = $class->isUserDefined();                
        
        $con = new \SYSTEM\DB\Connection(\SYSTEM\system::getSystemDBInfo());
        //$con->query('SELECT count(*) FROM `system_code_docu_class` WHERE ')
        $con->prepare(  'insert_class',
                        "INSERT INTO `system_code_docu_class` (`class`, `name`, `namespace`, `dead`, `line_start`, `line_end`, `file`, `abstract`, `final`, `instantiable`, `interface`, `internal`, `iterateable`, `userdefined`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);",
                        array($name_long,$name_short,$namespace,(int)false,$line_start,$line_end,$filename,(int)$is_abstract,(int)$is_final,(int)$is_instantiable,(int)$is_interace,(int)$is_internal,(int)$is_iterateable,(int)$is_user_defined));
        

    }
}