<?php
	//簡易的にブログの登校日を設定
	//mktimeを使い日時を作成
	$blog = mktime(15,30,0,4,25,2016);

	/*
	比較演算子
	等しい:==
	等しい:=== ※型と値が等しい
	等しくない:!=
	等しくない:!==　※型または値が等しくない
	より少ない:<
	より大きい:>
	以下:<=
	以上:>=
	 */

	//１日以内ならNEWを表示(86400は１日の秒数)
	if ($blog >= time() - 86400) {
		echo "NEW";
	}
?>