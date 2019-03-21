A example file where we can select multiple different fields option and send data

/* CSS style for form - TOGGLE STYLING */
.toggle {
  margin: 2rem 0 0;
  box-sizing: border-box;
  font-size: 0;
  display: flex;
  flex-flow: row nowrap;
  justify-content: flex-start;
  align-items: stretch;
}
.toggle2 {
  margin: 2rem 0 0;
  box-sizing: border-box;
  font-size: 0;
  flex-flow: row nowrap;
  justify-content: flex-start;
  align-items: stretch;
}
.toggle input[type="radio"], .toggle2 input[type="radio"]{
  width: 0;
  height: 0;
  position: absolute;
  left: -9999px;
}
.toggle input[type="radio"] + label, .toggle2 input[type="radio"] + label{
  margin: 0;
  padding: .75rem 2rem;
  box-sizing: border-box;
  position: relative;
  display: inline-block;
  border: solid 1px #DDD;
  background-color: #FFF;
  font-size: 1rem;
  line-height: 140%;
  font-weight: 600;
  text-align: center;
  box-shadow: 0 0 0 rgba(255, 255, 255, 0);
  transition: border-color .15s ease-out,  color .25s ease-out,  background-color .15s ease-out, box-shadow .15s ease-out;
  /* ADD THESE PROPERTIES TO SWITCH FROM AUTO WIDTH TO FULL WIDTH */
  /*flex: 0 0 50%; display: flex; justify-content: center; align-items: center;*/
  /* ----- */
}
.toggle input[type="radio"] + label:first-of-type, .toggle2 input[type="radio"] + label:first-of-type{
  border-radius: 6px 0 0 6px;
}

.toggle input[type="radio"] + label:last-of-type, .toggle2 input[type="radio"] + label:last-of-type{
  border-radius: 6px 6px 6px 0;
}
.toggle input[type="radio"]:hover + label, .toggle2 input[type="radio"]:hover + label{
  border-color: #213140;
}

.toggle ul input[type="radio"] + label, .toggle2 ul input[type="radio"] + label{
	padding: 20px 100px;
    border-radius: 48px;
}

.toggle input[type="radio"]:checked + label, .toggle2 input[type="radio"]:checked + label{
  background-color: #4B9DEA;
  color: #FFF;
  box-shadow: 0 0 10px rgba(102, 179, 251, 0.5);
  border-color: #4B9DEA;
  z-index: 1;
}
.toggle input[type="radio"]:focus + label, .toggle2 input[type="radio"]:focus + label{
  outline: dotted 1px #CCC;
  outline-offset: .45rem;
}
@media (max-width: 800px) {
  .toggle input + label, .toggle2 input + label{
    padding: .75rem .25rem;
    flex: 0 0 50%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
}
/* Style ends */

/* Here is Html code for form */

<h2 style="text-align: center; color: #7d3daf;"><strong>Will our invisible aligners work for you? Tell us these 4 things to find out.</strong></h2>
<div style="text-align: center; padding: 50px 0;">
	<h4 style="color: #7d3daf;">Choose the option that best describes your biggest concern with your smile:</h4>
	<div style="padding: 30px 0;">
		<select id="input_3_1" class="medium gfield_select" tabindex="1" name="input_1" aria-required="true" aria-invalid="false">
			<option value="Fix a spacing issue">Fix a spacing issue</option>
			<option value="Fix a crowding issue">Fix a crowding issue</option>
			<option value="Fix a bite problem (overbite, underbite or crossbite)">Fix a bite problem (overbite, underbite or crossbite)</option>
			<option value="Generally straighter teeth">Generally straighter teeth</option>
		</select>
	</div>
	
	<h4 style="color: #7d3daf;">Have you had braces or invisible aligners in the past?</h4>
	<div class="toggle">
		<ul class="field_radio" style="list-style: none; width: 100%;">
			<li style="float:left; text-align: center; margin-top: 2rem; margin-left: 25%; display: inline; margin-right: 2rem;">
			  <input id="S_weight" checked="checked" name="sizeBy" type="radio"><label for="S_weight">Yes</label>
			</li>
			<li style="float:left; text-align: center; margin-top: 2rem;">
			 <input  id="S_dimensions" name="sizeBy" type="radio"><label for="S_dimensions">No</label>
			</li>
		</ul>
	</div>
</div>

<div style="text-align: center; padding: 50px 0;">
	<h4 style="color: #7d3daf;">Teeth Crowding: Can you pick your teeth out of this lineup (or which one looks the closest)?</h4>
	<div class="toggle2" style="margin-top: 2rem;">
		<div class="col-md-4">
		  <input id="S_weight6" name="imgBy" type="radio" checked=""><label for="S_weight6"><img src="http://coderzz.com/shubham/Happy-Teethwp/wp-content/uploads/2019/02/steps_icon1.png" type="image" width="100" alt="selection"></label>
		  <p style="text-align: center;">mild or no crowding</p>
		</div>
	</div>
	<div class="toggle2" style="margin-top: 2rem;">
		<div class="col-md-4">
		   <input id="S_weight1" name="imgBy" type="radio"><label for="S_weight1"><img src="http://coderzz.com/shubham/Happy-Teethwp/wp-content/uploads/2019/02/steps_icon1.png" type="image" width="100" alt="selection1"></label>
		   <p style="text-align: center;">moderate</p>
		</div>
	</div>
	<div class="toggle2" style="margin-top: 2rem;">
		<div class="col-md-4">
		  <input id="S_weight2" name="imgBy" type="radio"><label for="S_weight2"><img src="http://coderzz.com/shubham/Happy-Teethwp/wp-content/uploads/2019/02/steps_icon1.png" type="image" width="100" alt="selection2"></label>
		  <p style="text-align: center;">severe</p>
		</div>
	</div>

	<div class="toggle2" style="margin-top: 2rem;">
		<div class="col-md-4">
		  <input id="S_weight3" name="imgBy" type="radio" checked=""><label for="S_weight3"><img src="http://coderzz.com/shubham/Happy-Teethwp/wp-content/uploads/2019/02/steps_icon1.png" type="image" width="100" alt="selection"></label>
		  <p style="text-align: center;">mild or no crowding</p>
		</div>
	</div>
	<div class="toggle2" style="margin-top: 2rem;">
		<div class="col-md-4">
		   <input id="S_weight4" name="imgBy" type="radio"><label for="S_weight4"><img src="http://coderzz.com/shubham/Happy-Teethwp/wp-content/uploads/2019/02/steps_icon1.png" type="image" width="100" alt="selection1"></label>
		   <p style="text-align: center;">moderate</p>
		</div>
	</div>
	<div class="toggle2" style="margin-top: 2rem;">
		<div class="col-md-4">
		  <input id="S_weight5" name="imgBy" type="radio"><label for="S_weight5"><img src="http://coderzz.com/shubham/Happy-Teethwp/wp-content/uploads/2019/02/steps_icon1.png" type="image" width="100" alt="selection2"></label>
		  <p style="text-align: center;">severe</p>
		</div>
	</div>
</div>

<div class="row" style="text-align: center; margin-top: 18rem; font-size: 24px; font-weight: 600;">
	<button style="color: #7d3daf;padding: 20px 100px; border-radius: 48px; padding: 10px 20px;" form="nameform" type="submit" value="Submit">GET YOUR RESULT</button>
</div>
