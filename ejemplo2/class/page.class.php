<?php
class page {

    public $content;
    public $title;
    public $keywords;
    public $buttons = array();

    // Constructor
    public function __construct($titulo, $keywords, $opciones){
        $this->title = $titulo;
        $this->keywords = $keywords;

        if(is_array($opciones)){
            foreach($opciones as $link => $page){
                $this->buttons[$link] = $page;
            }
        } else {
            die("Las opciones deben ser una matriz asociativa");
        }
    }

  
    public function __set($name, $value){
        $this->$name = $value;
    }

    public function display(){
        echo "<!DOCTYPE html>\n";
        echo "<html lang=\"es\">\n<head>\n";
        echo "<meta charset=\"utf-8\" />\n";

        $this->displayTitle();
        $this->displayKeywords();
        $this->displayStyles("css/incripcion_css.css");

        echo "</head>\n<body>\n";

        $this->displayHeader();
        $this->displayMenu($this->buttons);

        echo $this->content;

        $this->displayScripts("js/findclass.js");

        $this->displayFooter();

        echo "</body>\n</html>";
    }

    public function displayTitle(){
        echo "<title>" . $this->title . "</title>\n";
    }

    public function displayKeywords(){
        echo "<meta name=\"keywords\" content=\"" . $this->keywords . "\" />\n";
    }

    public function displayStyles($estilos){
        if(is_array($estilos)){
            foreach($estilos as $cssfile){
                echo "<link rel=\"stylesheet\" href=\"$cssfile\" />\n";
            }
        } else {
            echo "<link rel=\"stylesheet\" href=\"$estilos\" />\n";
        }
    }

  
    public function displayScripts($scripts){
        if(is_array($scripts)){
            foreach($scripts as $scriptfile){
                echo "<script src=\"$scriptfile\"></script>\n";
            }
        } else {
            if(!empty($scripts)){
                echo "<script src=\"$scripts\"></script>\n";
            }
        }
    }

    public function displayHeader(){
        echo '
        <section>
          <article>
            <h1 style="text-align:center;">Sistema de Control de Asistencia</h1>
            <div id="contenedor">
        ';
    }

    public function displayMenu($menuoptions){
        echo '<div id="menu"><ul>';

        foreach($menuoptions as $url => $name){
            echo "<li><a href=\"$url\">$name</a></li>";
        }

        echo '</ul></div>';
    }

    public function displayFooter(){
        echo '
            <hr>
            <p style="text-align:center;">
                Sistema de Asistencia - UDB © 2026
            </p>
            </div>
          </article>
        </section>
        ';
    }
}
?>