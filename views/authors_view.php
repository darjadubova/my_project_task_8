<h1 style="color:rgb(201, 53, 85); font-family: 'Arial'";>Список авторов нашего сайта</h1>
<table>
	<tr style="font-family: 'Arial';">

		<th style="padding-right: 20px;">ID</th>

		<th style="padding-right: 20px;">Ф.И.О.</th>

		<th style="padding-right: 20px;">Возраст</th>

		<th style="padding-right: 20px;">Узнать подробнее</th>
	</tr>
	<?php 
		for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
		    $data->data_seek($row_no);
		    $row = $data->fetch_assoc();
		    echo "<tr><td>".$row['id']."</td><td>".$row['fio']."</td><td>".$row['age']."</td><td><a href='/journal/about/author/?id=".$row['id']."' target='_blank'>Подробнее</a></td></tr>";
		}
	?>
</table>