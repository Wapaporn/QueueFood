
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>แจ้งเตือน</title>

    </head>

    <body>
            
            <h1>แจ้งเตือน</h1>
            <h2>ระบบจะทำการแจ้งเตือนไปที่ (โทรศัพท์)</h2> 
            
        

                <div class="links">
                    <a href="<?php echo e(url('/')); ?>">กลับไปที่หน้าหลัก</a>
                    <a href="<?php echo e(url('/order')); ?>">ดูสถานะคิว</a>
                    <a href="<?php echo e(url('/bill')); ?>">จำนวนคิวที่เหลือ</a>
                    
                </div>
    </body>
</html><?php /**PATH /Users/apapornwanalai/Desktop/Laravel/resources/views/pages/remild.blade.php ENDPATH**/ ?>