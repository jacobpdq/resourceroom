<?php
/*
Plugin Name:Allsearch result
Description:This plugin is responsible for search results
*/
 add_shortcode('SEARCHRESULT','searchfunction');


function custom_taxonomies_terms_links($id){
  // get post by post id
  $post = get_post( $id );

  // get post type by post
  $post_type = $post->post_type;

  // get post type taxonomies
  $taxonomies = get_object_taxonomies( $post_type, 'download_category' );

  $out = array();
  foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){

    // get the terms related to post
    $terms = get_the_terms( $id, $taxonomy_slug );

    if ( !empty( $terms ) ) {
      foreach ( $terms as $term ) {
 
        $out[] =
          '<a href="http://dev.resourceroom.ca/search-result/?subject%5B%5D='
        .    $term->term_id .'">'
        .    $term->name
        . "</a>";
      }
    }
  }

  return implode(', ', $out );
}

 function searchfunction()
 {
	$get = $_GET;
	if(!empty($_GET['q']))
		$product_n =' AND u.post_title like "%'.$_GET['q'].'%" ';
	else
		$product_n='';
	
	if(is_array($get['province']))
	{
		foreach($get['province'] as $ggkeys=>$ggvals)
		{
			if(!empty($ggvals))
			{
				$key = $ggkeys.'-province:';
				$allget[$key] = trim($ggvals);
			}
		}
	}
	if(is_array($get['grades']))
	{
		foreach($get['grades'] as $ggkeys=>$ggvals)
		{
			if(!empty($ggvals))
			{
				$key = $ggkeys.'-grades';
				$allget[$key] = trim($ggvals);
			}
		}
	}
	if(is_array($get['subject']))
	{
		foreach($get['subject'] as $ggkeys=>$ggvals)
		{
			if(!empty($ggvals))
			{
				$key = $ggkeys.'-subjects(s):';
				$allget[$key] = trim($ggvals);
			}
		}
	}
	if(is_array($get['enduring']))
	{
		foreach($get['enduring'] as $ggkeys=>$ggvals)
		{
			if(!empty($ggvals))
			{
				$key = $ggkeys.'-enduring_understanding:';
				$allget[$key] = trim($ggvals);
			}
		}
	}
	if(is_array($get['resource']))
	{
		foreach($get['resource'] as $ggkeys=>$ggvals)
		{
			if(!empty($ggvals))
			{
				$key = $ggkeys.'-resource_type:';
				$allget[$key] = trim($ggvals);
			}
		}
	}
	if(is_array($get['technology']))
	{
		foreach($get['technology'] as $ggkeys=>$ggvals)
		{
			if(!empty($ggvals))
			{
				$key = $ggkeys.'-technology_required:';
				$allget[$key] = trim($ggvals);
			}
		}
	}

	if(!empty($allget)) 
	{
		$em = 0;
		foreach($allget as $allgetkey =>$allgetval)
		{
			if($em!=0)
				$and='and';
			else
				$and = '';			
			$explodeallget = explode('-',$allgetkey);
			$leftcondition[]= 'LEFT JOIN wp_postmeta  um'.$em.' ON u.ID = um'.$em.'.post_id';
			$rightcondition[] = $and.' um'.$em.'.meta_key = "'.$explodeallget[1].'" and um'.$em.'.meta_value like "%'.$allgetval.'%"';
		$em++;
		}
		$contleft = count($leftcondition);
		$newcount = $contleft;
		if(!empty($_GET['price_range']))
		{
			$leftj = ' LEFT JOIN wp_postmeta  um'.$newcount.' ON u.ID = um'.$newcount.'.post_id';
			if($_GET['price_range']=='Free')
				$where = ' and um'.$newcount.'.meta_key = "edd_price" and um'.$newcount.'.meta_value <=0';
			elseif($_GET['price_range']=='Paid')
				$where = ' and um'.$newcount.'.meta_key = "edd_price" and um'.$newcount.'.meta_value >0';
			elseif($_GET['price_range']=='less5')
				$where = ' and um'.$newcount.'.meta_key = "edd_price" and um'.$newcount.'.meta_value <5';
			else
				$where ='';
		}
		else
			$leftj ='';
		$leftimp = implode(' ',$leftcondition);
		$rightimp = implode(' ',$rightcondition);
		$finalsql = 'SELECT * FROM wp_posts u '.$leftimp.$leftj.' WHERE '.$rightimp.$where.$product_n.' AND u.post_status = "publish" and u.post_type = "download" GROUP BY u.ID';
	}
	else
	{
		if(!empty($_GET['price_range']))
		{
			if($_GET['price_range']=='Free')
			{
				$finalsql = 'SELECT * FROM wp_posts u  LEFT JOIN wp_postmeta  um0 ON u.ID = um0.post_id where um0.meta_key ="edd_price" and um0.meta_value <=0'.$product_n.' ';
			}
			elseif($_GET['price_range']=='Paid')
			{
				$finalsql =  'SELECT * FROM wp_posts u  LEFT JOIN wp_postmeta  um0 ON u.ID = um0.post_id where um0.meta_key ="edd_price" and um0.meta_value > 0 '.$product_n.'';
			}
			elseif($_GET['price_range']=='less5')
			{
				$finalsql =  'SELECT * FROM wp_posts u  LEFT JOIN wp_postmeta  um0 ON u.ID = um0.post_id where um0.meta_key ="edd_price" and um0.meta_value <5 '.$product_n.'';
			}
			else
				$finalsql ='';
		}
	}
 $result='';
 
 $result .='
 
  <div class="container page-content">';
        if($_GET["q"]) {
		 $result .='<h3><img src="'.get_template_directory_uri().'/img/icons/icon-search.svg" class="icon icon-left icon-lg">Searching for "'.$_GET["q"].'":</h3>';
		}
		
        $result .= '<div class="divider"></div>
 <div class="row">
          <div class="col-md-3">
            <div class="card-white">
              <div id="search-filters">
                <h4 class="text-blue">Search Filters</h4>
                <div class="divider"></div>';
				
                $result .='<form method="get">';
				 $form_id = EDD_FES()->helper->get_option( 'fes-submission-form' );
				 $fields  = get_post_meta( $form_id, 'fes-form', true ); 
				 $id =get_the_ID();
				 						
                  $result .='<div class="form-group">


<label>Subjects:</label>
                    <div class="selecter-container">
                      <fieldset class="fes-el download_category"> 
    <script>
      /*  $(document).ready(function(){
      
        
           $("input").iCheck({
        checkboxClass: "icheckbox",
        radioClass: "iradio", 
        }); 
          
        
      });  */
    </script>
        
        <div class="fes-fields">
            <select data-required="yes" data-type="multiselect" name="subject[]" id="download_category" class="download_category" multiple="multiple" >
  <option class="level-0" value="73">Art</option>
  <option class="level-1" value="74">&nbsp;&nbsp;&nbsp;Art</option>
  <option class="level-1" value="75">&nbsp;&nbsp;&nbsp;Dance</option>
  <option class="level-1" value="76">&nbsp;&nbsp;&nbsp;Drama</option>
  <option class="level-1" value="78">&nbsp;&nbsp;&nbsp;Fine Arts</option>
  <option class="level-1" value="77">&nbsp;&nbsp;&nbsp;Music</option>
  <option class="level-0" value="104">Electives</option>
  <option class="level-1" value="105">&nbsp;&nbsp;&nbsp;Anthropology</option>
  <option class="level-1" value="106">&nbsp;&nbsp;&nbsp;Business</option>
  <option class="level-1" value="107">&nbsp;&nbsp;&nbsp;Career</option>
  <option class="level-1" value="108">&nbsp;&nbsp;&nbsp;Carpentry</option>
  <option class="level-1" value="109">&nbsp;&nbsp;&nbsp;Civic Studies</option>
  <option class="level-1" value="110">&nbsp;&nbsp;&nbsp;Construction</option>
  <option class="level-1" value="111">&nbsp;&nbsp;&nbsp;Design</option>
  <option class="level-1" value="112">&nbsp;&nbsp;&nbsp;Electronics</option>
  <option class="level-1" value="114">&nbsp;&nbsp;&nbsp;Entrepreneurship</option>
  <option class="level-1" value="113">&nbsp;&nbsp;&nbsp;Environment and Sustainability</option>
  <option class="level-1" value="115">&nbsp;&nbsp;&nbsp;Ethics</option>
  <option class="level-1" value="118">&nbsp;&nbsp;&nbsp;Fashion</option>
  <option class="level-1" value="119">&nbsp;&nbsp;&nbsp;Film</option>
  <option class="level-1" value="120">&nbsp;&nbsp;&nbsp;Financial</option>
  <option class="level-1" value="121">&nbsp;&nbsp;&nbsp;First Nations</option>
  <option class="level-1" value="122">&nbsp;&nbsp;&nbsp;Foods</option>
  <option class="level-1" value="116">&nbsp;&nbsp;&nbsp;Home Economics</option>
  <option class="level-1" value="117">&nbsp;&nbsp;&nbsp;Horticulture</option>
  <option class="level-1" value="127">&nbsp;&nbsp;&nbsp;Information &amp; Communication Technology</option>
  <option class="level-1" value="128">&nbsp;&nbsp;&nbsp;Law</option>
  <option class="level-1" value="129">&nbsp;&nbsp;&nbsp;Leadership</option>
  <option class="level-1" value="123">&nbsp;&nbsp;&nbsp;Management</option>
  <option class="level-1" value="130">&nbsp;&nbsp;&nbsp;Marketing</option>
  <option class="level-1" value="131">&nbsp;&nbsp;&nbsp;Mechanics</option>
  <option class="level-1" value="124">&nbsp;&nbsp;&nbsp;Media</option>
  <option class="level-1" value="132">&nbsp;&nbsp;&nbsp;Outdoor Education</option>
  <option class="level-1" value="125">&nbsp;&nbsp;&nbsp;Philosophy</option>
  <option class="level-1" value="126">&nbsp;&nbsp;&nbsp;Psychology</option>
  <option class="level-1" value="133">&nbsp;&nbsp;&nbsp;Social Justice</option>
  <option class="level-1" value="134">&nbsp;&nbsp;&nbsp;Sociology</option>
  <option class="level-1" value="135">&nbsp;&nbsp;&nbsp;Technology</option>
  <option class="level-1" value="136">&nbsp;&nbsp;&nbsp;Theater</option>
  <option class="level-1" value="137">&nbsp;&nbsp;&nbsp;Tourism</option>
  <option class="level-0" value="40">English Language Arts</option>
  <option class="level-1" value="41">&nbsp;&nbsp;&nbsp;English</option>
  <option class="level-1" value="43">&nbsp;&nbsp;&nbsp;ESL/ELL</option>
  <option class="level-1" value="42">&nbsp;&nbsp;&nbsp;Language Arts</option>
  <option class="level-1" value="44">&nbsp;&nbsp;&nbsp;Writing</option>
  <option class="level-0" value="139">ESL/ELL</option>
  <option class="level-0" value="97">French Immersion</option>
  <option class="level-1" value="99">&nbsp;&nbsp;&nbsp;FR Health &amp; PE</option>
  <option class="level-1" value="98">&nbsp;&nbsp;&nbsp;FR Language Arts</option>
  <option class="level-1" value="100">&nbsp;&nbsp;&nbsp;FR Math</option>
  <option class="level-1" value="101">&nbsp;&nbsp;&nbsp;FR Science</option>
  <option class="level-1" value="102">&nbsp;&nbsp;&nbsp;FR Social Studies</option>
  <option class="level-1" value="103">&nbsp;&nbsp;&nbsp;FSL</option>
  <option class="level-0" value="67">Health and Physical Education</option>
  <option class="level-1" value="70">&nbsp;&nbsp;&nbsp;Career and Life Management</option>
  <option class="level-1" value="71">&nbsp;&nbsp;&nbsp;Daily Physical Activity</option>
  <option class="level-1" value="68">&nbsp;&nbsp;&nbsp;Health and Life Skills</option>
  <option class="level-1" value="72">&nbsp;&nbsp;&nbsp;Outdoor Education</option>
  <option class="level-1" value="69">&nbsp;&nbsp;&nbsp;Physical Education</option>
  <option class="level-0" value="141">Holidays / Special Occasions</option>
  <option class="level-0" value="79">Languages</option>
  <option class="level-1" value="84">&nbsp;&nbsp;&nbsp;American Sign Language</option>
  <option class="level-1" value="85">&nbsp;&nbsp;&nbsp;Arabic</option>
  <option class="level-1" value="81">&nbsp;&nbsp;&nbsp;Cree</option>
  <option class="level-1" value="80">&nbsp;&nbsp;&nbsp;French</option>
  <option class="level-1" value="86">&nbsp;&nbsp;&nbsp;German</option>
  <option class="level-1" value="87">&nbsp;&nbsp;&nbsp;Hebrew</option>
  <option class="level-1" value="82">&nbsp;&nbsp;&nbsp;Inuktitut</option>
  <option class="level-1" value="88">&nbsp;&nbsp;&nbsp;Italian</option>
  <option class="level-1" value="89">&nbsp;&nbsp;&nbsp;Japanese</option>
  <option class="level-1" value="90">&nbsp;&nbsp;&nbsp;Korean</option>
  <option class="level-1" value="91">&nbsp;&nbsp;&nbsp;Latin</option>
  <option class="level-1" value="92">&nbsp;&nbsp;&nbsp;Mandarin</option>
  <option class="level-1" value="83">&nbsp;&nbsp;&nbsp;Ojibwe</option>
  <option class="level-1" value="96">&nbsp;&nbsp;&nbsp;Other</option>
  <option class="level-1" value="93">&nbsp;&nbsp;&nbsp;Portuguese</option>
  <option class="level-1" value="94">&nbsp;&nbsp;&nbsp;Punjabi</option>
  <option class="level-1" value="95">&nbsp;&nbsp;&nbsp;Spanish</option>
  <option class="level-0" value="45">Math</option>
  <option class="level-1" value="47">&nbsp;&nbsp;&nbsp;Calculus</option>
  <option class="level-1" value="48">&nbsp;&nbsp;&nbsp;Economics</option>
  <option class="level-1" value="46">&nbsp;&nbsp;&nbsp;Math</option>
  <option class="level-0" value="140">Resource</option>
  <option class="level-0" value="49">Science</option>
  <option class="level-1" value="55">&nbsp;&nbsp;&nbsp;Applied</option>
  <option class="level-1" value="51">&nbsp;&nbsp;&nbsp;Biology</option>
  <option class="level-1" value="52">&nbsp;&nbsp;&nbsp;Chemistry</option>
  <option class="level-1" value="57">&nbsp;&nbsp;&nbsp;Computer Science</option>
  <option class="level-1" value="56">&nbsp;&nbsp;&nbsp;Earth/Environment</option>
  <option class="level-1" value="54">&nbsp;&nbsp;&nbsp;Physics</option>
  <option class="level-1" value="50">&nbsp;&nbsp;&nbsp;Science</option>
  <option class="level-0" value="58">Social Studies</option>
  <option class="level-1" value="59">&nbsp;&nbsp;&nbsp;Aboriginal Studies</option>
  <option class="level-1" value="62">&nbsp;&nbsp;&nbsp;Citizenship</option>
  <option class="level-1" value="63">&nbsp;&nbsp;&nbsp;Geography</option>
  <option class="level-1" value="64">&nbsp;&nbsp;&nbsp;History</option>
  <option class="level-1" value="65">&nbsp;&nbsp;&nbsp;Religion</option>
  <option class="level-1" value="66">&nbsp;&nbsp;&nbsp;Social Justice</option>
  <option class="level-1" value="61">&nbsp;&nbsp;&nbsp;Social Studies</option>
  <option class="level-0" value="138">Special Education</option>
</select>
        </div>

        </fieldset>
                    </div>
                  </div>






                   
<script src="http://dev.resourceroom.ca/wp-content/themes/marketify/js/jquery.fs.selecter.min.js"></script>

                    ';






 	$result .= '<script> jQuery(document).ready(function($){';
		
		if($_GET['subject']) {
	 	foreach($_GET['subject'] as $subjectID) {

 		$result .= '$("option[value='.$subjectID.']").attr("selected","selected");';

		}
	}

	$result .= ' $("#download_category").selecter(); });</script>';
							

				 
			
                      
                    $result .='
                  <div class="divider"></div>
                  <div class="form-group">
                    <label>Grades:</label>
                    <div class="row">
                      <div class="col-xs-4">
                        <div class="checkbox-list">';

						foreach($fields[2]['options'] as $key =>$value)
						{
							$gval = trim($value);
							if($_GET['q']==$gval)
								$qsel = 'checked="checked"';
							else
								$qsel='';
						 if(isset($_GET['grades']))
						 {
							
							
							if(in_array($gval,$_GET['grades']))
								$selected_grades = 'checked="checked"';
							else
								$selected_grades = '';
						 }
							
					        $result .='<div class="checkbox">
                            <input type="checkbox" '.$qsel.' value="'.$gval.'" '.$selected_grades.' name="grades[]">
                            <label>'.$gval.'</label></div>
                          ';
						 }
                          
                        $result .='</div></div>
                      </div>
                     </div>
                  <div class="divider"></div>
                  <div class="form-group">
                    <label>Province:</label>
                    <select class="form-control" name="province[]">
                      <option value="">All Provinces</option>';
					  foreach($fields[3]['options'] as $key =>$value)
				     {
						if($_GET['q']==$value)
								$qsel = 'selected="selected"';
							else
								$qsel='';
						 if(isset($_GET['province']))
						 {
												
							if(in_array($value,$_GET['province']))
								$selected_province = 'selected="selected"';
							else
								$selected_province = '';
						 }
                      $result .='<option '.$qsel.' '.$selected_province.' value="'.$value.'" name="province:">'.$value.'</option>';
					  }

                    $result .='</select>
                  </div>
                  <div class="divider"></div>
                  <div class="form-group">
                    <label>Enduring Understanding:</label>
                    <div class="checkbox-list">';
					foreach($fields[8]['options'] as $key =>$value)
				     {
					 if($_GET['q']==$value)
								$qsel = 'checked="checked"';
							else
								$qsel='';
						 if(isset($_GET['enduring']))
						 {
							
							
							if(in_array($value,$_GET['enduring']))
								$selected_endure = 'checked="checked"';
							else
								$selected_endure = '';
						 }
					    $result .='<div class="checkbox">
                        <input type="checkbox" '.$qsel.' value="'.$value.'" '.$selected_endure.' name="enduring[]">
                        <label>'.$value.'</label>
                      </div>';
					  }
                      
                    $result .='</div>
                  </div>
                  <div style="display:none" class="divider"></div>
                  <div style="display: none" class="form-group">
                    <label>Language:</label>
                    <select class="form-control" name="language[]">
					<option value="">Select Language</option>';
						foreach($fields[8]['options'] as $key =>$value)
						{
						if($_GET['q']==$value)
								$qsel = 'selected="selected"';
							else
								$qsel='';
						 if(isset($_GET['language']))
						 {
														
							if(in_array($value,$_GET['language']))
								$selected_language = 'selected="selected"';
							else
								$selected_language= '';
						 }
							
							$result .='<option '.$qsel.' value="'.$value.'" '.$selected_language.'>'.$value.'</option>';
                      
						}
                     
                   $result .='</select>
                  </div>
                  <div class="divider"></div>
                  <div class="form-group">
                    <label>Price Range:</label>
                    <select class="form-control" name="price_range">
					<option value="">Any</option>';

					if($_GET['price_range'] == 'Paid') {
						$result .= "<option value='Paid' selected='selected'>Paid</option>";
					} else {
						$result .= "<option value='Paid'>Paid</option>";
					}

					if($_GET['price_range'] == 'less5') {
						$result .= "<option value='less5' selected='selected'>Paid</option>";
					} else {
						$result .= "<option value='less5'>less5</option>";
					}
					

                   $result .='</select>
                  </div>
                  <div class="divider"></div>
                 
				  <input type="hidden" name="q" value="'.$_GET["q"].'">
				   <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" name="r" value="Filter Results">
                  </div>
                </form>';
				
				
				
              $result .='</div>
            </div>
          </div>';
		  
		 
		  
if(isset($_GET['q'][0]))
		  {
            global $wpdb;
		  	$a='true';
		  $query=$_GET["q"];
		 
		    $sql=$wpdb->get_results("select * from wp_posts where post_title like '%".$query."%' and post_type='download' and post_status='publish'"); 
			
			$countval =count($sql);
		    if($countval == 0)
			{
			
				$metav=$wpdb->get_results("select * from wp_postmeta where meta_value like '%".$query."%'") ;
							
				   foreach($metav as $meta)
				   {
					  $post_id[] = $meta->post_id;
					 
				   }
				   if(!empty($post_id))
				   
					   $uniquepost = array_unique($post_id);
					   if(!empty($uniquepost)){
					   $impval = implode(',',$uniquepost);
						$sql =$wpdb->get_results("SELECT * FROM wp_posts WHERE ID IN (".$impval.") and post_type='download' and post_status='publish'");
					
						}
						else
						{
						if($a='false')
						 $a ="Search Term not found";
						}
						
						
					
					}
        }
	else
	{
			global $wpdb;
		 $sql=$wpdb->get_results("select * from wp_posts where post_type='download' and post_status='publish'"); 
		 
	}
					/*
					
					Purpose:Filter product on search result page
					*/
					  if(isset($_GET["r"]))
				        {
						
						  	global $wpdb;
							$a='true';
							$htmlQuery					 = '';
							$SubjectCond				 = '';
							$gradeCond					 = '';
							$enduringCond				 = '';
							$provinceCond				 = '';
							$languageCond				 ='';
							$priceCond					 ='';	
							if(!empty($_GET['subject']))
							 $subjects = implode(', ',$_GET['subject']);
							if(!empty($_GET['grades']))
							 $grades = implode(', ',$_GET['grades']);
							if(!empty($_GET['enduring']))
							 $enduring = implode(', ',$_GET['enduring']);
							
							
							if(!empty($enduring))
							{
								$enduringCond				= '';
								foreach($_GET['enduring'] as $endureKey=>$endure){
									if($endureKey==0)
										$or= '';
									else
										$or	=' || ';
									//$enduringCond			.=" $or meta_value like '%".$endure."%' ";
									 $enduringCond	.=" $or FIND_IN_SET('$endure',meta_value)";
								}
									$enduringCond 			.='';
									
									$endureSql 	= "SELECT * FROM wp_postmeta WHERE meta_key = 'enduring_understanding:' && ({$enduringCond})"; 
								$endureRes	= $wpdb->get_results($endureSql);
								
								if(!empty($endureRes)){
									foreach($endureRes as $endureResData){
										$filterval[$endureResData->post_id]= $endureResData;
									}
								}
							}
							if(!empty($_GET['grades']))
							{
								$gradeCond = '';
								foreach($_GET['grades'] as $gradeKey=>$grade){
									if($gradeKey==0)
										$or= '';
									else
										$or	=' || ';
									$gradeCond	.=" $or meta_value like '%".$grade."%'  ";
								    // $gradeCond	.=" $or FIND_IN_SET('$grades',meta_value)";
									
								}
								$gradeCond .='';
							   $gradeSql 	= "SELECT * FROM wp_postmeta WHERE meta_key ='grades' && ({$gradeCond})"; 
								$gradeRes	= $wpdb->get_results($gradeSql);
								
								if(!empty($gradeRes)){
									foreach($gradeRes as $gradeResData){
										$filterval[$gradeResData->post_id]= $gradeResData;
										
									}
								}
							}
							if(isset($_GET['subject'][0]) && !empty($_GET['subject'][0]))
							{
						
								$SubjectCond		= '';
								foreach($_GET['subject'] as $SubKey=> $subject){
									if($SubKey==0)
										$or= '';
									else
										$or	=' || ';
									$SubjectCond	.=" $or meta_value like '%".$subject."%'  ";
								}								
								$subjectSql 	= "SELECT * FROM wp_postmeta WHERE meta_key = 'subjects(s):' && ({$SubjectCond})"; 
								$subjectRes	= $wpdb->get_results($subjectSql);
								if(!empty($subjectRes)){
									foreach($subjectRes as $subjectResData){
										$filterval[$subjectResData->post_id]= $subjectResData;
									}
								}
							} 
							
							
							if(isset($_GET['province'][0]) && !empty($_GET['province'][0]))
							{	
								$provinceCond		= '';
								foreach($_GET['province'] as $proKey=> $province){
									if($proKey==0)
										$or= '';
									else
										$or	=' || ';
									$provinceCond	.=" $or meta_value like '%".$province."%'";
								}
								$provinceSql 	= "SELECT * FROM wp_postmeta WHERE meta_key ='province:' && ({$provinceCond})"; 
								$provinceRes	= $wpdb->get_results($provinceSql);
								
								if(!empty($provinceRes)){
									foreach($provinceRes as $provinceData){
										$filterval[$provinceData->post_id]= $provinceData;

									}
									
								}
								
							}
							
							if(isset($_GET['language'][0]) &&  !empty($_GET['language'][0]))
							{
								$languageCond		= '';
								foreach($_GET['language'] as $langKey=> $language){
									if($langKey==0)
										$or= '';
									else
										$or	=' || ';
									$languageCond	.=" $or meta_value like '%".$language."%'";
								}
								$languageSql 	= "SELECT * FROM wp_postmeta WHERE meta_key ='language:' && ({$languageCond})"; 
								$languageRes	= $wpdb->get_results($languageSql);
								if(!empty($languageRes)){
									foreach($languageRes as $languageData){
										$filterval[$languageData->post_id]= $languageData;

									}
								}
							}
							
							if(isset($_GET['price_range'][0]) &&  !empty($_GET['price_range'][0]))
							{
							$priceCond='';
							$or = '';
							$and = '&&';
							if($_GET['price_range']=='Free') 
					      	$priceCond	.=" $or meta_value <=0";
							
							
							 
							 if($_GET['price_range']=='Paid') 
							 $priceCond	.=" $or meta_value > 0";
							 
							 $priceSql 	= "SELECT * FROM wp_postmeta WHERE meta_key ='edd_price' && {$priceCond}";
							
							
				
							$priceRes	= $wpdb->get_results($priceSql);
					
								if(!empty($priceRes)){
									foreach($priceRes as $priceData){
										$filterval[$priceData->post_id]= $priceData;

									}
								}
							}
							if(!empty($filterval))
							{
							 foreach($filterval as $meta)
								{
									$post_id[] = $meta->post_id;
								
								}  
							}
							
									
						   if(!empty($post_id))
							{
						 
							$resultimpval = implode(',',$post_id);
							//echo "SELECT * FROM wp_posts WHERE ID IN (".$resultimpval.") and post_type='download' and post_status='publish'";
							$sql = $wpdb->get_results($finalsql);
							//$sql =$wpdb->get_results("SELECT * FROM wp_posts WHERE ID IN (".$resultimpval.") and post_type='download' and post_status='publish'");
					
							}
											
					    }
						
						
	  
	  if ($sql){
	  
	  $form_id = EDD_FES()->helper->get_option( 'fes-submission-form' );
				 $fields  = get_post_meta( $form_id, 'fes-form', true ); 
		$result.='<div id="search-results" class="col-md-9">';

		$cats = [];

		if($_GET['subject']) {

			foreach($_GET['subject'] as $subject) {
				array_push($cats, intval($subject));
			}
		}

		foreach($sql as $val){


			// if(has_term($cats, 'download_category', $val->ID)) {echo 'true';}

			if(isset($_GET['subject']) && !has_term($cats, 'download_category', $val->ID) )  { continue; }

			if(isset($_GET['grades']) && !has_term($cats, 'download_category', $val->ID) )  { continue; }

			$fesval = get_post_meta( $val->ID, $fields[ 'name' ], true );

			$thegrades  = $fesval['grades'];

			if(isset($_GET['grades'])) {
			$result .= array_intersect($thegrades, $_GET['grades']);



		}

				$value = get_post_meta( $val->ID, $fields[ 'name' ], true );
				$userdata =  get_userdata(  $val->post_author ); 
				$name = $userdata->data->user_login;
				$site_url = site_url();
				$resource_thumbnail_image_ser = $value['resource_thumbnail_image:'][0];
				$resource_thumbnail_image_unser = unserialize($resource_thumbnail_image_ser);
				$resource_thumbnail_image_data = get_post_meta( $resource_thumbnail_image_unser[0],'_wp_attachment_metadata', true );
	if(isset( $resource_thumbnail_image_data['file']))
	{
		$resource_image = $resource_thumbnail_image_data['file'];
		$img = '<img src="'.$site_url.'/thumb.php?file=wp-content/uploads/'.$resource_image .'">';
	}
			$resource_edd_variable_prices_ser = $value['edd_variable_prices'][0];
					$resource_edd_variable_prices_unser = unserialize($resource_edd_variable_prices_ser);
					 $amount = $resource_edd_variable_prices_unser[0]['amount'];
					if(empty($amount))
						$price = 'Free';
					else
					{
						$price = $shortprice =  edd_price(  $val->ID ,false);
					}
				 
			  $unser =unserialize($val->meta_value);
	  
				 $post_id=$val->ID;
            $result .='  <div class="item-horizontal"> 
              <div class="row">
                <div class="col-md-3">';
				
				
				//if ( has_post_thumbnail($val->ID) ) {
					$result .='<div class="item-thumbnail"><a href="'. get_permalink($val->ID).'">'.$img.'</a></div>';
				  //}
					 $result .='<div class="item-price"><span>'.$price.'</span></div>';
					 $rating = Rating($val->ID);

					$result .='</div>
					
					
					<div class="col-md-9 card-text">
					  <div id="card-top" class="row">
						<div class="col-md-9"><a href="'.get_permalink($val->ID).'" class="item-title">'.$val->post_title.'</a>';
						
						  $result .='<div class="item-author"> <a class="img-circle img-circle-xs">'.getUserimage($val->post_author,'50','50').'</a><span>by </span><a href="'.site_url().'/user-profile?user_id='.$val->post_author.'">'.$name.'</a></div>
						</div>
						<div class="col-md-3 text-right">
						<div class="rating-sm clearfix"><div class="StarRating '.$rating.'"></div></div>
						</div>
					  </div>
                  <div class="divider"></div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="item-description">
                        <p>'.substr(get_post_field('post_content', $post_id),0,200).'</p>
                      </div>
                    </div>';
						$sub='';
						$prov='';
						$grade='';
						$resource='';
						
						$fesval = get_post_meta( $post_id, $fields[ 'name' ], true );
						 
				  		$subject =$fesval['subjects(s):'];
						
						$subval =explode(', ',$subject[0]);
							
						foreach($subval as $subresult){
							$sub[] = '<a href="'.$site_url.'/search-result/?q='.$subresult.'">'.$subresult.'</a> ';
						} 
						$subim = implode($sub,', '); 
						
						$province =$fesval['province:'];
						
						$proval =explode('| ',$province[0]);
						
						foreach($proval as $proresult){
							$prov[] = '<a href="'.$site_url.'/search-result/?province%5B%5D='.$proresult.'">'.$proresult.'</a> ';
						} 
						
						$provim = implode($prov,', '); 
						
						
				        $grades =$fesval['grades'];
						
	
						
						$gradeval =explode('| ',$grades[0]);
					
						
						foreach($gradeval as $gradresult){
							$grade[] = '<a href="'.$site_url.'/search-result/?grades%5B%5D='.$gradresult.'">'.$gradresult.'</a> ';
						} 
						$gradeim = implode($grade,', ');

						$resource_type =$fesval['resource_type:'];
						
							$resourceval =explode('| ',$resource_type[0]);
						
						foreach($resourceval as $resourceresult){
							$resource[] = '<a href="'.$site_url.'/search-result/?resource%5B%5D='.$resourceresult.'">'.$resourceresult.'</a> ';
						} 
						$resourceim = implode($resource,' , ');
				
                    $result .='<div class="col-md-6">
                      <div class="item-info">
                        <dl class="info-list-alt row">
                          <dt class="col-md-3">Subject(s):&nbsp;</dt><dd class="col-md-9">';

                    $result .= custom_taxonomies_terms_links($val->ID);      

                    $result .='
                          </dd>
                          <dt class="col-md-3">Type: </dt>
                          <dd class="col-md-9"><a href="">'.$resourceim.'</a></dd>
                          <dt class="col-md-3">Province: </dt>
                          <dd class="col-md-9"><a href="">'.$provim.'</a></dd>
                          <dt class="col-md-3">Grade(s): </dt>
                          <dd class="col-md-9"><a href="">'.$gradeim.'</a></dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
				
				
              </div>
			 </div>';
			}
			$result .='</div>';
			}
			
          
		  else
			{
			$result .='<div class="col-md-9 "><div class="item-horizontal">';
			if($a="true")
			{
			$a="Search Result Not Found";
              $result .=''.$a.'</div></div>';
			}}
         
		
		$result .='<script>
$(document).ready(function(){

  $("input").iCheck({
    checkboxClass: "icheckbox",
    radioClass: "iradio",
  });


});
</script>
</div>
</div>
 
 ';
 return $result;
 }
 
?>
