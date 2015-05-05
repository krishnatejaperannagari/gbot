<?php 
include "auth.php";
if ($_index_numbers=="") {
	$_index_numbers=0;
} 

if ($_index_xls=="") {
	$_index_xls=0;
} 

if ($_index_ppt=="") {
	$_index_ppt=0;
}

if ($_index_pdf=="") {
	$_index_pdf=0;
} 

if ($_index_doc=="") {
	$_index_doc=0;
} 

if ($_min_delay=="") {
	$_min_delay=0;
} 

if ($_index_host=="") {
	$_index_host=0;
}
if ($_keep_log=="") {
	$_keep_log=0;
}
if ($_show_meta_description=="") {
	$_show_meta_description=0;
}

if ($_show_categories=="") {
	$_show_categories=0;
}

if ($_show_query_scores=="") {
	$_show_query_scores=0;
}

if ($_email_log=="") {
	$_email_log=0;
}

if ($_print_results=="") {
	$_print_results=0;
}


if ($_index_meta_keywords=="") {
	$_index_meta_keywords=0;
}

if ($_index_host=="") {
	$_index_host=0;
}

if ($_advanced_search=="") {
	$_advanced_search=0;
}

if ($_merge_site_results == "") {
	$_merge_site_results = 0;
}

if ($_did_you_mean_enabled == "") {
	$_did_you_mean_enabled = 0;
}

if ($_stem_words == "") {
	$_stem_words = 0;
}

if ($_strip_sessids == "") {
	$_strip_sessids = 0;
}

if ($_suggest_enabled == "") {
	$_suggest_enabled = 0;
}

if ($_suggest_history == "") {
	$_suggest_history  = 0;
}

if ($_suggest_phrases == "") {
	$_suggest_phrases = 0;
}

if ($_suggest_keywords == "") {
	$_suggest_keywords = 0;
}

if ($_suggest_rows == "") {
 $_suggest_rows = 0;
}



if (isset($Submit)) {
	if (!is_writable("../settings/conf.php")) {
		print "Configuration file is not writable, chmod 666 conf.php under *nix systems";
	} else {
		$fhandle=fopen("../settings/conf.php","wb");
		fwrite($fhandle,"<?php \n");
		fwrite($fhandle,"/***********************\n G-Bot configuration file\n***********************/");
		fwrite($fhandle,"\n\n\n/*********************** \nGeneral settings \n***********************/");
		fwrite($fhandle, "\n\n// G-Bot version \n");
		fwrite($fhandle,"$"."version_nr			= '".$_version_nr. "';");
		fwrite($fhandle, "\n\n//Language of the search page \n");
		fwrite($fhandle,"$"."language			= '".$_language. "';");
		fwrite($fhandle, "\n\n// Template name/directory in templates dir\n");
		fwrite($fhandle,"$"."template	= '".$_template. "';");
		fwrite($fhandle, "\n\n//Administrators email address (logs can be sent there)	\n");
		fwrite($fhandle,"$"."admin_email		= '".$_admin_email. "';");
		fwrite($fhandle, "\n\n// Print G-Bot results to standard out\n");
		fwrite($fhandle,"$"."print_results		= ".$_print_results. ";");
		fwrite($fhandle, "\n\n// Temporary directory, this should be readable and writable\n");
		fwrite($fhandle,"$"."tmp_dir	= '".$_tmp_dir. "';");

		fwrite($fhandle,"\n\n\n/*********************** \nLogging settings \n***********************/");
		fwrite($fhandle, "\n\n// Should log files be kept\n");
		fwrite($fhandle,"$"."keep_log			= ".$_keep_log. ";");
		fwrite($fhandle, "\n\n//Log directory, this should be readable and writable\n");
		fwrite($fhandle,"$"."log_dir	= '".$_log_dir. "';");
		fwrite($fhandle, "\n\n// Log format\n");
		fwrite($fhandle,"$"."log_format			= '".$_log_format. "';");
		fwrite($fhandle, "\n\n//  Send log file to email \n");
		fwrite($fhandle,"$"."email_log			= ".$_email_log. ";");

		fwrite($fhandle,"\n\n\n/*********************** \nG-Bot settings \n***********************/");
		fwrite($fhandle, "\n\n// Min words per page required for indexing \n");
		fwrite($fhandle,"$"."min_words_per_page = ".$_min_words_per_page. ";");
		fwrite($fhandle, "\n\n// Words shorter than this will not be indexed\n");
		fwrite($fhandle,"$"."min_word_length	= ".$_min_word_length. ";");
		fwrite($fhandle, "\n\n// Keyword weight depending on the number of times it appears in a page is capped at this value\n");
		fwrite($fhandle,"$"."word_upper_bound	= ".$_word_upper_bound. ";");
		fwrite($fhandle, "\n\n// Index numbers as well\n");
		fwrite($fhandle,"$"."index_numbers		= ".$_index_numbers. ";");
		fwrite($fhandle,"\n\n// if this value is set to 1, word in domain name and url path are also indexed,// so that for example the index of www.php.net returns a positive answer to query 'php' even 	// if the word is not included in the page itself.\n");
		fwrite($fhandle,"$"."index_host		 = ".$_index_host.";\n");
		fwrite($fhandle, "\n\n// Wether to index keywords in a meta tag \n");
		fwrite($fhandle,"$"."index_meta_keywords = ".$_index_meta_keywords. ";");		
		fwrite($fhandle, "\n\n// Index pdf files\n");
		fwrite($fhandle,"$"."index_pdf	= ".$_index_pdf. ";");
		fwrite($fhandle, "\n\n// Index doc files\n");
		fwrite($fhandle,"$"."index_doc	= ".$_index_doc. ";");
		fwrite($fhandle, "\n\n// Index xls files\n");
		fwrite($fhandle,"$"."index_xls	= ".$_index_xls. ";");
		fwrite($fhandle, "\n\n// Index ppt files\n");
		fwrite($fhandle,"$"."index_ppt	= ".$_index_ppt. ";");
		fwrite($fhandle, "\n\n//executable path to pdf converter\n");
		fwrite($fhandle,"$"."pdftotext_path	= '".$_pdftotext_path	. "';");
		fwrite($fhandle, "\n\n//executable path to doc converter\n");
		fwrite($fhandle,"$"."catdoc_path	= '".$_catdoc_path. "';");
		fwrite($fhandle, "\n\n//executable path to xls converter\n");
		fwrite($fhandle,"$"."xls2csv_path	= '".$_xls2csv_path	. "';");
		fwrite($fhandle, "\n\n//executable path to ppt converter\n");
		fwrite($fhandle,"$"."catppt_path	= '".$_catppt_path. "';");
		fwrite($fhandle, "\n\n// User agent string \n");
		fwrite($fhandle,"$"."user_agent			 = '".$_user_agent. "';");
		fwrite($fhandle, "\n\n// Minimal delay between page downloads \n");
		fwrite($fhandle,"$"."min_delay			= ".$_min_delay. ";");
		fwrite($fhandle, "\n\n// Use word stemming (e.g. find sites containing runs and running when searching for run) \n");
		fwrite($fhandle,"$"."stem_words			= ".$_stem_words. ";");
		fwrite($fhandle, "\n\n// Strip session ids (PHPSESSID, JSESSIONID, ASPSESSIONID, sid) \n");
		fwrite($fhandle,"$"."strip_sessids			= ".$_strip_sessids. ";");

		fwrite($fhandle,"\n\n\n/*********************** \nSearch settings \n***********************/");
		fwrite($fhandle, "\n\n// default for number of results per page\n");
		fwrite($fhandle,"$"."results_per_page	= ".$_results_per_page. ";");
		fwrite($fhandle, "\n\n// Number of columns for categories. If you increase this, you might also want to increase the category table with in the css file\n");
		fwrite($fhandle,"$"."cat_columns		= ".$_cat_columns. ";");
		fwrite($fhandle, "\n\n// Can speed up searches on large database (should be 0)\n");
		fwrite($fhandle,"$"."bound_search_result = ".$_bound_search_result. ";");
		fwrite($fhandle, "\n\n");
		fwrite($fhandle,"// The length of the description string queried when displaying search results. // If set to 0 (default), makes a query for the whole page text, // otherwise queries this many bytes. Can significantly speed up searching on very slow machines \n");
		fwrite($fhandle,"$"."length_of_link_desc	= ".$_length_of_link_desc. ";");
		fwrite($fhandle, "\n\n// Number of links shown to next pages\n");
		fwrite($fhandle,"$"."links_to_next		 = ".$_links_to_next. ";");
		fwrite($fhandle, "\n\n// Show meta description in results page if it exists, otherwise show an extract from the page text.\n");
		fwrite($fhandle,"$"."show_meta_description = ".$_show_meta_description. ";");
		fwrite($fhandle, "\n\n// Advanced query form, shows and/or buttons\n");
		fwrite($fhandle,"$"."advanced_search	= ".$_advanced_search. ";");
		fwrite($fhandle, "\n\n// Query scores are not shown if set to 0\n");
		fwrite($fhandle,"$"."show_query_scores	 = ".$_show_query_scores. ";	");
		fwrite($fhandle, "\n\n");
		fwrite($fhandle, "\n\n // Display category list\n");
		fwrite($fhandle,"$"."show_categories	 = ".$_show_categories. ";");
		fwrite($fhandle, "\n\n// Length of page description given in results page\n");
		fwrite($fhandle,"$"."desc_length		= ".$_desc_length. ";");
		fwrite($fhandle, "\n\n// Show only the 2 most relevant links from each site (a la google)\n");
		fwrite($fhandle,"$"."merge_site_results		= ".$_merge_site_results. ";");
		fwrite($fhandle, "\n\n// Enable spelling suggestions (Did you mean...)\n");
		fwrite($fhandle,"$"."did_you_mean_enabled	= ".$_did_you_mean_enabled. ";");
		fwrite($fhandle, "\n\n// Enable G-Bot Suggest \n");
		fwrite($fhandle,"$"."suggest_enabled		= ".$_suggest_enabled. ";");		
		fwrite($fhandle, "\n\n// Search for suggestions in query log \n");
		fwrite($fhandle,"$"."suggest_history		= ".$_suggest_history. ";");		
		fwrite($fhandle, "\n\n// Search for suggestions in keywords \n");
		fwrite($fhandle,"$"."suggest_keywords		= ".$_suggest_keywords. ";");		
		fwrite($fhandle, "\n\n// Search for suggestions in phrases \n");
		fwrite($fhandle,"$"."suggest_phrases		= ".$_suggest_phrases. ";");		
		fwrite($fhandle, "\n\n// Limit number of suggestions \n");
		fwrite($fhandle,"$"."suggest_rows		= ".$_suggest_rows. ";");


		fwrite($fhandle,"\n\n\n/*********************** \nWeights\n***********************/");
		fwrite($fhandle, "\n\n// Relative weight of a word in the title of a webpage\n");
		fwrite($fhandle,"$"."title_weight  = ".$_title_weight. ";");
		fwrite($fhandle, "\n\n// Relative weight of a word in the domain name\n");
		fwrite($fhandle,"$"."domain_weight = ".$_domain_weight. ";");
		fwrite($fhandle, "\n\n// Relative weight of a word in the path name\n");
		fwrite($fhandle,"$"."path_weight	= ".$_path_weight. ";");
		fwrite($fhandle, "\n\n// Relative weight of a word in meta_keywords\n");
		fwrite($fhandle,"$"."meta_weight	= ".$_meta_weight. ";");



		


		fwrite($fhandle,"?>");
		fclose($fhandle);
	
	}
		//header("location: admin.php");		
} 	
include "../settings/conf.php"; 
?>
<div id='submenu'>&nbsp;</div>
<div id="settings">

<form name="form1" method="post" action="admin.php">
<input type="hidden" name="f" value="settings">
<input type="hidden" name="Submit" value="1">
<table>
<tr>
<td colspan="2"><div class="tableSubHeading">General settings</div></td>

</tr>

<tr>
<td class="left1"><input name="_version_nr" value="<?php print $version_nr;?>" type="hidden"> 
<?php print "1.0.0"?>
</td>
<td> G-Bot version</td>
</tr>

<tr>
<td class="left1">
<SELECT name="_language">
<option value="ar" <?php  if ($language == "ar") echo "selected";?>>Arabic</option>
<option value="bg" <?php  if ($language == "bg") echo "selected";?>>Bulgarian</option>
<option value="hr" <?php  if ($language == "hr") echo "selected";?>>Croatian</option>
<option value="cns" <?php  if ($language == "cns") echo "selected";?>>Simple Chinese</option>
<option value="cnt" <?php  if ($language == "cnt") echo "selected";?>>Traditional Chinese</option>
<option value="cz" <?php  if ($language == "cz") echo "selected";?>>Czech</option>
<option value="nl" <?php  if ($language == "nl") echo "selected";?>>Dutch</option>
<option value="en" <?php  if ($language == "en") echo "selected";?>>English</option>
<option value="ee" <?php  if ($language == "ee") echo "selected";?>>Estonian</option>
<option value="fi" <?php  if ($language == "fi") echo "selected";?>>Finnish</option>
<option value="fr" <?php  if ($language == "fr") echo "selected";?>>French</option>
<option value="de" <?php  if ($language == "de") echo "selected";?>>German</option>
<option value="hu" <?php  if ($language == "hu") echo "selected";?>>Hungarian</option>
<option value="it" <?php  if ($language == "it") echo "selected";?>>Italian</option>
<option value="lv" <?php  if ($language == "lv") echo "selected";?>>Latvian</option>
<option value="pl" <?php  if ($language == "pl") echo "selected";?>>Polish</option>
<option value="pt" <?php  if ($language == "pt") echo "selected";?>>Portuguese</option>
<option value="ro" <?php  if ($language == "ro") echo "selected";?>>Romanian</option>
<option value="ru" <?php  if ($language == "ru") echo "selected";?>>Russian</option>
<option value="sr" <?php  if ($language == "sr") echo "selected";?>>Serbian</option>
<option value="sk" <?php  if ($language == "sk") echo "selected";?>>Slovak</option>
<option value="si" <?php  if ($language == "si") echo "selected";?>>Slovenian</option>
<option value="es" <?php  if ($language == "es") echo "selected";?>>Spanish</option>
<option value="se" <?php  if ($language == "se") echo "selected";?>>Swedish</option>
<option value="tr" <?php  if ($language == "tr") echo "selected";?>>Turkish</option>

</SELECT>

</td>
<td> Language (applies to search page)</td>
</tr>
<tr>
<td class="left1">
<SELECT name="_template">
<?php 
	$directories = get_dir_contents($template_dir);
	if (count($directories)>0) {
		for ($i=0; $i<count($directories); $i++) {
			$dir=$directories[$i];
			?>
				<option value="<?php print $dir;?>" <?php  if ($template == $dir) echo "selected";?>><?php print $dir;?></option>
				<?php 
		}
	}
?>

</SELECT>
</td>

<td>Search template</td>
</tr>


<tr>
<td class="left1"><input name="_admin_email" value="<?php print $admin_email;?>" type="text" id="admin_email" size="20"> </td>
<td> Administrator e-mail address</td>
</tr>


<tr>
<td class="left1"><input name="_print_results" type="checkbox" id="print_results" value="1" <?php  if
($print_results==1) echo "checked";?>> </td>
<td>Print G-Bot results to standard out</td>
</tr>


<tr>
<td class="left1"> <input name="_tmp_dir" type="text"  value="<?php print $tmp_dir;?>" id="tmp_dir" size="20"></td>
<td> Temporary directory (absolute or relative to admin directory)</td>
</tr>


<tr>
<td colspan="2"><div class="tableSubHeading">Logging settings</div></td>

</tr>
<tr>
<td class="left1"><input name="_keep_log" type="checkbox" id="keep_log" value="1" <?php  if
($keep_log==1) echo "checked";?>> </td>
<td> Log G-Bot results</td>
</tr>


<tr>
<td class="left1"> <input name="_log_dir" type="text"  value="<?php print $log_dir;?>" id="log_dir" size="20"></td>
<td> Log directory (absolute or relative to admin directory)</td>
</tr>

<tr>
<td class="left1">
<SELECT name="_log_format">
<option value="text" <?php  if ($log_format == "text") echo "selected";?>>Text</option>
<option value="html" <?php  if ($log_format == "html") echo "selected";?>>Html</option>
</SELECT></td>
<td> Log file format</td>
</tr>

<tr>
<td class="left1"><input name="_email_log" type="checkbox" id="email_log" value="1" <?php  if
($email_log==1) echo "checked";?>> </td>
<td> Send G-Bot log to e-mail</td>
</tr>


<tr>
<td colspan="2"><div class="tableSubHeading">Weights</div></td>
</tr>

<tr>
<td class="left1"><input name="_title_weight" type="text" id="title_weight" size=
"5" maxlength="2" value="<?php print $title_weight;?>"> </td>
<td> Relative weight of a word in the title of a webpage</td>
</tr>


<tr>
<td class="left1"><input name="_domain_weight" type="text" id="domain_weight"
size="5" maxlength="2" value="<?php print $domain_weight;?>"> </td>
<td> Relative weight of a word in the domain name</td>
</tr>

<tr>
<td class="left1"><input name="_path_weight" type="text" id="path_weight" size="5"
maxlength="2" value="<?php print $path_weight;?>"> </td>
<td> Relative weight of a word in the path name</td>
</tr>

<tr>
<td class="left1"><input name="_meta_weight" type="text" id="meta_weight" size="5"
maxlength="2" value="<?php print $meta_weight;?>"> </td>
<td> Relative weight of a word in meta_keywords</td>
</tr>

<tr>
<td colspan="2" align="center"><br/> <input type="submit" value="Save settings" id="submit"></td>
</tr>

</table>
</form>

</div>
