<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ดูสถานะคิว</title>

    </head>

    <body >
            
            <h1>ดูสถานะคิว</h1>
            <h2>ท่านอยู่ลำดับคิวที่</h2>
            <h1>(ดึงลำดับคิวมา)</h1>
        

                <div class="links">
                    <a href="<?php echo e(url('/')); ?>">กลับไปที่หน้าหลัก</a>
                    <a href="<?php echo e(url('/bill')); ?>">จำนวนคิวที่เหลือ</a>
                    
                </div>
    </body>
</html>

<?php /**PATH /Users/apapornwanalai/Desktop/Laravel/resources/views/pages/order.blade.php ENDPATH**/ ?>