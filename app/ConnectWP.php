<?php


/****added  by Elmarzougui Abdelghafour **************************/

    /**
	* @param string        $filename                 Unique file name.
	* @param string        $ext                      File extension, eg. ".png".
	* @param string        $dir                      Directory path.
	* @param callable|null $unique_filename_callback Callback function that generates the unique file name.
	*/
	add_filter( 'wp_unique_filename', function( $filename, $ext, $dir, $unique_filename_callback ) {
		$FORM_FIELD_FILE_ID = 'cartNational';

		static $file_count = 0; //used to get the current file when multiple uploads in a form

		// first make sure its an upload via elementor forms
		// or you can once again only add this filter hook if you know that this is
		// a desired form as in the above example
		if ( false === strpos( $dir, '/elementor/forms' ) ) {
			return $filename;
		}

		// get the original file name
		$original_filename = $_FILES['form_fields'][$FORM_FIELD_FILE_ID][$file_count]['name'];
		
		// Bump counter for next file
		$file_count++;
		// Return your desired file name (original_filename)
		return trim($_POST['form_fields']['telephone']).'-'.$original_filename;
	}, 10, 4);
	
	
	
	


add_action( 'elementor_pro/forms/form_submitted', function($module ) {
    
   // $module->add_component( 'uploads_handler', new Uploads_Handler() );
   
  // var_dump($_FILES);
  // die();
    
$mydb = new wpdb('haymac_mous','wx66@ofg123456','haymac_mous','localhost');


/************************************************************************/
/***************************************************************************/
/**************************************************************************/
    


$mydb->insert("inscriptions", array(
    
   "nomComplet" =>trim($_POST['form_fields']['nom']),
   "dateNissance" =>trim($_POST['form_fields']['dateNissance']),
   "sexe" =>trim($_POST['form_fields']['sexe']),
   "telephone" =>trim($_POST['form_fields']['telephone']),
   "email" =>trim($_POST['form_fields']['email']),
   "adresse" =>trim($_POST['form_fields']['adresse']),
   "ville" =>trim($_POST['form_fields']['ville']),
   "diplome" =>trim($_POST['form_fields']['diplome']),
   "cnss" =>trim($_POST['form_fields']['cnss']),
   "dateCnss" =>trim($_POST['form_fields']['cnss_date']),
   "cartCNI" =>"http://moustakbaly.haymacproduction.ma/wp-content/uploads/elementor/forms/".trim($_POST['form_fields']['telephone']).'-'.$_FILES['form_fields']['name']['cartNational'],
   "codePer"=>'MOUS-' . rand()

));

echo $mydb->suppress_errors;
echo $mydb->show_errors;

} );
