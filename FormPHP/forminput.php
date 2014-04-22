<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>アンケートフォーム</title>
</head>
<body>
	<h1>時間アンケート調査</h1>
	<form action="./formconfirm.php">
		<table>
			<tr>
				<td>お名前:</td><td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>性別</td><td><input type="radio" name="man" id="">男<input type="radio" name="women" id=""></td>
			</tr>
			<tr>
				<td>休日の過ごし方</td>
			</tr>
			<tr>
				<td><input type="radio" name="syumino1" id="">寝る<input type="radio" name="syumino2">ゲーム
				<input type="radio" name="syumino3">料理<input type="radio" name="syumino4" id="">カラオケ<input type="radio" name="syumino5" id="">スポーツジム<input type="radio" name="syumino6" id="">ハイキング<input type="radio" name="syumino7" id="">温泉</td>
			</tr>
		</table>
	</form>
</body>
</html>