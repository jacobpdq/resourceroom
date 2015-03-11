<?php
/*
Plugin Name:advance search
Description:This Plugin is responsible for advanced searching
*/
add_shortcode('ADVSEARCH','advancesearch');

function advancesearch()
{
$result='';
$result .='

    <div id="wrap">
     <div class="container page-content">
        <div class="card-white double-padding">
          <form id="" name="" action="'.site_url().'/search-result" method="" class="advanced-search">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="form-group text-center">
                  <label>
                    <h3> <img src="'.get_template_directory_uri().'/img/icons/icon-search.svg" class="icon icon-left icon-lg">Looking for something?</h3>
                  </label>
                  <p class="text-center text-muted">Search a specific topic, subject, or curriculum expectation:</p>
                  <input name="q" type="text" placeholder="ex. Multiplication Exercises" class="input-lg form-control">
                </div>
                <div class="divider divider-xl"></div>
                <div class="row">
                  <div class="form-group col-md-4">
                    <label>Provinces:</label>
                    <div class="selecter-container">
                      <select name="province[]" multiple class="selecter_multiple">
                        <option value="Alberta">Alberta</option>
                        <option value="British Columbia">British Columbia</option>
                        <option value="Manitoba">Manitoba</option>
                        <option value="Newfoundland/Labrador">Newfoundland/Labrador</option>
                        <option value="Northwest Territories">Northwest Territories</option>
                        <option value="Nova Scotia">Nova Scotia</option>
                        <option value="Nunavut">Nunavut</option>
                        <option value="Ontario">Ontario</option>
                        <option value="Prince Edward Island">Prince Edward Island</option>
                        <option value="Saskatchewan">Saskatchewan</option>
                        <option value="Yukon">Yukon</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
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
                  <div class="form-group col-md-2">
                    <label>Grade(s)</label>
                    <div class="selecter-container">
                      <select name="grades[]" multiple class="selecter_multiple">
                        <option value="ECE">ECE</option>
                        <option value="K">K</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Enduring Understanding:</label>
                  <div class="checkbox-list-container">
                      <div class="checkbox">
                        <input value="Social Justice" name="enduring[]" type="checkbox">
                        <label>Social Justice</label>
                      </div>
                      <div class="checkbox">
                        <input value="Diversity" name="enduring[]"  type="checkbox">
                        <label>Diversity</label>
                      </div>
                      <div class="checkbox">
                        <input value="Citizenship" name="enduring[]"  type="checkbox">
                        <label>Citizenship</label>
                      </div>
                      <div class="checkbox">
                        <input value="Sustainability" name="enduring[]"  type="checkbox">
                        <label>Sustainability</label>
                      </div>
                      <div class="checkbox">
                        <input value="Indigenous Knowledge" name="enduring[]"  type="checkbox">
                        <label>Indigenous Knowledge</label>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Resource Type:</label>
                  <div class="checkbox-list-container">
                      <div class="checkbox">
                        <input name="resource[]" value="Lesson Plan" type="checkbox">
                        <label>Lesson Plan</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Unit Plan" type="checkbox">
                        <label>Unit Plan</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Activity" type="checkbox">
                        <label>Activity </label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Assessment" type="checkbox">
                        <label>Assessment</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Games" type="checkbox">
                        <label>Games</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Extension" type="checkbox">
                        <label>Extension </label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Field Trip" type="checkbox">
                        <label>Field Trip</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Flashcards" type="checkbox">
                        <label>Flashcards</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Bulletins" type="checkbox">
                        <label>Bulletins</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Novel Study" type="checkbox">
                        <label>Novel Study</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Poster" type="checkbox">
                        <label>Poster</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]"  value="Printable"  type="checkbox">
                        <label>Printable</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Reading" type="checkbox">
                        <label>Reading</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]"  value="Centers" type="checkbox">
                        <label>Centers</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]"  value="Workbook" type="checkbox">
                        <label>Workbook</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Worksheet" type="checkbox">
                        <label>Worksheet</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Graphic Organizer" type="checkbox">
                        <label>Graphic Organizer</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]"  value="Other" type="checkbox">
                        <label> Other</label>
                      </div>
                  </div>
                </div>
				<input type="hidden" name="r" value="Filter Results">
                <div class="form-group">
                  <label>Technology Required:</label>
                  <div class="checkbox-list-container">
                      <div class="checkbox">
                        <input  name="technology[]"  value="Computer" type="checkbox">
                        <label>Computer</label>
                      </div>
                      <div class="checkbox">
                        <input  name="technology[]"  value="Internet" type="checkbox">
                        <label>Internet</label>
                      </div>
                      <div class="checkbox">
                        <input  name="technology[]"  value="Projector" type="checkbox">
                        <label>Digital Projector </label>
                      </div>
                      <div class="checkbox">
                        <input  name="technology[]"  value="Overhead" type="checkbox">
                        <label>Overhead</label>
                      </div>
                      <div class="checkbox">
                        <input name="technology[]"  value="Point" type="checkbox">
                        <label>Power Point</label>
                      </div>
                      <div class="checkbox">
                        <input  name="technology[]"  value="Smart Board" type="checkbox">
                        <label>Smart Board</label>
                      </div>
                      <div class="checkbox">
                        <input name="technology[]"  value="Tablets" type="checkbox">
                        <label>Tablets</label>
                      </div>
                      <div class="checkbox">
                        <input name="technology[]"  value="Video/Camera" type="checkbox">
                        <label>Video/Camera</label>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Price Range:</label>
                  <div class="checkbox-list-container">
                      <div class="radio">
                        <input name="price_range" value="" type="radio"  checked>
                        <label>Any Price Range</label>
                      </div>
                      <div class="radio">
                        <input name="price_range" value="Free" type="radio">
                        <label>Free Resources</label>
                      </div>
                      <div class="radio">
                        <input name="price_range" value="less5" type="radio" >
                        <label>Under < $5</label>
                      </div>
                  </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                  <div class="form-group col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-block btn-primary btn-lg btn-3d" name="search">Search</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div><script>
$(document).ready(function(){

  $("input").iCheck({
    checkboxClass: "icheckbox",
    radioClass: "iradio",
  });
});
</script>
      <script>$("select").selecter();</script>
    </div>

 <style type="text/css">

.level-0 {
  font-weight:bold
}
 </style>

<script type="text/javascript">

</script>
';

return $result;
}
?>