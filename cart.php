<?php
if (!empty($_SESSION['q4t5_product'])) {
	echo '<table style="width:100%">';

	echo '<th>商品名稱</th><th>價格</th>';

	echo '<th>數量</th><th>小計</th><th>操作</th>';
	$total = 0;
	foreach ($_SESSION['q4t5_product'] as $id => $q4t5_product) {
		echo '<tr>';

		echo '<td>', $q4t5_product['title'], '</td>';
		echo '<td>', $q4t5_product['price'], '</td>';
		echo '<td>', $q4t5_product['count'], '</td>';
		$subtotal = $q4t5_product['price'] * $q4t5_product['count'];
		$total += $subtotal;
		echo '<td>', $subtotal, '</td>';
		echo '<td><a href="cart-delete.php?id=', $id, '">刪除</a></td>';
		echo '</tr>';
	}

	echo '<tr><td><br><h5 style="font-weight:bold;">合計</h5></td><td></td><td></td>
	<td><br><h5 style="font-weight:bold;">', $total, '</td>
		<td></td></tr>';

	echo '</table>';
} else {
	echo '購物車內無商品。';
}
