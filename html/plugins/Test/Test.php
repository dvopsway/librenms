<?php

class Test {
  public function menu() {
    echo('<li><a href="plugin/p='.get_class().'">'.get_class().'</a></li>');
  }

  /*
  public function device_overview_container($device) {
    echo('<div class="container-fluid"><div class="row"> <div class="col-md-12"> <div class="panel panel-default panel-condensed"> <div class="panel-heading"><strong>'.get_class().' Plugin </strong> </div>');
    echo('  Example plugin in "Device - Overview" tab <br>');
    echo('</div></div></div></div>');
  }
  */
}

?>
