<?php
//menütípus váltás a header.php-ban /Fejléc/

//title szövegek az ikonokhoz
//amp-hash kódolva (http://vector.extra.hu/vec/script_converter.html)
$idicon0title='&#70;&#337;&#111;&#108;&#100;&#97;&#108;';				//Fõoldal
$idicon1title='&#67;&#105;&#107;&#107;&#32;&#237;&#114;&#225;&#115;';	//Cikk írás
$idicon2title='&#82;&#243;&#108;&#117;&#110;&#107;';					//Rólunk
$idicon3title='&#75;&#97;&#112;&#99;&#115;&#111;&#108;&#97;&#116;';		//Kapcsolat
$idicon4title='&#65;&#114;&#99;&#104;&#237;&#118;&#117;&#109;';			//Archívum

//oldal ID-k az ikonokhoz
//$idicon0='';//index
$idicon1='8';
$idicon2='2';
$idicon3='9';
$idicon4='3';

if($menu == '2'){
	echo '<td class="menu2">';
	if(is_home()){ echo '<a title="'.$idicon0title.'" href="'.get_option('home').'/"><img class="theme" src="wp-content/themes/lime/media/home2.png" alt="Home"></a><br>'; }
	else{ echo '<a title="'.$idicon0title.'" href="'.get_option('home').'/" onmouseover="home2()" onmouseout="home1()"><img class="theme" src="wp-content/themes/lime/media/home1.png" alt="Home" name="home"></a><br>'; }
	if(is_page($idicon1)){ echo '<a title="'.$idicon1title.'" href="'.get_option('home').'/?page_id='.$idicon1.'"><img class="theme" src="wp-content/themes/lime/media/archive2.png" alt="Archive"></a><br>'; }
	else{ echo '<a title="'.$idicon1title.'" href="'.get_option('home').'/?page_id='.$idicon1.'" onmouseover="archive2()" onmouseout="archive1()"><img class="theme" src="wp-content/themes/lime/media/archive1.png" alt="Archive" name="archive"></a><br>'; }
	if(is_page($idicon2)){ echo '<a title="'.$idicon2title.'" href="'.get_option('home').'/?page_id='.$idicon2.'"><img class="theme" src="wp-content/themes/lime/media/users2.png" alt="Users"></a><br>'; }
	else{ echo '<a title="'.$idicon2title.'" href="'.get_option('home').'/?page_id='.$idicon2.'" onmouseover="users2()" onmouseout="users1()"><img class="theme" src="wp-content/themes/lime/media/users1.png" alt="Users" name="users"></a><br>'; }
	if(is_page($idicon3)){ echo '<a title="'.$idicon3title.'" href="'.get_option('home').'/?page_id='.$idicon3.'"><img class="theme" src="wp-content/themes/lime/media/help2.png" alt="Help"></a><br>'; }
	else{ echo '<a title="'.$idicon3title.'" href="'.get_option('home').'/?page_id='.$idicon3.'" onmouseover="help2()" onmouseout="help1()"><img class="theme" src="wp-content/themes/lime/media/help1.png" alt="Help" name="help"></a><br>'; }
	if(is_page($idicon4)){ echo '<a title="'.$idicon4title.'" href="'.get_option('home').'/?page_id='.$idicon4.'"><img class="theme" src="wp-content/themes/lime/media/login2.png" alt="Login"></a>'; }
	else{ echo '<a title="'.$idicon4title.'" href="'.get_option('home').'/?page_id='.$idicon4.'" onmouseover="login2()" onmouseout="login1()"><img class="theme" src="wp-content/themes/lime/media/login1.png" alt="Login" name="login"></a>'; }
	echo '</td>';
}

else{
	echo '<div class="menu1" style="text-align: center;">';
	if(is_home()){ echo '<a title="'.$idicon0title.'" href="'.get_option('home').'/"><img class="theme" src="wp-content/themes/lime/media/home2.png" alt="Home"></a>&nbsp;&nbsp;'; }
	else{ echo '<a title="'.$idicon0title.'" href="'.get_option('home').'/" onmouseover="home2()" onmouseout="home1()"><img class="theme" src="wp-content/themes/lime/media/home1.png" alt="Home" name="home"></a>&nbsp;&nbsp;'; }
	if(is_page($idicon1)){ echo '<a title="'.$idicon1title.'" href="'.get_option('home').'/?page_id='.$idicon1.'"><img class="theme" src="wp-content/themes/lime/media/archive2.png" alt="Archive"></a>&nbsp;&nbsp;'; }
	else{ echo '<a title="'.$idicon1title.'" href="'.get_option('home').'/?page_id='.$idicon1.'" onmouseover="archive2()" onmouseout="archive1()"><img class="theme" src="wp-content/themes/lime/media/archive1.png" alt="Archive" name="archive"></a>&nbsp;&nbsp;'; }
	if(is_page($idicon2)){ echo '<a title="'.$idicon2title.'" href="'.get_option('home').'/?page_id='.$idicon2.'"><img class="theme" src="wp-content/themes/lime/media/users2.png" alt="Users"></a>&nbsp;&nbsp;'; }
	else{ echo '<a title="'.$idicon2title.'" href="'.get_option('home').'/?page_id='.$idicon2.'" onmouseover="users2()" onmouseout="users1()"><img class="theme" src="wp-content/themes/lime/media/users1.png" alt="Users" name="users"></a>&nbsp;&nbsp;'; }
	if(is_page($idicon3)){ echo '<a title="'.$idicon3title.'" href="'.get_option('home').'/?page_id='.$idicon3.'"><img class="theme" src="wp-content/themes/lime/media/help2.png" alt="Help"></a>&nbsp;&nbsp;'; }
	else{ echo '<a title="'.$idicon3title.'" href="'.get_option('home').'/?page_id='.$idicon3.'" onmouseover="help2()" onmouseout="help1()"><img class="theme" src="wp-content/themes/lime/media/help1.png" alt="Help" name="help"></a>&nbsp;&nbsp;'; }
	if(is_page($idicon4)){ echo '<a title="'.$idicon4title.'" href="'.get_option('home').'/?page_id='.$idicon4.'"><img class="theme" src="wp-content/themes/lime/media/login2.png" alt="Login"></a>'; }
	else{ echo '<a title="'.$idicon4title.'" href="'.get_option('home').'/?page_id='.$idicon4.'" onmouseover="login2()" onmouseout="login1()"><img class="theme" src="wp-content/themes/lime/media/login1.png" alt="Login" name="login"></a>'; }

	//BETA
	//echo '<font color="#33ccFF" face="Impact" size="1">BETA</font>';

	echo '</div>';
}
?>