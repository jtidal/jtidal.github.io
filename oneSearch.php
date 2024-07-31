<?php

 $searchSelect = $_POST["selectStyle"];
 $theQuery = $_POST["queryTemp"];

 $redirect = 'https://cuny-ny.primo.exlibrisgroup.com/discovery/search?vid=01CUNY_NY:CUNY_NY&search_scope=IZ_CI_AW';

switch ($searchSelect){
        case "Everything":

                $redirect = $redirect.'&tab=Everything&mode=basic&highlight=true&displayMode=full&bulkSize=10&dum=true&displayField=all&pcAvailabilityMode=false&query=any,contains,'.$theQuery;
                header('Location:'.$redirect);
                break;

        case "Articles":

                $redirect = $redirect.'&tab=Everything&mode=basic&displayMode=full&bulkSize=10&dum=true&displayField=all&facet=rtype,include,articles&query=any,contains,'.$theQuery;
                header('Location:'.$redirect);
                break;

        case "Books (Print + eBooks)":

                $redirect = $redirect.'&tab=Everything&mode=basic&highlight=true&displayMode=full&bulkSize=10&dum=true&displayField=all&facet=rtype,include,books&pcAvailabiltyMode=false&query=any,contains,'.$theQuery;
                header('Location:'.$redirect);
                break;

        case "Books (Print)":

                $redirect = $redirect.'&mode=basic&highlight=true&displayMode=full&bulkSize=10&dum=true&displayField=all&facet=rtype,include,books&face=tlevel,include,available_p&pcAvailabilityMode=false&query=any,contains,'.$theQuery;
		header('Location:'.$redirect);
                break;

        case "eBooks":

                $redirect = $redirect.'&mode=basic&highlight=true&displayMode=full&bulkSize=10&dum=true&displayField=all&facet=rtype,include,books&facet=tlevel,include,online_resources&pcAvailabilityMode=false&query=any,contains,'.$theQuery;
                header('Location:'.$redirect);
                break;

        case "Media":

                $redirect = $redirect.'&mode=basic&highlight=true&displayMode=full&bulkSize=10&dum=true&displayField=all&facet=rtype,include,videos&pcAvailabilityMode&query=any,contains,'.$theQuery;
                header('Location:'.$redirect);
                break;

        case "Journals":

        		$redirect = https://cuny-ny.primo.exlibrisgroup.com/discovery/jsearch?query=any,contains,'.$theQuery.'&tab=jsearch_slot&vid=01CUNY_NY:CUNY_NY&offset=0&journals=any,'.$theQuery;
        		header('Location:'.$redirect);
        		break;
}
?>

