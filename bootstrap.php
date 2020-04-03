<?php
        spl_autoload_register(function($className) {
                if(is_file('lib/' . $className . '.php'))
                        include('lib/' . $className . '.php');
        });

