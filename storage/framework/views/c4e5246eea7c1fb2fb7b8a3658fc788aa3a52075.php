<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>จองคิว</title>

    </head>
    <body>
            
            <h1>จองคิว</h1>
            
            <form name=”input”>
                ชื่อ : <input type="text" name="nameproduct" size=30 maxlenght=25><br>
                จำนวน : <input type="text" name="lname" size=30 maxlenght=10><br>
                โทรศัพท์ : <input type="text" name="telephone" size=10 maxlenght=10><br>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
          </form>
        

                <div class="links">
                    <a href="<?php echo e(url('/order')); ?>">ดูสถานะคิว</a>
                    
                    
                </div>
    </body>
</html>
<?php /**PATH /Users/apapornwanalai/Desktop/Laravel/resources/views/pages/index.blade.php ENDPATH**/ ?>