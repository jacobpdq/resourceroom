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
	<h3 class="text-center"> <img class="icon icon-left icon-xl" src="<?php echo $template_url ?>/img/icons/icon-browse.svg">Browse Resources:</h3>
    <div class="divider"></div>
	 <form id="" name="" action="<?php echo $site_url ?>/search-result/" method="get">
            <div class="row">
              <div class="form-group col-md-4">
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
  <option class="level-0" value="104">Electives</option>
  <option class="level-0" value="40">English Language Arts</option>
  <option class="level-0" value="139">ESL/ELL</option>
  <option class="level-0" value="97">French Immersion</option>
  <option class="level-0" value="67">Health and Physical Education</option>
  <option class="level-0" value="141">Holidays / Special Occasions</option>
  <option class="level-0" value="79">Languages</option>
  <option class="level-0" value="45">Math</option>
  <option class="level-0" value="140">Resource</option>
  <option class="level-0" value="49">Science</option>
  <option class="level-0" value="58">Social Studies</option>
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
        <p class="text-muted"> <span class="text-blue">* </span>Looking for something more specific? Try our <a href="<?php echo site_url();?>/advanced-search">Advanced Search </a>feature.</p>

    </script>
      <script>$("select").selecter({customClass:"selecter-lg"});</script>
    </div>
	<?php
}
?>