<?php
$from_template_page = 0;
if (!isset($sessinfo)) $sessinfo = NULL;
if (!isset($noentryui)) $noentryui = 0;

/* We'll get these in advance, so that we don't need to hit the db mid-session */
$country_li = get_country_list();
$country_usa = get_country_list(TRUE, "US");
$usa_li = get_state_list("US");
$can_li = get_state_list("CA");

if (!$noentryui) {

$sss = (array)$wpdb->get_results("select * from session_data where sessid = '" . session_id() . "'");
if (is_array($sss) && count($sss))
	{
	$from_template_page = 1;
	$sessinfo = $sss[0];
	$sessinfo->return = $sessinfo->return_date;
	$tcfield = (is_numeric($sessinfo->trip_cost) && floor($sessinfo->trip_cost) != $sessinfo->trip_cost) ? number_format($sessinfo->trip_cost, 2, '.', '') : $sessinfo->trip_cost;
	$tenlong_initial_trip_payment = substr($sessinfo->initial_trip_payment, 0, 6) . "20" . substr($sessinfo->initial_trip_payment, 6, 2);
	$tenlong_return = substr($sessinfo->return, 0, 6) . "20" . substr($sessinfo->return, 6, 2);
	$tenlong_departure = substr($sessinfo->departure, 0, 6) . "20" . substr($sessinfo->departure, 6, 2);
	}
else
	{
	$sessinfo = new stdClass();
	$sessinfo->sessid = session_id();
	$sessinfo->your_residence = "";
	}

?>

<script type="text/javascript">var nef_usa_li = '<?php print $usa_li; ?>';var nef_can_li = '<?php print $can_li; ?>'</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/newentryform.js'?>"></script>
	<form name="entry_form" id="entry-form" method="post" action="<?php bloginfo('url'); ?>/get-quotes">
<!-- onsubmit="return validEntryForm();" -->
	<div class="form-wrap">
		<div class="row">
				<div class="large-12 columns">
					<label for="trip-cost">Trip Cost</label>
				</div>
				<div class="input-wrap medium-6 large-<?php print $FORMVAL_LARGEVAL; ?> columns">
					<div class="trip-cost row collapse">
						<i class="fa fa-question-circle" title="Enter the total amount of your non-refundable and pre-paid travel arrangements to be insured (e.g., flights, hotels, cruises). If you would like to see plans that do not include trip cancellation coverage (but do include other benefits), enter 0 for your trip cost."></i>
						<div class="small-12 columns">
								<div class="small-2 columns">
									<span class="prefix">$</span>
								</div><!-- /columns -->
								<div class="small-10 columns">
									<input type="text" aria-label="Trip Cost" id="trip-cost" name="trip_cost" value="<?php if ($from_template_page) { print number_format($tcfield); } ?>" placeholder="Trip Cost" required />
								</div><!-- /columns -->
						</div>
					</div><!-- /row -->
				</div><!-- /columns -->
				<div class="input-wrap medium-6 large-<?php print $FORMVAL_LARGEVAL; ?> columns">
					<div class="row collapse">
						<i class="fa fa-question-circle" title="Indicate whether the Trip Cost entered was a total amount for all travelers or the cost per person."></i>
						<div class="small-12 columns">
								<select id="cost-breakdown" aria-label="Cost Breakdown" name="cost_breakdown" required>
									<option value="1" <?php if ($from_template_page && $sessinfo->cost_breakdown == "1") { print "selected"; } ?>>Total Trip Cost</option>
									<option value="2" <?php if ($from_template_page && $sessinfo->cost_breakdown == "2") { print "selected"; } ?>>Cost Per Person</option>
								</select>
						</div><!-- /columns -->
					</div>
				</div>
		</div><!-- /row -->

		<div class="row">
				<div class="input-wrap input-wrap-with-label medium-12 large-12 columns">
					<div class="row collapse">
						<i class="fa fa-question-circle" title="Select your destination country from the list. If you are visiting multiple countries, choose the destination that you will be spending the most time during your trip (you will still be covered when visiting other countries from your specified departure date through your return date)."></i>
						<div class="small-12 columns">
								<label for="primary-destination">Main Destination</label>
								<select id="primary-destination" aria-label="Primary Destination" name="primary_destination" required>
									<option value="">Select Country</option>
									<?php print get_country_list(TRUE, (($from_template_page && strlen($sessinfo->primary_destination)) ? $sessinfo->primary_destination: " "),1); ?>
								</select>
						</div>
					</div>										
				</div><!-- /columns -->
		</div><!-- /row -->								
		
		<div class="row">
				<div class="large-12 columns">
					<label for="departure">Trip Dates </label>
				</div>
				<div class="input-wrap medium-6 large-<?php print $FORMVAL_LARGEVAL; ?> columns icon-wrap">
					<div class="row collapse">
						<i class="fa fa-question-circle" title="Click on the calendar icon to select the date that you are leaving for your trip as well as the date that you return. If you type the date in, please use mm/dd/yyyy format."></i>
						<div class="small-12 columns">
								<i class="fa fa-calendar"></i>
								<input type="text" autocomplete="off" aria-label="Departure Date" id="departure" name="departure" placeholder="Leaving Home" class="datepicker later-date-txt" required maxlength="10" value="<?php if ($from_template_page) { print $tenlong_departure; } ?>" onblur="javascript:dfmt1(this);" />
						</div><!-- /columns -->
					</div>
				</div>
				
				<div class="input-wrap medium-6 large-<?php print $FORMVAL_LARGEVAL; ?> columns icon-wrap">
					<div class="row collapse">
						<i class="fa fa-question-circle" title="Click on the calendar icon to select the date that you are leaving for your trip as well as the date that you return. If you type the date in, please use mm/dd/yyyy format."></i>
						<div class="small-12 columns">
								<i class="fa fa-calendar"></i>
								<input type="text" autocomplete="off" aria-label="Return Date" id="return" name="return" placeholder="Returning Home" class="datepicker return-date-txt" required maxlength="10" value="<?php if ($from_template_page) { print $tenlong_return; } ?>" onblur="javascript:dfmt1(this);" />
						</div><!-- /columns -->
					</div>	
				</div>
		</div><!-- /row -->

<?php 
	if ($from_template_page)
		{
		$trages = explode("," , $sessinfo->traveler_ages);
		$num_travelers = count($trages);
		}
	else
		$num_travelers = 0;
?>

		<div class="row">
				<div class="input-wrap input-wrap-with-label medium-12 large-12 columns">
					<div class="row collapse">
						<i class="fa fa-question-circle" title="Please select the number of travelers that you would like to insure who share the same travel itinerary, are traveling on the same dates and live in the same state."></i>
						<div class="small-12 columns">
								<label for="num-travelers">Number of Travelers <span style="font-size:80%"><a href="https://groups.travelinsurance.com" target="_blank">More Than 10?</a></span></label>
								<select aria-label="Number of Travelers" name="num-travelers" class="num-selector" required>
									<option value="">Select Number</option>
<?php
									for ($i = 1; $i <= 10; ++$i)
										printf('<option value="%s" %s>%s</option>', $i, (($i == $num_travelers) ? "selected" : ""), $i);
?>
								</select>
						</div><!-- /columns -->
					</div>
				</div><!-- /columns -->
		</div><!-- /row -->

		<div class="row">
				<div class="large-12 columns">
					<label for="traveler-age-1">Traveler Ages (as of today) <span style="font-size:80%"><!-- Calculator Copyright Calculate Stuff - calculatestuff.com --><a href="https://www.calculatestuff.com/miscellaneous/age-calculator" rel="nofollow" onclick="window.open('https://www.calculatestuff.com/miscellaneous/age-calculator?display_type=popup','Age Calculator','width=700,height=700,resizable=1,scrollbars=1,toolbar=0,menubar=0');return false;">Need Help?</a></span></label>
				</div>
				<div class="large-12 columns">
					<div class="travelers-container row">
						<div class="small-12 columns input-wrap">
								<div class="row collapse">
									<i class="fa fa-question-circle" title="Enter the age of each traveler (as of today) with one traveler's age per box. Enter the age of additional travelers in separate boxes. If a child is under one year old, please enter 1. "></i>
									<ul class="small-block-grid-1 traveler-rows">
<?php
if ($from_template_page && count($trages))
	{
	for ($x = 0; $x < count($trages); ++$x)
		{
		printf('<li class="traveler num-field"><input type="text" aria-label="Traveler %s Age" placeholder="0" name="traveler-age-%s" id="traveler-age-%s" value="%s" onblur="validage(%s);" required /></li>',
				$x, $x, $x, $trages[$x], $x);
		}
	}
else
	{
	print '<li class="traveler num-field"><input type="text" aria-label="Traveler 1 Age" placeholder="0" name="traveler-age-1" id="traveler-age-1" onblur="validage(1);" required disabled="disabled" /></li>';
	}
?>
									</ul><!-- /columns -->
								</div>
						</div>
						
					</div>
				</div>
		</div><!-- /row -->
		
		<div class="row">
				<div class="large-12 columns">
					<label for="your-residence">Permanent Residence</label>
				</div>
				<div class="your-residence-wrap medium-6 input-wrap large-<?php print $FORMVAL_LARGEVAL; ?> columns">
					<div class="row collapse">
						<i class="fa fa-question-circle" title="Select the country and state that you currently reside in."></i>
						<div class="small-12">
								<select id="your-residence" aria-label="Country of Residence" name="your_residence" required onchange="javascript:statepicker();">
									<option value="">Select Country</option>
									<option value="US" <?php if ($sessinfo->your_residence != "CA" && $sessinfo->your_residence != "XX") { print "selected"; } ?>>United States</option>
									<option value="CA" <?php if ($from_template_page && $sessinfo->your_residence == "CA") { print "selected"; } ?>>Canada</option>
									<option value="XX" <?php if ($sessinfo->your_residence == "XX") { print "selected"; } ?>>I/We live outside of the U.S. or Canada</option>
								</select>
						</div>
					</div>
				</div>
				<div class="medium-6 large-<?php print $FORMVAL_LARGEVAL; ?> input-wrap columns">
					<div class="row collapse">
						<i class="fa fa-question-circle" title="Select the country and state that you currently reside in."></i>
						<div class="small-12 columns">
								<select id="your-residence-state" aria-label="State of Residence" name="your_residence_state" required>
									<option value="">Select State</option>
									<?php if ($from_template_page && property_exists($sessinfo, 'your_residence') && strlen($sessinfo->your_residence)) { print get_state_list($sessinfo->your_residence, TRUE, $sessinfo->your_residence_state); } else { print $usa_li; } ?>
								</select>
						</div>
					</div>
				</div>
		</div><!-- /row -->
		
		<div class="row">  
				<div class="citizenship-wrap input-wrap input-wrap-with-label large-<?php print $FORMVAL_LARGEVAL; ?> columns">
					<div class="row">
						<i class="fa fa-question-circle" title="Enter the country of which you are a citizen. If you are a citizen of multiple countries, simply select one."></i>
						<div class="small-12 columns">
								<label for="citizenship">Citizenship</label>
								<select id="citizenship" aria-label="Country of Citizenship" name="citizenship" required>
									<option value="">Select Country</option>
									<?php print get_country_list(TRUE, (($from_template_page && strlen($sessinfo->citizenship)) ? $sessinfo->citizenship : "US"),1); ?>
								</select>
						</div>
					</div>
				</div>
				<div class="input-wrap input-wrap-with-label <?php print $FORMVAL_HIDEMOBILELABEL; ?> large-<?php print $FORMVAL_LARGEVAL; ?> columns icon-wrap">
					<div class="row collapse">
						<i class="fa fa-question-circle" title="Select the initial date that you made a partial or whole payment for your trip. If you booked with rewards points and no actual payment, use the date that you booked your trip. If you have not purchased your travel yet, please select today's date to see quotes."></i>
						<div class="small-12 columns">
								<label for="initial-trip-payment">Initial Trip Payment Date</label>
								<i class="fa fa-calendar fa-calendar-with-label"></i>
								<input id="initial-trip-payment" autocomplete="off" aria-label="Initial Trip Payment Date" name="initial_trip_payment" placeholder="Trip Deposit Date" maxlength="10" type="text"  value="<?php if ($from_template_page) { print $tenlong_initial_trip_payment; } ?>"  class="past-date-txt datepicker" required onblur="javascript:dfmt1(this);" />
						</div><!-- /columns -->
					</div>	
				</div>
		</div><!-- /row -->
	<input type="submit" class="ti-btn ti-large-btn ti-primary-btn large-12" value="Get Free Quotes" />

	</div>
</form>
<?php
	if ($from_template_page)
		{ 
		if (property_exists($sessinfo, "departure") && strlen($sessinfo->departure))
			{
			$dd = explode("/", $sessinfo->departure);
			$ds = $dd[2] . "," . ($dd[0] - 1) . "," . $dd[1];


			}

		}
if ($sessinfo && property_exists($sessinfo, "your_residence") && $sessinfo->your_residence == "XX")
	print "<script>statepicker();</script>";
}
?>
