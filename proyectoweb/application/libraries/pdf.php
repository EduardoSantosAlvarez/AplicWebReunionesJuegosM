? <Php  si  (  !  definido ( 'BASEPATH' ) )  exit ( 'No hay acceso directo al script permitido' ) ;  
require_once ( APPPATH . "/ third_party / pdf-php / class.ezpdf.php" ) ; 
 
class Pdf extends Cezpdf {  
    public  function __construct ( $params )  {  
    	if  ( is_array ( $params ) )  { 
			parent :: __construct ( $params [ 'paper' ] , $params [ 'orientation' ] ,  $params [ 'type' ] ,  $params [ 'options' ] ) ;  
    	}  else  { 
			parent :: __construct ( ) ; 
    	}
 
    }  
}