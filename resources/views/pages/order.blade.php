<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                    <a href="{{  url('/') }}">กลับไปที่หน้าหลัก</a>
                    <a href="{{  url('/bill') }}">จำนวนคิวที่เหลือ</a>
                    
                </div>
    </body>
</html>

