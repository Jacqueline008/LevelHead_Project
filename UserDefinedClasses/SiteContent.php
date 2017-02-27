<?php
//自定义类--用于显示网页的header和footer
class SiteContent{

    //静态方法--显示网页header
    public static function showHeader(){
//
echo "
<!--header-begin-->
<div id='header'>
	<div id='container'>
		<a id='logo' href='#'><b><i>LevelHead</i></b></a>
";
//
        if(isset($_SESSION["userType"])){
            switch($_SESSION["userType"]){
                case "admin":
                    echo "<a id='register' href='Logined_Admin_All.php' target='_blank'>"."hi , ".$_SESSION['userName']."</a>";
                    break;
                case "normal":
                    echo"
                    <a id='shoppingcar' target='_blank' href='ShoppingCar.php'
		   onMouseOver='head_shopcar_changepic()'
		   onMouseOut='head_shopcar_changepic2()'>
			<img src='images/car.png'width='45px'' height='40px'></a>
                    ";
                    echo "<a id='register' href='Logined_NormalUser.php' target='_blank'>"."hi , ".$_SESSION['userName']."</a>";
                    break;
            }
        }else{
            echo "<a id='register' href='Login.php' target='_blank'>登录</a>";
        }
//
echo "
		<a id='home_link' href='Home.php' target='_blank'>首页</a>
		<form id='uSearchForm' name='uSearchForm'
			  onSubmit='uSearchFormFun();'>
			<input id='uSearchContent' name='uSearchContent'
				   list='product_list'' placeholder='请输入您想要的商品'>
			<datalist id='product_list'>
				<option value='电视'>
				<option value='空调'>
				<option value='冰箱'>
				<option value='洗衣机'>
				<option value='热水器'>
				<option value='厨房大电'>
			</datalist>
			<button type='submit' onMouseOver='head_submit_changepic()'
					onMouseOut='head_submit_changepic2()'>
				<img src='images/search.png' width='23px'
					 height='23px'>
			</button>
		</form>
	</div>
</div>
<!--header-end-->
";
    }


    //静态方法--显示网页footer
    public static function showFooter(){
        $res_footer=fopen("texts/footer.txt","r");
        echo fread($res_footer,filesize("texts/footer.txt"));
        fclose($res_footer);
    }
}
?>