<html>
<body>
<form action="#" method="POST">
      <p>Оберіть розмір</p>
		<p><select name="Size" id="1" required>
		<option value="" disabled selected>Виберіть розмір</option>
		<option value="90*90">90*90</option>
		<option value="90*100">90*100</option>
		<option value="100*100">100*100</option></select></p>
		<input type="text" name="Color" placeholder="Колір">
	<p>Оберіть кількість одиниць в межах 1 - 10</p>
		<p><select name="Color" id="2" required>
		<option value="" disabled selected>Оберіть колір</option>
		<option value="Синій">Синій</option>
		<option value="Білий">Білий</option>
		<option value="Рожевий">Рожевий</option>
		<option value="Жовтий">Жовтий</option>
		<option value="Голубий">Голубий</option>
		<option value="Фіолетовий">Фіолетовий</option>
		<option value="Зелений">Зелений</option></select></p>
		<p><input type="text" name="Count" placeholder="Вкажіть кількість"></p>
		<p><select name="Material" id="3" required>
		<option value="" disabled selected>Оберіть матеріал</option>
		<option value="Байка">Байка</option>
		<option value="Бавовна">Бавовна</option>
		<option value="Ситець">Ситець</option></select></p>
		<p><input type="text" name="Name" placeholder="Ім'я"></p>
		<p><input type="text" name="Surname" placeholder="Прізвище"></p>
		<p><input type="text" name="Phone_num" placeholder="Номер телефону"></p>
		<p>Оберіть метод доставки</p>
		<p><select name="Delivery" id="4" required>
		<option value="" disabled selected>Оберіть метод доставки</option>
		<option value="Самовивіз">Самовивіз</option>
		<option value="Тернополь">Доставка по Тернополю</option>
		<option value="Україна">Доставка по Україні</option></select></p>
		<p><input type="text" name="City" placeholder="Місто"></p>
		<p><input type="text" name="Address" placeholder="Адреса"></p>
		<p><input type="text" name="Department" placeholder="Відділення нової пошти"></p>
        <p><input type="submit" name = "Ok" value="Надіслати заявку"></p>
    </form>

			
<?php
if(isset($_POST['Ok'])){
	$size = $_POST['Size'];
	$colors = $_POST['Color'];
	$counts = $_POST['Count'];
	$materials = $_POST['Material'];
	$named = $_POST['Name'];
	$surnames = $_POST['Surname'];
	$phones = $_POST['Phone_num'];
	$delivery = $_POST['Delivery'];
	$city = $_POST['City'];
	$addresa = $_POST['Address'];
	$department = $_POST['Department'];
	
	global $wpdb;
//$wpdb->show_errors();
	$wpdb -> insert('wp_tailoring',
	array(
		'size'=>"$size",
		'color'=>"$colors",
		'count'=>"$counts",
		'material'=>"$materials",
		'name'=>"$named",
		'surname'=>"$surnames",
		'phone'=>"$phones",
		'delivery'=>"$delivery",
		'city'=>"$city",
		'address'=>"$addresa",
		'department'=>"$department",
	),
	array('%s', '%s', '%s','%s','%s','%s', '%s','%s','%s','%s','%s')
);
//$wpdb->print_error();
//$wpdb->hide_errors();

}
?>
</body>
</html>