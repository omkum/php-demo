class Controller {
  public function __contruct(){}
  public function loadView($tmpl){
    include "templates/$tmpl";
  }
}
