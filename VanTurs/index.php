<!DOCTYPE html> 
<meta charset="utf-8">
<html>
	
	<head>
	<style>		
	p{			
		color: red;
		font-weight: bold;
		font-size: 16px;
		text-decoration: underline;
		font-style: italic;
	}
	img {
		width: 500px; 
	}
	</style>			
	<meta charset="utf-8"> 
		<title>
			База данных туристической компании
		</title>
	<meta name="keywords" content="Ван, полатка, полаточный туризм"> 
	<meta name="description" content = "База данных туристической компании"> 
	<link href="/_file-manager/css/Mystyle.css" rel = "stylesheet"></link>
	</head>
	
	<!-- начало создания базы 20/06/2016 --> 
	<body>
			<h1>Manuk aper stex lineluya ko bazan!</h1>
			<p><img src=/_file-manager/img/schema.jpeg> 
			</p>
			<hr>
			<h2>
				Логическая структура построении базы данных!
			</h2>
			
			<ul start=1>
			
			<Uroven1>Клиенты</Uroven1>
				<li>Код Клиента
					<ol>
						
					</ol>
				</li>
				<li>Личные данные
					<ol>
						
					</ol>				
				</li>
				<li>Предпочтения
					<ol>
						Рыбак
					</ol>
					<ol>
						Охотник
					</ol><ol>
						Экстремал
					</ol><ol>
						Активный отдых
					</ol><ol>
						Пасивный отдых
					</ol>
				</li>
				<li>Статус
					<ol>
						Занят (нет свободного времени)
					</ol>
					<ol>
						Свободен (может позволить себе отдых)
					</ol>
					<ol>
						Хочет купить тур (есть желание)
					</ol>
					<ol>
						Думает о покупке тура (выбирает тур)
					</ol>
					<ol>
						Купил тур (когда то уже покупал тур)
					</ol>
					<ol>
						Будет покупать тур (планирует дату покупки)
					</ol>
				</li>
				<li>Оценка
					<ol>
						
					</ol>
				</li>
			
			<Uroven1>Туристическая Группа</Uroven1>
				<li>Код Туристической Группы
					<ol>
						
					</ol>
				</li>
				<li>Код Клиента
					<ol>
						
					</ol>				
				</li>

			<Uroven1>Сотрудники</Uroven1>
				<li>Код Код Сотрудника
					<ol>
						
					</ol>
				</li>
				<li>Руководство
					<ol>

					</ol>				
				</li>
				
				<li>Обслужывающий Персонал
					<ol>Секретарь
						
						<ol>
							Личные Данные
						</ol>
						<ol>
							Оценка
						</ol>						
					</ol>				
					<ol>Бухгалтер
						<ol>
							Личные Данные
						</ol>
						<ol>
							Оценка
						</ol>
					</ol>				
					<ol>Водитель						
						<ol>
							Личные Данные
						</ol>
						<ol>
							Оценка
						</ol>		
						
					</ol>				
					<ol>Менеджер
						<ol>
							Личные Данные
						</ol>
						<ol>
							Оценка
						</ol>
					</ol>				
				</li>				

				<Uroven1>Контрагенты</Uroven1>
					<li>
						Код Контранта
					</li>
					<li>Страховая компания
						<ol>
							Личные Данные
						</ol>
						<ol>
							Оценка
						</ol>						
					</li>
					<li>Транспортная компания
						<ol>
							Личные Данные
						</ol>
						<ol>
							Оценка
						</ol>						
					</li>
				<Uroven1>И так далее!!!</Uroven1>	
			</ul>
			
			
<!--		<ul>
				<li>Сотрудники</p></li>
				<li>Контрагенты</p></li>
				<li>Учлуги</p></li>
				<li>Оборудование</p></li>
				<li>Цены</p></li>
				<li>Гастрономия</p></li>
				<li>Тур</p></li>
				<li>Виды Туризма</p></li>
				<li>Места Ночовки</p></li>
				<li>Маршруты</li>
				<li>Живописные Места</li>
			</ul>
><-->
			<script src = "_file-manager/js/Myjavascript.js"></script>
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-80572157-1', 'auto');
			  ga('send', 'pageview');
			</script>
	</body>
</html>

