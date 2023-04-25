<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Задание 4 </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
    <?php include 'forma.php'; ?>
		<div class="container" style= "background-color: #f8f8ff;">
      <?php
        if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) {
            echo '<div class="errors">';
            foreach ($_SESSION['errors'] as $error) {
                echo '<p>' . $error . '</p>';
            }
            echo '</div>';
        } elseif (isset($_COOKIE['name'])) {
            echo '<div class="success">';
            echo '<p>Форма успешно отправлена</p>';
            echo '</div>';
        }
        ?>
			<div class="forma">
                <h2 id="Форма">Форма</h2>
                <form action="forma.php" method="POST" id="form" >
                    <label for="name"> Имя: </label>
                        <br />
                  <?= showError('name') ?>
                        <input type="text" name="name" id="name" value="<?= getFieldValue('name') ?>" placeholder="Введите имя">
                    <br />
                    <label for="email"> Почта: </label>
                  <?= showError('email') ?>
			<br />
			<input type="email" name="email" id="email" value="<?= getFieldValue('email') ?>" placeholder="Введите вашу почту" >
			<br />
			<label for="year"> Дата рождения: </label>
                  <?= showError('year') ?> 
			<input type="text" name="year" id="year" value="<?= getFieldValue('year') ?>" >
			</select>
			<br />
			<br />
			<label> Пол: </label>
                  <?= showError('sex') ?>
			<label><input type="radio" checked="checked" name="sex" value="Мужской" <?= getChecked('sex', 'Мужской') ?> />М</label>
			<label><input type="radio" name="sex" value="Женский" <?= getChecked('sex', 'Женский') ?> />Ж</label>
						<br />
			<label>	Кол-во конечностей: </label>
                  <?= showError('legs') ?>
						<br />
						<input type="text" name="legs" id="legs" value="<?= getFieldValue('legs') ?>">
						<br />
						<label>
                           <label> Сверхспособности: </label>
                            <br />
							<select name="powers[]" id="powers" multiple="multiple" >
								<option value="Бессмертие" <?= getSelected('powers', 'Бессмертие') ?>>Бессмертие</option>
								<option value="Прохождение сквозь стены" <?= getSelected('powers', 'Прохождение сквозь стены') ?>>Прохождение сквозь стены</option>
								<option value="Левитация" <?= getSelected('powers', 'Левитация') ?>>Левитация</option>
							</select>
						</label>
						<br />
						<label for="bio"> Биография: </label>
							<br />
							<textarea name="bio" id="bio"  placeholder="Придумайте свою биографию..."><?= getFieldValue('bio') ?></textarea>
						<br />
						<br />
						<label>
							С контрактом ознакомлен(а) <input type="checkbox" name="agree" value="yes" <?= getChecked('agree', 'yes') ?>/>
							</label>
						<br />
                        <div class="button">
                            <input type="submit" value="Отправить" />
                        </div>
                    </form>
                </div>
            </div>
        </body>
        </html>
