<?php

function display($data) {
	showHeader(ADMIN);
	if ($data['added'] == true)  {
		printf("<h2>Neue Veranstaltung hinzugefügt</h2>\n");
	} else {
		// Display any possible error messages
		if (isset($data['errors'])) {
			foreach ($data['errors'] as $error) {
				printf("<span class=\"error\">%s</span>\n", getString($error));
			}
		}
?>
<h1>Add new event</h1>
<form action="index.php?module=event&action=add" method="post" >
<table class="add_event">
<tr>
<td colspan="2">
<span class="display_txt">Veranstaltungsname</span>
</td>
<td colspan="2">
<input class="textinput" name="name" id="name" type="text" size="50" />
</td>
</tr>
<tr>
<td>
<span class="display_txt">findet statt:</span>
</td>
<td colspan="3">
<!-- 
<input class="textinput" name="date" id="date" type="text" size="30" 
value="0000-00-00 00:00" onfocus="if (this.value == '0000-00-00 00:00') this.value = '';" onblur="if (this.value == '') this.value = '0000-00-00 00:00';"/>
-->
<select name="month">
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>Apr</option>
<option>May</option>
<option>Jun</option>
<option>Jul</option>
<option>Aug</option>
<option>Sep</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option>
</select>
<select name="date">
<?php
for($i=1; $i<=31; $i++) {
	printf("<option>%s</option>\n", $i);	
}
?>
</select>
<select name="year">
<?php
for($i=2008; $i<=2050; $i++) {
	printf("<option>%s</option>\n", $i);	
}
?>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<span class="display_txt">Beschreibung</span>
</td>
<td colspan="2">
<textarea class="textinput" name="description" id="description" cols="50" rows="8"></textarea>
</td>
</tr>
<tr>
<td>
<span class="display_txt"># Normale Sitze</span>
</td>
<td>
<input class="textinput" name="normal" id="normal" type="text" size="25" value="<?php echo DEFAULT_NORMAL;?>" />
</td>
<td>
<span class="display_txt">Price &euro;</span>
</td>
<td>
<input class="textinput" name="normal_price" id="normal_price" type="text" size="25" value="<?php echo DEFAULT_NORMAL_PRICE;?>"/>
</td>
</tr>
<tr>
<td>
<span class="display_txt"># Premium Sitze</span>
</td>
<td>
<input class="textinput" name="premium" id="premium" type="text" size="25" value="<?php echo DEFAULT_PREMIUM;?>"/>
</td>
<td>
<span class="display_txt">Preis &euro;</span>
</td>
<td>
<input class="textinput" name="premium_price" id="premium_price" type="text" size="25" value="<?php echo DEFAULT_PREMIUM_PRICE;?>"/>
</td>
</tr>
</table>
<input class="submit" name="reset" id="reset" type="reset" />
<input class="submit" name="submit" id="submit" type="submit" value="Add"/>
</form>
<?php	
	}
	showFooter();
}






?>