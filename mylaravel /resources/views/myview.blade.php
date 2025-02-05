<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>ตารางสูตรคูณ</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            margin: 0;
        }
        input[type="text"] , button{
            width: 300px; 
            padding: 10px; 
            font-size: 16px;
            border: 1px solid #000; 
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            background-color:rgb(190, 199, 209);
            color: black;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #000;
        }
        h1, h2, p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>ตารางสูตรคูณ</h1>

    <!-- ฟอร์มรับค่าจากผู้ใช้ -->
    <form method="POST" action="{{ url('/mycontroller') }}">
        @csrf
        <input type="text" id="myinput" name="myinput" placeholder="กรอกแม่สูตรคูณ:">
        <button type="submit">แสดงตารางสูตรคูณ</button>
    </form>

    <!-- แสดงข้อผิดพลาด -->
    @if(isset($error))
        <p style="color: red;">{{ $error }}</p>
    @endif

    <!-- แสดงตารางสูตรคูณ -->
    @if(isset($mulTb) && count($mulTb) > 0)
        <h2>ตารางสูตรคูณแม่ {{ $myinput }}</h2>
        <table>
            <thead>
                <tr>
                    <th>สูตร</th>
                    <th>ผลลัพธ์</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mulTb as $num => $result)
                    <tr>
                        <td>{{ $myinput }} x {{ $num }}</td>
                        <td>{{ $result }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
