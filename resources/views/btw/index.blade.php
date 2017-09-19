<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>数据表格</title>
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/btw/css-table.css') }}" />
<script type="text/javascript" src="{{ asset('assets/btw/js/jquery-1.2.6.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/btw/js/style-table.js') }}"></script>
</head>

<body>

<table id="travel" summary="宝通测试数据表格">

	<caption>宝通测试数据表格</caption>
    
    <thead>    
    	<tr>
            <th scope="col" rowspan="2">宝通</th>
            <th scope="col" colspan="6">会员数据</th>
        </tr>
        
        <tr>
            <th scope="col">栏目1</th>
            <th scope="col">栏目2</th>
            <th scope="col">栏目3</th>
            <th scope="col">栏目4</th>
            <th scope="col">栏目5</th>
            <th scope="col">栏目6</th>
        </tr>        
    </thead>
    
    <tfoot>
    	<tr>
        	<th scope="row">总计</th>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
            <td>--</td>
        </tr>
    </tfoot>
    
    <tbody>
    @foreach($data as $v)
    	<tr>
    		<th scope="row">{{$v->id}}</th>
            <td>{{$v->user_name}}</td>
            <td>{{$v->real_name}}</td>
            <td>{{$v->idno}}</td>
            <td>{{date('Y-m-d H:i:s',$v->create_time)}}</td>
            <td>{{$v->pid}}</td>
            <td>--</td>
        </tr>
    @endforeach
    </tbody>

</table>

</body>
</html>