<?
$pagina = isset( $_GET['go'] ) ? $_GET['go'] : '';
if($pagina=='')
  include ('adm..html');
elseif(file_exists($pagina.'.html')){
  include ($pagina.'.html');
}		
elseif(file_exists($pagina.'.php')){
  include ($pagina.'.php');
}
else 
  include ('principal.html');
?>