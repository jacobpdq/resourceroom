<?php 
/*
Plugin Name: Browse Resources
*/
add_shortcode('BROWSE_RESOURCE', 'browse_resource_function');
function browse_resource_function()
{
	$site_url = site_url();
	$template_url =  get_template_directory_uri(); 
	?>
	<style>
		.card-white
		{
			min-height:310px;
		}
	</style>
	<h3 style="display:block" class="text-center"> <img class="icon icon-left icon-xl" src="<?php echo $template_url ?>/img/icons/icon-browse.svg">Browse Resources:</h3>
	 <form id="" name="" action="<?php echo $site_url ?>/search-result/" method="get">
            <div class="row">
              <div class="form-group col-md-4">
                <div class="browse-cat-img"></div>
                <label class="sr-only">Provinces:</label>
                <select name="province[]" class="form-control input-lg">
                  <option value="">All Provinces</option>
                  <option>Alberta</option>
                  <option>British Columbia</option>
                  <option>Manitoba</option>
                  <option>Newfoundland/Labrador</option>
                  <option>Northwest Territories</option>
                  <option>Nova Scotia</option>
                  <option>Nunavut</option>
                  <option>Ontario</option>
                  <option>Prince Edward Island</option>
                  <option>Saskatchewan</option>
                  <option>Yukon</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label class="sr-only">Subjects:</label>
                     <select data-required="yes" data-type="multiselect" name="subject[]" id="download_category" class="download_category input-lg form-control"  >
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
              <div class="form-group col-md-2">
                <label class="sr-only">Grade(s)</label>
                <select name="grades[]" class="form-control input-lg">
                  <option selected>All Grades</option>
                  <option>ECE</option>
                  <option>K</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <input type="submit" value="Browse" class="btn btn-lg btn-primary btn-3d btn-block">
              </div>
            </div>
          </form>
	<?php
}
?>