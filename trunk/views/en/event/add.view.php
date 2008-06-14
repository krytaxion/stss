<?php

function display($data) {
	showHeader(ADMIN);
	if ($data['added'] == true)  {
		printf("<h2>New event submitted</h2>\n");
	} else {
		// Display any possible error messages
		if (isset($data['errors'])) {
			foreach ($data['errors'] as $error) {
				printf("<span class=\"error\">%s</span>\n", getString($error));
			}
		}
?>
<h1>Add new event</h1>
<form id="input_form" action="index.php?module=event&action=add" method="post" >
<table>
<tr>
<td>
<span class="display_txt">Event name</span>
</td>
<td>
<input class="textinput" name="name" id="name" type="text" size="30" />
</td>
<td>
<span class="display_txt">Occurrs:</span>
</td>
<td>
<input class="textinput" name="date" id="date" type="text" size="30" 
value="0000-00-00 00:00" onfocus="if (this.value == '0000-00-00 00:00') this.value = '';" onblur="if (this.value == '') this.value = '0000-00-00 00:00';"/>
</td>
</tr>
<tr>
<td colspan="2">
<span class="display_txt">Description</span>
</td>
<td colspan="2">
<textarea class="textinput" name="description" id="description" cols="60" rows="8"></textarea>
</td>
</tr>
<tr>
<td>
<span class="display_txt"># Normal seats</span>
</td>
<td>
<input class="textinput" name="normal" id="normal" type="text" size="30" />
</td>
<td>
<span class="display_txt">Price &euro;</span>
</td>
<td>
<input class="textinput" name="normal_price" id="normal_price" type="text" size="30" />
</td>
</tr>
<tr>
<td>
<span class="display_txt"># Premium seats</span>
</td>
<td>
<input class="textinput" name="premium" id="premium" type="text" size="30" />
</td>
<td>
<span class="display_txt">Price &euro;</span>
</td>
<td>
<input class="textinput" name="premium_price" id="premium_price" type="text" size="30" />
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