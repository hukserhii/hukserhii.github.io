<?php 
session_start();
include("library/class_email_sender.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>GreenWill Котеджный поселок</title>
	
    <link name="author" href="Yard Design" />
    <meta name="description" content="GreenWill Котеджный поселок">
    <meta name="theme-color" content="#b6c7a3">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.png">
    
    <!-- Mobile -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    
	<!-- CSS start here -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<!-- CSS end here -->
	<!-- Google fonts start here -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
	<!-- Google fonts end here -->
</head>
<body class="ux">
  <div class="bg-overlay"></div>
	<!-- Preloader start here -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	<!-- Preloader end here -->
<!-- About Icon start here -->
	<div class="about-us"> 
		<a href="#" class="fa fa-file-text-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg" data-placement="right" title="О Нас"></a>
	</div>
<!-- About Icon end here -->	
<!-- Contact Icon start here -->
	<div class="contact-us"> 
		<a href="#" class="fa fa-envelope-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg2"  data-placement="left" title="Контакты"></a>
	</div>
<!-- Contact Icon end here -->
	<!-- Main container start here -->
	<section class="container main-wrapper">
		<!-- Logo start here -->
		<section id="logo" class="fade-down">
			<a href="#" title="UX - Coming Soon HTML Template">
            	<img src="img/logo.svg" alt="GreenWill logo">
            </a>
		</section>
		<!-- Logo end here -->
		<!-- Slogan start here -->
		<section class="slogan fade-down">
			<h1>Наш сайт находится в стадии разработки. Мы в ближайшее время порадуем вас удивительным сайтом.</h1>			
		</section>
		<!-- Slogan end here -->
		<!-- Count Down start here -->
		<!-- section class="count-down-wrapper fade-down">
			<ul class="row count-down">                       
				<li class="col-md-3 col-sm-6">   
					<input class="knob days" data-readonly=true data-min="0" data-max="365" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#34aadc" data-bgColor="#e1e2e6" data-angleOffset="180">
					<span id="days-title">days</span>
				</li>    
				<li class="col-md-3 col-sm-6"> 
					<input class="knob hour" data-readonly=true data-min="0" data-max="24" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#4cd964" data-bgColor="#e1e2e6" data-angleOffset="180">
					<span id="hours-title">hours</span>
				</li>    
				<li class="col-md-3 col-sm-6"> 
					<input class="knob minute" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff9500" data-bgColor="#e1e2e6" data-angleOffset="180">
					<span id="mins-title">minutes</span>
				</li>    
				<li class="col-md-3 col-sm-6"> 
					<input class="knob second" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff3b30" data-bgColor="#e1e2e6" data-angleOffset="180">
					<span id="secs-title">seconds</span>
				</li>                
			</ul>              
		</section> -->
		<!-- Count Down end here -->
		<!-- Newsletter start here -->
		<!-- <section class="newsletter row fade-down">      
			
            <form action="//afrussel.us10.list-manage.com/subscribe/post?u=9d80e0546273f34e306d026fe&amp;id=748920b40a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="contact col-md-6 fade-down validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll" class="form-group">
                <div><span class="email-ico"> <i class="fa fa-envelope-o"></i> </span>
            	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Введите e-mail">        	</div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <! real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <!-- <div style="position: absolute; left: -5000px;"><input type="text" name="b_9d80e0546273f34e306d026fe_748920b40a" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Подписаться" name="Submit" id="mc-embedded-subscribe" class="btn-submit"></div>
            </div>
        </form>
		</section> --> 
		<!-- Newsletter end here -->
		<!-- Social icons start here -->
		<!-- <ul class="connect-us row fade-down">
			<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
			<li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
			<li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
		</ul> -->
		<!-- Social icons end here -->
		<!-- Footer start here -->
		<footer class="fade-down">        
			<p class="footer-text">&copy; GREEWILL 2016, Developed by <a href="http://yard.co.ua/" target="_blank">YARD Design</a></p>
		</footer>
		<!-- Footer end here -->
	</section>
<!-- About start here -->
  <div class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
    <a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
    <div class="modal-dialog modal-lg clearfix">
      <div class="modal-content pop-up">
        <h3>О нас</h3>
        <div class="clearfix">
        <div>
          <p>Проснуться утром от пения птиц, выйти босыми ногами на зеленый газон у своего порога, присесть в плетеное кресло и выпить утренний кофе – эта мечта кажется далекой для городского жителя. Жить в большом городе, где все под рукой, практичнее – и мечта иногда так и остается мечтой. А ведь мечты должны сбываться! Жить в большом городе с максимальным комфортом – это загородный дом в живописном месте, при этом совсем рядом с городом. Коттеджный поселок «Гринвиль» исполнит вашу мечту. Все его характеристики: экология, комфорт, безопасность, статус – ценой разумных затрат на высоте.
          </p>
          <p>Для его проектировки выбрано идеальное место около леса неподалёку реки Днепр. Кардинально более чистая экология при максимальной близости к городу. Удаленность от города – всего 5 километров. Все это позволяет наслаждаться загородной тишиной и дает возможность дышать полной грудью чистым и свежим воздухом, любоваться прекрасным видом из окна.</p>
          <p>Расположен поселок в селе Любимовка, которое уже много лет является любимым местом отдыха и оздоровления детей. Практически курортная зона. Легко и за считанные минуты можно добраться в город и обратно на собственном автомобиле или общественном транспорте. Близко мегаполис, но суета, пыль, шум остаются там. Успокаивающая атмосфера поля и реки избавит от любого стресса, добавит сил и радости жизни. Стандартный комфорт городской квартиры можно заменить на индивидуальную планировку дома и придомовой территорией в современном архитектурном стиле, при всех обязательных коммуникациях и бытовых службах. </p>
          <p>Общая площадь поселка составляет около 4,0 га, которые разделены на 38 участков. Луга без многолетних и прочих насаждений – это полная свобода в дизайне ландшафта. Дом выполнен на монолитном железобетонном основании, из натурального керамического кирпича, имеет монолитное железобетонное перекрытие, кровля покрыта качественной металлочерепицей. Дом оснащен электроразводкой из качественного медного провода, отопление выполнено из теплых полов на первом этаже и радиаторов на втором, а также установлен экономичный газовый котел. </p>
          <p>Утеплен дом 100 мм пенопласта под декоративной штукатуркой. Кровля утеплена 200 мм минеральной ваты. Предусмотрен вывод под камин. В доме также есть большая терраса и балкон. Разумеется, Вашими соседями будут люди, состоявшиеся в бизнесе и жизни, с достатком выше среднего, со схожими интересами и ценностями среди которых Вы найдете хороших собеседников, а возможно, и друзей.
          Простор, чистая природа, река, приятные соседи – это лучшие условия для здоровья и счастья Вас и Ваших детей.
          Свой дом на природе и вблизи от города – это хорошее капиталовложение, а также огромный вклад в свое здоровье и здоровье Ваших близких.
          Загородный дом в «Гринвиль» – это решение, достойное Вас.</p>
        </div>
      </div>
    
      </div>
    </div>
  </div>
<!-- About end here -->
<!-- Contact start here -->
  <div class="modal fade bs-example-modal-lg2" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
    <a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
    <div class="modal-dialog modal-lg">
      <div class="modal-content pop-up pop-up-cnt">
        <h3>Свяжитесь с нами</h3>
        


        <!--Email Sending Script -->

        <?php 
			$name="";
			$from="";
			$message="";
        if(isset($_POST['submit'])){

        	$name=mysql_real_escape_string($_POST['name']);
        	$from=mysql_real_escape_string($_POST['email']);
        	$message=mysql_real_escape_string($_POST['comments']);
        	$code=$_SESSION['captcha'];
            $captcha=mysql_real_escape_string($_POST['captcha']);
        	$to="hello@greenwill.dp.ua"; // Add your e-mail here
        	if($code!=$captcha){
			echo '<script>alert("Invalid Captcha");</script>';
			}else{    
        	include("library/send_email.php");
			}

        //Isset finishes here	
        }
        ?>


        <!-- Email Sending Script-->

        <div class="clearfix cnt-wrap">
         <form id="contactform" name="contactform" action="" method="post">
         	<div id="result"></div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
                <input type="text" id="name" placeholder="Имя" name="name" value="<?php echo $name;?>" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
                <input type="text"  id="email" placeholder="E-mail" name="email" value="<?php echo $from;?>" required>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns">
                <textarea id="comments" name="comments" placeholder="Сообщение" required><?php echo $message;?></textarea>
              </div>
               
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns captcha text-center">
				   <img src="captcha.php"><br>
                   <input type="text" name="captcha" placeholder="captcha" required>                
              </div>
              
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center columns">             
                <button name="submit" id="submit" class="contact-btn-submit" type="submit">Отправить</button>
              </div> 
            </form>        
        </div>


        <div class="clearfix cnt-wrap">
          <div class="col-md-4 col-sm-4">
            <i class="fa fa-phone"></i>
            <h4>Телефон:</h4>
            <p><a href="tel:+38 (093) 781 41 77">+38 (093) 781 41 77</a></p>
          </div>

          <div class="col-md-4 col-sm-4">      
            <i class="fa fa-envelope-o"></i>
            <h4>E-mail</h4>
            <p><a href="mailto:hello@greenwill.dp.ua">hello@greenwill.dp.ua</a></p>
          </div>
          <div class="col-md-4 col-sm-4">
            <i class="fa fa-map-marker"></i>
            <h4>Адрес:</h4>
            <p>Днепропетровский район<br>
            Днепропетровская область<br>
            GPS-координаты: 48°22'59.6"N 35°10'44.5"E
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Contact end here --> 
		<!-- Main container start here -->
		<!-- Javascript framework and plugins start here -->
		<script type="text/javascript" src="js/jquery.js"></script> 
		<script type="text/javascript" src="js/bootstrap.min.js"></script> 
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/modernizr.js"></script> 
		<script type="text/javascript" src="js/appear.js"></script> 		
		<script src="js/jquery.knob.js"></script>
		<script src="js/jquery.ccountdown.js"></script>
		<script src="js/init.js"></script>
		<script src="js/general.js"></script>
		
<!-- Javascript framework and plugins end here -->
</body>
</html>


