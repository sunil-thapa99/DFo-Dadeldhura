<?php
include("init.php");
if(!isset($_SESSION['sessUserId']))//User authentication
{
 header("Location: login.php");
 exit();
}

if (isset($_GET['delete']))
{
	$donate->delete($_GET['delete']);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ADMIN_TITLE; ?></title>
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<script language="javascript" src="../js/cms.js"></script>
</head>
<body>
<table width="<?php echo ADMIN_PAGE_WIDTH; ?>" border="0" align="center" cellpadding="0"
	cellspacing="5" bgcolor="#FFFFFF">
  <tr>
    <td colspan="2"><?php include("header.php"); ?></td>
  </tr>
  <tr>
    <td width="<?php echo ADMIN_LEFT_WIDTH; ?>" valign="top"><?php include("leftnav.php"); ?></td>
    <td width="<?php echo ADMIN_BODY_WIDTH; ?>" valign="top"><table width="100%" border="0">
			<tr>
					<td class="heading2">Donations</td>
			</tr>
			
			<tr>
            	<td>
                <table width="100%" border="0">
  <tr>
    <td><?php  
		$pagename = "donate.php?";
		$sql = "SELECT * FROM donate ORDER BY id DESC";
		
		$limit = 10;
		include("../includes/paging.php");
		//$result = $donate->getAll();
		while ($row = $conn->fetchArray($result))
		{
		?>
      <div onmouseover="this.style.backgroundColor='#f1f1f1';" onMouseOut="this.style.backgroundColor = 'transparent';">
        <div align="right"><strong><?php  echo  $row['onDate'];?></strong></div>
        <strong>Name :</strong> <?php  echo  $row['name'];?><br>
        <strong>Address :</strong> <?php  echo  $row['address'];?><br>
        <strong>Phone :</strong> <?php  echo  $row['phone'];?> <br>
        <strong>Email :</strong> <?php  echo  $row['email'];?><br>
        <strong>Country :</strong> <?php  echo  $row['country'];?><br>
        <strong>Fax :</strong> <?php  echo  $row['fax'];?><br>
        <strong>Donation Type :</strong> <?php  echo  $row['dtype'];?>
        <br>
        </div>
      <div align="right">
        <a href="donate.php?delete=<?php  echo $row['id'];?>">Delete</a>
        </div>
      <hr noshade>
      <?php  }
	  	include("../includes/paging_show.php");
		?>
      </td>
  </tr>
</table>
                </td>
        </tr>
	</table></td>
  </tr>
  <tr>
    <td colspan="2"><?php include("footer.php"); ?></td>
  </tr>
</table>
</body>
</html>
