<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>ชื่อบริษัท</th>
        <th>ราคาจดทะเบียน</th>
        <th>ขนาดบริษัท</th>
        <th>ชื่อเจ้าของบริษัท</th>
</tr>
@foreach ($company as $comp )
    <tr>
        <td>{{ $comp -> company_name}}</td>
        <td>{{ number_format($comp -> company_price)}}</td>
        @if ($comp ->company_price <5000000 )<td>บริษัทขนาดเล็ก </td>
        @elseif($comp ->company_price >=5000000)<td>บริษัทขนาดกลาง </td>
        @elseif ($comp ->company_price >10000000)<td>บริษัทขนาดใหญ่ </td>
        @endif
        <td>{{ $comp->user->name}}</td>
    </tr>
        @endforeach
    </table>
</body>
</html>
