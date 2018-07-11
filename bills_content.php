<div class="dynamic">
<div id="content" class="cf" style="width: 100%">
    <table align="center" border="1" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <th width="2" align="center">सि.नं</th>
            <th width="17" align="center">विवरण</th>
            <th width="10" align="center">ब.उ.शि.नं.</th>
            <th width="12" align="center">खर्च शिर्षक</th>
            <th width="15" align="center">खरिद प्रक्रिया</th>
            <th width="12" align="center">प्यान नं</th>
            <th width="28" align="center">भुक्तानी पाउने व्यक्ति/ संस्था</th>
            <th width="16" align="center">बिल / निवेदन प्राप्त भएको मिति</th>
            <th align="center" width="12">रकम</th>
            <th width="7" align="center">कैफियत</th>
            <th width="15" align="center">अप्लोड समय</th>    
          </tr>
          <? $bill=mysql_query("select * from bills where publish='Yes' order by weight"); $i=0;
      	  while($billGet=mysql_fetch_array($bill))
      	  {?>
          	<tr bgcolor="#DFDFDF">
                  <td align="center"><?=++$i;?></td>
                  <td align="center"><?=$billGet['description'];?></td>
                  <td align="center"><?=$billGet['busn'];?></td>
                  <td align="center"><?=$billGet['spentTitle'];?></td>
                  <td align="center"><?=$billGet['buying'];?></td>
                  <td align="center"><?=$billGet['panNo'];?></td>
                  <td align="center"><?=$billGet['paymentReceiver'];?></td>
                  <td align="center"><?=$billGet['billDate']?></td>
                  <td align="center"><?=$billGet['amount'];?></td>
                  <td align="center"><?=$billGet['remarks'];?></td>
                  <td align="center"><?=$billGet['onDate'];?></td>
          	</tr>
        	<? }?>
             
          </tbody>
    </table>

 </div>