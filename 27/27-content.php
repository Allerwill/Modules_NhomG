<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<aside class="widget_number_2 widget woocommerce widget_price_filter">
<h5 class="widget_title">Filter by price</h5>
	<div class="rangeslider">
		<input class="min" name="range_1" type="range" min="14" max="25" value="14" />
		<input class="max" name="range_1" type="range" min="14" max="25" value="25" />
	<br><br>

			<span class="label">Price: </span>
			<span class="range_min light left">$14</span>
			&ndash;
			<span class="range_max light right">$25</span>
			<button class="btn btn-primary">Filter</button>


	</div>

</aside>


<script>
	(function() {

		function addSeparator(nStr) {
			nStr += '';
			var x = nStr.split('.');
			var x1 = x[0];
			var x2 = x.length > 1 ? '.' + x[1] : '';
			var rgx = /(\d+)(\d{3})/;
			while (rgx.test(x1)) {
				x1 = x1.replace(rgx, '$1' + '.' + '$2');
			}
			return x1 + x2;
		}

		function rangeInputChangeEventHandler(e) {
			var rangeGroup = $(this).attr('name'),
				minBtn = $(this).parent().children('.min'),
				maxBtn = $(this).parent().children('.max'),
				range_min = $(this).parent().children('.range_min'),
				range_max = $(this).parent().children('.range_max'),
				minVal = parseInt($(minBtn).val()),
				maxVal = parseInt($(maxBtn).val()),
				origin = $(this).context.className;

			if (origin === 'min' && minVal > maxVal - 1) {
				$(minBtn).val(maxVal - 1);
			}
			var minVal = parseInt($(minBtn).val());
			$(range_min).html('$' + addSeparator(minVal));


			if (origin === 'max' && maxVal - 1 < minVal) {
				$(maxBtn).val(1 + minVal);
			}
			var maxVal = parseInt($(maxBtn).val());
			$(range_max).html('$' + addSeparator(maxVal));
		}

		$('input[type="range"]').on('input', rangeInputChangeEventHandler);
	})();
</script>