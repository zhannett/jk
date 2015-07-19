<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 foldmethod=marker: */

/* 
	// {{{ cvs info
	$Id: class-product_1.inc,v 1.1.1.1 2006/01/26 18:58:00 scottd Exp $

	$Log: class-product_1.inc,v $
	Revision 1.1.1.1  2006/01/26 18:58:00  scottd
	
	
	// }}}

	class-files.inc -

	By: Scott B. Davio
	(c)2006 PageMail, Inc. - All Rights reserved.

	// {{{ requirements

	// }}}

	// {{{ notes

	// }}} 

*/

require_once ( "class-table.inc" );
require_once ( "class-xmlgen.inc" );
require_once ( "class-output-filters.inc" );

class files extends table {
    
	// {{{ properties
 	// }}}
    
    /* has no constructor!  table constructor used instead */
    function displayRecords () {
        $screen = getenv ( "screen" );
        if ( preg_match ( '/output-filters/', $screen ) )
            $outFilt = new outputFilter ( $this->records, $this->totalRecords, $this->resultOffset,
                $this->totalPages, $this->page );
        else
            $xmlGen = new xmlGen( $this->records, $this->totalRecords, $this->resultOffset,
                $this->totalPages, $this->page, "html" );
    }
}

$files = new files();

?>