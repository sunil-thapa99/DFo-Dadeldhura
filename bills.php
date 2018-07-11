<?php
  /**
  * this is index page. this page does not include html contents but it helps to include the files.
  */
  class Template
  {
    
    function __construct($page,$action,$pageLinkType,$query)
    {
      global $groups; global $conn;
      require_once('template/header.php');
      //require_once('template/sidebar.php');
      require_once('bills_content.php');
      require_once('template/footer.php');
    }
  }

  require_once('clientobjects.php');
  
  if(isset($_GET['action'])){
    $page=isset($_GET['action']); $action=1; $pageLinkType='';
  }
  else if(isset($pageLinkType)){
    $page="cmspage.php"; $action=0;
    //echo $pageLinkType;
  }
  else{
    $page="main.php"; $action=0; $pageLinkType='';
  }
  $template=new Template($page,$action,$pageLinkType,$query);

  ?>