
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>จำนวนคิวที่เหลือ</title>

    </head>

    <body>
            
            <h1>จำนวนคิวที่เหลือ</h1>
            <h2>(ดึงจำนวนคิวที่เหลือ) คิว</h2> 
            
        

                <div class="links">
                    <a href="<?php echo e(url('/')); ?>">กลับไปที่หน้าหลัก</a>
                    <a href="<?php echo e(url('/order')); ?>">ดูสถานะคิว</a>
                    <a href="<?php echo e(url('/remild')); ?>">แจ้งเตือน</a>
                    
                </div>
    </body>
</html><?php /**PATH /Users/apapornwanalai/Desktop/Laravel/resources/views/pages/bill.blade.php ENDPATH**/ ?>