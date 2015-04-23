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
                        <input value="Social Justice" id="Social Justice" name="enduring[]" type="checkbox">
                        <label for="Social Justice">Social Justice</label>
                      </div>
                      <div class="checkbox">
                        <input value="Diversity" id="Diversity"  name="enduring[]"  type="checkbox">
                        <label for="Diversity" >Diversity</label>
                      </div>
                      <div class="checkbox">
                        <input value="Citizenship" id="Citizenship" name="enduring[]"  type="checkbox">
                        <label for="Citizenship" >Citizenship</label>
                      </div>
                      <div class="checkbox">
                        <input value="Sustainability" id="Sustainability" name="enduring[]"  type="checkbox">
                        <label for="Sustainability" >Sustainability</label>
                      </div>
                      <div class="checkbox">
                        <input value="Indigenous Knowledge" id="Indigenous Knowledge" name="enduring[]"  type="checkbox">
                        <label for="Indigenous Knowledge">Indigenous Knowledge</label>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Resource Type:</label>
                  <div class="checkbox-list-container">
                      <div class="checkbox">
                        <input name="resource[]" value="Lesson Plan" id="Lesson Plan" type="checkbox">
                        <label for="Lesson Plan">Lesson Plan</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Unit Plan" id="Unit Plan" type="checkbox">
                        <label for="Unit Plan">Unit Plan</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Activity" id="Activity" type="checkbox">
                        <label for="Activity">Activity </label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Assessment" id="Assessment" type="checkbox">
                        <label for="Assessment">Assessment</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Games" id="Games" type="checkbox">
                        <label for="Games">Games</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Extension" id="Extension" type="checkbox">
                        <label for="Extension">Extension </label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Field Trip" id="Field Trip" type="checkbox">
                        <label for="Field Trip">Field Trip</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Flashcards" id="Flashcards" type="checkbox">
                        <label for="Flashcards">Flashcards</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Bulletins" id="Bulletins" type="checkbox">
                        <label for="Bulletins">Bulletins</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Novel Study" id="Novel Study" type="checkbox">
                        <label for="Novel Study">Novel Study</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Poster" id="Poster" type="checkbox">
                        <label for="Poster">Poster</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]"  value="Printable" id="Printable"  type="checkbox">
                        <label for="Printable">Printable</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Reading" id="Reading" type="checkbox">
                        <label for="Reading">Reading</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]"  value="Centers" id="Centers" type="checkbox">
                        <label for="Centers">Centers</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]"  value="Workbook" id="Workbook" type="checkbox">
                        <label for="Workbook">Workbook</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Worksheet" id="Worksheet" type="checkbox">
                        <label for="Worksheet">Worksheet</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Report Card" id="Report Card" type="checkbox">
                        <label for="Report Card">Report Card</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]" value="Graphic Organizer" id="Graphic Organizer" type="checkbox">
                        <label for="Graphic Organizer">Graphic Organizer</label>
                      </div>
                      <div class="checkbox">
                        <input  name="resource[]"  value="Other" id="Other" type="checkbox">
                        <label for="Other"> Other</label>
                      </div>
                  </div>
                </div>
				<input type="hidden" name="r" value="Filter Results">
                <div class="form-group">
                  <label>Technology Required:</label>
                  <div class="checkbox-list-container">
                      <div class="checkbox">
                        <input  name="technology[]"  value="Computer" id="Computer" type="checkbox">
                        <label for="Computer">Computer</label>
                      </div>
                      <div class="checkbox">
                        <input  name="technology[]"  value="Internet" id="Internet" type="checkbox">
                        <label for="Internet">Internet</label>
                      </div>
                      <div class="checkbox">
                        <input  name="technology[]"  value="Projector" id="Projector" type="checkbox">
                        <label for="Projector">Digital Projector </label>
                      </div>
                      <div class="checkbox">
                        <input  name="technology[]"  value="Overhead" id="Overhead" type="checkbox">
                        <label for="Overhead">Overhead</label>
                      </div>
                      <div class="checkbox">
                        <input name="technology[]"  value="Point" id="Point" type="checkbox">
                        <label for="Point">Power Point</label>
                      </div>
                      <div class="checkbox">
                        <input  name="technology[]"  value="Smart Board" id="Smart Board" type="checkbox">
                        <label for="Smart Board">Smart Board</label>
                      </div>
                      <div class="checkbox">
                        <input name="technology[]"  value="Tablets" id="Tablets" type="checkbox">
                        <label for="Tablets">Tablets</label>
                      </div>
                      <div class="checkbox">
                        <input name="technology[]"  value="Video/Camera" id="Video/Camera" type="checkbox">
                        <label for="Video/Camera">Video/Camera</label>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Language:</label>
                  <div class="checkbox-list-container">
                      <div class="radio">
                        <input name="language" value="" id="anylang" type="radio"  checked>
                        <label for="anylang">Any Language</label>
                      </div>
                      <div class="radio">
                        <input name="language" value="English" id="english" type="radio" >
                        <label for="english">English</label>
                      </div>
                      <div class="radio">
                        <input name="language" value="French" id="french" type="radio">
                        <label for="french">French</label>
                      </div>
                      <div class="radio">
                        <input name="language" value="Cree" id="cree" type="radio" >
                        <label for="cree">Cree</label>
                      </div>
                      <div class="radio">
                        <input name="language" value="Inuktituk" id="inuktituk" type="radio" >
                        <label for="inuktituk">Inuktituk</label>
                      </div>
                      <div class="radio">
                        <input name="language" value="Ojibway" id="ojibway" type="radio" >
                        <label for="ojibway">Ojibway</label>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Price Range:</label>
                  <div class="checkbox-list-container">
                      <div class="radio">
                        <input name="price_range" value="" id="anyprice" type="radio"  checked>
                        <label for="anyprice">Any Price Range</label>
                      </div>
                      <div class="radio">
                        <input name="price_range" value="Free" id="Free" type="radio">
                        <label for="Free">Free Resources</label>
                      </div>
                      <div class="radio">
                        <input name="price_range" value="less5" id="less5" type="radio" >
                        <label for="less5">Under < $5</label>
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