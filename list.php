<?
$db = require (__DIR__."\\db.php");

// Все варианты сортировки
$sort_list = array(
	'login_asc'   => '`Login`',
	'login_desc'  => '`Login` DESC',
	'first_name_asc'  => '`First_name`',
	'first_name_desc' => '`First_name` DESC',
	'surname_asc'   => '`Surname`',
	'surname_desc'  => '`Surname` DESC',
	'sex_asc'   => '`Sex`',
	'sex_desc'  => '`Sex` DESC',
	'date_asc'   => '`Date_of_birth`',
	'date_desc'  => '`Date_of_birth` DESC',
);
 
// Проверка GET-переменной
$sort = @$_GET['sort'];
if (array_key_exists($sort, $sort_list)) {
	$sort_sql = $sort_list[$sort];
} else {
	$sort_sql = reset($sort_list);
}
 
// Запрос в БД 
$db = require (__DIR__."\\db.php");
$sth = $db->prepare("SELECT * FROM `userdata` ORDER BY {$sort_sql}");
$sth->execute();
$list = $sth->fetchAll(PDO::FETCH_ASSOC);
 
// Функция вывода ссылок 
function sort_link_th($title, $a, $b) {
	$sort = @$_GET['sort'];
 
	if ($sort == $a) {
		return '<a class="active" href="?sort=' . $b . '">' . $title . ' <i>▼</i></a>';
	} elseif ($sort == $b) {
		return '<a class="active" href="?sort=' . $a . '">' . $title . ' <i>▲</i></a>';  
	} else {
		return '<a href="?sort=' . $a . '">' . $title . '</a>';  
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>admin_list</title>
</head>
<body>
<form action="update.php" enctype="multipart/form-data" method="post">
	<table>
		<thead>
			<tr>
				<th><?php echo sort_link_th('Login', 'login_asc', 'login_desc'); ?></th>
				<th><?php echo sort_link_th('First_name', 'first_name_asc', 'first_name_desc'); ?></th>
				<th><?php echo sort_link_th('Surname', 'surname_asc', 'surname_desc'); ?></th>
				<th><?php echo sort_link_th('Sex', 'sex_asc', 'sex_desc'); ?></th>
				<th><?php echo sort_link_th('Date_of_birth', 'date_asc', 'date_desc'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($list as $row): ?>
			<tr>
				<td><input type="text" name="userLogin<?= $row['id']?>" value="<?echo $row['Login']?>"></td>
				<td><input type="text" name="userName<?= $row['id']?>" value="<?echo $row['First_name']?>"></td>
				<td><input type="text" name="userSurname<?= $row['id']?>" value="<?echo $row['Surname']?>"></td>
				<td><input type="text" name="sex<?= $row['id']?>" value="<?echo $row['Sex']?>"></td>
				<td><input type="text" name="dateOfBirth<?= $row['id']?>" value="<?echo $row['Date_of_birth']?>"></td>
			</tr>
			<?php endforeach; 
			
			?>    
		</tbody>
	</table>
	<input name="count" type="hidden" value="<?=count($list)?>">
	<p> <input type="submit" value="submit"> </p>
</form>
</body>


<?

// редактирование данных





?>