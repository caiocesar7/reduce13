<?php
  
  function reduce13 ($name) {

  	//verificação do tamanho da string;
  	if(strlen($name) >=13){

  		//reduzindo para 13 caracteres
  		$name = substr($name, 0, 13); 

  	}

    return $name;
  }


