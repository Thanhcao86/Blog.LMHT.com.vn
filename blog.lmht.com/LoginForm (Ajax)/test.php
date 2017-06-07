<?php
   session_start();
   
   if (isset($_SESSION['counter'])) {
      $_SESSION['counter'] = 1;
   }
   else {
      $_SESSION['counter']++;
   }
   
   $msg = "Bạn đã truy cập trang này ".  $_SESSION['counter'];
   $msg .= " lần trong session này.";
   
   echo ( $msg );
?>
<p>
   Để tiếp tục, mời bạn click vào trang sau: <br />
   
   <a  href="nextpage.php?<?php echo htmlspecialchars(SID); ?>">
</p>