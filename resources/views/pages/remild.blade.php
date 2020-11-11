
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>แจ้งเตือน</title>

    </head>

    <body>
            
            <h1>แจ้งเตือน</h1>
            <h2>ระบบจะทำการแจ้งเตือนไปที่ (ดึงโทรศัพท์)</h2> 
            
        

                <div class="links">
                    <a href="{{  url('/') }}">กลับไปที่หน้าหลัก</a>
                    <a href="{{  url('/order') }}">ดูสถานะคิว</a>
                    <a href="{{  url('/bill') }}">จำนวนคิวที่เหลือ</a>
                    
                </div>
    </body>
</html>