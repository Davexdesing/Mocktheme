<?php
/* User Facebook url, twitter url */

/**
 * summary
 */
class user_option
{
    /**
     * summary
     */
    public function __construct()
    {
        add_action('admin_menu', array($this, 'add_option_theme'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action( 'show_user_profile', array($this,'extra_user') );
        add_action( 'edit_user_profile', array($this,'extra_user') );
        add_action( 'personal_options_update', array($this, 'save_extra') );
        add_action( 'edit_user_profile_update', array($this, 'save_extra') );

    }


    	public function enqueue_scripts() {
    		wp_enqueue_script('Jqueryjs', 'https://code.jquery.com/jquery-3.1.0.min.js', '', false, true);
    		wp_enqueue_style( 'booststrapcss', $src = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css', '', $ver = false, false );
    		wp_enqueue_script( 'poperjs', $src = 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js','', $ver = false, $in_footer = true );
    		wp_enqueue_script( 'booststrapjs', $src = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js','', $ver = false, $in_footer = true );
                    wp_enqueue_script( 'fontaws', $src = 'https://use.fontawesome.com/b2078c7a20.js','', $ver = false, $in_footer = false );

            wp_enqueue_style( 'fontawesome', get_template_directory_uri(). '/css/font-awesome.min.css');
    		

    	}
    

    public function add_option_theme(){
    	add_menu_page( 'Mocks Options Theme', 'MockOption', 'manage_options', 'mocks', array($this, 'desing_option'), 'dashicons-align-none', 90 );
    	
    }

    public function options_theme(){

    	add_option( $option = 'mockNav', $value = 'default');
    	add_option( $option = 'mockpage', $value = 'default');

    }
    public function desing_option(){
    
	if ( $_POST['navegation']) {
	update_option( 'mockNav', $_POST['navegation']);

	}
if ($_POST['content']) {
	update_option( 'mockpage', $_POST['content'] );
}

		require_once get_template_directory() . '/ince/options/mock_admin.php';
    }


    public function extra_user($user){




$twit = get_the_author_meta('twitterMocks' , $user->ID );
$face = get_the_author_meta( 'facebookMocks', $user->ID);
$insta = get_the_author_meta('instagramMocks', $user->ID );
$link =get_the_author_meta('linkMocks', $user->ID );


        ?>

        <hr>
        <h3>Redes Sociales de Usuarios</h3>

        <label><input type="text" name="twitterMocks" class="form-control" value="<?php   echo $twit;
 ?>"> Twitter Usuario <i class="fa fa-twitter-square" aria-hidden="true" ></i></label> <br>



        <label><input type="text" name="facebookMocks" class="form-control" value="<?php  echo $face;

        ?>"> Facebook Usuario <i class="fa fa-facebook-square" aria-hidden="true"></i></label> <br>



        <label><input type="text" name="instagramMocks" class="form-control" value="<?php  echo $insta;

        ?>"> Instagram Usuario <i class="fa fa-instagram" aria-hidden="true"></i></label> <br>


       <label><input type="text" name="linkMocks" class="form-control" value="<?php echo $link;

   ?>"> linked in Usuario <i class="fa fa-linkedin-square" aria-hidden="true"></i></label> <br>


        <?php
    }
    public function save_extra($user){

        if ( !current_user_can( 'edit_user', $user ) )
        return meta;

     $twitter =   $_POST['twitterMocks'];
     $facebook =   $_POST['facebookMocks'];
     $Instagram =   $_POST['instagramMocks'];
     $youtube =   $_POST['youtubeMocks'];
     $linkedin =   $_POST['linkMocks'];



    update_user_meta($user,'twitterMocks',$twitter);

    update_user_meta( $user, 'facebookMocks', $facebook);

    update_user_meta( $user, 'instagramMocks', $Instagram);


    update_user_meta( $user, 'linkMocks', $linkedin);


    }


}

$new = new user_option();
$new->options_theme();
