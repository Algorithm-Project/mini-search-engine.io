<?php
$file_handle = fopen( " abc.txt ", "r" ); 
while ( !feof ( $file_handle ) ) { 
	$line = fgets( $file_handle ); 
	if( preg_match( '/^\d+/',$line ) ) {
		$tmp = explode( "\t",$line ); 
		$rank = trim( $tmp[0] ); 
		$url = trim( $tmp[1] ); 
		if( $url != 'Hidden profile' ) {
			echo $ 
		} 
	} 
} 
fclose( $file_handle );
?>