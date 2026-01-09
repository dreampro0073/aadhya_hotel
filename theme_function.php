<?php
    class Theme{

         public static function imagePath($image_name)
        {
            return get_template_directory_uri() . '/front-end/images/' . $image_name;
        }
       

     }