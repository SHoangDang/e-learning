<?php
namespace App\Core;
use App\Core\Route;
class View
{
    function render($file, $variables = array() )
    {
    	// get param in render
        extract($variables);

        // run render
        ob_start();

        $files = explode('@', $file);
        
        // find @ exists in string
        if(strpos($file, '@'))
        {
          // check path exists
          if (is_dir('public/'.$files[1]))
          {
            // check file exists
            if(file_exists('public/' . $files[1] . '/' .  $files[0] . '.php'))
            {
              include_once 'public/' . $files[1] . '/' . $files[0].'.php';
            }
            else
            {
                include_once 'public/404.php';
            }
          }
          else
          {
            include_once 'public/404.php';
          }
        }
        else
        {
          if(file_exists('public/'.$file.'.php'))
          {
            include_once 'public/'.$file. '.php';
          }
          else
          {
            include_once '404.php';
          }
        }     

        echo $renderedView = ob_get_clean();
        //echo $renderedView;
    }

    // function pass param from view to route

    // function passParam($nameParam = NULL, $params = array()){
    //   if(isset($params) != NULL)
    //   {
    //     extract($params);
    //     include_once 'route/user.php';
        
    //   }
    // }
}



?>
